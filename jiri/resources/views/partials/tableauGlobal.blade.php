<h1>
    Dashboard
</h1>

    @foreach( $event->users as $event->user )
        <div>
            <div class="card-header">
                {{ $event->user->name }}
            </div>

            <div class="card">
                @foreach( $event->students as $event->student )
                    @if( $meetingTableaus->where('student_id', $event->student->id)->where('user_id', $event->user->id)->first()->general_evaluation)
                    <div class="">
                        <div class="card-header">
                            {{ $event->student->name }}
                        </div>
                        @foreach( $event->meetings->where( "user_id", $event->user->id)->where( "student_id", $event->student->id)->first()->scores as $score )

                        @endforeach


                        @if($score)
                            @foreach( $event->meetings->where( "user_id", $event->user->id)->where( "student_id", $event->student->id)->first()->scores as $score )

                            @endforeach
                        @else
                            pas de score
                        @endif

                        <div class="">
                            @foreach ($implementations->where( "student_id", $event->student->id) as $implementation)
                                <div class="">
                                    <div>
                                        <div>
                                            {{ $implementation->project->name }}
                                        </div>
                                        <div>
                                            <strong>
                                                score:
                                                <?php $meeting_id = $event->meetings->where( "user_id", $event->user->id)->where( "student_id", $event->student->id)->first()->id ?>
                                                <?php $cote = $score->where( "implementation_id", $implementation->id)->where( "meeting_id", $meeting_id)->first() ?>

                                                @if($cote)
                                                    {{ $cote->score }}
                                                @else
                                                    <span class="text-muted">
                                                        pas encore de score
                                                    </span>
                                                @endif
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
