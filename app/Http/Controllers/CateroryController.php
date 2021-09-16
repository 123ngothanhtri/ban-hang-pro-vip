<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Caterory;
use App\Models\Product;

class CateroryController extends Controller
{
    function caterory(){
        $caterory = Caterory::all();

        return view('admin.caterory',compact('caterory'));
    }

    public function cateroryAdd(Request $req)
    {
        $caterory = new Caterory;
        $caterory->name_caterory = $req->name_caterory;
        $caterory->save();
        return back()->with('msg','Đã thêm');
    }
    public function cateroryEdit($id)
    {
        $caterory = Caterory::find($id);
        return view('admin.caterory_edit',compact('caterory'));
    }
    public function cateroryUpdate(Request $req)
    {
        $caterory = Caterory::find($req->id_caterory);
        $caterory->name_caterory = $req->name_caterory;
        $caterory->save();
        return redirect('/caterory')->with('msg','Đã cập nhật');
    }
    public function cateroryDelete($id)
    {
        $product = Product::where('id_caterory',$id)->first();
        if($product){
            return back()->with('er','Có sản phẩm thuộc danh mục này');
        }
        else{
            $caterory = Caterory::destroy($id);
            return back()->with('msg','Xóa thành công');
        }
    }
    
}
