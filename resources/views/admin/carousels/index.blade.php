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
            <div class="card-body d-flex">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;margin-left:30px;" href="{{route('carousels.edit',['carousel'=>$carousel->id])}}">Editer</a>
                <form action="{{route('carousels.destroy',['carousel'=>$carousel->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" style="background-color:#be8c3c;color:white;margin-left:20px;"class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection