<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function random()
    {
        $ary = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        shuffle($ary);
        return view('message.random', ['ary' => $ary[0]]);
    }
}

//$key = array_rand($ary, 1);
//return view('message.random', ['key' => $key]);

//return $ary[$key[1]];
