@extends('adminlte::page')

@section('title', 'Galerie')

@section('content')

<h2>La galerie</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('galeries.create')}}">Ajouter une nouvelle image</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($galeries as $galerie)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h3>{{$galerie->name}}</h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgGalerie')->url($galerie->image)}}" alt="Card image cap">
            <div class="card-body">
                <h3>l'image de la galerie</h3><br>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('galeries.edit',['galerie'=>$galerie->id])}}">Edité</a>
            </div>
            <form action="{{route('galeries.destroy',['galerie'=>$galerie->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection