<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // Set validator
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:5',
        ]);

        // If validations fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // get credentials from request
        $credentials = $request->only('username', 'password');

        //if auth fails
        if(!$token = auth() ->guard('api')->attempt($credentials)){
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        //if auth success
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => auth()->guard('api')->user()
        ], 200);
    }
}
