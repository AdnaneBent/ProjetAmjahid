@extends('adminlte::page')

@section('title', 'Carousel')

@section('content')

<h2>Le carousel</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('carousels.create')}}">Ajouter une nouvelle image</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($carousels as $carousel)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h3>{{$carousel->name}}</h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgCarousel')->url($carousel->image)}}" alt="Card image cap">
            <div class="card-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;" href="{{route('carousels.edit',['carousel'=>$carousel->id])}}">Edité</a>
            </div>
            <form action="{{route('carousels.destroy',['carousel'=>$carousel->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;margin-bottom:20px;" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection