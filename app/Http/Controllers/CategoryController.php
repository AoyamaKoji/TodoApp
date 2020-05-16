<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*DBを利用*/
use Illuminate\Support\Facades\DB;

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
	public function update(Request $request){
		$category = Category::find($request->id);
		return view('',[]);
	}
	public function remove(Request $request){
		Category::find($request->id)->delete();
		return redirect('/category');
	}

}
