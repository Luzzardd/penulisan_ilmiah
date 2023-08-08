<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($id)
    {
        $video = Video::find($id);
        return view('study.video',compact('video'));

    }
}
