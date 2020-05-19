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
      /**
      * scopeCategoryIDの説明
      * @param string $query 第一引数
      * whereで取得される値と同じ
      *
      * @param integer $category_id 第二引数
      * カテゴリ番号の値
      *
      */
      public function scopeCategoryIdEqual($query, $category_id)
      {

          return $query->where('category_id', $category_id);
      }

      // 指定した期限のものを出力
      /**
      * scopeTimeSpanの説明
      * @param string $query 第一引数
      * 
      * @param datetime $time 第二引数
      * 指定の時間 etc(20:00:00)
      * 
      *
      */
      public function scopeTimeSpan($query, $time)
      {
          // 期限―今で24時間以内のものを指定する
          return $query->where('deadline'- 'now', '<' , $time);
      }



}
