<style>
    .nav-link-collapse:after{
        color: #FFFFFF!important;
    }
    .navbar-brand{
        position: absolute;
        top: 5px;
        left:0;
        z-index:100;
    }
    .nav-item:hover{
        background:indianred;
    }
    .sidenav-second-level li:hover{
        background: #4A4A4A;
    }
</style>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jiri') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top" style="padding-top: 0; margin-bottom: 0;">
@if(Auth::check())
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav" style="border-radius: 0;">

        <div class="navbar-header fixed-top" style="background-color: #353A3F;">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                {{ config('app.name', 'Jiri') }}
            </a>
        </div>

        <div class="collapse navbar-collapse fixed-top" id="navbarResponsive" style="z-index: 1; background-color: #353A3F;">
            <h2 class="hidden">Menu principal</h2>
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="margin-top: 66px; padding-top: 40px; padding-bottom: 100vh; background-color: #FF6265;">
                @if( Auth::user()->is_admin)
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Étudiants">
                    <a style="color:#FFFFFF;" class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStudent" data-parent="#exampleAccordion">
                        <i class="fa fa-graduation-cap"></i>
                        <span class="nav-link-text">Élèves</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseStudent">
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/students/create') }}">Créer un élève</a>
                        </li>
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/students/index') }}">Liste des élèves</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projets">
                    <a style="color:#FFFFFF;"class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProject" data-parent="#exampleAccordion">
                        <i class="fa fa-desktop"></i>
                        <span class="nav-link-text">Projets</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseProject">
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/projects/create') }}">Créer un projet</a>
                        </li>
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/projects/index') }}">Liste des projets</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projets">
                    <a style="color:#FFFFFF;"class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUser" data-parent="#exampleAccordion">
                        <i class="fa fa-gavel"></i>
                        <span class="nav-link-text">Utilisateurs</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseUser">
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/users/create') }}">Créer un utilisateur</a>
                        </li>
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/users/index') }}">Liste des utilisateurs</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projets">
                    <a style="color:#FFFFFF;"class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEvent" data-parent="#exampleAccordion">
                        <i class="fa fa-table"></i>
                        <span class="nav-link-text">Évènements</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseEvent">
                        @if( Auth::user()->is_admin)
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/events/create') }}">Créer un évènement</a>
                        </li>
                        @endif
                        <li>
                            <a style="color:#FFFFFF;" href="{{ url('/events/index') }}">
                                @if( Auth::user()->is_admin)
                                    Liste de mes évènements
                                @else
                                    Liste des évènements
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" style="background-color: #353A3F; padding: 8px 0; z-index: 14; position: relative;">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                    <li><a href="{{ route('register') }}">S'enregistrer</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: #FF6265;">
                            <i class="fa fa-user-circle-o"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>

    </nav>
</header>
@endif
<div class="col-md-10 col-md-offset-2">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="{{ asset('css/main.js') }}"></script>
</body>
</html>





