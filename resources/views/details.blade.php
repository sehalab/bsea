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
                    <strong>Detail</strong>
                </h5>
                <div class="card-body px-lg-5">
                    <form method="POST" action="{{ route('details.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                        @csrf
                                    
                        <select class="mdb-select md-form select" name="statut" required>
                            <option value="" disabled selected>Selectionner genre</option>
                            <option value="locataire">Locataire</option>
                            <option value="proprio">Proprio</option>
                        </select>

                        <div class="md-form">
                            <input type="number" name="duree" id="duree" class="form-control" required>
                            <label for="duree">Duree</label>
                        </div>
                                    
                        <p>Si locataire, </p>

                        <div class="md-form">
                            <input type="text" name="nom" id="nom" class="form-control">
                            <label for="nom">Nom</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="prenom" id="prenom" class="form-control">
                            <label for="prenom">Prenom</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="telephone" id="telephone" class="form-control">
                            <label for="telephone">Telephone</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="adresse" id="adresse" class="form-control">
                            <label for="adresse">Adresse</label>
                        </div>

                        <input type="hidden" name="propriete_id" value="{{ $propriete }}">
                        <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection