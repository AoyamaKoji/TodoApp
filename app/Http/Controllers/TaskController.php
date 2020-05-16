<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(Request $request)
  {
      $items = Task::all();
      return view('task.index', ['items' => $items]);
  }

  public function add(Request $request)
  {
      return view('task.add');
  }

  public function create(Request $request)
  {
      $this->validate($request, Task::$rules);
      $task = new Task;
      $form = $request->all();
      unset($form['_token']);
      $task->fill($form)->save();
      return redirect('/task');
  }
}
