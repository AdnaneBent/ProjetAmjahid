@extends('adminlte::page')

@section('title', 'header')

@section('content_header')
<h1>Création d'un contenu pour le header</h1>
@stop

  @section('content')
  <form action="{{route('headers.store')}}" method="post" enctype="multipart/form-data">

  @csrf
    <div>
        <label for="titre">
        Titre :<br>
        @if($errors->has('titre'))
            <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input type="text" name="titre" value="{{old('titre')}}">
        </label><br>
        <br>
        <h5>Image Avant plan</h5>
        <img src="" alt="">
        @if($errors->has('imageAV'))
            <div class="text-danger">{{ $errors->first('imageAV')}}</div>
        @endif
        <input class="pb-2" name="imageAV" type="file">
         <h5>Image background</h5>
        <img src="" alt="">
        @if($errors->has('imageBG'))
            <div class="text-danger">{{ $errors->first('imageBG')}}</div>
        @endif
        <input class="pb-2" name="imageBG" type="file"><br>
        <br>
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('headers.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>

@endsection