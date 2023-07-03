<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function characters()
    {
        return view('other.characters');
    }

    public function movies()
    {
        return view('other.movies');
    }

    public function tv()
    {
        return view('other.tv');
    }

    public function games()
    {
        return view('other.games');
    }

    public function collectibles()
    {
        return view('other.collectibles');
    }

    public function videos()
    {
        return view('other.videos');
    }

    public function fans()
    {
        return view('other.fans');
    }

    public function news()
    {
        return view('other.news');
    }

    public function shop()
    {
        return view('other.shop');
    }
}
