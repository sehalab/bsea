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

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control">
                <label for="materialSubscriptionFormPasswords">Name</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="email" id="materialSubscriptionFormEmail" class="form-control">
                <label for="materialSubscriptionFormEmail">E-mail</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form subscription -->
        </div>
    </div>
</div>
@endsection
