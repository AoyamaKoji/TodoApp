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

      // 必要な情報を出力する
      public function getData()
      {
           return $this->deadline . ': ' . $this->title . ': ' . $this->message . ': ' . $this->priority_number;
      }

      // 指定したカテゴリを出力
      // 時間順で出力させる
      public function scopeCategory_idEqual($query, $n)
      {
          // 時間順に並べる
          $items = DB::select('select * from task order by deadline asc');
          return $query->where($items, $n);
      }

      // 優先度順に並べる
      public function scopePriority_numberEqual($query, $n)
      {
          $items = DB::select('select * from task order by deadline desc');
          return $query->where($items, $n);
      }

      // 期限が24時間以内モノだけ出力
      // 期限が過ぎたものは出力させない
      public function scopeTodayEqual($query, $n)
      {
          $items = DB::select('select * from task where deadline < datetime('now', '+33 hours' ) and deadline > datetime('now', '+9 hours') order by deadline asc');
          return $query->where($items, $n);
      }

      // 期限が1週間以内モノだけ出力
      // 期限が過ぎたものは出力させない
      public function scopeWeekEqual($query, $n)
      {
          $items = DB::select('select * from task where deadline < datetime('now', '+7 days' , '+33 hours' ) and deadline > datetime('now', '+9 hours') order by deadline asc');
          return $query->where($items, $n);
      }

}
