@extends('adminlte::page')

@section('title', 'header')

@section('content_header')
<h1>Modification du header</h1>
@stop

  @section('content')
  <form action="{{route('headers.update',['header'=>$header->id])}}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="titre">
        Titre :<br>
        @if($errors->has('titre'))
            <div class="text-danger">{{ $errors->first('titre')}}</div>
        @endif
        <textarea id="hello" type="text" name="titre">{{old('titre', $header->titre)}}</textarea>
        </label>
        {{-- image --}}
        <h5>Image Avant plan</h5>
        <img src="" alt="">
        @if($errors->has('imageAV'))
            <div class="text-danger">{{ $errors->first('imageAV')}}</div>
        @endif
        <input class="pb-2" name="imageAV" type="file"><br>
        <br>
         <h5>Image background 1920x1080</h5>
        <img src="" alt="">
        @if($errors->has('imageBG'))
            <div class="text-danger">{{ $errors->first('imageBG')}}</div>
        @endif
        <input class="pb-2" name="imageBG" type="file"><br>
        <br>
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('headers.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>

    @section('js')
  <script>
    CKEDITOR.replace('hello');
  </script>
  @endsection

@endsection