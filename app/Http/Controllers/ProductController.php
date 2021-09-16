<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Caterory;
use App\Models\Product;
use App\Models\OrderDetail;

class ProductController extends Controller
{
    function product(){
        $product = Product::join('caterory','caterory.id_caterory','product.id_caterory')->orderBy('id_product','desc')->paginate(10);

        return view('admin.product',compact('product'));
    }
    function productCreate(){
        $product = Product::all();
        $caterory = Caterory::all();

        return view('admin.product_create',compact('product','caterory'));
    }
    public function productAdd(Request $req)
    {
        $product = new Product;
        $product->name_product = $req->name_product;
        $product->price_product = $req->price_product;
        $product->image_product = $req->image_product;
        $product->description_product = $req->description_product;
        $product->id_caterory = $req->id_caterory;
        $product->save();
        return redirect('/product')->with('msg','Đã thêm');
    }
    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('admin.product_edit',compact('product'));
    }
    public function productUpdate(Request $req)
    {
        $product = Product::find($req->id_product);
        $product->name_product = $req->name_product;
        $product->price_product = $req->price_product;
        $product->image_product = $req->image_product;
        $product->description_product = $req->description_product;
        $product->save();
        return redirect('/product')->with('msg','Đã cập nhật');
    }
    public function productDelete($id)
    {
        $orderDetail = OrderDetail::where('id_product',$id)->first();
        if($orderDetail){
            return back()->with('er','Sản phẩm này có trong đơn hàng, phải xóa đơn hàng trước');
        }
        else{
            $product = product::destroy($id);
            return back()->with('msg','Xóa thành công');
        }
    }
}
