<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        return view("dashboard.setting.home.home");
    }
    public function slider()
    {
        return view("dashboard.setting.slider.slider");
    }
    public function beforeAfter()
    {
        return view("dashboard.setting.beforeafter.beforeafter");
    }
    public function counter()
    {
        return view("dashboard.setting.counter.counter");
    }
    public function footer()
    {
        return view("dashboard.setting.footer.footer");
    }
    public function upload(){
        return view("dashboard.setting.upload.upload");
    }
}
