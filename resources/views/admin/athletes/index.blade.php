@extends('adminlte::page')

@section('title', 'athlete')

@section('content')

<h2>L'athlete</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('athlete.create')}}">Ajouter de la section athlete</a>
</div>

    <div class="text-center">
        <div class="row justify-content-around">
        @foreach($athletes as $athlete)
        <div class="card col-3 m-4" style="width: 18rem;">
                <h3 style="padding-top:30%;">Titre : {{$athlete->titre}}</h3>
        </div>
        <div class="card col-3 m-4" style="width: 18rem;">
                <h3>Moi</h3>
                <img class="card-img-top mt-2" src="{{Storage::disk('imgAthlete')->url($athlete->image)}}" alt="Card image cap">
        </div>
            {{-- <form action="{{route('athletes.destroy',['athlete'=>$athlete->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;margin-bottom:20px;" class="btn btn-danger">Supprimer</button>
            </form> --}}
        </div>
         <div class="card-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;" href="{{route ('athletes.edit',['id'=>$athlete->id])}}">Editer</a>
            </div>
        @endforeach
        </div>
    </div>  

@endsection