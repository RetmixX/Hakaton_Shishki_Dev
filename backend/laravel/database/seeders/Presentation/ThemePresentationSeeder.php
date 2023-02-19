<?php

namespace Database\Seeders\Presentation;

use Domain\Quiz\Models\Theme\Theme;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ThemePresentationSeeder extends Seeder
{
    public function run()
    {
        Theme::factory(4)->state(new Sequence(
            [
                'title' => 'Главное о Росмолодёжи',
                'description' => 'https://clck.ru/33ZtTb',
            ],

            [
                'title' => 'Добро пожаловать',
                'description' => 'Наш офис крут, правда? Прямо как ты. https://clck.ru/33ZtWZ',
            ],

            [
                'title' => 'Ты в команде',
                'description' => 'Команда росмолодёжи самая дружная и интересная! Посмотри на эти фоточки и стань одним из нас. https://clck.ru/33ZtVM',
            ],

            [
                'title' => 'Корпоративные памятки',
                'description' => 'https://clck.ru/33ZtUU',
            ],
        ))->create();
    }
}
