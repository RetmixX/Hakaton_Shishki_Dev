<?php

namespace Database\Seeders\Presentation;

use Domain\Quiz\Models\Question\Question;
use Domain\Quiz\Models\Response\Response;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        Question::factory(2)->state(new Sequence(
            [
                'question' => 'Сколько сотрудников состоят в РЕМЦ?',
                'theme_id' => 1
            ],

            [
                'question' => 'Что такое НЛСК?',
                'theme_id' => 1
            ]
        ))->create();

        Response::factory(6)->state(new Sequence(
            [
                'response' => 'Около 100',
                'status_response' => true,
                'question_id' => 1
            ],

            [
                'response' => 'Ровно 1',
                'status_response' => false,
                'question_id' => 1
            ],

            [
                'response' => 'Больше 1000',
                'status_response' => false,
                'question_id' => 1
            ],

            [
                'response' => 'Национальная лига студенческих клубов',
                'status_response' => true,
                'question_id' => 2
            ],

            [
                'response' => 'Неопознанная летающая странная коробка',
                'status_response' => true,
                'question_id' => 2
            ],

            [
                'response' => 'Несовершенный летний спортивный костюм',
                'status_response' => true,
                'question_id' => 2
            ],
        ))->create();
    }
}
