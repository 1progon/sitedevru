<?php

namespace App\Http\Controllers;

use App\Model\Blog\BlogPost;
use App\Model\Portfolio\Portfolio;
use App\Model\Price\Price;
use App\Model\Service\Service;
use App\Model\Testimonial\Testimonial;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $prices = Price::where('on_homepage', true)->get();

        $canDo = Service::where('on_homepage', true)->get();

        $portfolio = Portfolio::latest()->take(8)->get();

        $testimonials = Testimonial::latest()->take(10)->get();

        $blogs = BlogPost::latest()->take(3)->get();

        $ourPros = [
            [
                'title' => 'Достаточно быстрая работа',
                'description' => 'Мы быстрые настолько, насколько возможно и необходимо для качественной сдачи проекта. Чтобы оценить время выполнения Вашей работы, позвоните нам или напишите через раздел контакты.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Хорошая цена',
                'description' => 'Все цены прозрачны для Вас. Мы ничего не прячем. Никаких скрытых и дополнительных платежей без согласования. Вы легко можете уточнить все подробности у нас.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Можем подсказать',
                'description' => 'У Вас есть вопросы? Не знаете с чего начать, не понимаете некоторых вещей в интернете, хотите понять как работают сайты? Не стесняйтесь, спрашивайте, расскажем, покажем, научим и денег не возьмем.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Платите До или После',
                'description' => 'Заключите договор, обсудите условия и договоритесь о цене, оплатите заказ полностью, внесите предоплату или договоритесь об оплате после выполнения. Мы также предоставляем рассрочку, платите частями помесячно или по индивидуальной договоренности.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Скидки на следующий заказ',
                'description' => 'Работа закончена, проект сдан. Хотите улучшения, изменения, доработки или ещё один проект заказать. Получите скидки на новый заказ',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Полный пакет документов',
                'description' => 'Мы предоставляем полный пакет документов. Договор и бухгалтерские документы.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Варианты оплаты',
                'description' => 'Мы принимаем различные варианты оплаты. Безналичные платежи по счету, оплата картой, оплата онлайн картой, электронные платежные системы и другие варианты.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Доставка, выезд и Skype',
                'description' => 'Мы можем приехать к Вам в компанию, чтобы заключить договор, обсудить какие-либо вопросы, уточнить детали, показать процесс работы. Или мы можем обсудить все с Вами по телефону, скайп, чат или Ваш любимый мессенджер.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Часть работ бесплатно',
                'description' => 'Мы без проблем можем сделать некоторые работы бесплатно, и даже если до этого Вы у нас ничего не покупали. Иногда это Вам необходимо, а нам приятно помочь и у нас нашлось свободное время.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Права на проект',
                'description' => 'После выполнения проекта и полной его оплаты, все права на изделие, переходят к Вам. Ваше творение будет только Ваше. За исключением некоторых специальных предложений, тогда об этом будет указано.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],
        ];

        return view('homepage', compact('testimonials', 'portfolio', 'canDo', 'ourPros', 'prices', 'blogs'));
    }

}
