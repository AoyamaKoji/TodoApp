<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    //ソートした表を表示
    public function index(Request $request, $id)
    {

        $cid = $id;
        $sort = $request->sort;

        if (array_key_exists($cid, config('date')))
        {
            $items = Task::dateSpan(config('date')[$cid])->orderBy($sort, 'asc')->get();
        }
        else{
            $items = Task::categoryIdEqual((int)$cid)->orderBy($sort, 'desc')->get();
        }

        $param = ['items' => $items, 'sort' => $sort, 'cid' => $cid];

        return view('task.index', $param);
    }


    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/category/'. $request->category_id);
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
        return redirect('/category/' . $request->category_id);
    }

    //チェックしたものを一斉削除
    public function remove(Request $request)
    {
        //completeは配列
        Task::destroy($request->complete);
        return redirect('/category/' . $request->category_id);
    }
}
