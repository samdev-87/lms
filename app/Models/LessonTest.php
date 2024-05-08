<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonTest extends Model
{
    protected $fillable = [
        'lesson_id',
        'question',
        'answers',
        'correct_answer',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function getLessonId()
    {
        return $this->attributes['lesson_id'];
    }

    public function setLessonId($lessonId)
    {
        $this->attributes['lesson_id'] = $lessonId;
    }

    public function getQuestion()
    {
        return $this->attributes['question'];
    }

    public function setQuestion($question)
    {
        $this->attributes['question'] = $question;
    }

    public function getAnswers()
    {
        return $this->attributes['answers'];
    }

    public function setAnswers($answers)
    {
        $this->attributes['answers'] = $answers;
    }

    public function getCorrectAnswer()
    {
        return $this->attributes['correct_answer'];
    }

    public function setCorrectAnswer($correct_answer)
    {
        $this->attributes['correct_answer'] = $correct_answer;
    }
}
