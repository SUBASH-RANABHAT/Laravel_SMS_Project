<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Pages;
use App\Models\Notice;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $a_post = Abouts::find(1);
        $b_post = Pages::find(1);
        $n_post = Notice::find(1);
        return view('frontend.f_layouts.index', compact('b_post', 'a_post','n_post'));
    }
}
