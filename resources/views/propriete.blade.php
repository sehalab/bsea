                        <div class="card-body px-lg-5">
                            <form method="POST" action="{{ route('propriete.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                                @csrf
                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" name="nom" id="nom" class="form-control  @error('nom') is-invalid @enderror" value="{{ @old('nom') }}">
                                    <label for="nom">Nom</label>
                                    @error('nom')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- E-mai -->
                                <div class="md-form">
                                    <input type="text" name="postnom" id="postnom" class="form-control  @error('postnom') is-invalid @enderror" value="{{ @old('postnom') }}">
                                    <label for="postnom">Post nom</label>
                                    @error('postnom')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <select class="mdb-select md-form @error('genre') is-invalid @enderror" value="{{ @old('genre') }}" name="genre">
                                    <option value="" disabled selected>Selectionner genre</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>
                                @error('genre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="md-form">
                                    <input type="text" name="etatcivil" id="etatcivil" class="form-control  @error('etatcivil') is-invalid @enderror" value="{{ @old('etatcivil') }}">
                                    <label for="etatcivil">Etat civil</label>
                                    @error('etatcivil')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="md-form">
                                    <input type="text" name="numerocarte" id="numerocarte" class="form-control  @error('numerocarte') is-invalid @enderror" value="{{ @old('numerocarte') }}">
                                    <label for="numerocarte">Numero carte Electeur</label>
                                    @error('numerocarte')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
