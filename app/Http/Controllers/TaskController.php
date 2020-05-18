<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //ソートした表を表示
    public function index(Request $request)
    {
        /* ここにスコープ利用のコード */
        
        $sort = $request->sort;
        $items = Task::orderBy($sort, 'asc');
        $param = ['items' => $items, 'sort' = $sort];
        return view('task.index', ['items' => $items]);
    }

    
    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }
    
    public function edit(Request $request)
    {
        
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = Task::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }
    
    //チェックしたものを一斉削除
    public function remove(Request $request)
    {
        //completeは配列
        $destroy = Task::destroy(Input::get('complete'));
        return redirect('/task');
    }
}
