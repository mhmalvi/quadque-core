<?php

namespace App\Http\Requests;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Str;


class CourseCreateRequest extends CourseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|string',
            'category' => 'required|string|max:255',
            'lessons' => 'required|integer',
        ];
    }

    /**
     * 
     */
    public function save()
    {
        $product = Course::create([
            'uuid' => Str::orderedUuid(),
            'code' => $this->code,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'category_id' => $this->category(),
            'lessons' => $this->lessons,
            'thumbnail' => $this->has('thumbnail') ? $this->storeThumbnail() : null,
            'alt' => $this->filled('alt') ? $this->alt : $this->title,
            'description' => $this->descriptions,
            'publish' => $this->draft ? 0 : 1
        ]);

        return $product;
    }


    /**
     * 
     */
    private function category()
    {
        if ($this->category !== 'uncategorized') {
            $category = Category::where('title', $this->category)->first();

            return $category->id;
        }

        return null;
    }
}
