<?php

use Illuminate\Http\Request;
use App\Category;
use App\Item;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/managerMenu', function () {
    return view('managerMenu');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addFood', function () {
	$categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
       ->leftJoin('categories', 'items.category_id', '=', 'categories.id')
       ->get();

    return view('addFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

Route::get('/editFood', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
       ->leftJoin('categories', 'items.category_id', '=', 'categories.id')
       ->get();

    return view('editFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

Route::get('/deleteFood', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
       ->leftJoin('categories', 'items.category_id', '=', 'categories.id')
       ->get();

    return view('deleteFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//добавление категории
Route::post('/addCategory', function (Request $request) { 
  $category = new Category;
  $category->category_name = $request->name_category;
  $category->save();

  return redirect('/addCategory');
});

Route::post('/addFood', function (Request $request) { 
  $item = new Item;
  $item->name = $request->name_food;
  $item->price = $request->price;
  $item->category_id = $request->category_id;
  $item->save();

  return redirect('/addFood');
});

Route::delete('/deleteFood/{deleteFood}', function (Item $item) {
  $item->delete();

  return redirect('/deleteFood');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
