<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
			'name' => '学業',
		];
		DB::table('categories')->insert($param);
		
		$param = [
			'name' => 'バイト',
		];
		DB::table('categories')->insert($param);
		
		$param = [
			'name' => '遊び',
		];
		DB::table('categories')->insert($param);
		
		$param = [
			'name' => 'ノンカテゴリ',
		];
		DB::table('categories')->insert($param);
	}
}
