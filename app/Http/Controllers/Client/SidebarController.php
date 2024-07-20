<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public static function featuredNews(){
        $trendyNews = \DB::table('posts')->where('is_trending', true)->limit(4)->get();
        return $trendyNews;
    }
}
