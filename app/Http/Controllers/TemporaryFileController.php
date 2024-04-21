<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TemporaryFileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('delete')) {
            $filepond = $request->json()->all();
            $folder = $filepond['folder'];
            $tempFile = TemporaryFile::query()->where('folder', $folder)->first();
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
        if ($request->hasFile('filepond')) {
            $file  = $request->file('filepond');

            info($request->json()->all());

            // foreach ($files as $key => $file) {
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . time();
                $file->storeAs('orders/temp/' . $folder, $filename);
                $image = TemporaryFile::create(['folder' => $folder, 'filename' => $filename, 'used' => 'navbar']);
                // Arr::add($folders, $key, $folder);
                return response()->json(['folder' => $folder, 'id' => $image->id], 200);
            // }
        }
    }
}
