<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('tasks', function () {
    $tasks = [
        'Task 1',
        'Task 2',
        'Task 3',
  ];
   return view ('tasks')->with('tasks',$tasks);
 }); 
 Route::get('show', function ($id) {
     $tasks = [
        'Task 1',
       'Task 2',
       'Task 3',
    ];
   $task = $tasks [$id];
    return view ('show')->with('task',$task);
 }); 
//لو بدي اصل لعنصر واحد من المصفوفة

Route::get('show/{$id}', function ($id) {
    $tasks = [
        'first-task' => 'Task1' ,
        'second-task' => 'Task2' ,
        'third-task'  =>  'Task3' ,
    ];
    $task = $tasks[$id] ;
    return view ('show')->with('task',$task);

   });
//الجزء الرابع تمرير المصفوفات الثنائية

Route::get('tasks', function () {
    $tasks = [
        'first-task' => 'Task1' ,
        'second-task' => 'Task2' ,
        'third-task'  =>  'Task3' ,
        
    ];


    return view ('tasks')->with('tasks',$tasks);
   });