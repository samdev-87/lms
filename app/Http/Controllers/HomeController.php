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

    public function lesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $viewData = [];
        $viewData['title'] = $lesson->title;
        $viewData['lesson'] = $lesson;
        return view('home.lesson')->with('viewData', $viewData);
    }
}
