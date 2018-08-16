@extends('adminlte::page')

@section('title', 'Engagement')

@section('content')

<h2>Les engagements</h2>
<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('engagements.create')}}">Ajouter mes engagements</a>
</div>
    <div class="box box-primary">
        <div class="box-body box-profile">
            @foreach($engagements as $engagement)
            <div class="text-center">
                <img class="profile-user-img img-responsive img-circle" style="width:20%;" src="{{Storage::disk('imgEngagement')->url($engagement->image)}}" alt="Card image cap">
            </div>
                
            <h3 class="profile-username text-center"> {{$engagement->titre}}</h3>
            <br>
            <div class="card-body">
                <h3>Mes engagements :<br>
                <br>    
                {!!$engagement->contenu!!}</h3>
            </div>
             <div class="card-body">
                <a class="btn" style="background-color:#be8c3c;color:white;" href="{{route('engagements.edit',['id'=>$engagement->id])}}">Editer</a>
            </div>
            {{-- <form action="{{route('engagements.destroy',['engagement'=>$engagement->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btn-danger">Supprimer</button>
            </form> --}}
            @endforeach
        </div>
    </div>
        @endsection