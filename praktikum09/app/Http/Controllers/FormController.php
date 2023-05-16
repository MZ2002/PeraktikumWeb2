<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //membuat fungsi index untuk menampilkan view form
    public function index()
    {
        return view('form');
    }

    //membuat fungsi hasil untuk membuat data imputan
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        return view('hasil', ['data' => $request]);
    }
}
