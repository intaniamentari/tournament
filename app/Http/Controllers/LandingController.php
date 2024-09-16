<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Navbar;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing_page.home');
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

    public function registration(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('landing_page.registration');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string',
                'gender' => 'required|string',
                'address' => 'required|string',
                'username' => 'required|string|unique:users,username',
                'password' => 'required|string',
                'confirm_password' => 'required|string|same:password',
                'phone' => ['required', 'string', 'regex:/^(?!\\+62$).*/'],
                'age' => 'required|numeric',
                'category' => 'required|string',
            ]);

            User::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'age' => $request->age,
                'category' => $request->category,
            ]);
        }

        Alert::success('Success', 'Registrasi berhasil');

        return redirect()->route('registration');
    }
}
