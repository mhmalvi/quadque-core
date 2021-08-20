<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;

class FileUploadController extends Controller
{
    public function storeFile(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $file = $request->file("thumbnail");

            $filename = $file->getClientOriginalName();

            $folder = uniqid() . "_" . now()->timestamp;

            $file->storeAs('public/thumbnails/temp/' . $folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return response()->json(['message' => "success", "file" => $folder], 200);
        }

        return;
    }
}
