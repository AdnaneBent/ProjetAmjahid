@extends('adminlte::page')

@section('title', 'header')

@section('content_header')
<h1>Modification du header</h1>
@stop

  @section('content')
  <form action="{{route('headers.update',['header'=>$header->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
    <div>
      <label for="titre">
        titre :<br>
        @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <input type="text" name="titre" value="{{old('titre', $header->titre)}}">
        </label><br>
        <br>
      <h5>Image Avant plan</h5>
      @if($errors->has('imageAV'))
        <div class="text-danger">{{ $errors->first('imageAV')}}</div>
      @endif
      <img src="" alt="">
      <input class="pb-2" name="imageAV" type="file">
      <h5>Image Background</h5>
      @if($errors->has('imageBG'))
        <div class="text-danger">{{ $errors->first('imageBG')}}</div>
      @endif
      <img src="" alt="">
      <input class="pb-2" name="imageBG" type="file"><br>
      <br>
      <button type="submit" class="btn btn-info">Enregistrer</button>
    </div>
    <div class="card-body">
      <a href="#" class="card-link"><a href="{{route('headers.index')}}"  class="btn btn-info">Retour</a>
    </div>

  </form>
@endsection