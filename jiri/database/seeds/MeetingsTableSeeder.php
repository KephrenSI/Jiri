<?php

use Illuminate\Database\Seeder;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Léa Vérou
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 8.5
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 19.5
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7.5
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 12
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 5
        ]);
        App\Meeting::create([
            'user_id' => 3,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        //Benjamin Decock
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 6
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 18
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 11
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7.5
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 4
        ]);
        App\Meeting::create([
            'user_id' => 4,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 17
        ]);

        // Tim Van Damme
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 18
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15.5
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
        App\Meeting::create([
            'user_id' => 5,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);

        //Mike Monteiro
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 9
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 12
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 11
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 4
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 6,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 9
        ]);

        //Mariam Faso
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 0
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 16
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 12
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 16
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 0
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);
        App\Meeting::create([
            'user_id' => 7,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);

        //Vincent De Oliveira
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 19
        ]);
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 6
        ]);
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 16
        ]);
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        App\Meeting::create([
            'user_id' => 8,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);

        //Raphaël Goetter
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 8
        ]);
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 19
        ]);
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 4
        ]);
        App\Meeting::create([
            'user_id' => 9,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 16
        ]);

        //Molly H
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 8.2
        ]);
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7.25
        ]);
        App\Meeting::create([
            'user_id' => 10,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13.5
        ]);

        //Andy Clarke
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7
        ]);
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 17
        ]);
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 7
        ]);
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);
        App\Meeting::create([
            'user_id' => 11,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);

        //Taylor Otwell
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 15
        ]);
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 13
        ]);
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 4
        ]);
        App\Meeting::create([
            'user_id' => 12,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 14
        ]);

        //Dan Cederholm
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 10
        ]);
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 16
        ]);
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 12
        ]);
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 11
        ]);
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 8
        ]);
        App\Meeting::create([
            'user_id' => 13,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => 12
        ]);
App\Meeting::create([
            'user_id' => 3,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 3,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 3,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 15,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 15,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 5,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 5,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 5,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 6,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);
App\Meeting::create([
            'user_id' => 7,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_comment' => 'Super continue',
            'general_evaluation' => null
        ]);

    }
}
