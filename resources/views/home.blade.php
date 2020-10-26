@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Material form subscription -->
            @isset($success)
                <div class="alert alert-success" role="alert">
                    {{ $success }}
                </div>
            @endisset
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Foyer</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form id="form" method="POST" action="{{ route('foyer.store') }}" enctype="multipart/form-data" style="color: #757575;">
                        @csrf
                        <ul class="stepper" id="feedback-step">
                            <li class="step active">
                                <div data-step-label="It's just a second..." class="step-title waves-effect waves-dark">Foyer</div>
                                <div class="step-new-content">
                                    <div class="md-form mt-3">
                                        <input type="number" name="numero" id="numero" class="form-control champ">
                                        <label for="numero">Code</label>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <!-- E-mai -->
                                    <div class="md-form">
                                        <input type="text" name="nom_village" id="nom_village" class="form-control champ">
                                        <label for="nom_village">Nom village</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="number" name="latitude" id="latitude" class="form-control champ">
                                        <label for="latitude">Latitude</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="number" name="longitude" id="longitude" class="form-control champ">
                                        <label for="longitude">Longitude</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <div class="file-field">
                                            <div class="btn btn-outline-info waves-effect btn-sm float-left">
                                                <span>Photo</span>
                                                <input type="file" name="photo">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate champ" type="text" placeholder="photo">
                                            </div>
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction"> <i class="fa fa-check" aria-hidden="true"></i> Continuer</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Propriete</div>
                                <div class="step-new-content">
                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" name="nom" id="nom" class="form-control champ">
                                        <label for="nom">Nom</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <!-- E-mai -->
                                    <div class="md-form">
                                        <input type="text" name="postnom" id="postnom" class="form-control champ">
                                        <label for="postnom">Post nom</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <select class="mdb-select md-form champ" name="genre">
                                        <option value="" disabled selected>Selectionner genre</option>
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                    </select>
                                    <div class="invalid-feedback"></div>

                                    <div class="md-form">
                                        <input type="text" name="etatcivil" id="etatcivil" class="form-control champ">
                                        <label for="etatcivil">Etat civil</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" name="numerocarte" id="numerocarte" class="form-control champ">
                                        <label for="numerocarte">Numero carte Electeur</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <div class="file-field">
                                            <div class="btn btn-outline-info waves-effect btn-sm float-left">
                                                <span>Photo</span>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate champ" type="text" placeholder="photo">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction"><i class="fa fa-check" aria-hidden="true"></i> Continuer</button>
                                        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Details</div>
                                <div class="step-new-content">
                                    <select class="mdb-select md-form select champ" name="statut">
                                        <option value="" disabled selected>Propriété</option>
                                        <option value="locataire">Locataire</option>
                                        <option value="proprio">Proprio</option>
                                    </select>
                                    <div class="invalid-feedback"></div>

                                    <div class="md-form">
                                        <input type="number" name="duree" id="duree" class="form-control champ">
                                        <label for="duree">Duree</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <p>Si locataire, </p>

                                    <div class="md-form">
                                        <input type="text" name="nom_prop" id="nom" class="form-control champ loc">
                                        <label for="nom">Nom</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" name="prenom" id="prenom" class="form-control champ loc">
                                        <label for="prenom">Prenom</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" name="telephone" id="telephone" class="form-control champ loc">
                                        <label for="telephone">Telephone</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" name="adresse" id="adresse" class="form-control champ loc">
                                        <label for="adresse">Adresse</label>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <input type="hidden" id="next" next="structures" name="next">
                                    <div class="step-actions">
                                        <div class="text-center">
                                            <button id="reserve" class="btn btn-outline-black btn-rounded mt-5">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <!-- Material form subscription -->
        </div>
    </div>
</div>
@endsection
