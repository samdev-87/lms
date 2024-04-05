<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Lessons';
        $viewData['lessons'] = Lesson::all();

        return view('admin.lesson.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $lesson = new Lesson();
        $lesson->setTitle($request->input('title'));
        $lesson->setDescription($request->input('description'));
        $lesson->save();

        return back();
    }

    public function delete($id)
    {
        Lesson::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Lesson';
        $viewData['lesson'] = Lesson::findOrFail($id);

        return view('admin.lesson.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $lesson = Lesson::findOrFail($id);
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        $lesson->save();

        return redirect()->route('admin.lesson.index');
    }
}
