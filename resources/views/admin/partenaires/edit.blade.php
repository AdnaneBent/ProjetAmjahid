@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content_header')
<h1>Modification du partenaire</h1>
@stop

  @section('content')
  <form action="{{route('partenaires.update',['partenaire'=>$partenaire->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="name">
        Nom du partenaire<br>
        @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
        @endif
        <input type="text" name="name" value="{{old('name', $partenaire->name)}}">
      </label><br>
        <br>
      <img src="" alt="">
      <input class="pb-2" name="image" type="file"><br>
      <br>
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('partenaires.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection