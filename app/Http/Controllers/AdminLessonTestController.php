<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonTest;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    public function index($lessonId)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Lesson Tests';
        $viewData['lesson'] = Lesson::where('id', $lessonId)->with('lessonTests')->get();

        return view('admin.lesson-test.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|max:255',
            'answers' => 'required|json',
            'correct_answer' => 'required|integer'
        ]);

        $lesson = new LessonTest();
        $lesson->setLessonId($request->input('lesson_id'));
        $lesson->setQuestion($request->input('question'));
        $lesson->setAnswers($request->input('answers'));
        $lesson->setCorrectAnswer($request->input('correct_answer'));
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
        $viewData['title'] = 'Admin Page - Edit Lesson Test';
        $viewData['lesson'] = LessonTest::findOrFail($id);

        return view('admin.lesson.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $lesson = LessonTest::findOrFail($id);
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        $lesson->save();

        return redirect()->route('admin.lesson.index');
    }
}
