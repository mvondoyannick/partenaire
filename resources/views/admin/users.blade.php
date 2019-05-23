@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Nouveau compte</h4>
                        <p class="category">Creer un noveau compte</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-add-user" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
@endsection
