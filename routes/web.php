<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    ) {
    }
}

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        // 'tasks' => \App\Models\Task::all()
        'tasks' => \App\Models\Task::latest()->get() // get sort lastest
        // 'tasks' => \App\Models\Task::latest()->where('completed', true)->get() // get with where condition
    ]);

})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    
    return view('show', [
        'task' => \App\Models\Task::findOrFail($id)
]);
})->name('tasks.show');

// Route::get('/tasks/{id}', function ($id) use ($tasks) {
//     // return 'One single task';
//     $task = collect($tasks)->firstWhere('id', $id);

//     if(!$task){
//         abort(Response::HTTP_NOT_FOUND);
//     }

//     return view('show', ['task' => $task]);
// })->name('tasks.show');

// Route::get('/', function () {
//     // return view('welcome');
//     // return 'Main Page';
//     return view('index', [
//         'name' => 'Nazrin'
//     ]);
// });

// Route::get('/xxx', function () {
//     return 'Hello';
// })->name('hello');

// Route::get('/hallo', function () {
//     // return redirect('/hello');
//     return redirect()->route('hello'); // pointing to the route's name
// });

// Route::get('/greet/{name}', function ($name) {
//     return 'Hello ' . $name . '!';
// });

// fallback
Route::fallback(function () {
    return 'Still got somewhere!';
});