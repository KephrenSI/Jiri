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
    <h2 class="blog-post-title">{{$user->name}}</h2>
    <p><strong>Email</strong> : {{$user->email}}</p>
    <p><strong>Password</strong> : {{$user->password}}</p>
    <p>
        @if( $user->is_admin == 1)
            C'est utilisateur est un admin
        @else
            C'est utilisateur n'est pas un admin
        @endif
    </p>
    <p><strong>Agence</strong> : {{$user->company}}</p>
    <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ url('/users/delete/'.$user->id) }}" style="display: inline-block;" method="post">
        {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>

    <div>
        <h3>
            Évènements auquels il participe
        </h3>
        @if($user->meetings->count())
            <ul style="padding-bottom: 50px; display:flex; flex-wrap: wrap;">
            @foreach($participations as $participation)
                    <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                        <h3 class="card-title">{{ $participation->event->course_name }}</h3>
                        <a href="{{ url('/events/'.$participation->event->id) }}" class="link"></a>
                    </li>
            @endforeach
            </ul>
        @else
            Cet étudiant ne participe pas encore à un évènement
        @endif
    </div>

    <a href="{{ url('/users/index') }}" class="btn btn-default">
        Tous les voir
    </a>
@endsection