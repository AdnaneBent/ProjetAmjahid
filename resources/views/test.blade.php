<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>








@extends('adminlte::page')

@section('title', 'Article')

@section('content')

<h2>Les articles</h2>
<div class="container">
    <a class="btn btn-dark" href="{{route('articles.create')}}">Ajouter un article</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($articles as $article)
    <div class="card col-3 m-4" style="width: 18rem;">
        <h3>Nom de l'article : {{$article->titre}}</h3>
        <img class="card-img-top mt-2" src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="Card image cap">
            {{-- Contenu --}}
            <div class="card-body">
                <h3>Contenu de l'article : <br>{!!$description = substr($article->contenu, 0, 300)!!} ...</h3>
            </div>
            {{-- Fin contenu --}}
            <div class="card-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:black;" href="{{route('articles.show',['article'=>$article->id])}}">Voir</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection