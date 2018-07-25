@extends('adminlte::page')

@section('title', 'Biographie')

@section('content')

<h2>La biographie</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('biographies.create')}}">Ajouter la biographie</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($biographies as $biographie)
        <div class="card col-3 m-4" style="width: 18rem;">

            <h3>Titre : {{$biographie->titre}}</h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgBiographie')->url($biographie->image)}}" alt="Card image cap">
            <div class="card-body">
                <h3>contenu : <br>{!!$biographie->contenu!!}</h3>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('biographies.edit',['id'=>$biographie->id])}}">Edité</a>
            </div>
            <form action="{{route('biographies.destroy',['biographie'=>$biographie->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection