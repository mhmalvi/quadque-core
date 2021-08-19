<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAvatarUpdateRequest;
use App\Http\Requests\UserPasswordChangeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UserProfileUpdateRequest;


class UserProfileController extends Controller
{
    /**
     * update user information
     */
    public function update(UserProfileUpdateRequest $request)
    {
        try {
            $request->update();

            return response()->json(['message' => 'Data Saved Successfully.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }

    /**
     * update user password
     */
    public function updatePassword(UserPasswordChangeRequest $request)
    {
        try {
            $request->update();

            return response()->json(['message' => 'Password updated successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }

    /**
     * update profile picture
     */
    public function updateProfilePicture(UserAvatarUpdateRequest $request)
    {
        try {
            $request->update();

            return response()->json(['message' => 'Your profile picture changed successfully.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
