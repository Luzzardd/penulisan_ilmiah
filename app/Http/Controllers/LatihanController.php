<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $kuis = Category::all();
        return view('exercise.latihan', compact('kuis'));
    }
}
