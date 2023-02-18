<?php

namespace Database\Seeders\Presentation;

use Domain\Division\Models\Document\Document;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    public function run()
    {
        //true - открыт
        //false - закрыт
        Document::factory(7)->state(new Sequence(
            [
                'title' => 'Пресс-служба',
                'data' => 'Информация о деятельности управления пресс-службы',
                'reference' => 'https://clck.ru/33a3jX',
                'division_id' => 15,
                'open' => false
            ],

            [
                'title' => 'Управление регионального взаимодействия',
                'data' => 'Информация о деятельности управления регионального взаимодействия',
                'reference' => 'https://clck.ru/33a3jm',
                'division_id' => 2,
                'open' => true
            ],

            [
                'title' => 'Управление делами,  государственной службы  и правового обеспечения',
                'data' => 'Информация о деятельности управления делами, государственной службы и правового обеспечения',
                'reference' => 'https://clck.ru/33a3k7',
                'division_id' => 12,
                'open' => false
            ],

            [
                'title' => 'Управление молодежных проектов и программ',
                'data' => 'Информация о деятельности управления молодежных проектов и программ',
                'reference' => 'https://clck.ru/33a3kM',
                'division_id' => 7,
                'open' => true
            ],

            [
                'title' => 'Финансово-экономическое управление',
                'data' => 'Информация о деятельности финансово-экономического управления',
                'reference' => 'https://clck.ru/33a3ka',
                'division_id' => 10,
                'open' => true
            ],

            [
                'title' => 'Корпоративные предложения',
                'data' => 'Вы можете посмотреть список корпоративных предложений росмолодёжи',
                'reference' => 'https://clck.ru/33a3gA',
                'division_id' => null,
                'open' => true
            ],

            [
                'title' => 'Памятка настройки IOS',
                'data' => 'Памятка по настройке служебной электронной почты на мобильных устройствах на операционной системе IOS',
                'reference' => 'https://clck.ru/33a3j4',
                'division_id' => null,
                'open' => true
            ],
        ))->create();
    }
}
