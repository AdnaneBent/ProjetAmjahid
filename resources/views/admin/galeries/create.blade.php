@extends('adminlte::page')

@section('title', 'galerie')

@section('content_header')
<h1>Création d'une image pour la galerie</h1>
@stop

  @section('content')
  <form action="{{route('galeries.store')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="name">Image du galerie</label>
          @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
          @endif
          <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nom" >
        </div>
        {{-- image --}}
        <h5>Image</h5>
        <img src="" alt="">
        @if($errors->has('image'))
            <div class="text-danger">{{ $errors->first('image')}}</div>
        @endif
        <input class="pb-2" name="image" type="file"><br>
        <br>
        <button type="submit" style="background-color:#be8c3c;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('galeries.index')}}" class="btn card-link" style="background-color:#be8c3c;color:black;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>


@endsection