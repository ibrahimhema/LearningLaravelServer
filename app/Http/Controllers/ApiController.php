<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;
class ApiController extends Controller
{
     public function index(){
        $bu=Bu::all();
        if($bu){
            return returnSuccessWithData($bu);
        }else
        
        return returnError("404","لا توجد عقارات");
     }
     public function changeStutues(Request $req){
       
       $validator= Validator::make($req->all(),['id'=>'required','newvalue'=>'required']);
        if($validator->fails()){
          return returnError("404","id is require");
        }else{
       
       
        Bu::where('id',$req->id)->update(['bu_status'=>$req->newvalue]);
        return returnSuccess(null,"changed success");
       
     }
     }
     public function login(Request $req){
        $validator= Validator::make($req->all(),['email'=>'required','password'=>'required']);
        if($validator->fails()){
          return returnError("404","data is required");
        }else{
       $email=$req->email;
       $pass=$req->password;
       $token=auth()->guard('user-api')->attempt(['email'=>$email,'password'=>$pass]);
        
       try{
      
       if($token){
        $user=auth()->guard('user-api')->user();
        $user->token=$token;
        return returnSuccessWithData($user,"5000","you are login user");
        }
          else
         return returnError("404","not authorized");
       }catch(\Exception $ex){
        
        dd( $ex->getMessage());
       }
          
     }
        
     }
     public function register(Request $req){
        $user=new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
    // $token= auth()->guard('user-api')->login($user);
      //   if($token){
        
        return returnSuccessWithData($user,"5000","you are register and login user");
       // }
       //   else
      //   return returnError("404","not register and not authorized");
     }
     public function user_profile(){
        try{
            if($user=auth()->guard('user-api')->userOrFail())
            return $user;
        else
        return "not loggined";
        }
        catch(\Tymon\JWTAuth\Exceptions\UserNotDefineException $ex){
            return response()->json(["error"=>$ex->getMessage()]);
        }
       //return returnSuccessWithData(auth()->user(),"5000","you are register and login user");
     }
     public function logout(){
        auth()->guard('user-api')->logout();
        return returnSuccess("5000","You Are Logout");
     }
}
