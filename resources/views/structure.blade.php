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
                    <strong>Structure</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('structure.store') }}" enctype="multipart/form-data" style="color: #757575;">
                        @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="number" name="longueur" id="longueur" class="form-control champ">
                            <label for="longueur">Longueur</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- E-mai -->
                        <div class="md-form">
                            <input type="number" name="largeur" id="largeur" class="form-control champ">
                            <label for="largeur">Largeur</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="text" name="materiaux" id="materiaux" class="form-control champ">
                            <label for="materiaux">Materiaux</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-outline-info waves-effect btn-sm float-left">
                                    <span>Photo</span>
                                    <input type="file" name="photo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="photo">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="next" next="membres" name="propriete_id" value="{{ $propriete }}">
                            <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
