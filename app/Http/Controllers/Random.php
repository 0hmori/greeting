<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Random extends Controller
{
    public function random() 
    {
        $ary = array("東京", "大阪", "北海道", "沖縄");
        $key = array_rand($ary, 1);
        return $ary[$key[1]];
    }
}
