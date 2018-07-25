@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content_header')
<h1>Création d'un partenaire</h1>
@stop

  @section('content')
  <form action="{{route('partenaires.store')}}" method="post" enctype="multipart/form-data">

  @csrf
    <div>
        <label for="name">
        name :<br>
        @if($errors->has('name'))
            <div class="text-danger">{{ $errors->first('name')}}</div>
        @endif
        <input type="text" name="name" value="{{old('name')}}">
        </label><br>
        <h5>Image</h5>
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <input class="pb-2" name="image" type="file"><br>
        <br>
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('partenaires.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection