@extends('adminlte::page')

@section('title', 'Biographie')

@section('content')

<h2>La biographie</h2>
<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('biographies.create')}}">Ajouter la biographie</a>
</div>
    <div class="box box-primary">
        <div class="box-body box-profile">
            @foreach($biographies as $biographie)
            <div class="text-center">
                <img class="profile-user-img img-responsive img-circle" style="width:20%;" src="{{Storage::disk('imgBiographie')->url($biographie->image)}}" alt="Card image cap">
            </div>
                
            <h3 class="profile-username text-center">{{$biographie->titre}}</h3>
            <br>
            <div class="card-body">
                <h3>    
                {!!$biographie->contenu!!}</h3>
            </div>
             <div class="card-body">
                <a class="btn" style="background-color:#be8c3c;color:white;" href="{{route('biographies.edit',['id'=>$biographie->id])}}">Editer</a>
            </div>
            {{-- <form action="{{route('biographies.destroy',['biographie'=>$biographie->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form> --}}
            @endforeach
        </div>
    </div>
@endsection