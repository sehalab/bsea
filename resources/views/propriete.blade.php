                        <div class="card-body px-lg-5">
                            <form method="POST" action="{{ route('propriete.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                                @csrf
                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" name="nom" id="nom" class="form-control">
                                    <label for="nom">Nom</label>
                                </div>

                                <!-- E-mai -->
                                <div class="md-form">
                                    <input type="text" name="postnom" id="postnom" class="form-control">
                                    <label for="postnom">Post nom</label>
                                </div>

                                <select class="mdb-select md-form" name="genre">
                                    <option value="" disabled selected>Selectionner genre</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>

                                <div class="md-form">
                                    <input type="text" name="etatcivil" id="etatcivil" class="form-control">
                                    <label for="etatcivil">Etat civil</label>
                                </div>
                                
                                <div class="md-form">
                                    <input type="text" name="numerocarte" id="numerocarte" class="form-control">
                                    <label for="numerocarte">Numero carte Electeur</label>
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
                                <input type="hidden" name="foyer_id" value="{{ $foyer }}">
                                <!-- Sign in button -->
                                <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                            </form>
                        </div>