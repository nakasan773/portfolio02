<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductStatus;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    public function index(Request $request)
    {
        return view('products.newAdd', [
            'user' => Auth::user(),
            'categories' => Category::all(),
            'products_status'  => ProductStatus::all(),
            'sales' => Sale::all(),
        ]);
    }

    
    public function store(ProductRequests $request)
    {
        $newProduct = new Product;
        $newProduct->product_name = $request->product_name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category_id;
        $newProduct->product_status_id = $request->product_status_id;
        $newProduct->sale_status_id = $request->sale_status_id;
        $newProduct->user_id = Auth::user()->id;
        $newProduct->save();
        
        return view('welcome');
    }
}
