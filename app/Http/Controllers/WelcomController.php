<?php

namespace App\Http\Controllers;

class WelcomController extends Controller
{
    public function showinfo() {
        return view('thongtin');
    }

    public function testAction(){
        return redirect()->route('hcm');
    }
}