@extends('adminlte::page')

@section('title', 'academie')

@section('content')

<h2>L'academie</h2>
<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('academies.create')}}">Ajouter l'academie</a>
</div>
    <div class="box box-primary">
        <div class="box-body box-profile">
            @foreach($academies as $academie)
            <div class="text-center">
                <img class="profile-user-img img-responsive img-circle" style="width:20%;" src="{{Storage::disk('imgAcademie')->url($academie->image)}}" alt="Card image cap">
            </div>
                
            <h3 class="profile-username text-center"> {{$academie->titre}}</h3>
            <br>
            <div class="card-body">
                <h3>Mes academies :<br>
                <br>    
                {!!$academie->contenu!!}</h3>
            </div>
             <div class="card-body">
                <a class="btn" style="background-color:#be8c3c;color:white;" href="{{route('academies.edit',['id'=>$academie->id])}}">Editer</a>
            </div>
            {{-- <form action="{{route('academies.destroy',['academie'=>$academie->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btn-danger">Supprimer</button>
            </form> --}}
            @endforeach
        </div>
    </div>
        @endsection