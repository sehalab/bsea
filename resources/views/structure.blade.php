                        <div class="card-body px-lg-5">
                            <form method="POST" action="{{ route('structure.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                                @csrf
                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="number" name="longueur" id="longueur" class="form-control">
                                    <label for="longueur">Longueur</label>
                                </div>

                                <!-- E-mai -->
                                <div class="md-form">
                                    <input type="number" name="largeur" id="largeur" class="form-control">
                                    <label for="largeur">Largeur</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="materiaux" id="materiaux" class="form-control">
                                    <label for="materiaux">Materiaux</label>
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

                                <input type="hidden" name="propriete_id" value="{{ $propriete }}">
                                <!-- Sign in button -->
                                <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                            </form>
                        </div>
