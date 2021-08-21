<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CourseRequest extends FormRequest
{
    public function storeThumbnail()
    {
        $temporaryFile = TemporaryFile::where('folder', $this->thumbnail)->first();

        $filename = $this->filled('imgTitle') ? $this->imgTitle : $temporaryFile->filename;

        if ($temporaryFile) {
            Image::make(storage_path('app/public/thumbnails/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
                ->fit(1080, 720)
                ->save(storage_path('app/public/thumbnails/' . $filename));

            Storage::deleteDirectory('public/thumbnails/tmp/' . $temporaryFile->folder);

            $temporaryFile->delete();
        }
    }
}
