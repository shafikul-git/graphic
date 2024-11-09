<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        return view("dashboard.setting.homeSetting.home");
    }
    public function slider()
    {
        return view("dashboard.setting.sliderSetting.slider");
    }

    public function counter()
    {
        return view("dashboard.setting.counterSetting.counter");
    }
    public function footer()
    {
        return view("dashboard.setting.footerSetting.footer");
    }
    public function upload(){
        return view("dashboard.setting.uploadSetting.fileuploads");
    }
    public function service(){
        return view("dashboard.setting.serviceSetting.service");
    }
}
