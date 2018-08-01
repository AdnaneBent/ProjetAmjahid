@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
<h1>Modification de l'article</h1>
@stop

  @section('content')
  <form action="{{route('articles.update',['article'=>$article->id])}}" method="post" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    {{-- Titre --}}
    <div class="text-center">
        <h5>Titre de l'article</h5>
        @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input name="titre" value="{{old('titre', $article->titre)}}" for="titre"><br>
        {{-- Fin titre --}}
        <br>
        {{-- Debut de l'article --}}
        <h5>Contenu de l'article</h5>
        @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
        @endif
        <textarea id="hello" class="w-50" name="contenu" for="contenu">{{old('contenu',$article->contenu)}}</textarea><br>
        {{-- Fin de l'article --}}
        <br>
        {{-- Debut des catégories --}}
        
        {{-- Fin des catégories --}}
        <br>
        
        {{-- Debut des images --}}
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <h5>Image</h5>
        <input class="pb-2" name="image" type="file"><br>
        {{-- Fin des images --}}
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('articles.index')}}"  class="btn btn-info">Retour</a>
    </div>
  </form>
@endsection