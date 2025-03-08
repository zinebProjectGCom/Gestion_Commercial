@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Add Famille</h4>
                <a
                    href="{{route('familles.create')}}"
                    class="btn btn-primary btn-round ms-auto">
                    <i class="fa fa-plus"></i>
                    Add Famille
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    id="add-row"
                    class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Libelle</th>
                            <th>image</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($familles as $famille)
                        <tr>
                            <td>{{$famille->id}}</td>
                            <td>{{$famille->libelle}}</td>
                            <td>
                                <img src="storage/{{$famille->image}}" width="80px" alt="no image">
                            </td>
                            <td>
                                <div class="d-flex w-100">
                                    <a class="btn btn-info" href="{{route('familles.edit',$famille->id)}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('familles.destroy',$famille->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger ms-2" onclick="return(confirm('Voulez-vous vraiment le supprimer ?'))" type="submit"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{$familles->links()}}
@endsection