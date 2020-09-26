@extends('layouts.app')
@section('content')
    <div class="container my-5 py-5 z-depth-1">
        <!--Section: Content-->
        <section class="dark-grey-text">
            <h3 class="font-weight-bold text-center pt-4 mb-4">Foyer numero {{ $foyer->numero }}</h3>
            <div class="row mx-lg-5 mx-md-3">
                <div class="col-md-4 mb-4">
                    <ul class="list-group">
                        <li class="list-group-item"> Numero : {{ $foyer->numero }}</li>
                        <li class="list-group-item">Nom village :  {{ $foyer->nom_village }}</li>
                        <li class="list-group-item">Longitude : {{ $foyer->latitude }}</li>
                        <li class="list-group-item">Latitude : {{ $foyer->longitude }}</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="view overlay rgba-red-slight">
                        <img src="/images/{{ $foyer->photo }}" class="img-fluid " alt="zoom">
                        <div class="mask flex-center waves-effect waves-light">
                            <p class="white-text">Photo de la maison</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="view overlay rgba-red-slight">
                        <img src="/images/{{ $foyer->photo_propriete }}" class="img-fluid " alt="zoom">
                        <div class="mask flex-center waves-effect waves-light">
                            <p class="white-text">Photo du responsable</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Propriété</h4>
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <div class="md-v-line"></div><i class="fas fa-home mr-4 pr-3"></i> Propriété
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-user mr-5"></i>Nom : {{ $foyer->nom }}                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-user-circle mr-5"></i>Postnom : {{ $foyer->postnom }}
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-users mr-5"></i>Genre : {{ $foyer->genre }}
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-flag mr-5"></i>Etat civil : {{ $foyer->etatcivil }}
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-home mr-5"></i>Statut : {{ $foyer->statut }}
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-clock mr-5"></i>Durée : {{ $foyer->duree }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Structures</h4>
                    <a name="" id="" class="btn btn-outline-success btn-sm" href="../structures/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table">
                        <thead class="blue white-text">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Longueur</th>
                            <th scope="col">Largeur</th>
                            <th scope="col">Materiaux</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->structures as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->longueur }}</td>
                                    <td>{{ $item->largeur }}</td>
                                    <td>{{ $item->materiaux }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="{{ route('structure.update', $item->id) }}" method="PATCH" token="{{ csrf_token() }}"  val="{{ $item->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 mb-4">
                    <h4>membres</h4>
                    <a name="" id="" class="btn btn-outline-info btn-sm" href="../membres/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table table-responsive">
                        <thead class="blue white-text">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom complet</th>
                            <th scope="col">Relation</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Age</th>
                            <th scope="col">Niveau Etudes</th>
                            <th scope="col">Ecole</th>
                            <th scope="col">Vulnerabilite</th>
                            <th scope="col">Etat civil</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->membres as $membre)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $membre->nomcomplet }}</td>
                                    <td>{{ $membre->relation }}</td>
                                    <td>{{ $membre->genre }}</td>
                                    <td>{{ $membre->age }}</td>
                                    <td>{{ $membre->niveauetudes }}</td>
                                    <td>{{ $membre->ecole }}</td>
                                    <td>{{ $membre->vulnerabilite }}</td>
                                    <td>{{ $membre->etatcivil }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="{{ route('membre.update', $membre->id) }}" method="PATCH" token="{{ csrf_token() }}" id="modifier" val="{{ $membre->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Sites</h4>
                    <a name="" id="" class="btn btn-outline-default btn-sm" href="../sites/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table table-responsive">
                        <thead class="blue white-text">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Etat</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->sites as $site)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $site->description }}</td>
                                    <td>{{ $site->local_E }}</td>
                                    <td>{{ $site->local_N }}</td>
                                    <td class="state">{{ ($site->etat)?"déplaçable":"statique" }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <button type="button" class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <a href="{{ route('site.update', $site->id) }}" method="PATCH" token="{{ csrf_token() }}"  val="{{ $site->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Tombes</h4>
                    <a name="" id="" class="btn btn-outline-primary btn-sm" href="../tombes/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table table-responsive">
                        <thead class="blue white-text">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lien parente</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Année</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->tombes as $tombe)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $tombe->lienparente }}</td>
                                    <td>{{ $tombe->heure }}</td>
                                    <td>{{ $tombe->annee }}</td>
                                    <td>{{ $tombe->local_E }}</td>
                                    <td>{{ $tombe->local_N }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <button type="button" class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <a href="{{ route('tombe.update', $tombe->id) }}" method="PATCH" token="{{ csrf_token() }}" val="{{ $tombe->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Betails</h4>
                    <a name="" id="" class="btn btn-outline-secondary btn-sm" href="../betails/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table">
                        <thead class="blue white-text">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->betails as $betail)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $betail->nom }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <button type="button" class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <a href="{{ route('betail.update', $betail->id) }}" method="PATCH" token="{{ csrf_token() }}"  val="{{ $betail->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Arbres</h4>
                    <a name="" id="" class="btn btn-outline-primary btn-sm" href="../arbres/{{ $foyer->id }}" role="button">
                        <i class="fas fa-plus "></i>
                    </a>
                    <table class="table">
                        <thead class="blue white-text">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usage</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foyer->arbres as $arbre)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $arbre->usage }}</td>
                                    <td>{{ $arbre->nom }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <button type="button" class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <a href="{{ route('arbre.update', $arbre->id) }}" method="PATCH" token="{{ csrf_token() }}"  val="{{ $arbre->id }}"  class="btn btn-outline-info btn-sm edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--Section: Content-->
    </div>
@endsection
