<?php

namespace App\Http\Controllers;

Use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('home',compact('products'));
    }

    public function post(Request $request)
    {
        $product = New Product();
        $product->name= $request->name;
        $product->qty= $request->qty;
        $product->price= $request->price;
        $product->save();
        if ($product->save()) {
            return response()->json("success");
        }else{
            return response()->json("error");
        }
    }

    public function alldata()
    {
        $products = Product::latest()->get();
        return view('response',compact('products'));
    }

    public function updata(Request $request,$id)
    {
        $product = Product::find($id);
        $product->status = $request->status;
        $product->save();

        if ($product->save()) {
            return response()->json("success");
        }else{
            return response()->json("error");
        }
    }



    public function paypal()
    {
        return view('payPremium');
    }






}
