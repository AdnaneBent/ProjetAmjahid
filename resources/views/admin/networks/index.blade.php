@extends('adminlte::page')

@section('title', 'SocialNetwork')

@section('content')

<h2>les réseaux sociaux</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('networks.create')}}">Ajouter un réseau social</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($socialnetworks as $socialnetwork)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h2>{{$socialnetwork->name}}</h2>
            <h4><i class="{{$socialnetwork->image}}"></i></h4>
            <div class="card-body d-flex">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:white;margin-left:90px;" href="{{route('networks.edit',['socialnetwork'=>$socialnetwork->id])}}">Editer</a>
            <form action="{{route('networks.destroy',['socialnetwork'=>$socialnetwork->id])}}" method="post">
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