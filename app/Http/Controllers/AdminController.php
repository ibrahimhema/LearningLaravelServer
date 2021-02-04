<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
       $charts = DB::select(DB::raw("select count(*) as counting , month(created_at) as months from bu group by  months order by months asc"));
          $latestUser=User::take(5)->orderBy('id')->get();
        
       return view('admin.home.newIndex',compact('charts','latestUser'));
     
    }
  
}
