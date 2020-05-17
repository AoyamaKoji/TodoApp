<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
	/*Topページ*/
    public function index(Request $request)
    {
		/*DB内にあるフィールド'name'を取得　表示*/
		$items = Category::get();
		return view('category.index', ['items' => $items]);

    }

	/*項目追加*/
    public function add(Request $request)
    {
		$items = Category::get();
		return view('category.add', ['items' => $items]);

    }
	public function create(Request $request){
		$this->validate($request, Category::$rules);
		$category = new Category;
		$form = $request->all();
		unset($form['_token']);
		$category->fill($form)->save();
		return redirect('/category');
	}
	
	/*項目削除*/
	public function delete(Request $request){
		
		$items = Category::all();
		
		return view('category.del', ['items' => $items]);
	}
	public function remove(Request $request){
		$del = Category::find($request->del)->first();
		$del->delete();
		return redirect('/category');
	}

}
