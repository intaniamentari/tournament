<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TemporaryFileController extends Controller
{
    // public function index(Request $request)
    // {
    //     if ($request->isMethod('delete')) {
    //         $filepond = $request->json()->all();
    //         $folder = $filepond['folder'];
    //         $tempFile = TemporaryFile::query()->where('folder', $folder)->first();
    //         $path = storage_path('app/orders/temp/' . $folder);
    //         if (is_dir($path) && $tempFile) {
    //             DB::beginTransaction();

    //             try {
    //                 unlink($path . '/' . $tempFile->filename);
    //                 rmdir($path);
    //                 $tempFile->delete();
    //                 DB::commit();

    //                 return response()->json(['message' => 'success']);
    //             } catch (\Exception $e) {
    //                 DB::rollBack();
    //                 Log::error('Error deleting directory: ' . $e->getMessage());
    //                 return response()->json(['message' => 'failed'], 500);
    //             }
    //         }
    //         return response()->json(['message' => 'failed'], 500);
    //     }
    //     if ($request->hasFile('filepond')) {
    //         $file  = $request->file('filepond');

    //         // foreach ($files as $key => $file) {
    //             $filename = $file->getClientOriginalName();
    //             $folder = uniqid() . '-' . time();
    //             $file->storeAs('orders/temp/' . $folder, $filename);
    //             $image = TemporaryFile::create(['folder' => $folder, 'filename' => $filename, 'used' => 'navbar']);
    //             // Arr::add($folders, $key, $folder);
    //             return response()->json(['folder' => $folder, 'id' => $image->id], 200);
    //         // }
    //     }
    //     if ($request->hasFile('navbar')) {
    //         $file  = $request->file('navbar');

    //         // foreach ($files as $key => $file) {
    //             $filename = $file->getClientOriginalName();
    //             $folder = uniqid() . '-' . time();
    //             $file->storeAs('orders/temp/' . $folder, $filename);
    //             $image = TemporaryFile::create(['folder' => $folder, 'filename' => $filename, 'used' => 'navbar']);
    //             // Arr::add($folders, $key, $folder);
    //             return response()->json(['folder' => $folder, 'id' => $image->id], 200);
    //         // }
    //     }
    //     if ($request->hasFile('seol')) {
    //         $file  = $request->file('seol');

    //         // foreach ($files as $key => $file) {
    //             $filename = $file->getClientOriginalName();
    //             $folder = uniqid() . '-' . time();
    //             $file->storeAs('orders/temp/' . $folder, $filename);
    //             $image = TemporaryFile::create(['folder' => $folder, 'filename' => $filename, 'used' => 'navbar']);
    //             // Arr::add($folders, $key, $folder);
    //             return response()->json(['folder' => $folder, 'id' => $image->id], 200);
    //         // }
    //     }
    // }

    public function index(Request $request)
    {
        if ($request->isMethod('delete')) {
            return $this->deleteTemporaryFile($request);
        }

        if ($request->hasFile('navbarIcon')) {
            return $this->uploadFile($request->file('navbarIcon'), 'navbarIcon');
        }

        if ($request->hasFile('carouselImage')) {
            return $this->uploadFile($request->file('carouselImage'), 'carouselImage');
        }

        if ($request->hasFile('aboutImage')) {
            return $this->uploadFile($request->file('aboutImage'), 'aboutImage');
        }

        return response()->json(['message' => 'failed'], 500);
    }

    protected function deleteTemporaryFile(Request $request)
    {
        $filepond = $request->json()->all();
        $folder = $filepond['folder'];
        $tempFile = TemporaryFile::where('folder', $folder)->first();
        $path = storage_path('public/orders/temp/' . $folder);

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

    protected function uploadFile($file, $fileUpload)
    {
        $filename = $file->getClientOriginalName();
        $folder = uniqid() . '-' . time();
        // $file->storeAs('orders/temp/' . $folder, $filename);
        $file->storeAs('public/orders/temp/' . $folder, $filename);
        $image = TemporaryFile::create(['folder' => $folder, 'filename' => $filename, 'used' => $fileUpload]);

        return response()->json(['folder' => $folder, 'id' => $image->id], 200);
    }

}
