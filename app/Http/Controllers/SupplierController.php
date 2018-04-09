<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $items = Supplier::all();
        $class = Supplier::class;
        $creatable = true;

        $headings = ['supplier.name'];

        return view('model_views.index', compact('items', 'class', 'creatable', 'headings'));
    }

    public function detail($id) {
        $fields = Supplier::$fields;
        $title = Supplier::$title;
        $item = Supplier::find($id);
        $class = Supplier::class;

        return view('model_views.detail', compact('item', 'class', 'fields', 'title'));
    }

    public function add() {
        $fields = Supplier::$fields;
        $title = Supplier::$title;
        $class = Supplier::class;

        return view('model_views.create', compact('fields', 'class', 'title'));
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:191'
        ]);
        $supplier = Supplier::create([
            'name' => $validatedData['name']
        ]);

        return redirect(action('SupplierController@detail', $supplier['id']));
    }

    public function edit($id) {
        $fields = Supplier::$fields;
        $title = Supplier::$title;
        $item = Supplier::find($id);
        $class = Supplier::class;

        return view('model_views.edit', compact('item', 'class', 'fields', 'title'));
    }

    public function delete() {

    }
}
