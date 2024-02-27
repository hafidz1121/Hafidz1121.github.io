<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {

        $title = 'Ini adalah judul';
        $desc = 'Ini adalah deskripsi dari judul';

        return view('index', 
        [
            'title' => $title,
            'desc' => $desc
        ]);
    }
}
