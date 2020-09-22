                        <div class="card-body px-lg-5">
                            <form method="POST" action="{{ route('membre.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                                @csrf
                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" name="nomcomplet" id="nomcomplet" class="form-control">
                                    <label for="nomcomplet">Nom complet</label>
                                </div>

                                <!-- E-mai -->
                                <div class="md-form">
                                    <input type="text" name="relation" id="relation" class="form-control">
                                    <label for="relation">Relation</label>
                                </div>

                                <select class="mdb-select md-form" name="genre">
                                    <option value="" disabled selected>Selectionner genre</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>

                                <div class="md-form">
                                    <input type="number" name="age" id="age" class="form-control">
                                    <label for="age">Relation</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="niveauetudes" id="niveauetudes" class="form-control">
                                    <label for="niveauetudes">Niveau Etudes</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="occupation" id="occupation" class="form-control">
                                    <label for="occupation">Occupation</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="vulnerabilite" id="vulnerabilite" class="form-control">
                                    <label for="vulnerabilite">Vulnerabilite</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="ecole" id="ecole" class="form-control">
                                    <label for="ecole">Ecole</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" name="etatcivil" id="etatcivil" class="form-control">
                                    <label for="etatcivil">Etat Civil</label>
                                </div>

                                <input type="hidden" name="propriete_id" value="{{ $propriete }}">
                                <!-- Sign in button -->
                                <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                            </form>
                        </div>
