<?php

namespace App\Http\Controllers;

use App\Category;
use App\item;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDash()
    {
        return view('backend.pages.dashboard.view');
    }

    public function addItem()
    {
        return view('backend.pages.dashboard.add');
    }

    public function postItem(Request $request)
    {
        $item = new Item;
        $item->items_name = $request->items_name;
        $item->items_quantity = $request->items_quantity;
        $item->desk_officer = $request->desk_officer;
        $item->entry_date = $request->entry_date;
        $item->save();
        return redirect()->route('viewItem')->with('success', 'Item ' . $request->item_name . ' Added Succesfully !');
    }


    public function editItem($id)
    {
        $editItem = Item::find($id);
        return view('backend.pages.dashboard.edit', compact('editItem'));
    }

    public function updateItem(Request $request, $id)
    {
        $item = Item::find($id);
        $item->items_name = $request->items_name;
        $item->items_quantity = $request->items_quantity;
        $item->desk_officer = $request->desk_officer;
        $item->entry_date = $request->entry_date;
        $item->update();
        return redirect()->route('viewItem')->with('success', 'item' . $request->items_name . 'updated succesfully');
    }

    public function deleteItem($id)
    {
        $deleteItem = new Item;
        $deleteItemName = $deleteItem->findorFail($id)->items_name;
        $deleteItem->findorFail($id)->delete();
        return redirect()->route('viewItem')->with('warning', 'Item' . $deleteItemName . 'deleted Succesfully');
    }

    public function viewItem()
    {
        $items = new Item;
        $allItems = $items->get();
        return view('backend.pages.dashboard.view', ['item_list' => $allItems]);
    }

    public function addItemCategory()
    {
        return view('backend.pages.dashboard.add_category');
    }

    public function postCategory(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('addItemCategory');

    }

    public function viewCategory()
    {
        $category = new Category;
        $allCategory = $category->get();
        return view('backend.pages.dashboard.add_category',['category_list'=> $allCategory]);
    }



}
