@extends('adminlte::page')

@section('title', 'Biographie')

@section('content_header')
<h1>Modification de la biographie</h1>
@stop

  @section('content')
  <form action="{{route('biographies.update',['biographie'=>$biographie->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="titre">
        titre de la biographie<br>
        @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input type="text" name="titre" value="{{old('titre', $biographie->titre)}}">
      </label><br>
      <label for="contenu">  
        <h5>Contenu :</h5>
        @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
        @endif
        <textarea id="hello" name="contenu">{{old('contenu', $biographie->contenu)}}</textarea>
        </label>
        <br>
      <img src="" alt="">
      <input class="pb-2" name="image" type="file"><br>
      <br>
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('biographies.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection