<?php

use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        $templates = [
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Архитектурный шаблон',
                'slug' => 'architect-4238976274623',
                'description' => 'Шаблон для архитектурного сайта или студии по дизайну',
                'article' => '',
                'url' => 'live-templates/architect-4238976274623/',
                'url_original_link' => 'https://demos.freehtml5.co/architect/premium/index.html'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Автомобильный лендинг сайт-шаблон',
                'slug' => 'avalon-932654875345',
                'description' => 'Шаблон лендинг для автомобильного сайта ',
                'article' => '',
                'url' => 'live-templates/avalon-932654875345/',
                'url_original_link' => 'https://html.design/download/avalon-free-car-dealer-html-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Простой шаблон для туристического сайта',
                'slug' => 'bluesky-2348756342956237',
                'description' => 'Шаблон для туристеческой фирмы или отелей',
                'article' => '',
                'url' => 'live-templates/bluesky-2348756342956237/',
                'url_original_link' => 'https://themewagon.com/themes/free-responsive-bootstrap-4-html5-agency-website-template-bluesky/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Лендинг для дизайнера или фотографа',
                'slug' => 'box-portfolio-73462398756348756',
                'description' => 'Одностраничный шаблон для сайта портфолио фотографа или дизайнера',
                'article' => '',
                'url' => 'live-templates/box-portfolio-73462398756348756/',
                'url_original_link' => 'https://www.behance.net/gallery/36389511/Box-portfolio-Free-html-template'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта йога, пилатес, фитнес и другие',
                'slug' => 'cardio-3765283456835348765',
                'description' => 'Шаблон для сайта йоги или фитнеса',
                'article' => '',
                'url' => 'live-templates/cardio-3765283456835348765/',
                'url_original_link' => 'https://tympanus.net/Freebies/Cardio/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Сайт мебельной компании или антиквариата',
                'slug' => 'chamb-furniture-38634276345923456',
                'description' => 'Для сайта интерьеров, мебельной компании, мебельного магазина или антиквара',
                'article' => '',
                'url' => 'live-templates/chamb-furniture-38634276345923456/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page242/chamb'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта креативного агентства',
                'slug' => 'creative-agency-63492653427532486',
                'description' => 'Шаблон сайта креативного агентства',
                'article' => '',
                'url' => 'live-templates/creative-agency-63492653427532486/',
                'url_original_link' => 'https://plantillashtmlgratis.com/en/todas-las-plantillas/plantilla/free-html-templates-for-downloading-creative-agency/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта о собаках или животных',
                'slug' => 'dpot-dogsite-386583724653756238',
                'description' => 'Шаблон для сайта о животных, для клиники животных или другие варианты',
                'article' => '',
                'url' => 'live-templates/dpot-dogsite-386583724653756238/',
                'url_original_link' => 'https://html.design/download/dpot-pet-shop-html-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Простой шаблон лендинга для различных тематик',
                'slug' => 'dart-landing-7237856395684365854',
                'description' => 'Лендинг может подходить под различные тематики',
                'article' => '',
                'url' => 'live-templates/dart-landing-7237856395684365854/',
                'url_original_link' => 'https://plantillashtmlgratis.com/en/todas-las-plantillas/plantilla/download-free-html-css-template-dart-landing/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон современной технологической компании',
                'slug' => 'digital-service-382658476324856348',
                'description' => 'Одностраничный шаблон лендинг для сайта технологической компании',
                'article' => '',
                'url' => 'live-templates/digital-service-382658476324856348/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page256/digital-service'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта магазина одежды',
                'slug' => 'ecommerce-wear-375632856328756',
                'description' => 'Многостраничный шаблон для сайта магазина',
                'article' => '',
                'url' => 'live-templates/ecommerce-wear-375632856328756/',
                'url_original_link' => 'https://htmlcodex.com/ecommerce-html-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта обучающей организации',
                'slug' => 'educational-theory-63287658324765',
                'description' => 'Шаблон для сайта учебного заведения',
                'article' => '',
                'url' => 'live-templates/educational-theory-63287658324765/',
                'url_original_link' => 'https://www.os-templates.com/free-website-templates/educational-theory'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон лендинг заготовка для сайта туристического агентства',
                'slug' => 'eforlad-3872658346534',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/eforlad-3872658346534/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page260/eforlad'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта для фитнеса и занятий спортом',
                'slug' => 'fitness-87623586384563825',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/fitness-87623586384563825/',
                'url_original_link' => 'https://freehtml5.co/fitness-free-website-template-using-bootstrap-3/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон под различные тематики в сторону отдыха, туризма, отеля',
                'slug' => 'gogopo-43868237465345',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/gogopo-43868237465345/',
                'url_original_link' => 'https://www.os-templates.com/free-website-templates/gogopo'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта фитнеса и здоровья',
                'slug' => 'health-7365234658365',
                'description' => 'Зарядка, спорт, фитнесс. Шаблон сайта для тех, кто хочет держать себя в форме',
                'article' => '',
                'url' => 'live-templates/health-7365234658365/',
                'url_original_link' => 'https://html.design/download/health-fitness-html-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта агентства недвижимости',
                'slug' => 'homestate-83265834658365',
                'description' => 'Шаблон для сайта по направлению недвижимость',
                'article' => '',
                'url' => 'live-templates/homestate-83265834658365/',
                'url_original_link' => 'https://freehtml5.co/homestate-free-html5-bootstrap-real-estate-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта аудио компании, музыкальной студии или музыканта',
                'slug' => 'melodi-465238534568365',
                'description' => 'Шаблон подходит для сайтов музыкальной направленности. Подходит для одиночных и групп музыкантов, муз студий и другое',
                'article' => '',
                'url' => 'live-templates/melodi-465238534568365/',
                'url_original_link' => 'https://themeslab.org/html/melodi'
            ],
            //[
            //    'created_at' => $date,
            //    'updated_at' => $date,
            //    'title' => '',
            //    'slug' => '',
            //    'description' => '',
            //    'article' => '',
            //    'url' => '',
            //    'url_original_link' => ''
            //],


        ];


        DB::table('templates')->insert($templates);
    }
}
