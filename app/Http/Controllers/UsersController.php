<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BulldingRequest;
use App\Bu;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
      public function create(){
       return view('admin.users.add');
     
    }
    public function SaveUser(Request $request){
       
     /* dd(   Validator::make([$request->name,$request->email,$request->password], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]));*/
       
        User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => Hash::make( $request->password),
        ]);
        return view('admin.users.add')->withFlashMessage('success');
    }
    public function edite(Request $request,$id){
      $user=  User::find($id);
        return view('admin.users.edite',compact('user'));
    }
    
    public function UpdateUser(Request $request){
         $user=  User::find($request->id);
         $user->name=$request->name;
          $user->email=$request->email;
          if(!empty($request->password))
           $user->password=Hash::make( $request->password);
           $user->save();
            $users=User::all();
        return view('admin.users.index',compact('users'))->withFlashMessage('<h1>success</h1>');
         
        
    }
      public function delete($id){
      $user=  User::find($id);
      Bu::where('user_id',$id)->delete();
    BulldingRequest::where('user_id',$id)->delete();
      $user->delete();
       $users=User::all();
        return view('admin.users.index',compact('users'))->withFlashMessage('<h1>success</h1>');
    }
}
