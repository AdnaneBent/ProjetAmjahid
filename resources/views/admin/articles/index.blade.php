@extends('adminlte::page')

@section('title', 'Article')

@section('content')

<div class="container">
    <a class="btn btn-dark" href="{{route('articles.create')}}">Ajouter le header</a>
</div>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Les articles</h3>
              <div class="box-tools"
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                        @foreach($articles as $article)
                <tbody><tr>
                  <th style="padding-left:20px;">Titre</th>
                  <th>Date</th>
                  <th>Contenu</th>
                  <th>Action</th>
                </tr>
                <tr>
                <td style="padding-left:20px;"> {{$article->titre}}</td>
                  <td>{{$article->created_at->format('d m y')}}</td>
                  <td>{!!$description = substr($article->contenu, 0, 150)!!} ...</td>
                  <td><a class="btn btn-primary" style="background-color:#be8c3c;color:black;" href="{{route('articles.show',['article'=>$article->id])}}">Voir</a></td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
        </div>
      </div>

      @endsection
