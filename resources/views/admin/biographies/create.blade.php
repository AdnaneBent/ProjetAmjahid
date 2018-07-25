@extends('adminlte::page')

@section('title', 'Biographie')

@section('content_header')
<h1>Création de la biographie</h1>
@stop

  @section('content')
  <form action="{{route('biographies.store')}}" method="post" enctype="multipart/form-data">

  @csrf
    <div>
        <label for="titre">
        Titre :<br>
        @if($errors->has('titre'))
            <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input type="text" name="titre" value="{{old('titre')}}">
        </label><br>
        <h5>Contenu</h5>
        @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
        @endif
        <textarea id="hello" name="contenu" for="contenu">{{old('contenu')}}</textarea>
        <br>
        <h5>Image</h5>
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <input class="pb-2" name="image" type="file"><br>
        <br>
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </div><br>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('biographies.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>

  @section('js')
  <script>
    CKEDITOR.replace('hello');
  </script>
  @endsection
@endsection