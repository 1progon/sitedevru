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
        \Illuminate\Support\Facades\DB::table('pages')
            ->insert(
                [
                    [
                        'created_at' => date('Y-m-d H:m:s'),
                        'updated_at' => date('Y-m-d H:m:s'),
                        'title' => 'About',
                        'slug' => Str::slug('About'),
                        'description' => 'About page description',
                        'article' => '<div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus deserunt fuga illum impedit,
                numquam odit quas reiciendis repudiandae vel!</p>
            <p>Aspernatur at dolorem error esse illo laboriosam libero perferendis quidem, sequi temporibus? Ad
                cupiditate ducimus eligendi expedita explicabo rerum veritatis!</p>
            <p>Consequatur deserunt eum, inventore numquam optio placeat rem? Aliquam delectus earum illo laborum,
                obcaecati officiis omnis similique veritatis vero voluptatem.</p>
            <p>Cumque dicta ducimus esse eveniet fugiat molestias, quod? Ad aperiam delectus eaque molestiae nobis
                quisquam repudiandae saepe sapiente sed sint.</p>
            <p>Assumenda at beatae corporis cumque, delectus dolorem et facere in libero neque nobis odit omnis placeat,
                possimus tempore vel veritatis!</p>
            <p>Amet blanditiis commodi culpa cupiditate, ex in, laborum maxime, provident quibusdam soluta veniam vero?
                Aliquid consequatur consequuntur doloremque esse sit.</p>
            <p>Architecto corporis doloremque excepturi exercitationem iste laborum molestiae, nemo odio, omnis quaerat
                quam quibusdam quo similique sint ut vel voluptas!</p>
            <p>A accusantium atque cupiditate dignissimos, dolor doloremque eius et eum magnam mollitia nam porro quae
                quibusdam quidem quisquam reprehenderit voluptas.</p>
            <p>Accusantium architecto aspernatur autem cumque dolor explicabo, itaque laboriosam maxime mollitia natus
                nobis quisquam ratione repudiandae ut, vel voluptates voluptatibus?</p>
            <p>A accusantium consequuntur deleniti deserunt, dolores dolorum earum, impedit, laborum nam porro rem
                reprehenderit repudiandae tempore totam vel veniam voluptate?</p>
        </div>'
                    ]

                ]
            );
    }
}
