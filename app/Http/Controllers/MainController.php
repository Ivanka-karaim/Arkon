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
    private $categories;

    public function catalog(){
        $categories = Category::all();
        return view('catalog', compact('categories'));
    }
    public function general(){
        $categories_6=Category::all()->take(6);
        $works=Work::orderBy('date', 'DESC')->take(10)->get();
        $categories=Category::all();
        return view('general', compact('categories_6', 'works', 'categories'));
    }
    public function products($id){
        $products=Product::where('category_id', $id)->get();
        $category=Category::find($id);
        $categories=Category::all();
        return view('products', compact('products', 'category', 'categories'));
    }
    public function product($id, $id_product){
        $product=Product::find($id_product);
        $response="";
        $error="";
        $categories=Category::all();
        return view('product', compact('product', 'response', 'error', 'categories'));
    }
    public function our_works(){
        $works=Work::orderBy('date', 'DESC')->take(4)->get();
        $categories=Category::all();
        return view('our_works', compact('works', 'categories'));
    }
    public function our_works_add($count){
        $works=Work::orderBy('date', 'DESC')->skip($count)->take(4)->get();
        $categories=Category::all();
        if (!$works){
            return null;
        }
        return view('works', compact('works', 'categories'));
    }
    public function form($id, $id_product, Request $request){
        $categories=Category::all();
        $pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
        $phone_number=trim($request->phone_number);

        if(preg_match($pattern, $phone_number)) {
            $phone=new DatePeople();
            $phone->phone_number=$request->phone_number;
            $phone->date=date("Y-m-d H:i:s");
            $phone->product_id=$id_product;
            $phone->save();
//            return redirect()->back()->with('success', 'Форма успешно отправлена!');
        }
        else {
            return redirect()->back()->with(['error' => "Ви ввели неправильний номер телефону!!!", 'response' => 'active']);
        }
        return redirect()->back()->with(['good'=>'Lzre','response' => 'active']);
    }
}
