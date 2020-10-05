<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precode;


class precodeController extends Controller
{
    public function index() {
        return view('index');
    }
    public function search(Request $request) {

        $validatedData = $request->validate([
            'precode'=>'required|max:4'
        ]);

        $result = Precode::where('precode', $validatedData)->first();

        return view("result", compact("result"));


    }


}







