<?php

namespace App\Http\Controllers;

use App\Model\Blog\BlogPost;
use App\Model\Portfolio\Portfolio;
use App\Model\Price\Price;
use App\Model\Pros\Pros;
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


        $ourPros = Pros::all();

        return view(
            'homepage',
            compact(
                'testimonials',
                'portfolio',
                'canDo',
                'ourPros',
                'prices',
                'blogs'
            )
        );
    }

}
