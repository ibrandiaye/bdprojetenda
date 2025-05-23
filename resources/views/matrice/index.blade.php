@extends('welcome')
@section('title', '| matrice')


@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">Liste des matrices</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('matrice.create') }}" role="button" class="btn btn-primary">Ajouter matrice</a></li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="col-12">
    <div class="card border-danger border-0">
        <div class="card-header bg-info text-center">LISTE D'ENREGISTREMENT DES MATRICES</div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>Appel</th>
                            <th>Tâche</th>
                            <th>Responsable</th>
                            <th>Date Limite</th>
                            <th>Personnes Impliquées</th>
                            <th>Commentaire</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($matrices as $matrice)
                        <tr>
                            <td>{!! $matrice->appel->titre !!}</td>
                            <td>{{ $matrice->tache }}</td>
                            <td>{{ $matrice->employe->nom }}</td>
                            <td>{{  Carbon\Carbon::parse( $matrice->datelimite )->format('d-m-Y') }}</td>
                            <td>{{ $matrice->personneimplique }}</td>
                            <td>{{ $matrice->comentaire }}</td>
                            <td>
                                <a href="{{ route('matrice.edit', $matrice->id) }}" role="button" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('matrice.show', $matrice->id) }}" role="button" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['matrice.destroy', $matrice->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                {!! Form::close() !!}



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>


</div>

@endsection
