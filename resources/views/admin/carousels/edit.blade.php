@extends('adminlte::page')

@section('title', 'Carousel')

@section('content_header')
<h1>Modification du carousel</h1>
@stop

  @section('content')
  <form action="{{route('carousels.update',['carousels'=>$carousels->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="name">
        Nom de l'image<br>
        @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
        @endif
        <input type="text" name="name" value="{{old('name', $carousels->name)}}">
      </label><br>
      <img src="" alt="">
      <input class="pb-2" name="image" type="file"><br>
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('carousels.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection