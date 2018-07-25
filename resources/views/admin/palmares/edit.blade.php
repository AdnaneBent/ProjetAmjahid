@extends('adminlte::page')

@section('title', 'Palmares')

@section('content_header')
<h1>Création du palmares</h1>
@stop

  @section('content')
  <form action="{{route('palmares.update',['palmares'=>$palmares->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
        <label for="annee">
        L'année de la compétition<br>
        @if($errors->has('annee'))
            <div class="text-danger">{{ $errors->first('annee')}}</div>
        @endif
        <input type="text" name="annee" value="{{old('annee')}}">
        </label><br>

        <label for="competition">
        Compétition<br>
        @if($errors->has('competition'))
            <div class="text-danger">{{ $errors->first('competition')}}</div>
        @endif
        <input type="text" name="competition" value="{{old('competition')}}">
        </label><br>

        <label for="resultat">
        Le résultat<br>
        @if($errors->has('resultat'))
            <div class="text-danger">{{ $errors->first('resultat')}}</div>
        @endif
        <input type="text" name="resultat" value="{{old('resultat')}}">
        </label><br>

        <label for="categorie">
        La catégorie<br>
        @if($errors->has('categorie'))
            <div class="text-danger">{{ $errors->first('categorie')}}</div>
        @endif
        <input type="text" name="categorie" value="{{old('categorie')}}">
        </label><br>

        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('palmares.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection