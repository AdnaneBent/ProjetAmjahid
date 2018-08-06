@extends('adminlte::page')

@section('title', 'Article')

@section('content')

<h2>Les articles</h2>

<div class="text-center">
    <div class="row justify-content-around">
        <div class="box col-9 m-4" style="width: 18rem;">
            {{-- Debut du nom de l'article --}}
            <h3>Nom de l'article : {{$article->titre}}</h3>
            {{-- Fin du nom de l'article --}}

            {{-- Image de l'article --}}
            <img class="box-header mt-2 mx-auto" src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="Card image cap">
            {{-- Fin de l'image des articles --}}

            {{-- Debut du contenu des articles --}}
            <div class="box-body">
                <h3>Contenu de l'article : <br>{!!$article->contenu!!}</h3>
            </div>
            {{-- Fin du contenu de l'article --}}
            <div class="row">
                <div class="col-6"><div class="box-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:black;" href="{{route('articles.edit',['article'=>$article->id])}}">Edité</a>
                </div>
                <form action="{{route('articles.destroy',['article'=>$article->id])}}"method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:black;" class="btn btn-danger">Supprimer</button></div>
                <div class="col-6">
                <div class="card-body">
                    <a href="#" class="card-link"><a style="background-color:#be8c3c;color:black;" href="{{route('articles.index')}}"  class="btn btn-primary">Retour</a>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</div>

@endsection