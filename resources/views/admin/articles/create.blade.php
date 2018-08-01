@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
<h1>Création d'un article</h1>
@stop

  @section('content')
  <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  {{-- Début du titre --}}
    <div class="text-center">
        <h5>Titre de l'article</h5>
        @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input name="titre" value="{{old('titre')}}" for="titre"><br>
  {{-- Fin du titre --}}
        <br>
  {{-- Début du contenu --}}
        <h5>Contenu de l'article</h5>
        @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
        @endif
        <textarea id="hello" class="w-50" name="contenu" for="contenu">{{old('contenu')}}</textarea><br>
        <br>
  {{-- Fin du contenu --}}
        <br>
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <h5>Image</h5>
        <input class="pb-2" name="image" type="file"><br>
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('articles.index')}}"  class="btn btn-info">Retour</a>
    </div>
  </form>

   @section('js')
  <script>
    CKEDITOR.replace('hello');
  </script>
  @endsection
@endsection