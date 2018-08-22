@extends('adminlte::page')

@section('title', 'socialnetworks')

@section('content_header')
<h1>Création d'un réseau social</h1>
@stop

  @section('content')
  <form action="{{route('networks.store')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="name">Le nom du réseau social</label>
          @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
          @endif
          <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nom" >
        </div>
        {{-- image --}}
        <div class="form-group">
          {{-- name --}}
          <label for="link">Le lien du réseau social</label>
          @if($errors->has('link'))
          <div class="text-danger">{{ $errors->first('link')}}</div>
          @endif
          <input type="text" name="link" class="form-control" value="{{old('link')}}" placeholder="l'url du réseau social" >
        </div>
        <div class="form-group">
          {{-- name --}}
          <label for="image">Le fontawesome</label>
          @if($errors->has('image'))
          <div class="text-danger">{{ $errors->first('image')}}</div>
          @endif
          <input type="text" name="image" class="form-control" value="{{old('image')}}" placeholder="l'image fontawesome" >
        </div><br>
        <br>
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('networks.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>


@endsection