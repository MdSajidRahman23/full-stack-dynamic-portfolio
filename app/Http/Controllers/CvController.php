<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class CvController extends Controller
{
    public function index()
    {
        $cv = Cv::first(); // Assuming only one CV record
        return view('cv.index', compact('cv'));
    }
}
