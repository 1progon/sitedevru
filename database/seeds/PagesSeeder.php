<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'О компании "Модульные технологии"',
                'meta_keywords' => 'о компании, кто делает сайты, как делают сайты, кто изготовить сайт, компании которые делают сайты, компании которые создают сайты, лучшие компании по созданию сайтов',
                'meta_description' => 'Компания занимается разработкой сайтов с нуля, поддержкой готовых проектов, а также созданием мобильных приложений и другими услугами в области веб-технологий',
                'slug' => Str::slug('about'),
                'description' => 'Мы небольшая распределённая компания из пяти человек, которая поможет решить Вам различные задачи, связанные с созданием, развитием и работой Ваших веб-проектов',
                'article' => '<p>Добрый день!</p>
<p>В нашей компании несколько человек - дизайнеры, разработчики, верстальщики, менеджер проектов и другие специалисты. Как многие современные IT компании, мы работаем на удалёнке. К счастью для нас, мы не имеем офиса и работаем из дома на удалёнке, мы экономим средства, чем также можем снизить стоимость для Вас на создание сайтов. В нашей команде несколько человек, и все они из разных городов, но это не мешает нам организовать работу правильно. Надеемся, такой вид работы не станет проблемой между нами и Вами.</p>
<p>Наша компания занимается разработкой сайтов, добавлением различного функционала к действующим сайтам, поддержкой и обслуживанием проектов на аутсорсе, а также созданием мобильных приложений и другими услугами.</p>
<p>Мы готовы предложить Вам комплекс различных услуг, для Ваших проектов. Используя наш опыт, наши руки, наши головы и знания, Вы сможете получить от своих сайтов максимум отдачи.</p>
<p>После создания сайта, почти каждый владелец хочет, чтобы от него была отдача, чтобы сайт приносил заявки и клиентов. В данном направлении мы также готовы помочь Вам. Подготовим сайт для SEO, оптимизируем, добавим нужные разметки и организуем для Вас размещение рекламы в поисковых системах Яндекс и Гугл, а также в социальных сетях.</p>
<p>Всех посетителей на сайте будем отслеживать по различным метрикам, будем следить за конверсией и максимально организуем превращение посетителя в полноценного клиента.</p>
<p>Если Вы беспокоитесь о размещении сайта в интернете, не знает где и как его хранить, как опубликовать, как показать его миру, то и здесь мы сможем Вам помочь. Подберём хостинг под Ваши нужды, поможем купить домен для сайта, сделаем сайт доступным в сети. Подберём хороший хостинг, для быстрого отклика.</p>'
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Особенности',
                'slug' => Str::slug('features'),
                'description' => 'Различные дополнения и особенности, которые Вы можете получить в нашей компании.',
                'article' => '<p>text</p>',
                'meta_keywords' => '',
                'meta_description' => ''

            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Политика компании',
                'slug' => Str::slug('privacy'),
                'description' => 'Политика нашей компании',
                'article' => '<p>text</p>',
                'meta_keywords' => '',
                'meta_description' => ''
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Условия использования',
                'slug' => Str::slug('terms'),
                'description' => 'Условия использования',
                'article' => '<p>text</p>',
                'meta_keywords' => '',
                'meta_description' => ''
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Карта сайта',
                'slug' => Str::slug('sitemap'),
                'description' => 'Карта сайта, где и что находится.',
                'article' => '<p>text</p>',
                'meta_keywords' => '',
                'meta_description' => ''
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Частые вопросы',
                'slug' => Str::slug('faq'),
                'description' => 'Популярные вопросы и ответы о сайтах.',
                'article' => '<p>text</p>',
                'meta_keywords' => '',
                'meta_description' => ''
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Сообщить об ошибке',
                'slug' => Str::slug('report-bug'),
                'description' => 'Report-bug page description',
                'article' => '<p>Если Вы обнаружили ошибку на нашем сайте, пожалуйста, сообщите нам об этой проблеме.</p>',
                'meta_keywords' => '',
                'meta_description' => ''
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Плюсы и минусы шаблонных сайтов',
                'slug' => Str::slug('pros-and-cons-template-site'),
                'description' => 'Плюсы и минусы наших шаблонных недорогих сайтов',
                'article' => '<p>Какие есть плюсы и минусы недорогих сайтов с помесячной оплатой. Расскажем более подробно в виде вопрос-ответа.</p>',
                'meta_keywords' => '',
                'meta_description' => '',
            ],


        ];

        DB::table('pages')->insert($pages);
    }
}
