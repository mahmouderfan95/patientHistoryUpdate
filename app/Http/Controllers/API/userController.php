<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\API\users\Store;
use Validator;
use JWTAuth;
use Response;
class userController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Store $request){
        // $users_data = $request->all();
        // $users_data['password'] = bcrypt($request->password);
        // $user_create = User::create($users_data);
        // return response()->json($user_create);
    }

    public function edit($id){

    }

    public function update($id,Request $request){

    }

    public function destroy(){

    }

    /* register function by token */
    public function register(Request $request){
        /* array data */
        $arr = [
            'name'  => 'required',
            'email' => 'required|email',
            'password'  => 'required',
        ];
        /* array data */
        /* validator */
        $vaild = Validator::make($request->all(),$arr);
        /* validator */

        /* vaild error */
        if($vaild->fails()){
            return response()->json($vaild->errors());
        }
        /* valid error */

        /* user created */
        $user_create = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        /* user created */
        /* jwt auth token */
        $token = JWTAuth::fromUser($user_create);
        return Response::json(compact('token'));
        /* jwt auth token */
    }
    /* function register */
    /* function login */
    public function login(Request $request){
        $arr = [
            'email'=>'required|email',
            'password'=>'required'
        ];
        $valid = Validator::make($request->all(),$arr);
        if($valid->fails()){
            return response()->json($valid->errors());
        }

        $attmp = $request->only('email','password');
        try{
            if(!$token = JWTAuth::attempt($attmp)){
                return response()->json(['error'=>'invalid email and password'],[401]);
            }
        }
        catch(JWTException $e){
            return response()->json(['error'=>'could not create token'],[500]);
        }
        return response()->json(compact('token'));
    }

    /* function login */
}
