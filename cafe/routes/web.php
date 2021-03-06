<?php

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\User;
use App\Status;
use App\Order;
use App\Order_Item;

//основная страница без регистрации
Route::get('/', function () {
    return view('welcome');
});

//основная страница с регистрацией
Route::get('/home', function () {
    if (Auth::user()->role == 'Manager') {
        return view('managerMenu');
    } elseif (Auth::user()->role == 'Kitchen') {
        return redirect('kitchenMenu');
    }
    return redirect('waiterMenu');
});

Auth::routes();
//                                                 МЕНЕДЖЕР
//Далее идет страница Меню менеджера
Route::get('/managerMenu', function () {
    return view('managerMenu');
});

//страница меню
Route::get('/viewMenu', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('categories', 'items.category_id', '=', 'categories.category_id')
        ->get();

    return view('viewMenu', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//страница добавления категории
Route::get('/addCategory', function () {
    return view('addCategory');
});

//добавление категории
Route::post('/addCategory', function (Request $request) {
    $category = new Category;
    $category->category_name = $request->name_category;
    $category->save();

    return redirect('/addCategory');
});

//страница добавления блюда
Route::get('/addFood', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('categories', 'items.category_id', '=', 'categories.category_id')
        ->get();

    return view('addFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//добавление блюда
Route::post('/addFood', function (Request $request) {
    $item = new Item;
    $item->name = $request->name_food;
    $item->price = $request->price;
    $item->category_id = $request->category_id;
    $item->save();

    return redirect('/addFood');
});

//страница изменения блюда
Route::get('/editFood', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('categories', 'items.category_id', '=', 'categories.category_id')
        ->get();

    return view('editFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//страница изменения блюда ID
Route::get('/editFoodId/{item}', function (Item $item) {
    $categories = Category::orderBy('created_at', 'asc')->get();
    return view('editFoodId', ['item' => $item, 'categories' => $categories]);
});

//изменение блюда
Route::post('/editFoodId/{item}', function (Item $item, Request $request) {
    $item = Item::orderBy('created_at', 'asc')->where('id', $item->id)->first();

    $item->update([
        'name' => $request->name,
        'price' => $request->price,
        'category_id' => $request->category_id
    ]);
    return redirect('/editFood');
});

//страница удаления блюда
Route::get('/deleteFood', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('categories', 'items.category_id', '=', 'categories.category_id')
        ->get();

    return view('deleteFood', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//удаление блюда
Route::delete('/deleteFood/{item}', function (Item $item) {
    $item->delete();

    return redirect('/deleteFood');
});

//                                                 ОФИЦИАНТ
//страница Меню официанта
Route::get('/waiterMenu', function () {
    return view('waiterMenu');
});

//страница меню официанта
Route::get('/addOrder', function () {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('categories', 'items.category_id', '=', 'categories.category_id')
        ->get();

    return view('addOrder', [
        'items' => $items,
        'categories' => $categories
    ]);
});

//оформление заказа
Route::post('/addOrder/add/{id}', 'OrderController@orderAdd')->name('addOrder');

//
Route::get('/Order', function () {
    $item_order = Order_Item::orderBy('created_at', 'asc')->get();
    $items = Item::select('*')
        ->leftJoin('item_order', 'items.id', '=', 'item_order.order_id')
        ->get();

    return view('Order', [
        'items' => $items,
        'item_order' => $item_order
    ]);
});

//                                                 КУХНЯ
//страница Меню кухни
Route::get('/kitchenMenu', function () {
    $orders = Order::get();
    return view('kitchenMenu', compact('orders'));
});

Route::post('/kitchenMenu', function (Request $request) {
    
});
