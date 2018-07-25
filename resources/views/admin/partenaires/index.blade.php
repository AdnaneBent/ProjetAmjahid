@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content')

<h2>Les partenaires</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('partenaires.create')}}">Ajouter un partenaire</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($partenaires as $partenaire)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h3>Nom du partenaire : <br><h2>{{$partenaire->name}}</h2></h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="Card image cap">
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('partenaires.edit',['id'=>$partenaire->id])}}">Edité</a>
            </div>
            <form action="{{route('partenaires.destroy',['partenaire'=>$partenaire->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection