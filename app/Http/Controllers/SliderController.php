<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function slider(){
        $slider = Slider::all();
        return view('admin.slider',compact('slider'));
    }

    public function sliderAdd(Request $req)
    {
        $slider = new Slider;
        $slider->name_slider = $req->name_slider;
        $slider->image_slider = $req->image_slider;
        $slider->save();
        return back()->with('msg','Đã thêm');
    }
    public function sliderDelete($id)
    {
        Slider::destroy($id);
        return back()->with('msg','Đã xóa');
    }
    
}
