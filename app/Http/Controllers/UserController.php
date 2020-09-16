<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    //

    public function authenticate(Request $request)
    {
        $credentials=$request->only('email','password');
        try{
            if(!$token=JWTAuth::attempt($credentials))
            {
                return response()->json(['error'=>"Invalid Credentials"]);
            }
        }catch (JWTException $ex)
        {
            return response()->json(['error'=>$ex->getMessage()]);
        }

        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
        try{

        }catch (\PDOException $exp)
        {




        }
    }
}
