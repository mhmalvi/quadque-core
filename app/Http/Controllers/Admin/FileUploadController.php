<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;

class FileUploadController extends Controller
{
    public function storeFile(Request $request)
    {
        try {
            if ($request->hasFile('thumbnail')) {
                $file = $request->file("thumbnail");

                $filename = $file->getClientOriginalName();

                $folder = uniqid() . "_" . now()->timestamp;

                $file->storeAs('public/thumbnails/tmp/' . $folder, $filename);

                TemporaryFile::create([
                    'folder' => $folder,
                    'filename' => $filename
                ]);

                return response()->json(['message' => "success", "file" => $folder], 200);
            }

            return;
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }
}
