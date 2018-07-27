@extends('adminlte::page')

@section('title', 'Galerie')

@section('content_header')
<h1>Modification d'une image de la galerie</h1>
@stop

  @section('content')
  <form action="{{route('galeries.update',['galeries'=>$galeries->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="name">
        Nom de l'image<br>
        @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
        @endif
        <input type="text" name="name" value="{{old('name', $galeries->name)}}">
      </label><br>
      <img src="" alt="">
      <input class="pb-2" name="image" type="file"><br>
      @if($errors->has('image'))
         <div class="text-danger">{{ $errors->first('image')}}</div>
       @endif
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('galeries.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection