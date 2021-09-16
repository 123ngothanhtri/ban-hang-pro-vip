<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Caterory;
use App\Models\Product;
use App\Models\Slider;


class HomeController extends Controller
{
    function home(){
        $product = Product::all();//->paginate(20);
        $caterory = Caterory::all();
        $slider = Slider::all();

        return view('home.home',compact('slider','product','caterory'));
    }
    function orderSuccess(){
        return view('home.order_success');
    }
    function productDetail($id){
        $productDetail = Product::find($id);
        $productRelated = Product::where('id_caterory',$productDetail->id_caterory)->get();

        return view('home.product_detail',compact('productDetail','productRelated'));
    }
    function searchProduct(Request $req){
        $keyWord = $req->keyWord;
        $product = Product::join('caterory', 'product.id_caterory', 'caterory.id_caterory')
                    ->where('name_product','like',"%$keyWord%")
                    ->orWhere('id_product','like',"%$keyWord%")
                    ->orWhere('name_caterory','like',"%$keyWord%")
                    ->get();//->stake(30)->paginate(5);
        return view('home.search_product',compact('keyWord','product'));
    }
    function selectiveProduct(Request $req){
        if($req->caterory==0){
            $product = Product::all();
        }
        else {
            $product = Product::all()->where('id_caterory',$req->caterory);
        }
        $caterory = Caterory::all();
        $slider = slider::all();

        return view('home.home',compact('slider','product','caterory'));
    }
    
}
