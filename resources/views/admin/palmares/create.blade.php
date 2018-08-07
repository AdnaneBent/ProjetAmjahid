@extends('adminlte::page')

@section('title', 'palmare')

@section('content_palmare')
<h1>Création d'une image pour la palmare</h1>
@stop

  @section('content')
  <form action="{{route('palmares.store')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
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
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      
      <div class="card-body">
        <a href="{{route('palmares.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
      <!-- /.box-body -->
    </div>
    </form>


@endsection