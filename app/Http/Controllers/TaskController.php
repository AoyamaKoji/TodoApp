<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
        
    }

    public function create(Request $request)
    {
        
=======
    //ソートした表を表示
    public function index(Request $request)
    {
        /* ここにスコープ利用のコード */
        
        $sort = $request->sort;
        // 未修正：if文してdatetimeかどうか判断
        $items = Task::orderBy($sort, 'asc');
        $param = ['items' => $items, 'sort' = $sort];
        return view('task.index', $param);
    }

    
    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
>>>>>>> 47bc35900403706526962190d60d4c5e2b327439
    }
    
    public function edit(Request $request)
    {
        
    }
    
    public function update(Request $request)
    {
<<<<<<< HEAD
        
    }
    
    public function remove(Request $request)
    {
        
    }
    
=======
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
>>>>>>> 47bc35900403706526962190d60d4c5e2b327439
}
