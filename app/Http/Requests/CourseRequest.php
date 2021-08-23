<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CourseRequest extends FormRequest
{
    public function storeThumbnail()
    {
        $temporaryFile = TemporaryFile::where('folder', $this->thumbnail)->first();

        $filename = $temporaryFile->filename;

        if ($this->filled('imgTitle')) {
            $title = Str::slug($this->imgTitle);
            $ext = $temporaryFile->ext;
            $filename = "{$title}.{$ext}";
        }

        Image::make(storage_path('app/public/thumbnails/tmp/' . $temporaryFile->folder . '/' . $temporaryFile->filename))
            ->fit(1080, 720)
            ->save(storage_path('app/public/thumbnails/' . $filename));

        Storage::deleteDirectory('public/thumbnails/tmp/' . $temporaryFile->folder);

        $temporaryFile->delete();

        return $filename;
    }
}
