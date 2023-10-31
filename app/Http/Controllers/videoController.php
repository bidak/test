<?php

namespace App\Http\Controllers;

use App\Models\video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = video::all();

        return $videos;
    }

    public function best()
    {
        echo "hello from best method";
    }

}
