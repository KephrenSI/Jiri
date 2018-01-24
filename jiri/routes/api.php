<?php

use App\Event;
use App\Implementation;
use App\Meeting;
use App\Performance;
use App\Project;
use App\Score;
use App\Student;
use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Testing relationships

//Events
Route::get('/events', function () {
    return Event::all();
});
Route::get('/events/{event}', function (Event $event) {
    return $event;
});
Route::get('/events/{event}/meetings', function (Event $event) {
    return $event->meetings;
});
Route::get('/events/{event}/implementations', function (Event $event) {
    return $event->implementations;
});

Route::get('/events/{event}/performances', function (Event $event) {
    return $event->performances;
});
Route::get('/events/{event}/students', function (Request $request, Event $event) {
    // Let's try something fun and useful…
    // Let's return an event + its students and their performance for the event

    if ($request->has('embed')) {
        if ($request->input('embed') === 'performances') {
            return $event->with([
                'students.performances' => function ($query) use ($event) {
                    $query->where('event_id', '=', $event->id);
                }
            ])->find($event->id);
        }
    } else {
        return $event->students;
    }
});
Route::get('/events/{event}/users', function (Event $event) {
    return $event->users;
});
Route::get('/events/{event}/owner', function (Event $event) {
    return $event->owner;
});


// Implementations
Route::get('/implementations', function () {
    return Implementation::all();
});
Route::get('/implementations/{implementation}', function (Implementation $implementation) {
    return $implementation;
});
Route::get('/implementations/{implementation}/project', function (Implementation $implementation) {
    return $implementation->project;
});
Route::get('/implementations/{implementation}/student', function (Implementation $implementation) {
    return $implementation->student;
});
Route::get('/implementations/{implementation}/scores', function (Implementation $implementation) {
    return $implementation->scores;
});
Route::get('/implementations/{implementation}/event', function (Implementation $implementation) {
    return $implementation->event;
});

// Meetings
Route::get('/meetings', function () {
    return Meeting::all();
});
Route::get('/meetings/{meeting}', function (Meeting $meeting) {
    return $meeting;
});
Route::get('/meetings/{meeting}/student', function (Meeting $meeting) {
    return $meeting->student;
});
Route::get('/meetings/{meeting}/user', function (Meeting $meeting) {
    return $meeting->user;
});
Route::get('/meetings/{meeting}/scores', function (Meeting $meeting) {
    return $meeting->scores;
});
Route::get('/meetings/{meeting}/event', function (Meeting $meeting) {
    return $meeting->event;
});

// Performances
Route::get('/performances', function () {
    return Performance::all();
});
Route::get('/performances/{performance}/student', function (Performance $performance) {
    return $performance->student;
});
Route::get('/performances/{performance}/event', function (Performance $performance) {
    return $performance->event;
});

//Projects
Route::get('/projects', function () {
    return Project::all();
});
Route::get('/projects/{project}', function (Project $project) {
    return $project;
});
Route::get('/projects/{project}/implementations', function (Project $project) {
    return $project->implementations;
});
Route::get('/projects/{project}/events', function (Project $project) {
    return $project->events;
});


// Scores
Route::get('/scores', function () {
    return Score::all();
});
Route::get('/scores/{score}', function (Score $score) {
    return $score;
});
Route::get('/scores/{score}/implementation', function (Score $score) {
    return $score->implementation;
});
Route::get('/scores/{score}/meeting', function (Score $score) {
    return $score->meeting;
});

// Students
Route::get('/students', function () {
    return Student::all();
});
Route::get('/students/{student}', function (Student $student) {
    return $student;
});
Route::get('/students/{student}/meetings', function (Student $student) {
    return $student->meetings;
});
Route::get('/students/{student}/performances', function (Student $student) {
    return $student->performances;
});
Route::get('/students/{student}/users', function (Student $student) {
    return $student->users;
});

// Users
Route::get('/users', function () {
    return User::all();
});
Route::get('/users/{user}', function (User $user) {
    return $user;
});
Route::get('/users/{user}/meetings', function (User $user) {
    return $user->meetings;
});
Route::get('/users/{user}/students', function (User $user) {
    return $user->students;
});
Route::get('/users/{user}/events', function (User $user) {
    return $user->events;
});
