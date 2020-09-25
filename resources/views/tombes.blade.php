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
                    <strong>Tombes</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('tombe.store') }}" enctype="multipart/form-data"  style="color: #757575;">
                        @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" name="lienparente" id="lienparente" class="form-control champ">
                            <label for="lienparente">Lien de parenté</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="local_E" id="local_E" class="form-control champ">
                            <label for="local_E">Latitude</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="local_N" id="local_N" class="form-control champ">
                            <label for="local_N">Longitude</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div id="date-picker-example" class="md-form">
                            <input placeholder="Entrer l'année" name="annee" type="number" id="example" class="form-control">
                            <label for="example">Annee</label>
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

                        <input type="hidden" id="next" next="sites" name="foyer_id" value="{{ $propriete }}">
                            <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
