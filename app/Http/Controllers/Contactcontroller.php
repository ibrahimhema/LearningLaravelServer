<?php

namespace App\Http\Controllers;


use App\Mail\ReplayEmail;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class Contactcontroller extends Controller
{
    public function save(Request $request){
        $request->validate([

            'contact_name'=> 'required|min:2|max:190',
            'contact_email'=> 'required',
            'contact_message'=> 'required|min:5|max:190',
            'contact_type'=> 'required',


        ]);
        Contact::create($request->all());
        return redirect()->back();
      
    }
    public function index(){
        $contacts=Contact::all();
        return view('admin/contact/index',compact('contacts'));
    }
    public function edite($id){
        $con=Contact::find($id);
        //$con->contact_view=1;
        return view('admin/contact/edite',compact('con'));
    }
    public function UpdateCon(Request $req){
        $con=Contact::find($req->id);
        $con->contact_name=$req->contact_name;
        $con->contact_email=$req->contact_email;
        $con->contact_message=$req->contact_message;
        $con->contact_type=$req->contact_type;
        $con->contact_view=$req->contact_view;
        $con->save();
         $contacts=Contact::all();
        return view('admin/contact/index',compact('contacts'));

    }
     public function delete($id){
        $con=Contact::find($id);
        $con->delete();
         $contacts=Contact::all();
        return view('admin/contact/delete',compact('con'));
    }
    public function SendReplay(Request $request){
        $request->validate([

            'replay'=> 'required|min:2|max:190',

        ]);
     $arr=$request->toArray();
        Mail::to($request->email)->send(new ReplayEmail($arr));
        return redirect('/adminpanal/contact/show');
    }
}
