@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Add Produit</h4>
                <a
                    href="{{route('produits.create')}}"
                    class="btn btn-primary btn-round ms-auto">
                    <i class="fa fa-plus"></i>
                    Add Produit
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
                            <th>code barre</th>
                            <th>designation</th>
                            <th>description</th>
                            <th>prix_ht</th>
                            <th>tva</th>
                            <th>stock</th>
                            <th>sous famille</th>
                            <th>marque</th>
                            <th>unite</th>
                            <th>image</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produits as $produit)
                        <tr>
                            <td>{{$produit->id}}</td>
                            <td>{{$produit->codebarre}}</td>
                            <td>{{$produit->designation}}</td>
                            <td>{{$produit->description}}</td>
                            <td>{{$produit->prix_ht}}</td>
                            <td>{{$produit->tva}}</td>
                            <td>{{$produit->stock}}</td>
                            <td>{{$produit->sousFamille->libelle}}</td>
                            <td>{{$produit->marque->marque}}</td>
                            <td>{{$produit->unite->unite}}</td>
                            <td>
                                <img src="storage/{{$produit->image}}" width="80px" alt="no image">
                            </td>
                            <td>
                                <div class="d-flex w-100">
                                    <a class="btn btn-info" href="{{route('produits.edit',$produit->id)}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('produits.destroy',$produit->id)}}" method="post">
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
{{$produits->links()}}
@endsection