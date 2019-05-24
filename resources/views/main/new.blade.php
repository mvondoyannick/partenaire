@extends('app')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('create')}}" method="post">
                    {{csrf_field()}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Informations personnelles</h4>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nom utilisateur">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" name="second_name" class="form-control" placeholder="prénom">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Numéro Piece identité</label>
                                            <input type="text" name="cni" class="form-control" placeholder="Numéro CNI">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Numéro de téléphone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Numéro de téléphonz">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sexe</label>
                                            <select name="sexe" id="" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Féminin</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ville</label>
                                            <input type="text" name="ville" class="form-control" placeholder="Ville">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" name="pays" class="form-control" placeholder="Pays">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quartier résidence</label>
                                            <input type="text" name="quartier" class="form-control" placeholder="Quartier de résidence">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adresse ou autre moyens de contact</label>
                                            <input type="text" name="other_adresse" class="form-control" placeholder="Adresse ou autre moyens de contatc">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <p>
                                                Aucune information pour le moment
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{--<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>--}}
                                <br><br>
                                <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Documents personnels</h4>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Scan CNI</label>
                                            <input type="file" class="form-control" placeholder="Company" value="Creative Code Inc.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Formulaire enregistrement</label>
                                            <input type="file" class="form-control" placeholder="Username" value="michael23">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Photo numérique</label>
                                            <input type="file" class="form-control" placeholder="Company" value="Mike">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Autre document</label>
                                            <input type="file" class="form-control" placeholder="Last Name" value="Andrew">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" disabled class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" disabled class="form-control" placeholder="City" value="Mike">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" disabled class="form-control" placeholder="Country" value="Andrew">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" class="form-control" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="reset" class="btn btn-danger btn-fill pull-left" value="Annuler">
                                <input type="submit" class="btn btn-info btn-fill pull-right" value="Valider la creation">
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
