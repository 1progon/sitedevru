<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesWithDesc = [
            [
                'title' => 'Сайты на системе управления CMS WordPress',
                'slug' => Str::slug('Сайты на системе управления CMS WordPress'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
                'description' => 'Простой и удобный сайт на системе управления WordPress CMS. Отлично подойдет для простых сайтов уровня визитка, блог или простой интернет магазин. Достаточно быстро изготовить, легко расширяется за счёт встроенной системы плагинов. Один из самых популярных способов создания несложных сайтов.'
            ],
            [
                'title' => 'Уникальный сайт на фреймворке PHP Laravel без стандартной CMS',
                'slug' => Str::slug('Классический сайт на фреймворке без CMS'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'description' => 'Классический MPA (Многостраничный) современный сайт, крепкий, быстрый, легко расширяемый и создан на одном из самых популярных фреймворков языка PHP Laravel. Подходит для более сложных сайтов с уникальной системой управления и необходимыми полезными атрибутами. Подходит для магазинов, CRM, ERP и других проектов. Больше времени на создание, более дорогая и сложная разработка, чем сайты с CMS.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
            ],
            [
                'title' => 'Сайт интернет-магазина на WordPress WooCommerce CMS',
                'slug' => Str::slug('интернет магазин на cms wordpress woocommmerce'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
                'description' => 'Интернет магазин на CMS WordPress со специальным плагином WooCommerce. Подходит для создания не сложных интернет магазинов. Недорогой и отличный вариант для интернет-магазина начального уровня без сложной кастомизации.'
            ],
            [
                'title' => 'Интернет-магазин на CMS OpenCart',
                'slug' => Str::slug('сайт для интернет торговли на cms opencart'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => 'Создание интернет-магазинов на специализированной бесплатной CMS Opencart. Подходит для магазинов различной сложности. Есть множество готовых плагинов от сообщества, как платных, так и бесплатных. Легко управлять, добавлять, удалять товары и многое другое. Удобно для расширения магазина.'
            ],
            [
                'title' => 'Интернет магазин на системе управления Prestashop CMS',
                'slug' => Str::slug('интернет магазин на prestashop cms'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'on_homepage' => 0,
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'description' => 'Создание интернет-магазинов на бесплатной CMS PrestaShop. Подходит для магазинов различной сложности. Имеется система расширения за счёт плагинов, можно изменять тему сайта и другие полезные вещи.'
            ],
            [
                'title' => 'Дизайн сайта и создание макета в Figma',
                'slug' => Str::slug('создание и дизайн сайта в figma'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => 'Создание уникальных дизайнов или доработка существующих под нужды заказчика. Изготовление макетов в Figma. Вёрстка готовых макетов. Натяжка на различные CMS'
            ],
            [
                'title' => 'Натяжка шаблонов на CMS',
                'slug' => Str::slug('натяжка готовых шаблонов на различные cms'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => 'Натяжка готовых шаблонов на CMS или для новых сайтов.'
            ],
            [
                'title' => 'Современный сайт на фронтенд фреймворке Vue JS и бекенд JSON API',
                'slug' => Str::slug('сайт на vue js с бекендом на api'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => 'Изготовление современных и супер быстрых сайтов на фронтенд фреймворке Vue JS или React. Одностраничные сайты с API на бекенде.'
            ],
            [
                'title' => 'Мобильное приложение на фреймворке Flutter',
                'slug' => Str::slug('мобильные приложения на фреймворке flutter'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => 'Создание современных кроссплатформенных мобильных приложений с использованием современного фреймворка Flutter на языке Dart. Одно приложение для iOS и Android. Такие же быстрые как и нативные приложения. Подходит для большинства классических приложений без сложной структуры.'
            ],

            [
                'title' => 'Нативные приложения для смартфонов на Android',
                'slug' => Str::slug('классические java kotlin приложения для android'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '"Родные" приложения для смартфонов и планшетов на Android. Приложения различной степени сложности. Длительная разработка.'
            ],

            [
                'title' => 'Нативные приложения для Apple iOS на языке Swift',
                'slug' => Str::slug('нативные приложения для apple ios на swift'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '"Родные" приложения для гаджетов на iOS от компании Apple. Приложения различной степени сложности.'
            ],
            [
                'title' => 'SEO оптимизация и продвижение сайтов в ТОП',
                'slug' => Str::slug('оптимизация и продвижение сайтов в топ seo'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Покупка и продажа сайтов, доменов',
                'slug' => Str::slug('покупка и продажа сайтов и доменов'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Поддержка выделенных серверов, хостинг и виртуальные сервера VPS',
                'slug' => Str::slug('поддержка выделенных серверов хостинга и виртуальных серверов'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Вёрстка HTML шаблонов для сайтов из макетов PSD, Figma и других',
                'slug' => Str::slug('вёрстка шаблонов сайтов из макетов psd и figma'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Стратегия построения ссылок для сайта',
                'slug' => Str::slug('стратегия построения ссылок для сайта'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Создание шаблонов для HTML сайтов и CMS',
                'slug' => Str::slug('Website Template Creation'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
            [
                'title' => 'Работы с контентом, наполнение сайтов копирайт, контент для оптимизации и SEO',
                'slug' => Str::slug('работа с контентом сайта наполнение для seo и уникализация текста'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
                'description' => '',
            ],
        ];


        DB::table('services')
            ->insert($servicesWithDesc);
    }
}
