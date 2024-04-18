<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $navbar = Navbar::first();
        return view('landing_page.home', compact('navbar'));
    }

    public function info()
    {
        return view('landing_page.info');
    }

    public function service()
    {
        return view('landing_page.service');
    }

    public function features()
    {
        return view('landing_page.features');
    }

    public function apppointment()
    {
        return view('landing_page.apppointment');
    }

    public function team()
    {
        return view('landing_page.team');
    }

    public function testimonial()
    {
        return view('landing_page.testimonial');
    }

    public function notfound()
    {
        return view('landing_page.notfound');
    }

    public function contact()
    {
        return view('landing_page.contact');
    }
}
