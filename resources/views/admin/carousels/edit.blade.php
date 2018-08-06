@extends('adminlte::page')

@section('title', 'carousel')

@section('content_header')
<h1>Modification d'une image du carousel</h1>
@stop


   @section('content')
  <form action="{{route('carousels.update',['carousels'=>$carousels->id])}}" method="post" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="name">Image du carousel</label>
          @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
          @endif
          <input type="text" name="name" class="form-control" value="{{old('name', $carousels->name)}}" placeholder="Nom" >
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
        <a href="{{route('carousels.index')}}" class="btn card-link" style="background-color:#be8c3c;color:black;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>


@endsection