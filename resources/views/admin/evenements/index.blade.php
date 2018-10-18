@extends('adminlte::page')

@section('title', 'Galerie')

@section('content')

<h2>les événements</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('evenements.create')}}">Ajouter un événément</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($evenements as $evenement)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h4>{{$evenement->name}}</h3>
            <h4>{{$evenement->date}}</h3>
            <div class="card-body d-flex">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;    height: 35px;" href="{{route('evenements.edit',['evenement'=>$evenement->id])}}">Editer</a>
            
            <form action="{{route('evenements.destroy',['evenement'=>$evenement->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;margin-left:20px;" class="btn btn-danger">Supprimer</button>
            </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection