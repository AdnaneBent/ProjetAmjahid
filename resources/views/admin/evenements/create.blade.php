@extends('adminlte::page')

@section('title', 'evenement')

@section('content_header')
<h1>Création d'un événement</h1>
@stop

  @section('content')
  <form action="{{route('evenements.store')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- name --}}
          <label for="name">Le nom de l'événement</label>
          @if($errors->has('name'))
          <div class="text-danger">{{ $errors->first('name')}}</div>
          @endif
          <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nom" >
        </div>
        {{-- image --}}
        <div class="form-group">
          {{-- name --}}
          <label for="date">La date de l'événement</label>
          @if($errors->has('date'))
          <div class="text-danger">{{ $errors->first('date')}}</div>
          @endif
          <input type="text" name="date" class="form-control" value="{{old('date')}}" placeholder="Nom" >
        </div><br>
        <br>
        <button type="submit" style="background-color:#be8c3c;color:white;" class="btn btnAdmin">Enregistrer</button>
      </div>
      <div class="card-body">
        <a href="{{route('evenements.index')}}" class="btn card-link" style="background-color:#be8c3c;color:white;">Retour</a>
      </div>
      <!-- /.box-body -->
    </form>
  </div>


@endsection