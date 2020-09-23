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
                    <strong>Propriete</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('propriete.store') }}" enctype="multipart/form-data" style="color: #757575;">
                        @csrf
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
                                    <input type="file" name="photo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate champ" type="text" placeholder="photo">
                                </div>
                            </div>
                        </div>
                        
                        <input type="hidden" next="detail" id="next" name="foyer_id" value="{{ $foyer }}">
                        <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection