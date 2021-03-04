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
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта бизнес-агентства',
                'slug' => 'soft-business-agency-34534543534',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/soft-business-agency-34534543534/',
                'url_original_link' => 'https://htmlcodex.com/bootstrap-agency-template'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для фотографа, дизайнера или креативной студии',
                'slug' => 'kalay-523658347658432654398543',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/kalay-523658347658432654398543/',
                'url_original_link' => 'https://www.tooplate.com/view/2087-kalay'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для медсервиса или частной клиники',
                'slug' => 'life-care-345435435435435',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/life-care-345435435435435/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page245/life-care'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта женской тематики. Мода, красота, товары, мини магазин',
                'slug' => 'moschino-34256348563453453',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/moschino-34256348563453453/',
                'url_original_link' => 'https://www.wowthemes.net/moschino-free-portfolio-html-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для портфолио, фотографа или дизайн студии',
                'slug' => 'multi-color-3453454353543543',
                'description' => 'Шаблон отлично подойдет для фотографий и фото галереи',
                'article' => '',
                'url' => 'live-templates/multi-color-3453454353543543/',
                'url_original_link' => 'https://www.tooplate.com/view/2086-multi-color'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайтов мода, красота, дизайн, стиль или студия',
                'slug' => 'oak-3543543534543543543',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/oak-3543543534543543543/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page250/oak'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта кафе, ресторан, быстрое питание или заказ еды',
                'slug' => 'restaurant-34534543535435345435',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/restaurant-34534543535435345435/',
                'url_original_link' => 'https://themewagon.com/themes/free-bootstrap-restaurant-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта на спортивную тематику',
                'slug' => 'sports-2376935764932756348529',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/sports-2376935764932756348529/',
                'url_original_link' => 'https://themewagon.com/themes/multi-page-free-bootstrap-sports-template/'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта школы танцев или фитнеса',
                'slug' => 'volim-3254695432058632543',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/volim-3254695432058632543/',
                'url_original_link' => 'https://www.free-css.com/free-css-templates/page259/volim'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Простой лендинг под различные тематики',
                'slug' => 'ziggy-20265023563485642752385',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/ziggy-20265023563485642752385/',
                'url_original_link' => 'https://www.tooplate.com/view/2091-ziggy'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для блога или сайта хайтек направления',
                'slug' => 'power-blog-2353928573593456345',
                'description' => 'Дизайн шаблона 2011 года',
                'article' => '',
                'url' => 'live-templates/power-blog-2353928573593456345/',
                'url_original_link' => 'https://templatemo.com/tm-299-power'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Простой классический шаблон сайта различных направлений',
                'slug' => 'light-gray-34285692563453',
                'description' => 'Шаблон создан в 2011 году',
                'article' => '',
                'url' => 'live-templates/light-gray-34285692563453/',
                'url_original_link' => 'https://templatemo.com/tm-304-light-gray'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта магазина подарков или интересных товаров',
                'slug' => 'goods-and-gifts-34523523452345',
                'description' => 'Шаблон создан в 2012 году, но даже сегодня очень популярен из-за своей простоты и хорошего дизайна',
                'article' => '',
                'url' => 'live-templates/goods-and-gifts-34523523452345/',
                'url_original_link' => 'https://templatemo.com/tm-362-gift-red'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта женского направления, моды, красоты и товаров',
                'slug' => 'fantasy-34289563056385634534',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/fantasy-34289563056385634534/',
                'url_original_link' => 'https://templatemo.com/tm-393-fantasy'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Интересный шаблон для фотогалереи, модной рабочей команды или другого направления',
                'slug' => 'polygon-3248563428563457',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/polygon-3248563428563457/',
                'url_original_link' => 'https://templatemo.com/tm-400-polygon'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Нестандартный шаблон для гаджетов, техники, IT компании или другого креативного направления',
                'slug' => 'xenon-modern-35345345345',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/xenon-modern-35345345345/',
                'url_original_link' => 'https://templatemo.com/tm-416-xenon'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Лендинг дизайн шаблон сайта креативного агентсва или другого направления',
                'slug' => 'freshness-3223953485620842985458',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/freshness-3223953485620842985458/',
                'url_original_link' => 'https://templatemo.com/tm-422-freshness'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта музыкальной компании, аудио студии или для музыканта',
                'slug' => 'pro-audio-162987654352305',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/pro-audio-162987654352305/',
                'url_original_link' => 'https://templatemo.com/tm-429-pro-audio'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Интересный лендинг шаблон для сайта креативной компании или агентства',
                'slug' => 'robotic-2572952059257454354',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/robotic-2572952059257454354/',
                'url_original_link' => 'https://templatemo.com/tm-430-robotic'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта с цифровыми товарами, гаджетами или другой техникой ',
                'slug' => 'ion-2305932975395789342573425',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/ion-2305932975395789342573425/',
                'url_original_link' => 'https://templatemo.com/tm-431-ion'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Лендинг шаблон в темном коричневом цвете под различные направления',
                'slug' => 'brownie-230532495349574398',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/brownie-230532495349574398/',
                'url_original_link' => 'https://templatemo.com/tm-440-brownie'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для административной части сайта, логин, аккаунт',
                'slug' => 'visual-admin-23582305234957385648',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/visual-admin-23582305234957385648/',
                'url_original_link' => 'https://templatemo.com/tm-455-visual-admin'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для студии, компании, агентсва, визитка компании',
                'slug' => 'workforce-2347390573495742345',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/workforce-2347390573495742345/',
                'url_original_link' => 'https://templatemo.com/tm-461-workforce'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для авто-мото сайта, автосервис, центр авторемонта и другое',
                'slug' => 'motor-38230534925927954245',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/motor-38230534925927954245/',
                'url_original_link' => 'https://templatemo.com/tm-463-motor'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта кафе, ресторан, питание или заказ еды',
                'slug' => 'cafe-house-28534583458347',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/cafe-house-28534583458347/',
                'url_original_link' => 'https://templatemo.com/tm-466-cafe-house'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта визитка. Профиль, резюме',
                'slug' => 'easy-profile-239580375039857254',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/easy-profile-239580375039857254/',
                'url_original_link' => 'https://templatemo.com/tm-467-easy-profile'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта портфолио, дизайн, фото или визитка компании',
                'slug' => 'impulse-3259305735732495734985',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/impulse-3259305735732495734985/',
                'url_original_link' => 'https://templatemo.com/tm-469-impulse'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта минимум контента, максимум дизайна',
                'slug' => 'zigzag-23058793245792357',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/zigzag-23058793245792357/',
                'url_original_link' => 'https://templatemo.com/tm-471-zigzag'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон сайта товары, техника, дизайн',
                'slug' => 'blaster-3249573457348953524',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/blaster-3249573457348953524/',
                'url_original_link' => 'https://templatemo.com/tm-472-blaster'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта кафе, бара, ресторана или быстрого питания, а также заказ еды',
                'slug' => 'eatery-3298574572395734957432',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/eatery-3298574572395734957432/',
                'url_original_link' => 'https://templatemo.com/tm-515-eatery'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта отдых, туризм, путешествия или просто турблог',
                'slug' => 'sentra-3258975385348573428957',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/sentra-3258975385348573428957/',
                'url_original_link' => 'https://templatemo.com/tm-518-sentra'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта города, достопримечательности или туризм и отдых',
                'slug' => 'the-town-34258937523475834',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/the-town-34258937523475834/',
                'url_original_link' => 'https://templatemo.com/tm-525-the-town'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Красивый лендинг на различные темы от туризма и отдыха до визитки компании',
                'slug' => 'vanilla-3295734857903578439543',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/vanilla-3295734857903578439543/',
                'url_original_link' => 'https://templatemo.com/tm-526-vanilla'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта визитки компании, лендинг креативного агентства и другое',
                'slug' => 'softy-pinko-32985745329457348925',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/softy-pinko-32985745329457348925/',
                'url_original_link' => 'https://templatemo.com/tm-535-softy-pinko'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон лендинга визитки компании на различные темы',
                'slug' => 'art-factory-3298579324573482',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/art-factory-3298579324573482/',
                'url_original_link' => 'https://templatemo.com/tm-537-art-factory'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта еда, питание, кафе, ресторан или заказ еды на дом',
                'slug' => 'simple-house-3429857342753',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/simple-house-3429857342753/',
                'url_original_link' => 'https://templatemo.com/tm-539-simple-house'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта спортивного зала, студии отдыха, тренажерный зал и другое',
                'slug' => 'training-studio-349825792345734',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/training-studio-349825792345734/',
                'url_original_link' => 'https://templatemo.com/tm-548-training-studio'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта простая визитка в тёмном цвете с современным дизайном',
                'slug' => 'diagoona-324985743985435436',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/diagoona-324985743985435436/',
                'url_original_link' => 'https://templatemo.com/tm-550-diagoona'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Одностраничный шаблон для сайтов на различные направления в цвете морской волны',
                'slug' => 'ocean-vibes-32985732495734285',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/ocean-vibes-32985732495734285/',
                'url_original_link' => 'https://templatemo.com/tm-554-ocean-vibes'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Лендинг сайт школы, учебного заведения, курсы, коачинг и другие варианты',
                'slug' => 'grad-school-32985732457435',
                'description' => 'Современный дизайн, тёмный цвет, видео на заднем плане',
                'article' => '',
                'url' => 'live-templates/grad-school-32985732457435/',
                'url_original_link' => 'https://templatemo.com/tm-557-grad-school'
            ],
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Шаблон для сайта "скоро будет". Сайт в разработке и тому подобное',
                'slug' => 'coming-soon-349857934574335',
                'description' => 'Представлен в двух цветах, тёмном и светлом',
                'article' => '',
                'url' => 'live-templates/coming-soon-349857934574335/',
                'url_original_link' => 'https://templatemo.com/tm-462-coming-soon'
            ],


        ];


        DB::table('templates')->insert($templates);
    }
}
