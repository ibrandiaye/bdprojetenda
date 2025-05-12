{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Modifier appel')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">Modifier appel</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('appel.index') }}" role="button" class="btn btn-primary">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($appel, ['method'=>'PATCH','route'=>['appel.update', $appel->id]]) !!}
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-info text-center">FORMULAIRE DE MODIFICATION D'une appel</div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Titre</label>
                                                <textarea class="textarea" name="titre" placeholder="Place some text here"
                                                style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $appel->titre }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Thème</label>
                                                <textarea class="textarea" name="theme" placeholder="Place some text here"
                                                style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $appel->theme }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Secteur</label>
                                                <input type="text" name="secteur"  value="{{  $appel->ecteur }}" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type_id" required>
                                                <option value="">Faites un choix</option>
                                                @foreach ($types as $type)
                                                <option value="{{ $type->id }}" {{ $appel->type_id==$type->id ? 'selected' : '' }}>{{ $type->nom }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" name="pays"  value="{{ $appel->pays }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Région</label>
                                            <input type="text" name="region"  value="{{ $appel->region }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>CT</label>
                                            <input type="text" name="ct"  value="{{ $appel->ct }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>organisation partenaire</label>
                                            <input type="text" name="association"  value="{{ $appel->association }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Montant</label>
                                            <input type="text" name="montant"  value="{{ $appel->montant }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bailleur</label>
                                            <input type="text" name="bailleur"  value="{{ $appel->bailleur }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date Réception</label>
                                            <input type="date" name="dater"  value="{{ $appel->dater }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date d’exploitation en ligne</label>
                                            <input type="date" name="datet"  value="{{ $appel->datet }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Reunion brainstorming</label>
                                            <input type="date" name="dateb"  value="{{ $appel->dateb }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date de Soumission</label>
                                            <input type="date" name="dates"  value="{{ $appel->dates }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date limite de soumission</label>
                                            <input type="date" name="dateexp"  value="{{ $appel->dateexp }}" class="form-control"  required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Personne Impliqué</label>
                                            <input type="text" name="personne"  value="{{ $appel->personne }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label >Choisir un fichier</label>
                                                <input name="doc" type="file" class="form-control" id="exampleInputFile">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Statut</label>
                                            <select class="form-control" name="etat" required>
                                                <option value="">Faites un choix</option>
                                                <option value="En cours" {{ $appel->etat=='En cours' ? 'selected' : '' }}>En cours</option>
                                                <option value="Approuve" {{ $appel->etat=='Approuve' ? 'selected' : '' }}>Approuve</option>
                                                <option value="Non approuve" {{ $appel->etat=='Non approuve' ? 'selected' : '' }}>Non approuve</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <center>
                                        <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                                    </center>
                                </div>
                            </div>
                        </div>
    {!! Form::close() !!}
                </div>
        </div>

    </div>

@endsection
