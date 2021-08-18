<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPasswordChangeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UserProfileUpdateRequest;

class UserProfileController extends Controller
{
    public function update(UserProfileUpdateRequest $request)
    {
        try {
            $request->update();

            return response()->json(['message' => 'Data Saved Successfully.'], 200);
        } catch (\Throwable $th) {

            return response()->json(['message' => 'internal server error!'], 503);
        }
    }

    public function updatePassword(UserPasswordChangeRequest $request)
    {
        try {
            $request->update();

            return response()->json(['msg' => 'Password updated successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['msg' => $th->getMessage()], 503);
        }
    }
}
