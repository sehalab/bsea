@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Betails</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('betail.store') }}" enctype="multipart/form-data"  style="color: #757575;">
                        @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" name="nom" id="nom" class="form-control champ">
                            <label for="nom">Nom</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    
                        <input type="hidden" id="next" next="arbres" name="foyer_id" value="{{ $propriete }}">
                            <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
