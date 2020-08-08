<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        $data = array(
            'title' => 'App Alley | Home'
        );
        return view('pages.index')->with($data);
    }

    public function services() {
        $data = array(
            'title' => 'App Alley | Services'
        );
        return view('pages.services')->with($data);
    }
}
