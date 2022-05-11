<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'showTask' => \App\Models\Task::all(),
        ]);
    }

    public function showTask($id){
        $task = \App\Models\Task::findOrFail($id);

        if (!$task) {
            abort(404);
        }
        return view('showTask', [
            'showTask' => $task]);
    }

    public function deleteTask($id){
        $taskToDelete = \App\Models\Task::find($id);
        $taskToDelete -> delete();

        return view('deletedTask', [
            'deletedTask' => $taskToDelete
        ]);
    }

    public function sortIndex() //Theoretically it works
    {
        $tasksToSort= \App\Models\Task::orderBy('title','asc')
        -> get();
        
        return view('sortedIndex', [
            'sortedIndex' => $tasksToSort
        ]);
    }
}
