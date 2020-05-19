<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   学業
        $param = [
            'category_id' => 1,
            'deadline' => '2020-05-18 13:00:00',
            'title' => 'データ作成',
            'message' => 'むずい',
            'priority_number' => '2',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 1,
            'deadline' => '2020-05-18 14:00:00',
            'title' => 'scope1',
            'message' => 'なんとなく分かった',
            'priority_number' => '2',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 1,
            'deadline' => '2020-05-17 09:00:00',
            'title' => '時間順',
            'message' => '今日と一週間！',
            'priority_number' => '3',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 1,
            'deadline' => '2020-05-17 21:00:00',
            'title' => 'パワポづくり',
            'message' => '6-1をやるで。',
            'priority_number' => '3',
        ];
        DB::table('tasks')->insert($param);


        // バイト
        $param = [
            'category_id' => 2,
            'deadline' => '2020-05-20 14:00:00',
            'title' => 'テニス',
            'message' => 'お客さん誰だっけ？',
            'priority_number' => '1',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 2,
            'deadline' => '2020-05-19 19:00:00',
            'title' => 'ホスト',
            'message' => '目指せ1万円',
            'priority_number' => '3',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 2,
            'deadline' => '2020-05-24 08:00:00',
            'title' => '一日',
            'message' => '一日はきつい',
            'priority_number' => '2',
        ];
        DB::table('tasks')->insert($param);



        // 遊び
        $param = [
            'category_id' => 3,
            'deadline' => '2020-05-21 19:00:00',
            'title' => '飯',
            'message' => 'すき家',
            'priority_number' => '1',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 3,
            'deadline' => '2020-05-25 08:00:00',
            'title' => '生田朝飯',
            'message' => '100円！',
            'priority_number' => '3',
        ];
        DB::table('tasks')->insert($param);

        $param = [
            'category_id' => 3,
            'deadline' => '2020-05-20 13:00:00',
            'title' => 'fish',
            'message' => '目指せアジ！',
            'priority_number' => '1',
        ];
        DB::table('tasks')->insert($param);

    }
}
