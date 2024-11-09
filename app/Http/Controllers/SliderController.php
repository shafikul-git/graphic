<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view("dashboard.setting.sliderSetting.slider");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'goto_link' => 'nullable|string',
            'unique_key' => 'required|unique:sliders,unique_key',
            'images' => 'required|json',
        ]);

        $correctKey = preg_replace('/\s+/', '_', $request->unique_key);
        $storeSliderData = Slider::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'goto_link' => $request->goto_link,
            'unique_key' => $correctKey,
            'images' => $request->images,
        ]);

        if ($storeSliderData) {
            return redirect()->back()->with('success', 'Before After Added Sucessful');
        } else {
            return redirect()->back()->with('error', 'Someting went wrong');
        }
    }

    public function getData()
    {
        $data = Slider::all();
        $data->transform(function ($item){
            $item->images = json_decode($item->images, true);
            return $item;
        });
        return response()->json($data);
    }
}
