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
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type_id" required>
                                                <option value="">Faites un choix</option>
                                                @foreach ($types as $type)
                                                <option value="{{ $type->id }}" >{{ $type->nom }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Références Appel d’Offre</label>
                                            <input type="text" name="reference"  value="{{ $appel->reference }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Titre projet / programme / initiative</label>
                                            <textarea class="textarea" name="titre" placeholder="Place some text here"
                                            style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $appel->titre }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Thème/Secteur</label>
                                            <textarea class="textarea" name="theme" placeholder="Place some text here"
                                            style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $appel->theme }}</textarea>
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
                                            <label>Organisation partenaire</label>
                                            <input type="text" name="association"  value="{{ $appel->association }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Budget prévu</label>
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
                                            <label>personnes impliquées</label>
                                            <input type="text" name="personne"  value="{{ $appel->personne }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label >Document appel ou manifestation interêt</label>
                                                <input name="docs[]" type="file" class="form-control" id="exampleInputFile">
                                                <input type="button" class="btn btn-info" value="ajouter un nouveau fichier" id="addfic">
                                                <div id="viafic">

                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Axes stratégiques</label>
                                            <select class="form-control" name="axe" required>
                                                <option value="">Faites un choix</option>
                                                <option value="Axe 1 : Amélioration de la démocratie locale, de la participation et de l’engagement citoyen"
                                                {{ $appel->axe == "Axe 1 : Amélioration de la démocratie locale, de la participation et de l’engagement citoyen" ? 'seleted' : ''  }}
                                                >
                                                    Axe 1 : Amélioration de la démocratie locale, de la participation et de l’engagement citoyen
                                                </option>
                                                <option value="Axe 2 : Améliorer la sécurité, la résilience et l’attractivité territoriale pour les États, les partenaires et les communautés de base"
                                                {{ $appel->axe == "Axe 2 : Améliorer la sécurité, la résilience et l’attractivité territoriale pour les États, les partenaires et les communautés de base" ? 'seleted' : ''  }}
                                                >
                                                    Axe 2 : Améliorer la sécurité, la résilience et l’attractivité territoriale pour les États, les partenaires et les communautés de base
                                                </option>
                                                <option value="Axe 3 : Renforcer l’employabilité, l’entreprenariat et l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables"
                                                {{ $appel->axe == "Axe 3 : Renforcer l’employabilité, l’entreprenariat et l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables" ? 'seleted' : ''  }}
                                                >
                                                    Axe 3 : Renforcer l’employabilité, l’entreprenariat et l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables
                                                </option>
                                                <option value="Axe 4 : Développer les capacités de prospectives, de programmation et de suivi-évaluation des acteurs locaux pour la territorialisation des politiques publiques et des engagements internationaux"
                                                {{ $appel->axe == "Axe 4 : Développer les capacités de prospectives, de programmation et de suivi-évaluation des acteurs locaux pour la territorialisation des politiques publiques et des engagements internationaux" ? 'seleted' : ''  }}
                                                >
                                                    Axe 4 : Développer les capacités de prospectives, de programmation et de suivi-évaluation des acteurs locaux pour la territorialisation des politiques publiques et des engagements internationaux
                                                </option>
                                                <option value="Axe 5 : Soutenir les dynamiques de transition dans les villes et territoires"
                                                {{ $appel->axe == "Axe 5 : Soutenir les dynamiques de transition dans les villes et territoires" ? 'seleted' : ''  }}
                                                >
                                                    Axe 5 : Soutenir les dynamiques de transition dans les villes et territoires
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- LIGNES D'ACTION -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Ligne d’action</label>
                                            <select class="form-control" name="ligne" required>
                                                <option value="">Faites un choix</option>
                                                <!-- Axe 1 -->
                                                <option value="Axe 1  LA 1: Accompagnement de la mise en œuvre et consolidation d’approches de participation et engagement citoyens dans les collectivités territoriales">Axe 1 LA 1: Accompagnement de la mise en œuvre et consolidation d’approches de participation et engagement citoyens dans les collectivités territoriales</option>
                                                <option value="Axe 1 LA 2: Accompagnement des collectivités territoriales pour renforcer les processus de dématérialisation des procédures administratives et fiscales">Axe 1 LA 2: Accompagnement des collectivités territoriales pour renforcer les processus de dématérialisation des procédures administratives et fiscales</option>
                                                <option value="Axe 1 LA 3: Soutien aux initiatives de renforcement de la citoyenneté, démocratie participative et lutte contre la corruption">Axe 1 LA 3: Soutien aux initiatives de renforcement de la citoyenneté, démocratie participative et lutte contre la corruption</option>
                                                <option value="Axe 1 LA 4: Accompagnement des processus électoraux et consolidation de la démocratie en Afrique">Axe 1 LA 4: Accompagnement des processus électoraux et consolidation de la démocratie en Afrique</option>
                                                <!-- Axe 2 -->
                                                <option value="Axe 2 LA 5: Prévention, gestion des conflits et renforcement de la cohésion sociale">Axe 2 LA 5: Prévention, gestion des conflits et renforcement de la cohésion sociale</option>
                                                <option value="Axe 2 LA 6: Renforcement de la résilience aux vulnérabilités et la sécurité humaine">Axe 2 LA 6: Renforcement de la résilience aux vulnérabilités et la sécurité humaine</option>
                                                <option value="Axe 2 LA 7: Soutien aux initiatives de développement économique des territoires">Axe 2 LA 7: Soutien aux initiatives de développement économique des territoires</option>
                                                <option value="Axe 2 LA 8: Appui au développement de l’économie bleue et verte">Axe 2 LA 8: Appui au développement de l’économie bleue et verte</option>
                                                <option value="Axe 2 LA 9: Amélioration du cadre de vie et de l’accès aux services sociaux de base">Axe 2 LA 9: Amélioration du cadre de vie et de l’accès aux services sociaux de base</option>
                                                <!-- Axe 3 -->
                                                <option value="Axe 3 LA 10: Appui à l’économie sociale et solidaire (ESS)">Axe 3 LA 10: Appui à l’économie sociale et solidaire (ESS)</option>
                                                <option value="Axe 3 LA 11: Valorisation des filières porteuses de l’économie locale">Axe 3 LA 11: Valorisation des filières porteuses de l’économie locale</option>
                                                <option value="Axe 3 LA 12: Renforcement des capacités d’entreprenariat en lien avec les universités et centres de formation">Axe 3 LA 12: Renforcement des capacités d’entreprenariat en lien avec les universités et centres de formation</option>
                                                <option value="Axe 3 LA 13: Promotion de l’emploi et autonomisation des groupes vulnérables">Axe 3 LA 13: Promotion de l’emploi et autonomisation des groupes vulnérables</option>
                                                <!-- Axe 4 -->
                                                <option value="Axe 4 LA 14: Renforcement des capacités d’intervention pour la territorialisation des politiques publiques">Axe 4 LA 14: Renforcement des capacités d’intervention pour la territorialisation des politiques publiques</option>
                                                <option value="Axe 4 LA 15: Appui aux documents de planification intégrant les agendas internationaux">Axe 4 LA 15: Appui aux documents de planification intégrant les agendas internationaux</option>
                                                <option value="Axe 4 LA 16: Accompagnement dans la mobilisation de ressources et financements innovants">Axe 4 LA 16: Accompagnement dans la mobilisation de ressources et financements innovants</option>
                                                <!-- Axe 5 -->
                                                <option value="Axe 5 LA 17: Appui à la transition numérique pour les villes durables">Axe 5 LA 17: Appui à la transition numérique pour les villes durables</option>
                                                <option value="Axe 5 LA 18: Valorisation durable des ressources naturelles et foncières">Axe 5 LA 18: Valorisation durable des ressources naturelles et foncières</option>
                                                <option value="Axe 5 LA 19: Transition écologique et énergétique">Axe 5 LA 19: Transition écologique et énergétique</option>
                                                <option value="Axe 5 LA 20: Valorisation du capital humain pour la transformation sociale">Axe 5 LA 20: Valorisation du capital humain pour la transformation sociale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Statut</label>
                                            <select class="form-control" name="etat" required>
                                                <option value="">Faites un choix</option>
                                                <option value="En cours" >En cours</option>
                                                <option value="Approuve" >Approuve</option>
                                                <option value="Non approuve" >Non approuve</option>
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
@section('script')
    <script>

      $("#addfic").click(function() {
            //find content of different elements inside a row.

            $("#viafic").append("<div class='viafic'>"+
            "<input type='file' class='form-control' name='docs[]' required>"+
            "<button type='button' class='btn btn-danger btn-sm  remove-doc'>Supprimer</button></div>");
            //alert(nameTxt);
        });

         $(document).on('click', '.remove-doc', function(){
            $(this).parent('div .viafic').remove();

        });
</script>
@endsection



















