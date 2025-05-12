@extends('welcome')
@section('title', '| appel')


@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">Liste des appels</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('appel.create') }}" role="button" class="btn btn-primary">Liste des appels</a></li>
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
        <div class="card-header bg-info text-center">LISTE D'ENREGISTREMENT du canevas de reporting</div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>titre</th>
                            <th>theme</th>
                            <th>Date Réception</th>
                            <th>Traitement ou exploitation</th>
                            <th>Réunion Brainstorming</th>
                            <th>document</th>
                            <th>Date Soumission</th>
                            <th>Date limite de soumission</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($appels as $appel)
                        <tr>
                            <td>{!! $appel->titre !!}</td>
                            <td>{!! $appel->theme !!}</td>
                            <td>{{  Carbon\Carbon::parse( $appel->dater)->format('d-m-Y') }}</td>
                            <td>{{  Carbon\Carbon::parse( $appel->datet)->format('d-m-Y') }}</td>
                            <td>{{  Carbon\Carbon::parse( $appel->dateb)->format('d-m-Y') }}</td>
                            <td><a href="/doc/{{ $appel->document }}" ><button class="btn btn-info"><i class="far fa-save"></i><ion-icon name="document-outline"></ion-icon></button></a></td>
                            <td>{{  Carbon\Carbon::parse( $appel->dates)->format('d-m-Y') }}</td>
                            <td>{{  Carbon\Carbon::parse( $appel->dateexp)->format('d-m-Y') }}</td>

                            <td>
                                <a href="{{ route('appel.edit', $appel->id) }}" role="button" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('appel.show', $appel->id) }}" role="button" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['appel.destroy', $appel->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
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
