<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Navbar;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $navbar = Navbar::first();
        $carousel = Carousel::first();
        $about = About::first();
        return view('pages.page-setting.home-setting', compact(['navbar', 'carousel', 'about']));
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
    public function update(Request $request)
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
        if($request->section === 'navbar') {
            $this->NavbarUpdate($request);
        }
    }

    public function NavbarUpdate(Request $navbar)
    {
        if ($navbar->isMethod('delete')) {
            $filepond = $navbar->json()->all();
            $folder = $filepond['folder'];
            $tempFile = Navbar::query()->where('folder', $folder)->first();
            $path = storage_path('app/orders/temp/' . $folder);
            if (is_dir($path) && $tempFile) {
                DB::beginTransaction();

                try {
                    unlink($path . '/' . $tempFile->filename);
                    rmdir($path);
                    $tempFile->delete();
                    DB::commit();

                    return response()->json(['message' => 'success']);
                } catch (\Exception $e) {
                    DB::rollBack();
                    Log::error('Error deleting directory: ' . $e->getMessage());
                    return response()->json(['message' => 'failed'], 500);
                }
            }
            return response()->json(['message' => 'failed'], 500);
        }
        if ($navbar->hasFile('filepond')) {
            $files  = $navbar->file('filepond');
            foreach ($files as $key => $file) {
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . time();
                $file->storeAs('orders/temp/' . $folder, $filename);
                Navbar::query()->create(['folder' => $folder, 'filename' => $filename]);
                // Arr::add($folders, $key, $folder);
                return response()->json(['folder' => $folder], 200);
            }
        }
        Navbar::first()->update([
            'name' => $navbar->name,
            'email' => $navbar->email,
            'phone' => $navbar->phone,
            'facebook' => $navbar->facebook,
            'instagram' => $navbar->instagram,
            'linkedin' => $navbar->linkedin,
        ]);

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
