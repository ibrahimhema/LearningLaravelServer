<?php

namespace App\Http\Controllers;

use App\BulldingRequest;
use Illuminate\Http\Request;

class Requests extends Controller
{
    //
    public function index(){
       $requests= BulldingRequest::paginate(20);
        return view('admin.requests.index',compact('requests'));
    }
    public function delete($id){
        $request=BulldingRequest::findOrFail($id);
        $request->delete();

        return redirect('/adminpanal/request/show');
    }
}
