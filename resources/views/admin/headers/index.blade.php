@extends('adminlte::page')

@section('title', 'header')

@section('content')

<h2>Le header</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('headers.create')}}">Ajouter un header</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($headers as $header)
        <div class="card col-3 m-4" style="width: 18rem;">

            <h3>Titre : {{$header->titre}}</h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgHeaderAV')->url($header->imageAV)}}" alt="Card image cap">
             <img class="card-img-top mt-2" src="{{Storage::disk('imgHeaderBG')->url($header->imageBG)}}" alt="Card image cap">
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('headers.edit',['id'=>$header->id])}}">Edité</a>
            </div>
            <form action="{{route('headers.destroy',['header'=>$header->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection