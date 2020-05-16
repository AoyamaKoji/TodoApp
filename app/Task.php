<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $guarded = array('id');

      public static $rules = array(
        'category_id' => 'required',
        'deadline' => 'required',
        'title' => 'required',
        'message' => 'required',
        'priority_number' => 'required',
      );

      public function search(Request $request)
      {
          return view('task.find', $param);
      }

      public function getData()
      {
           return $this->id . ': ' . $this->title;
      }
}
