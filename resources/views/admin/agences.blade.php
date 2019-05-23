@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Nouvelle agence</h4>
                        <p class="category">Ajouter une nouvelle agence</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-plugin" style="font-size: 128px; color: #ff334e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Supprimer une agence</h4>
                        <p class="category">Supprimer une agence</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-delete-user" style="font-size: 128px; color: #ff334e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Supendre une agence</h4>
                        <p class="category">Suspendre une agence dans le reseau</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-lock" style="font-size: 128px; color: #ff334e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Nos partenaires</h4>
                        <p class="category">Nos partenaire à payquick</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-network" style="font-size: 128px; color: #ff334e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Toutes les agences</h4>
                        <p class="category">Gestion des utilisateurs et des comptes</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-albums" style="font-size: 128px; color: #ff334e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences du Littoral</h4>
                        <p class="category">Gestion des agences</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #4d4fff;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences du Centre</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #4eff6e;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences du Nord</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #dfff62;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences de l'extreme Nord</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #ff21dd;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences du Sud Ouest</h4>
                        <p class="category">Gestion de l'historique</p>
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
                        <h4 class="title">Agences du Nord Ouest</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #41ffd5;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences de l'Ouest</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #b524ff;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('new')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Agences de l'Adamoaua</h4>
                        <p class="category">Gestion de l'historique</p>
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
                        <h4 class="title">Agences de l'Est</h4>
                        <p class="category">Gestion de l'historique</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-home" style="font-size: 128px; color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
