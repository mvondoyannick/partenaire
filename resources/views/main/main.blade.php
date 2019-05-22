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

            <div class="col-md-3">
                <a href="{{route('credit')}}">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Crediter</h4>
                            <p class="category">Crediter un compte</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-upload" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('debit')}}">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Debiter</h4>
                            <p class="category">Debiter un compte</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-download" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('activate')}}">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Activer</h4>
                            <p class="category">Activer un compte</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-network" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('lock')}}">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Bloquer</h4>
                            <p class="category">Bloquer un compte</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-lock" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('unlock')}}">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Débloquer</h4>
                        <p class="category">Débloquer un compte</p>
                    </div>
                    <div class="content text-center">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                            <i class="pe-7s-unlock" style="font-size: 128px;"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('history')}}">
                    <div class="card">

                        <div class="header">
                            <h4 class="title">Historique</h4>
                            <p class="category">Historique du compte m@m.com</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-timer" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('logs')}}">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Journal</h4>
                            <p class="category">Jouirnal des transaction de l'agence</p>
                        </div>
                        <div class="content text-center">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth center-block">
                                <i class="pe-7s-album" style="font-size: 128px;"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endsection