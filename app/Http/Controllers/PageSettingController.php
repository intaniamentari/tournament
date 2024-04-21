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
        info($request->all());
        switch ($request->section) {
            case 'navbar':
                $this->NavbarUpdate($request);
                break;
            case 'carousel':
                $this->CarouselUpdate($request);
                break;
            case 'about':
                $this->AboutUpdate($request);
                break;
            case 'contact':
                echo "Ini adalah halaman kontak kami.";
                break;
            default:
                echo "Halaman tidak ditemukan.";
                break;
        }

        Alert::success('Success', 'Data ' . $request->section . ' have saved successfully');

        return redirect()->route('page-setting.home');
    }

    public function NavbarUpdate($navbar)
    {
        $navbarModel = Navbar::first();

        $navbarModel->update([
            'name' => $navbar->name,
            'email' => $navbar->email,
            'phone' => $navbar->phone,
            'facebook' => $navbar->facebook,
            'instagram' => $navbar->instagram,
            'linkedin' => $navbar->linkedin,
        ]);

        $temporaryFile = TemporaryFile::where('used', 'navbarIcon')->first();

        if ($temporaryFile) {
            if($navbarModel->icon !== null){
                info('delete data');
                TemporaryFile::where('id', $navbarModel->icon)->delete();
            }
            info('upload image');
            $temporaryFile->update(['used' => 'true']);
            $navbarModel->update(['icon' => $temporaryFile->id]);
        }
    }

    public function CarouselUpdate($carousel)
    {
        $carouselModel = Carousel::first();

        $carouselModel->update([
            'title' => $carousel->title,
            'text' => $carousel->text,
        ]);

        // Cek apakah ada file sementara yang digunakan untuk ikon navbar
        $temporaryFile = TemporaryFile::where('used', 'carouselImage')->first();

        if ($temporaryFile) {
            if($carouselModel->image !== null){
                TemporaryFile::where('id', $carouselModel->image)->delete();
            }
            $temporaryFile->update(['used' => 'true']);
            $carouselModel->update(['image' => $temporaryFile->id]);
        }
    }

    public function AboutUpdate($about)
    {
        $aboutModel = About::first();

        $aboutModel->update([
            'sub_title' => $about->sub_title,
            'footer' => $about->footer,
            'title' => $about->title,
            'text' => $about->text,
        ]);

        // Cek apakah ada file sementara yang digunakan untuk ikon navbar
        $temporaryFile = TemporaryFile::where('used', 'aboutImage')->first();

        if ($temporaryFile) {
            if($aboutModel->image !== null){
                TemporaryFile::where('id', $aboutModel->image)->delete();
            }
            $temporaryFile->update(['used' => 'true']);
            $aboutModel->update(['image' => $temporaryFile->id]);
        }
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
