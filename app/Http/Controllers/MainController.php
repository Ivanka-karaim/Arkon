<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DatePeople;
use App\Models\Product;
use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function catalog(){
        $categories = Category::all();
        return view('catalog', compact('categories'));
    }


    public function services(){
        $categories= Category::all();
        return view('services', compact('categories'));
    }


    public function general(){
        $works=Work::orderBy('date', 'DESC')->take(10)->get();
        $categories=Category::all();
        return view('general', compact( 'works', 'categories'));
    }


    public function products($id){
        $products=Product::where('category_id', $id)->get();
        $category=Category::find($id);
        $categories=Category::all();
        return view('products', compact('products', 'category', 'categories'));
    }


    public function product($id_product){
        $product=Product::find($id_product);
        $categories=Category::all();
        return view('product', compact('product',  'categories'));
    }


    public function our_works(){
        $works=Work::orderBy('date', 'DESC')->take(4)->get();
        $categories=Category::all();
        return view('our_works', compact('works', 'categories'));
    }


    public function our_works_add($count){
        $works=Work::orderBy('date', 'DESC')->skip($count)->take(4)->get();
        if (!$works){
            return null;
        }
        return view('works', compact('works'));
    }


    public function form( $id_product, Request $request){
        $request->validate([
            'phone_number'=>'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/',
        ]);
        $phone=new DatePeople;
        $phone->phone_number=$request->phone_number;
        $phone->date=date("Y-m-d H:i:s");
        $phone->product_id=$id_product;
        $phone->save();
        return redirect()->back()->with(['good'=>'Ваш номер збержено, очікуйте дзвінка']);
    }
}
