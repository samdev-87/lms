<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lesson = Lesson::create([
            'title' => 'О компании',
            'description' => 'Вы узнаете, как устроена компания и т.д. и т.п. Пройдете тест для закрепления знаний',
        ]);
    }
}
