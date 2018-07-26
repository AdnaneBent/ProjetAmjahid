@extends('adminlte::page')

@section('title', 'Engagement')

@section('content_header')
<h1>Modification des engagements</h1>
@stop

  @section('content')
  <form action="{{route('engagements.update',['engagement'=>$engagement->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="titre">
        titre :<br>
        @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input type="text" name="titre" value="{{old('titre', $engagement->titre)}}">
      </label><br>
      <label for="contenu">  
        <h5>Contenu :</h5>
        @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
        @endif
        <textarea id="hello" name="contenu">{{old('contenu', $engagement->contenu)}}</textarea>
        </label>
        <br>
      <img src="" alt="">
      <input class="pb-2" name="image" type="file"><br>
      <br>
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('engagements.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection