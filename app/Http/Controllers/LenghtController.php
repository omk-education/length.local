<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LenghtController extends Controller
{
    public function lenght(Request $request)
    {
        $text = $request->text;
        $lenght = strlen($text);

        return view('index', compact('lenght', 'text'));
    }
}
