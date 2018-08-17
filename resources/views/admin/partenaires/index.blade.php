@extends('adminlte::page')

@section('title', 'Partenaire')

@section('content')

<div class="container">
    <a class="btn btn-dark mb-5" href="{{route('partenaires.create')}}">Ajouter un partenaire</a>
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
                <th>Site du partenaire</th>
                <th>Nom du partenaire</th>
                <th style="width: 40px">Action</th>
            </tr>
            <tr>
                <td>
                    <div>
                        <img class="card-img-top mt-2" style="width:6%;" src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="Card image cap">
                    </div>
                </td>
                <td style="padding-top:40px;">
                    {{$partenaire->url}}
                </td>
                <td style="padding-top:40px;">{{$partenaire->name}}</td>
                <td class="d-flex">
                    <a class="btn btn-primary" style="background-color:#be8c3c;color:white;margin-top:20px;"   href="{{route('partenaires.edit',['id'=>$partenaire->id])}}">Editer</a>
                    <form action="{{route('partenaires.destroy',['partenaire'=>$partenaire->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                        <button style="background-color:#be8c3c;color:white;margin-left:20px;margin-top:20px;" type="submit" class="btn  btn-danger">Supprimer</button>
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