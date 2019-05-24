@extends('app')
@section('content')

  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h4 class="title">Striped Table with Hover</h4>
        <p class="category">Journal d'activité</p>
      </div>
      <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Montant</th>
            <th>Code</th>
            <th>Intent</th>
            <th>Customer</th>
            <th>IP</th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $result)
            <tr>
              <td>{{$result->id}}</td>
              <td>{{$result->date}}</td>
              <td>{{$result->amount}} F CFA</td>
              <td>{{$result->code}}</td>
              <td>{{$result->flag}}</td>
              <td>{{$result->customer}}</td>
              <td>{{$result->ip}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>

@endsection
