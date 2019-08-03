<?php



Route::get('/', function () {
    return view('backend.backend_master');
});






//backend routes

Route::get('dashboard.view', 'AdminController@viewDash')->name('viewDash');

//items backend routes

Route::post('backend/dashboard/item/add', 'AdminController@postItem')->name('postItem');

//items view routes
Route::get('backend/dashboard/item/view', 'AdminController@viewItem')->name('viewItem');
Route::get('backend/dashboard/item/add', 'AdminController@addItem')->name('addItem');






//edit and update route

Route::get('backend/pages/dashboard/item/edit/{id}','AdminController@editItem')->name('editItem');
Route::post('backend/pages/dashboard/item/edit/{id}','AdminController@updateItem');

//delete route

Route::get('backend/pages/dashboard/item/delete/{id}','AdminController@deleteItem');


//items category

Route:: get('backend/dashboard/item/add_items_category','AdminController@addItemCategory')->name('addItemCategory');
Route:: post('backend/dashboard/item/add_items_category','AdminController@postCategory')->name('postCategory');
Route::get('backend/dashboard/item/add_items_category','AdminController@viewCategory')->name('addItemCategory');