@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content_header')
<h1>Création d'un partenaire</h1>
@stop

  @section('content')
  <form action="{{route('partenaires.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="name">Nom du partenaire</label>
          @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
          @endif
          <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nom" >
        </div>
        <div class="form-group">
          {{-- name --}}
          <label for="url">Site du partenaire</label>
          @if($errors->has('url'))
          <div class="text-danger">{{ $errors->first('url')}}</div>
          @endif
          <input type="text" name="url" class="form-control" value="{{old('url')}}" placeholder="l'url du site" >
        </div>
        {{-- image --}}
        <h5>Image</h5>
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <input class="pb-2" name="image" type="file"><br>
        <br>
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('partenaires.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>


@endsection