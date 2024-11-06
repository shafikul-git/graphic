<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
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
    
}
