<?php

namespace App\Http\Controllers;
use App\SiteSetting;

use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index(){
      $settings=  SiteSetting::all();
 
      return view('admin.settings.index',compact('settings'));
    }
    public function save(Request $req){

        foreach(array_except($req->toArray(),['_token']) as $key=>$value){
            $updatesetting=SiteSetting::where('settingname',$key)->get()->first();
            $updatesetting->value=$value;
           $updatesetting->save();
         //  print_r($updatesetting);
        }
       return redirect()->back();
        
    }
}
