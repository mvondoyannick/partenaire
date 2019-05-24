@extends('app')
    @section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <form action="{{route('activate_2')}}" method="get">
              {{csrf_field()}}
              <div class="col-md-6">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Activer un compte client</h4>
                  </div>
                  <div class="content">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Numéro de téléphone a activer</label>
                          <input type="tel" name="phone" class="form-control" placeholder="Numéro téléphone" required>
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
                    <h4 class="title">Information de procedure</h4>
                  </div>
                  <div class="content">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>informations</label>
                          <textarea rows="5" disabled class="form-control" placeholder="description d'une certaine remarque">Il est important de noter que cette procedure vise a activer un telephone donc la procedure de creation de compte n'a pas été finalisé. cela veut dire que le client/utilisateur a surement du crée son compte depuis l'application mobile de payquick et n'a pas fournis des informations telles que le scan de sa piece d'identité, sa signature ou remplis le formulaire de creation de compte.
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <input type="reset" class="btn btn-danger btn-fill pull-left" value="Annuler">
                    <input type="submit" class="btn btn-info btn-fill pull-right" value="Rechercher ce numero">
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    @endsection
