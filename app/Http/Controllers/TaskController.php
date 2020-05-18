<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //ソートした表を表示
    public function index(Request $request, $id)
    {
       $sort = $request->sort;
        // if文でdatetimeかどうか判断
       
        if($request->id == '3')
        {
          $items = Task::timeSpan((datetime)$id);
        }
        else{
            $items = Task::categoryIdEqual((int)$id)->get();
        }
        $param = ['items' => $items, 'sort' => $sort, 'id' => gettype((int)$id)];
        return view('task.index', $param);
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
        $task = Task::find($request->id);
        return view('task.edit', ['form' => $task]);
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
