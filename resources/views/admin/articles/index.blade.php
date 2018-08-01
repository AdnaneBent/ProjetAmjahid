@extends('adminlte::page')

@section('title', 'Article')

@section('content')

<h2>Les articles</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('articles.create')}}">Ajouter un article</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($articles as $article)
    <div class="card col-3 m-4" style="width: 18rem;">
        <h3>Nom de l'article : {{$article->titre}}</h3>
        <img class="card-img-top mt-2" src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="Card image cap">
            {{-- Contenu --}}
            <div class="card-body">
                <h3>Contenu de l'article : <br>{!!$description = substr($article->contenu, 0, 300)!!} ...</h3>
            </div>
            {{-- Fin contenu --}}
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('articles.show',['article'=>$article->id])}}">Voir</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection