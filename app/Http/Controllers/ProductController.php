<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $items = Product::all();
        $creatable = true;
        $class = Product::class;


        $headings = ['product.name', 'product.stock', 'product.article_number'];

        return view('model_views.index', compact('items', 'class', 'creatable', 'headings'));
    }

    public function add() {
        $fields = Product::$fields;
        $title = Product::$title;
        $class = Product::class;

        return view('model_views.create', compact('fields', 'class', 'title'));
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:191',
            'description' => 'required|max:255',
            'buy_price' => 'min:0|max:999999999',
            'sell_price' => 'min:0|max:999999999',
            'article_number' => 'required',
            'stock' => 'min:0|max:99999999999'
        ]);
        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'buy_price' => $validatedData['buy_price'],
            'sell_price' => $validatedData['sell_price'],
            'article_number' => $validatedData['article_number'],
            'quantity' => $validatedData['stock']
        ]);

        return redirect(action('ProductController@detail', $product['id']));
    }

    public function detail($id) {
        $fields = Product::$fields;
        $title = Product::$title;
        $item = Product::find($id);
        $class = Product::class;

        return view('model_views.detail', compact('item', 'class', 'fields', 'title'));
    }

    public function edit($id) {
        $fields = Product::$fields;
        $title = Product::$title;
        $item = Product::find($id);
        $class = Product::class;

        return view('model_views.edit', compact('item', 'class', 'fields', 'title'));
    }

    public function delete($id) {

    }
}
