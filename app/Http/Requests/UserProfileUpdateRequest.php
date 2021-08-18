<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserProfileUpdateRequest extends FormRequest
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
            'user_name' => 'string|max:255'
        ];
    }


    public function update()
    {
        $user = User::findOrFail(Auth::id());

        $this->filled('user_name') ? $user->name = $this->user_name : '';

        $this->filled('email') ? $user->email = $this->user_email : '';

        $user->save();


        //UserInfo Table
        $info = UserInfo::where('user_id', Auth::id())->first();

        $this->filled('full_name') ? $info->fullname = $this->full_name : '';

        $this->filled('user_address') ? $info->address = $this->user_address : '';

        $this->filled('user_contact') ? $info->contact = $this->user_contact : '';

        $this->filled('about_user') ? $info->about = $this->about_user : '';

        $info->save();
    }
}
