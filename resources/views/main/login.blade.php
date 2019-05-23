<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" >


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">
@include('flash-message')
<form class="form-signin" action="{{url('/auth')}}" method="post">
    {{csrf_field()}}
    <img class="mb-4" src="{{url('assets/img/logo_1_0.png')}}" alt="">
    <h1 class="h3 mb-3 font-weight-normal">Identifiez-vous</h1>
    <br>
    <label for="inputEmail" class="sr-only">Adresse email</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Adresse email" required="true" autofocus="true">
    <br><br>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <br>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
    <br>
    <br>
    <p class="mt-5 mb-3 text-muted">© 2017-2019, payquick</p>
</form>


</body>
</html>