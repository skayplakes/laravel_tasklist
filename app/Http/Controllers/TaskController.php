<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{


 	function showTasks(){
 		// $new_task = Task::all();
 		$new_task = Task::latest()->get();

 		return view('todo/tasks_layout', compact('new_task'));
 	}

 	function addTasks(Request $request){
 			$new_task = new Task();
	 		$new_task->name = $request->taskName;
	 		$new_task->description = $request->taskDesc;
	 		$new_task->save();

	 		$request->session()->flash('message', 'Task added successfully!');

	 		return back();
 	}

 	function deleteTasks($id){
 		$task_tbd = Task::find($id);
 		$task_tbd->delete();


 		return back();
 	}   
}
