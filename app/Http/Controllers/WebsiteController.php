<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $cover = asset('images/home-bg.jpg');

        return view('pages.home', compact('cover'));
    }

    public function about()
    {
        $cover = asset('images/about-bg.jpg');

        return view('pages.about', compact('cover'));
    }

    public function contact()
    {
        $cover = asset('images/contact-bg.jpg');

        return view('pages.contact', compact('cover'));
    }

    public function post()
    {
        $cover = asset('images/blog-image.jpg');

        return view('pages.post', compact('cover'));
    }
}
