@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Material form subscription -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Subscribe</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">
        <ul class="stepper horizontal" id="horizontal-stepper">
        <li class="step active">
            <div class="step-title waves-effect waves-dark">Step 1</div>
            <div class="step-new-content">
                <form method="POST" action="{{ route('foyer.store') }}" class="text-center" style="color: #757575;" action="#!">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="md-form col-12 ml-auto mt-3">
                            <input type="text" id="materialSubscriptionFormPasswords" name="numero" class="validate form-control" placeholder="numero">
                            <label for="materialSubscriptionFormPasswords">Email</label>
                        </div>
                        <div class="md-form col-12 ml-auto mt-3">
                            <input type="text" id="village" name="nom_village" class="validate form-control" placeholder="Nom village">
                            <label for="village">Email</label>
                        </div>
                    </div>
                    <!-- Form -->
                    <div class="step-actions">
                        <button type="submit" class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
                    </div>
                </form>
            </div>
        </li>
        <li class="step">
            <div class="step-title waves-effect waves-dark">Step 2</div>
            <div class="step-new-content">
            <div class="row">
                <div class="md-form col-12 ml-auto">
                <input id="password-horizontal" type="password" class="validate form-control" required>
                <label for="password-horizontal">Your password</label>
                </div>
            </div>
            <div class="step-actions">
                <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction21">CONTINUE</button>
                <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
            </div>
            </div>
        </li>
        <li class="step">
            <div class="step-title waves-effect waves-dark">Step 3</div>
            <div class="step-new-content">
            Finish!
            <div class="step-actions">
                <button class="waves-effect waves-dark btn-sm btn btn-primary m-0 mt-4" type="button">SUBMIT</button>
            </div>
            </div>
        </li>
    </ul>


    </div>

</div>
<!-- Material form subscription -->
        </div>
    </div>
</div>
@endsection
