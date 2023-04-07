<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserAuthController extends BaseController
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($request->password);
        ////////////////////////////////
        if($request->type=='user')
        $user = User::create($data);
        else
       $user=Admin::create($data);
       //////////////////////////////////
        $token = $user->createToken('MyApp')->accessToken;

        return response([ 'user' => $user, 'token' => $token]);
    }

    public function login(Request $request)
    {
        // if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
        //     $user = Auth::user(); 
        //     $success['token'] =  $user->createToken('MyApp')->accessToken; 
        //     $success['name'] =  $user->name;
   
        //     return $this->sendResponse($success, 'User login successfully.');
        // } 
        // else{ 
        //     return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        // } 

        if(auth()->guard('user')->attempt(['email' => request('email'), 'password' => request('password')])){

            config(['auth.guards.api.provider' => 'user']);
            
            $user = User::select('users.*')->find(auth()->guard('user')->user()->id);
            $success =  $user;
            $success['token'] =  $user->createToken('MyApp',['user'])->accessToken; 

       return $this->sendResponse($success, 'User login successfully.');
    }else{ 
        return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
}
public function loginAdmin(Request $request)
{
    // if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
    //     $user = Auth::user(); 
    //     $success['token'] =  $user->createToken('MyApp')->accessToken; 
    //     $success['name'] =  $user->name;

    //     return $this->sendResponse($success, 'User login successfully.');
    // } 
    // else{ 
    //     return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    // } 

    if(auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){

        config(['auth.guards.api.provider' => 'admin']);
        
        $admin = Admin::select('admins.*')->find(auth()->guard('admin')->user()->id);
        $success =  $admin;
        $success['token'] =  $admin->createToken('MyApp',['admin'])->accessToken; 

   return $this->sendResponse($success, 'admin login successfully.');
}else{ 
    return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    }
}

public function logout(Request $request)
{
    $request->user()->token()->revoke();
    return response()->json([
        'message' => 'Successfully logged out'
    ]);
}
public function logoutAdmin(Request $request)
{
    $request->user()->token()->revoke();
    return response()->json([
        'message' => 'Successfully logged out'
    ]);
}
}