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
                'title' => 'Fast to develop',
                'description' => 'We are fast. We can build CMS WordPress website up to 3-5 days. Just choose a template. If you need complex website with framework, we can build it up to 20-30 days.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Good price',
                'description' => 'Only transparent prices. Get a quote, pay and wait. No additional fee. Don\'t hesitate to ask about time to develop',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Pay before or pay after',
                'description' => 'Register or login. Fill the info and required fields, get a quote, milestones and pay after.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],

            [
                'title' => 'Discount for next time',
                'description' => 'One project is done. Need one else? Need to edit project, update or extend? - Get a special discount from us up to 50%.',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1046/1046460.svg',

            ],
        ];

        return view('homepage', compact('testimonials', 'portfolio', 'canDo', 'ourPros', 'prices', 'blogs'));
    }

}
