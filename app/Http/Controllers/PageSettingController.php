<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Navbar;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComponentRequest;
use App\Http\Requests\NavbarRequest;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.page-setting.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeSetting()
    {
        return view('pages.page-setting.home-setting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComponentRequest $request)
    {
        info([$request->all(), $request->section === 'navbar']);
        switch ($request->section) {
            case 'navbar':
                $this->NavbarUpdate($request);
                break;
            case 'carousel':
                echo "Ini adalah halaman tentang kami.";
                break;
            case 'about':
                echo "Ini adalah halaman layanan kami.";
                break;
            case 'contact':
                echo "Ini adalah halaman kontak kami.";
                break;
            default:
                echo "Halaman tidak ditemukan.";
                break;
        }
    }

    public function NavbarUpdate($navbar)
    {
        $navbarData = [
            'name' => $navbar->name,
            'email' => $navbar->email,
            'phone' => $navbar->phone,
            'facebook' => $navbar->facebook,
            'instagram' => $navbar->instagram,
            'linkedin' => $navbar->linkedin,
        ];

        // Update navbar data
        Navbar::first()->update($navbarData);

        // Cek apakah ada file sementara yang digunakan untuk ikon navbar
        $temporaryFile = TemporaryFile::where('used', 'navbar')->first();

        if ($temporaryFile) {
            // Update ikon navbar jika file sementara ada
            Navbar::first()->update(['icon' => $temporaryFile->id]);
        }

        Alert::success('Success', 'Data have saved successfully');

        return redirect()->back()
            ->with('success', 'Created successfully!');
    }

    public function CarouselUpdate(Request $carousel)
    {
        // Check if a file has been uploaded
        if ($carousel->hasFile('image')) {
            // Get the file from the carousel
            $image = $carousel->file('image');

            // Generate a unique name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the file to the storage directory
            $image->move(public_path('images'), $imageName);

            // Update the image field in the database
            $carousel->update(['image' => $imageName]);
        }

        Carousel::first()->update([
            'title' => $carousel->name,
            'text' => $carousel->email,
        ]);

        Alert::success('Success', 'Data have saved successfully');

        return redirect()->back()
            ->with('success', 'Created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
