@extends('adminlte::page')

@section('title', 'Engagement')

@section('content')

<h2>Les engagements</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('engagements.create')}}">Ajouter les engagements</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($engagements as $engagement)
        <div class="card col-3 m-4" style="width: 18rem;">

            <h3>Titre : {{$engagement->titre}}</h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgEngagement')->url($engagement->image)}}" alt="Card image cap">
            <div class="card-body">
                <h3>contenu : <br>{!!$engagement->contenu!!}</h3>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{route('engagements.edit',['id'=>$engagement->id])}}">Edité</a>
            </div>
            <form action="{{route('engagements.destroy',['engagement'=>$engagement->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection