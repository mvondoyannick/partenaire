@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Utilisateurs & comptes</h4>
                        <p class="category">Gestion des utilisateurs et des comptes</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-users" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences</h4>
                        <p class="category">Gestion des agences</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Historique</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-timer" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Rapprochement bancaire</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-copy-file" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
