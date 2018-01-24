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
    <h2 class="blog-post-title">Liste des élèves</h2>
    <ul style="padding-bottom: 50px; display:flex; flex-wrap: wrap;">
        @foreach($students as $student)
            <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                <div class="card-block">
                    <h3 class="card-title">{{$student->name}}</h3>
                    <p class="card-text"><strong>Email</strong> : {{$student->email}}</p>
                    <a href="{{ url('/students/'.$student->id) }}" class="link"></a>
                </div>
            </li>
        @endforeach
    </ul>
    <a href="/students/restore">restaurer</a>
@endsection