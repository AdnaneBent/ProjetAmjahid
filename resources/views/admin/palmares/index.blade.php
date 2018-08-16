@extends('adminlte::page')

@section('title', 'Palmares')

@section('content')

<h2>Le palmares</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('palmares.create')}}">Ajouter le palmares</a>
</div>
<br>
 <table class="table table-light">
        <thead>
            <tr>
                <th>Année</th>
                <th>Compétition</th>
                <th>Résultat</th>
                <th>Catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($palmares as $palmaress)
            <tr>
                <td>{{$palmaress->annee}}</td>
                <td>{{$palmaress->competition}}</td>
                <td>{{$palmaress->resultat}}</td>
                <td>{{$palmaress->categorie}}</td>
            <td class="d-flex"><a  style="background-color:#be8c3c;color:white;" class="btn btn-primary" href="{{route("palmares.edit",['palmares'=>$palmaress->id])}}"> Editer</a>
                <form action="{{route('palmares.destroy',['palmares'=>$palmaress->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit"  style="background-color:#be8c3c;color:white;" class="btn btn-danger mx-2">Supprimer</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection