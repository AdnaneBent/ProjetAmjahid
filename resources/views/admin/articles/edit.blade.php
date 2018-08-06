@extends('adminlte::page')

@section('title', 'articles')

@section('content_header')
<h1>Modification d'un article</h1>
@stop

  @section('content')
  <form action="{{route('articles.update',['article'=>$article->id])}}" method="post" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          {{-- Titre --}}
          <label for="titre">Titre de l'article</label>
          @if($errors->has('titre'))
          <div class="text-danger">{{ $errors->first('titre')}}</div>
          @endif
          <input type="text" name="titre" class="form-control" value="{{old('titre', $article->titre)}}" placeholder="Titre" >
        </div>
        {{-- contenu --}}
        <div class="form-group">
          <h5>Contenu</h5>
          @if($errors->has('contenu'))
          <div class="text-danger">{{ $errors->first('contenu')}}</div>
          @endif
          <textarea id="hello" name="contenu" for="contenu">{{old('contenu',$article->contenu)}}</textarea>
          </textarea>
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
        <a href="{{route('articles.index')}}" class="btn card-link" style="background-color:#be8c3c;color:black;">Retour</a>
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