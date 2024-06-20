<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['name' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'price' => 10.99],
        ['name' => '1984', 'author' => 'George Orwell', 'price' => 8.99],
        ['name' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price' => 12.99],
    ];

    public function index()
    {
        return view('products.index', ['products' => $this->products]);
    }
}
