<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserAvatarUpdateRequest extends FormRequest
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
            'avatar' => 'required|mimes:jpg,jpeg,png'
        ];
    }

    public function update()
    {
        $user = User::findOrFail(Auth::id());

        $avatar = $this->file('avatar');
        Storage::delete('public/users/' . $user->photo);

        $resize = Image::make($avatar)->fit(300)->encode('jpg');
        $hash = md5($resize->__toString());
        $name = "{$hash}.jpg";
        $user->avatar = $name;

        Storage::put('public/users/' . $name, $resize->__toString());

        $user->save();
    }
}
