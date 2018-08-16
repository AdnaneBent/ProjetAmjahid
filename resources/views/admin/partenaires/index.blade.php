@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content')

<h2>Les partenaires</h2>
<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('partenaires.create')}}">Ajouter un partenaire</a>
</div>

<div class="text-center">
    <div class="row justify-content-around">
    @foreach($partenaires as $partenaire)
        <div class="card col-3 m-4" style="width: 18rem;">
            <h3>Nom du partenaire : <br><h2>{{$partenaire->name}}</h2></h3>
            <img class="card-img-top mt-2" src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="Card image cap">
            <div class="card-body">
                <a class="btn btn-primary" style="background-color:#be8c3c;color:black;" href="{{route('partenaires.edit',['id'=>$partenaire->id])}}">Edité</a>
            </div>
            <form action="{{route('partenaires.destroy',['partenaire'=>$partenaire->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button style="background-color:#be8c3c;color:black;margin-bottom:10px;" type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>







<div class="box">
            <div class="box-header">
              <h3 class="box-title">Les partenaires</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                  @foreach($partenaires as $partenaire)
                <tbody><tr>
                    <th>Logo</th>
                    <th>Nom du partenaire</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <tr>
                    <td>
                        <div>
                            <img class="card-img-top mt-2" style="width:10%;" src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="Card image cap">
                        </div>
                    </td>
                    <td>{{$partenaire->name}}</td>
                    <td class="d-flex">
                        <a class="btn btn-primary" style="background-color:#be8c3c;color:white;"   href="{{route('partenaires.edit',['id'=>$partenaire->id])}}">Editer</a>
                        <form action="{{route('partenaires.destroy',['partenaire'=>$partenaire->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                            <button style="background-color:#be8c3c;color:white;margin-left:20px;" type="submit" class="btn  btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
              </tbody>
              @endforeach
            </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection