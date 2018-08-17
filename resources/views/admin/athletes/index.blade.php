@extends('adminlte::page')

@section('title', 'athlete')

@section('content_header')
<h1>Section athlète</h1>
@stop

  @section('content')

<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('athlete.create')}}">Ajouter un athlete</a>
</div>

  <div class="box box-primary">
    <!-- form start -->
      <div class="box-body">
        @foreach($athletes as $athlete)
        <div class="form-group">
          {{-- titre --}}
            <h2>{{$athlete->titre}}</h2>
        </div>
        <div class="row">
          <div class="col-8">
            <h4>
                Née le : <span style="color:#be8c3c;">28 octobre 1995 (22 ans)</span><br>
                À : <span style="color:#be8c3c;">Bruxelles (Belgique)</span><br>
                Nationalité : <span style="color:#be8c3c;">Belge
            </h4>
            <hr>
            {{-- Taille --}}
            <div class="form-group">
                <h4>Poids : <span style="color:#be8c3c;">{{$athlete->poids}}</span></h4>
            </div>
            {{-- Poids --}}
            <div class="form-group">
                <h4>Taille : <span style="color:#be8c3c;">{{$athlete->taille}}</h4>
            </div>
            <hr>
            {{-- Sport --}}
            <div class="form-group">
                <h4>Sport : <span style="color:#be8c3c;">jiu-jitsu</h4>
            </div>
            {{-- Rang --}}
            <div class="form-group">
                <h4>Rang : <span style="color:#be8c3c;">{{$athlete->rang}}</h4>
            </div>
            {{-- Categorie --}}
            <div class="form-group">
                <h4>Catégorie : <span style="color:#be8c3c;">{{$athlete->categorie}}</h4>
            </div>
            {{-- Club --}}
            <div class="form-group">
                <h4 >Club : <span style="color:#be8c3c;">{{$athlete->club}}</h4>
            </div>
            <hr>
            <div class="form-group">
              {{-- Championne Mondial --}}
                <h4>Championne du Monde: <span style="color:#be8c3c;">{{$athlete->champM}}</h4>
            </div>
            {{-- Championne des Jeux Mondiaux --}}
            <div class="form-group">
                <h4>Championne des Jeux mondiaux: <span style="color:#be8c3c;">{{$athlete->champJ}}</h4>
            </div>
            {{-- Volume d'entraînement --}}
            <div class="form-group">
                <h4>Volume d'entraînement journalier <span style="color:#be8c3c;">{{$athlete->training}}</h4>
            </div>
          </div>
           <div class="col-4">
            <div class="form-group">
                <img class="profile-user-img img-responsive img-circle" style="width:70%;" src="{{Storage::disk('imgAthlete')->url($athlete->image)}}" alt="Card image cap">
            </div>
        </div>
        <div class="card-body">
                <a class="btn" style="background-color:#be8c3c;color:white;" href="{{route('athlete.edit',['id'=>$athlete->id])}}">Editer</a>
            </div>
            {{-- <form action="{{route('athlete.destroy',['athlete'=>$athlete->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form> --}}
      </div>
      @endforeach
  </div>
      <!-- /.box-body -->
  </form>

@endsection