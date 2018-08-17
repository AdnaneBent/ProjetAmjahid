@extends('adminlte::page')

@section('title', 'athlete')

@section('content_header')
<h1>Modification de l'athlete</h1>
@stop

  @section('content')
  <form action="{{route('athlete.update',['athlete'=>$athlete->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
              <label for="titre">Le titre de la section</label>
              @if($errors->has('titre'))
              <div class="text-danger">{{ $errors->first('titre')}}</div>
              @endif
              <input type="text" name="titre" class="form-control" value="{{old('titre', $athlete->titre)}}" placeholder="Le titre de la section" >
            </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
          {{-- Taille --}}
              <label for="taille">La taille de l'athlete</label>
              @if($errors->has('taille'))
              <div class="text-danger">{{ $errors->first('taille')}}</div>
              @endif
              <input type="text" name="taille" class="form-control" value="{{old('taille', $athlete->taille)}}" placeholder="La taille">
            </div>
            <div class="form-group">
              {{-- Poids --}}
                <label for="poids">Le poids de l'athlete</label>
                @if($errors->has('poids'))
                <div class="text-danger">{{ $errors->first('poids')}}</div>
                @endif
                <input type="text" name="poids" class="form-control" value="{{old('poids', $athlete->poids)}}" placeholder="Le poids">
              </div>
            <div class="form-group">
              {{-- Rang --}}
              <label for="rang">Le rang de l'athlete</label>
              @if($errors->has('rang'))
              <div class="text-danger">{{ $errors->first('rang')}}</div>
              @endif
              <input type="text" name="rang" class="form-control" value="{{old('rang', $athlete->rang)}}" placeholder="Le rang" >
            </div>
            <div class="form-group">
          {{-- name --}}
              <label for="training">Volume d'entraînement journalier</label>
              @if($errors->has('training'))
              <div class="text-danger">{{ $errors->first('training')}}</div>
              @endif
              <input type="text" name="training" class="form-control" value="{{old('training', $athlete->training)}}" placeholder="Volume d'entraînement journalier" >
            </div><br>
          </div>
           <div class="col-6">
            <div class="form-group">
          {{-- name --}}
              <label for="categorie">Catégorie</label>
              @if($errors->has('categorie'))
              <div class="text-danger">{{ $errors->first('categorie')}}</div>
              @endif
              <input type="text" name="categorie" class="form-control" value="{{old('categorie', $athlete->categorie)}}" placeholder="La catégorie">
            </div>
            <div class="form-group">
              {{-- name --}}
                <label for="club">Club</label>
                @if($errors->has('club'))
                <div class="text-danger">{{ $errors->first('club')}}</div>
                @endif
                <input type="text" name="club" class="form-control" value="{{old('club', $athlete->club)}}" placeholder="club">
              </div>
            <div class="form-group">
              {{-- name --}}
              <label for="champM">Championne du Monde:</label>
              @if($errors->has('champM'))
              <div class="text-danger">{{ $errors->first('champM')}}</div>
              @endif
              <input type="text" name="champM" class="form-control" value="{{old('champM', $athlete->champM)}}" placeholder="Championne du monde" >
            </div>
            <div class="form-group">
              {{-- name --}}
              <label for="champJ">Championne des Jeux mondiaux:</label>
              @if($errors->has('champJ'))
              <div class="text-danger">{{ $errors->first('champJ')}}</div>
              @endif
              <input type="text" name="champJ" class="form-control" value="{{old('champJ', $athlete->champJ)}}" placeholder="Championne des Jeux mondiaux"><br>
              <img src="" alt="">
              @if($errors->has('image'))
                <div class="text-danger">{{ $errors->first('image')}}</div>
              @endif
            <input class="pb-2" name="image" type="file"><br>
            </div>
          </div>
        </div>
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('athlete.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
          {{-- name --}}
  </div>
      <!-- /.box-body -->
  </form>

@endsection