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
            <div class="card-body d-flex">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;margin-left:50px;" href="{{route('galeries.edit',['galerie'=>$galerie->id])}}">Editer</a>
            
            <form action="{{route('galeries.destroy',['galerie'=>$galerie->id])}}" method="post">
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