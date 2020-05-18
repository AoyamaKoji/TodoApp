<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

      public function getData()
      {
           return $this->deadline . ': ' . $this->title . ': ' . $this->message . ': ' . $this->priority_number;
      }

      // 指定したカテゴリを出力
      public function scopeCategoryIdEqual($query, $category_id)
      {
          $items = Task::where('category_id', $category_id)->get();
          return $query->where($items, $category_id);
      }

      // 指定した期限のものを出力
      public function scopeTimeSpan($query, $time)
      {
          // 期限―今で24時間以内のものを指定する
          $items = Task::where('deadline'- 'now', '<' , $time)->get();
          return $query->where($items, $time);
      }

      public function id(){
        return $this->id;
      }



}
