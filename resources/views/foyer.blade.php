                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Foyer</strong>
                        </h5>
                        <div class="card-body px-lg-5">
                            <form method="POST" action="{{ route('foyer.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                                @csrf
                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="number" name="numero" id="materialSubscriptionFormPasswords" class="form-control">
                                    <label for="materialSubscriptionFormPasswords">Code</label>
                                </div>

                                <!-- E-mai -->
                                <div class="md-form">
                                    <input type="text" name="nom_village" id="materialSubscriptionFormEmail" class="form-control">
                                    <label for="materialSubscriptionFormEmail">Nom village</label>
                                </div>
                                <div class="md-form">
                                    <input type="number" name="latitude" id="latitude" class="form-control">
                                    <label for="latitude">Latitude</label>
                                </div>
                                <div class="md-form">
                                    <input type="number" name="longitude" id="longitude" class="form-control">
                                    <label for="longitude">Longitude</label>
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
                                <!-- Sign in button -->
                                <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                            </form>
                        </div>