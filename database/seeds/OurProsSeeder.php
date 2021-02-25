<?php

use Illuminate\Database\Seeder;

class OurProsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ourPros = [
            [
                'title' => 'Достаточно быстрая работа',
                'description' => 'Мы быстрые настолько, насколько возможно и необходимо для качественной сдачи проекта. Чтобы оценить время выполнения Вашей работы, позвоните нам или напишите через раздел контакты.',


            ],

            [
                'title' => 'Хорошая цена',
                'description' => 'Все цены прозрачны для Вас. Мы ничего не прячем. Никаких скрытых и дополнительных платежей без согласования. Вы легко можете уточнить все подробности у нас.',


            ],

            [
                'title' => 'Можем подсказать',
                'description' => 'У Вас есть вопросы? Не знаете с чего начать, не понимаете некоторых вещей в интернете, хотите понять как работают сайты? Не стесняйтесь, спрашивайте, расскажем, покажем, научим и денег не возьмем.',


            ],

            [
                'title' => 'Платите До или После',
                'description' => 'Заключите договор, обсудите условия и договоритесь о цене, оплатите заказ полностью, внесите предоплату или договоритесь об оплате после выполнения. Мы также предоставляем рассрочку, платите частями помесячно или по индивидуальной договоренности.',


            ],

            [
                'title' => 'Скидки на следующий заказ',
                'description' => 'Работа закончена, проект сдан. Хотите улучшения, изменения, доработки или ещё один проект заказать. Получите скидки на новый заказ',


            ],

            [
                'title' => 'Полный пакет документов',
                'description' => 'Мы предоставляем полный пакет документов. Договор и бухгалтерские документы.',


            ],

            [
                'title' => 'Варианты оплаты',
                'description' => 'Мы принимаем различные варианты оплаты. Безналичные платежи по счету, оплата картой, оплата онлайн картой, электронные платежные системы и другие варианты.',


            ],

            [
                'title' => 'Доставка, выезд и Skype',
                'description' => 'Мы можем приехать к Вам в компанию, чтобы заключить договор, обсудить какие-либо вопросы, уточнить детали, показать процесс работы. Или мы можем обсудить все с Вами по телефону, скайп, чат или Ваш любимый мессенджер.',


            ],

            [
                'title' => 'Часть работ бесплатно',
                'description' => 'Мы без проблем можем сделать некоторые работы бесплатно, и даже если до этого Вы у нас ничего не покупали. Иногда это Вам необходимо, а нам приятно помочь и у нас нашлось свободное время.',


            ],

            [
                'title' => 'Права на проект',
                'description' => 'После выполнения проекта и полной его оплаты, все права на изделие, переходят к Вам. Ваше творение будет только Ваше. За исключением некоторых специальных предложений, тогда об этом будет указано.',


            ],
        ];

        DB::table('our_pros')->insert($ourPros);
    }
}
