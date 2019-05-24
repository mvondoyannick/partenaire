@extends('app')
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <form action="{{route('debitGo')}}" method="post">
          {{csrf_field()}}
          <div class="col-md-6">
            <div class="card">
              <div class="header">
                <h4 class="title">Débiter un compte client</h4>
              </div>
              <div class="content">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Numéro de téléphone</label>
                      <input type="tel" name="phone" class="form-control" placeholder="Numéro téléphone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Numéro de téléphone (confirmer)</label>
                      <input type="tel" name="phone_confirm" class="form-control" placeholder="Numéro de téléphone confirmer">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Montant à débiter</label>
                      <input type="number" name="amount" class="form-control" placeholder="Montant à debiter">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Montant à débiter</label>
                      <input type="number" name="amount_confirm" class="form-control" placeholder="Montant à débiter confirmer">
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
                      <label>Autres</label>
                      <input type="text" disabled class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Remarques</label>
                      <textarea rows="5" class="form-control" placeholder="description d'une certaine remarque"></textarea>
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
