{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Activité')

@section('content')
    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">Creer Nafil</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('appel.index') }}" role="button" class="btn btn-primary">LISTE Des appels</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <form action="{{ route('appel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-info text-center">FORMULAIRE D'ENREGISTREMENT D'UNE appel</div>
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
                                    <div class="col-lg-12">
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
                                            <label>Titre projet / programme / initiative</label>
                                            <textarea class="textarea" name="titre" placeholder="Place some text here"
                                            style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('titre') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Thème/Secteur</label>
                                            <textarea class="textarea" name="theme" placeholder="Place some text here"
                                            style="width: 100%; height: 240px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('theme') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" name="pays"  value="{{ old('pays') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Région</label>
                                            <select class="form-control" name="region" required="">
                                                <option value="">Selectionnez</option>
                                                <option value="LOUGA">LOUGA</option>
                                                <option value="THIES">THIES</option>
                                                <option value="MATAM">MATAM</option>
                                                <option value="TAMBACOUNDA">TAMBACOUNDA</option>
                                                <option value="KEDOUGOU">KEDOUGOU</option>
                                                <option value="KOLDA">KOLDA</option>
                                                <option value="SEDHIOU">SEDHIOU</option>
                                                <option value="DAKAR">DAKAR</option>
                                                <option value="SAINT LOUIS">SAINT LOUIS</option>
                                                <option value="DIOURBEL">DIOURBEL</option>
                                                <option value="FATICK">FATICK</option>
                                                <option value="KAOLACK">KAOLACK</option>
                                                <option value="KAFFRINE">KAFFRINE</option>
                                                <option value="ZIGUINCHOR">ZIGUINCHOR</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>CT</label>
                                            <input type="text" name="ct"  value="{{ old('ct') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Organisation partenaire</label>
                                            <input type="text" name="association"  value="{{ old('association') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Budget prévu</label>
                                            <input type="text" name="montant"  value="{{ old('montant') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bailleur</label>
                                            <input type="text" name="bailleur"  value="{{ old('bailleur') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date Réception</label>
                                            <input type="date" name="dater"  value="{{ old('dater') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date d’exploitation en ligne</label>
                                            <input type="date" name="datet"  value="{{ old('datet') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Reunion brainstorming</label>
                                            <input type="date" name="dateb"  value="{{ old('dateb') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date de Soumission</label>
                                            <input type="date" name="dates"  value="{{ old('dates') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date limite de soumission</label>
                                            <input type="date" name="dateexp"  value="{{ old('dateexp') }}" class="form-control"  required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>personnes impliquées</label>
                                            <input type="text" name="personne"  value="{{ old('personne') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label >Document appel ou manifestation interêt</label>
                                                <input name="doc" type="file" class="form-control" id="exampleInputFile">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Axes stratégiques</label>
                                            <select class="form-control" name="axe" required>
                                                <option value="">Faites un choix</option>
                                                <option value="Amélioration de la démocratie locale, de la participation et de l’engagement citoyen" >Amélioration de la démocratie locale, de la participation et de l’engagement citoyen</option>
                                                <option value="Améliorer la sécurité, la résilience et l’attractivité territoriale pour les États, les partenaires et les communautés de base" >Améliorer la sécurité, la résilience et l’attractivité territoriale pour les États, les partenaires et les communautés de base</option>
                                                <option value="Renforcer l’employabilité, l’entreprenariat et l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables" >Renforcer l’employabilité, l’entreprenariat et l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables</option>
                                                <option value="Développer les capacités de prospectives, de programmation et de suivi-évaluation des acteurs locaux pour la territorialisation des politiques publiques et des engagements internationaux">Développer les capacités de prospectives, de programmation et de suivi-évaluation des acteurs locaux pour la territorialisation des politiques publiques et des engagements internationaux</option>
                                                <option value="Soutenir les dynamiques de transition dans les villes et territoires">Soutenir les dynamiques de transition dans les villes et territoires</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Ligne d’action</label>
                                            <select class="form-control" name="ligne" required>
                                                <option value="">Faites un choix</option>
                                                <option value="Accompagnement de la mise en œuvre et consolidation d’approches de participation et engagement citoyens dans les collectivités territoriales ;" >Axe 1 : Accompagnement de la mise en œuvre et consolidation d’approches de participation et
                                                    engagement citoyens dans les collectivités territoriales ;</option>
                                                <option value="Accompagnement des collectivités territoriales pour renforcer les processus de
                                                dématérialisation des procédures administratives et fiscales, de transparence et de suivi
                                                budgétaire ;" >Axe 1 : Accompagnement des collectivités territoriales pour renforcer les processus de
                                                dématérialisation des procédures administratives et fiscales, de transparence et de suivi
                                                budgétaire ;</option>
                                                <option value="Soutien aux initiatives de renforcement de la citoyenneté, de démocratie participative,
                                                de prévention et lutte contre la corruption dans les collectivités territoriales ;" >Axe 1 : Soutien aux initiatives de renforcement de la citoyenneté, de démocratie participative,
                                                de prévention et lutte contre la corruption dans les collectivités territoriales ;</option>
                                                <option value="Accompagnement des processus électoraux et consolidation de la démocratie en Afrique."> Axe 1 : Accompagnement des processus électoraux et consolidation de la démocratie en Afrique. </option>
                                                <option value="Prévention, gestion des conflits et renforcement de la cohésion sociale dans les villes et territoires ;">
                                                    Axe 2 : Prévention, gestion des conflits et renforcement de la cohésion sociale dans les villes
                                                    et territoires ;
                                                </option>
                                                <option value="Renforcement de la résilience aux vulnérabilités (climatiques, environnementales, etc.)
                                                et la sécurité humaine dans les villes et territoires ;"> Axe 2 : Renforcement de la résilience aux vulnérabilités (climatiques, environnementales, etc.)
                                                et la sécurité humaine dans les villes et territoires ;</option>
                                                <option value="Soutien aux initiatives de développement économique des territoires en renforçant les
                                                capacités de mobilisation de ressources propres, de réalisation d’infrastructures à haute
                                                portée économique et de valorisation des potentialités des territoires ;
                                                ">Axe 2 : Soutien aux initiatives de développement économique des territoires en renforçant les
                                                capacités de mobilisation de ressources propres, de réalisation d’infrastructures à haute
                                                portée économique et de valorisation des potentialités des territoires ;
                                                </option>
                                                <option value="Appui aux initiatives de développement de l’économie bleue et de l’économie verte à
                                                travers l’implication du secteur privé local ;">
                                                    Axe 2 : Appui aux initiatives de développement de l’économie bleue et de l’économie verte à
                                                    travers l’implication du secteur privé local ;
                                                </option>
                                                <option value="Amélioration du cadre de vie, de l’attractivité territoriale et de l’accès aux services sociaux
                                                de base.">Axe 2 : Amélioration du cadre de vie, de l’attractivité territoriale et de l’accès aux services sociaux
                                                de base.</option>
                                                <option value="Accompagnement et appui à la mise en œuvre d’initiatives de l’économie sociale et
                                                solidaire (ESS) dans les collectivités territoriales ;">
                                                    Axe 3 : Accompagnement et appui à la mise en œuvre d’initiatives de l’économie sociale et
                                                    solidaire (ESS) dans les collectivités territoriales ;
                                                </option>
                                                <option value="Accompagnement des collectivités territoriales et des communautés à valoriser les
                                                    filières porteuses de l’économie locale et les opportunités de la croissance durable ;" >
                                                    Axe 3 : Accompagnement des collectivités territoriales et des communautés à valoriser les
                                                    filières porteuses de l’économie locale et les opportunités de la croissance durable ;
                                                </option>
                                                <option value="Développement d’offres de renforcement de capacités d’entreprenariat et
                                                    d’autonomisation adaptées aux contextes locaux en relation avec les universités, les
                                                    structures d’Enseignement Technique et de la Formation Professionnelle, les chambres
                                                    consulaires, les associations faîtières des producteurs, etc. ;">
                                                    Axe 3 : Développement d’offres de renforcement de capacités d’entreprenariat et
                                                    d’autonomisation adaptées aux contextes locaux en relation avec les universités, les
                                                    structures d’Enseignement Technique et de la Formation Professionnelle, les chambres
                                                    consulaires, les associations faîtières des producteurs, etc. ;
                                                </option>
                                                <option value="Renforcement des capacités techniques, organisationnelles et institutionnelles des
                                                    collectivités territoriales dans la formulation et la mise en œuvre de stratégies locales
                                                    de promotion de l’emploi et d’autonomisation économique des jeunes, des femmes, des
                                                    personnes handicapées et autres groupes vulnérables.">
                                                    Axe 3 : Renforcement des capacités techniques, organisationnelles et institutionnelles des
                                                    collectivités territoriales dans la formulation et la mise en œuvre de stratégies locales
                                                    de promotion de l’emploi et d’autonomisation économique des jeunes, des femmes, des
                                                    personnes handicapées et autres groupes vulnérables.
                                                </option>
                                                <option value="Renforcement des capacités d’intervention des acteurs locaux pour la territorialisation
                                                    des politiques publiques et des Agendas internationaux ;">
                                                    Axe 4 : Renforcement des capacités d’intervention des acteurs locaux pour la territorialisation
                                                    des politiques publiques et des Agendas internationaux ;
                                                </option>
                                                <option value="Appui à l’élaboration, la mise-en œuvre et le suivi évaluation des documents de
                                                    planification des Collectivités Territoriales qui intègrent les politiques publiques et les
                                                    Agendas internationaux pour une meilleure justice sociale et spatiale ;">
                                                    Axe 4 : Appui à l’élaboration, la mise-en œuvre et le suivi évaluation des documents de
                                                    planification des Collectivités Territoriales qui intègrent les politiques publiques et les
                                                    Agendas internationaux pour une meilleure justice sociale et spatiale ;
                                                </option>
                                                <option value="Accompagnement des villes et territoires dans les stratégies et actions de mobilisation de
                                                    ressources et l’expérimentation et la mise à l’échelle de mécanismes innovants de financement
                                                    de leur développement.">
                                                    Axe 4 : Accompagnement des villes et territoires dans les stratégies et actions de mobilisation de
                                                    ressources et l’expérimentation et la mise à l’échelle de mécanismes innovants de financement
                                                    de leur développement.
                                                </option>
                                                <option value="Appui aux initiatives de transition numérique pour une transformation durable des villes
                                                    et territoires en Afrique ;">
                                                    Axe 5 : Appui aux initiatives de transition numérique pour une transformation durable des villes
                                                    et territoires en Afrique ;
                                                </option>
                                                <option value="Appui à la valorisation et gestion durables des ressources naturelles et foncières des
                                                    villes et territoires d’Afrique ;">
                                                    Appui à la valorisation et gestion durables des ressources naturelles et foncières des
                                                    villes et territoires d’Afrique ;
                                                </option>
                                                <option value="Accompagnement et consolidation des initiatives de transition écologique et énergétique
                                                    dans les villes et territoires ;">
                                                    Axe 5 : Accompagnement et consolidation des initiatives de transition écologique et énergétique dans les villes et territoires ;
                                                </option>
                                                <option value="Accompagnement des collectivités territoriales dans la valorisation du capital humain
                                                    par la capture du dividende démographique pour une transformation sociale et sociétale
                                                    durable en Afrique.">
                                                    Axe 5 : Accompagnement des collectivités territoriales dans la valorisation du capital humain
                                                    par la capture du dividende démographique pour une transformation sociale et sociétale
                                                    durable en Afrique.
                                                </option>
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

            </form>
            </div>
        </div>



@endsection

<script src=" {{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
    ligne = $("#ligne").children("option:selected").val();
    if(ligne=="")
    {
        $("#axe").empty();
    }
  })
</script>
