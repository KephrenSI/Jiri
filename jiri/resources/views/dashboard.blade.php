@extends('layouts.app')
<style>
    .link{
        display: block;
        width: 100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
    }
</style>
@section('content')

    <h2 class="panel-heading">Dashboard</h2>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    </div>

    <ul style="padding-bottom: 50px; display:flex; flex-wrap: wrap;">
        @if( Auth::user()->is_admin)
            <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                <div class="card-block">
                    <h3 class="card-title">Créer un élève</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ url('/students/create') }}" class="link"></a>
                </div>
            </li>
            <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                <div class="card-block">
                    <h3 class="card-title">Créer un projet</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ url('/projects/create') }}" class="link"></a>
                </div>
            </li>
            <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                <div class="card-block">
                    <h3 class="card-title">Créer un utilisateur</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ url('/users/create') }}" class="link"></a>
                </div>
            </li>
        @endif
        @if( Auth::user()->is_admin)
            <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                <div class="card-block">
                    <h3 class="card-title">Créer un évènement</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ url('/events/create') }}" class="link"></a>
                </div>
            </li>
        @endif
        <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
            <div class="card-block">
                <h3 class="card-title">@if( Auth::user()->is_admin)
                        liste de mes évènements
                    @else
                        liste des évènements
                    @endif
                </h3>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ url('/events/index') }}" class="link"></a>
            </div>
        </li>
    </ul>












    {{--<ul style="padding-bottom: 50px;">
        @if( Auth::user()->is_admin)
            <li class="card col-md-6">
                <a href="students/create" >créer un élève</a>
            </li>

            <li class="list-group-item" class="card col-md-6">
                <a href="projects/create">créer un projet</a>
            </li>

            <li class="list-group-item" class="card col-md-6">
                <a href="users/create">créer un utilisateur</a>
            </li>
        @endif
        @if( Auth::user()->is_admin)
            <li class="list-group-item" class="card col-md-6">
                <a href="events/create">créer un évènement</a>
            </li>
        @endif
        <li class="list-group-item" class="card col-md-6">
            <a href="events/index">
                @if( Auth::user()->is_admin)
                    liste de mes évènements
                @else
                    liste des évènements
                @endif
            </a>
        </li>
    </ul>--}}
@endsection
