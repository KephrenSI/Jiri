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
            <h2>Projets de {{ $student->name }}</h2>
            <ul style="padding-bottom: 50px; display:flex; flex-wrap: wrap;">
                @foreach($implementations->where('event_id', $event->id) as $implementation)
                    <li class="card" style="width:40%; margin: 20px ;padding:20px; border-radius:10px;">
                        <div class="card-block">
                            <h3 class="card-title">{{ $implementation->project->name }}</h3>
                            <a class="link" href="{{ route('/implementations/evaluate/meeting', [$implementation, $meeting]) }}"></a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <h2>
                Évaluation générale
            </h2>

            <p>{{ $meeting->general_evaluation }}</p>

            <form action="{{ route('/meetings/evaluate', $meeting ) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="general_evaluation">
                        Cote
                    </label>
                    <input type="number" class="form-control" value="{{ $meeting->general_evaluation }}" id="general_evaluation" name="general_evaluation" min="0" max="20" step="0.1">
                </div>
                <div class="form-group">
                    <label for="general_comment">
                        Cote
                    </label>
                    <textarea class="form-control" id="general_comment" name="general_comment">{{ $meeting->general_comment }}</textarea>
                </div>

                <input type="submit" value="enregistrer" class="btn btn-primary">
            </form>
            @include('/partials/errors')


@endsection