<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DatePeople;
use App\Models\Product;
use App\Models\Work;
use App\Models\WorkPhoto;
use Faker\Provider\PhoneNumber;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function catalog(){
        $categories = Category::all();
        return view('catalog', compact('categories'));
    }
    public function general(){
        $categories=Category::all()->take(6);
        $works=Work::orderBy('date', 'DESC')->take(10)->get();
        return view('general', compact('categories', 'works'));
    }
    public function products($id){
        $products=Product::where('category_id', $id)->get();
        $category=Category::find($id);

        return view('products', compact('products', 'category'));
    }
    public function product($id, $id_product){
        $product=Product::find($id_product);
        $response="pop_up";
        $error="";
        return view('product', compact('product', 'response', 'error'));
    }
    public function our_works(){
        $works=Work::orderBy('date', 'DESC')->take(4)->get();
        return view('our_works', compact('works'));
    }
    public function our_works_add($count){
        $works=Work::orderBy('date', 'DESC')->skip($count)->take(4)->get();
        if (!$works){
            return null;
        }
        return view('works', compact('works'));
    }
    public function form($id, $id_product, Request $request){
        $pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
        $phone_number=trim($request->phone_number);
        $product=Product::find($id_product);
        if(preg_match($pattern, $phone_number)) {
            $error="";
            $response="pop_up";
            $phone=new DatePeople();
            $phone->phone_number=$request->phone_number;
            $phone->date=date("Y-m-d H:i:s");
            $phone->product_id=$id_product;
            $phone->save();
        }
        else {
            $error="Ви ввели неправильний номер телефону!!!";
            $response = "pop_up active";
        }
        return view('product', compact('product', 'response', 'error'));
    }
}
