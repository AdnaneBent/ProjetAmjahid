@extends('adminlte::page')

@section('title', 'header')

@section('content')

<h2>Le header</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('headers.create')}}">Ajouter le header</a>
</div>

    <div class="text-center">
        <div class="row justify-content-around">
        @foreach($headers as $header)
        <div class="card col-3 m-4" style="width: 18rem;">
                <h3>Titre : {!!$header->titre!!}</h3>
        </div>
        <div class="card col-3 m-4" style="width: 18rem;">
                <h3>Image d'avant plan</h3>
                <img class="card-img-top mt-2" src="{{Storage::disk('imgHeaderAV')->url($header->imageAV)}}" alt="Card image cap">
        </div>
           <div class="card col-3 m-4" style="width: 18rem;">
                <h3>Image de background</h3>
                <img class="card-img-top mt-2" src="{{Storage::disk('imgHeaderBG')->url($header->imageBG)}}"    alt="Card image cap">
        </div>
            {{-- <form action="{{route('headers.destroy',['header'=>$header->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;margin-bottom:20px;" class="btn btn-danger">Supprimer</button>
            </form> --}}
        </div>
         <div class="card-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;" href="{{route ('headers.edit',['id'=>$header->id])}}">Editer</a>
            </div>
        @endforeach
        </div>
    </div>  

@endsection