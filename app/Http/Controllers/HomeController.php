<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page';
        $viewData['lessons'] = Lesson::all();
        return view('home.index')->with('viewData', $viewData);
    }
}
