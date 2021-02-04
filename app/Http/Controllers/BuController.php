<?php

namespace App\Http\Controllers;

use App\Events\NotificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\File;
use App\Bu;
use App\BulldingRequest;
use App\User;
class BuController extends Controller
{
   public function index(){
    $bus=Bu::all();
    return view('admin.bu.index',compact('bus'));
   }
   public function add(){
    return view('admin.bu.add');
   }
   public function store(Request $request){
    $userId=auth()->user()->id;
    
     $request->validate([
      
        'bu_name'=> 'required|min:5|max:190',
        'bu_price'=> 'required|max:20',
        'bu_rent'=> 'required|integer',
        'bu_square'=> 'required|max:10',
        'bu_type'=> 'required|integer',
        'bu_small_dis'=> 'required|min:5|max:190',
        'bu_meta'=> 'required|min:5|max:190',
        'bu_langtiude'=> 'required|min:5|max:190',
        'bu_latitude'=> 'required|min:5|max:190',
        'bu_long_dis'=> 'required|min:5|max:190',
        'bu_status'=> 'required|integer',
        'bu_rooms'=> 'required|integer'
        
    ]);
    $bu=new Bu();
    $bu->bu_name=$request->bu_name;
     $bu->bu_price=$request->bu_price;
      $bu->bu_rent=$request->bu_rent;
       $bu->bu_square=$request->bu_square;
        $bu->bu_type=$request->bu_type;
         $bu->bu_small_dis=$request->bu_small_dis;
          $bu->bu_meta=$request->bu_meta;
          $bu->bu_langtiude=$request->bu_langtiude;
           $bu->bu_latitude=$request->bu_latitude;
            $bu->bu_long_dis=$request->bu_long_dis;
             $bu->bu_status=$request->bu_status;
              $bu->bu_rooms=$request->bu_rooms;
              $bu->bu_place=$request->bu_place;
               $bu->user_id=$userId;
                if($request->file('bu_image')){
              
                $filename=$request->file('bu_image')->getClientOriginalName();
                $request->file('bu_image')->move(base_path().'/public/website-design/bu-images/',$filename);
                $bu->bu_image=$filename;
              }else
                    $bu->bu_image='';
              $bu->save();
              
        $request->session()->flash('message', 'Added was successful!');
     return view('admin.bu.add')->withFlashMessage("<h1>Success</h1>");
   
   }
   public function edite($id){
    $bu=Bu::find($id);
    return view('admin.bu.edite',compact('bu'));
   }
   
   public function UpdateBu(Request $request){
     $request->validate([
      
        'bu_name'=> 'required|min:5|max:190',
        'bu_price'=> 'required|max:20',
        'bu_rent'=> 'required|integer',
        'bu_square'=> 'required|max:10',
        'bu_type'=> 'required|integer',
        'bu_small_dis'=> 'required|min:5|max:190',
        'bu_meta'=> 'required|min:5|max:190',
        'bu_langtiude'=> 'required|min:5|max:190',
        'bu_latitude'=> 'required|min:5|max:190',
        'bu_long_dis'=> 'required|min:5|max:190',
        'bu_status'=> 'required|integer',
        'bu_rooms'=> 'required|integer'
        
    ]);
         $bu=  Bu::find($request->id);
        $bu->bu_name=$request->bu_name;
     $bu->bu_price=$request->bu_price;
      $bu->bu_rent=$request->bu_rent;
       $bu->bu_square=$request->bu_square;
        $bu->bu_type=$request->bu_type;
         $bu->bu_small_dis=$request->bu_small_dis;
          $bu->bu_meta=$request->bu_meta;
          $bu->bu_langtiude=$request->bu_langtiude;
           $bu->bu_latitude=$request->bu_latitude;
            $bu->bu_long_dis=$request->bu_long_dis;
             $bu->bu_status=$request->bu_status;
              $bu->bu_rooms=$request->bu_rooms;
               $bu->bu_place=$request->bu_place;
              // dd($request->toArray());

              if($request->file('bu_image')){
              
                $filename=$request->file('bu_image')->getClientOriginalName();
                 if(file_exists(base_path().'/public/website-design/bu-images/'.$filename)){
                    
                   File::delete(base_path().'/public/website-design/bu-images/'.$filename);
                }
                if($bu->bu_image!='' || $bu->bu_image!=null){
                 File::delete(base_path().'/public/website-design/bu-images/'.$bu->bu_image);
                }
                $request->file('bu_image')->move(base_path().'/public/website-design/bu-images/',$filename);
                $bu->bu_image=$filename;
              }else{
                  $bu->save();
                  $bus=Bu::all();
                  $request->session()->flash('message', 'Update was successful!');

                  return redirect('/adminpanal/bu')->with('message','Success Update');
              }
          
              $bu->save();

             $request->session()->flash('message', 'Update was successful!');

       return redirect('/adminpanal/bu')->with('message','Success Update');
         
        
    }
      public function delete(Request $request,$id){
      $bu=  Bu::find($id);
   BulldingRequest::where('bu_id',$id)->delete();
      $bu->delete();

     $request->session()->flash('message', 'Delete was successful!');
          return redirect('/adminpanal/bu')->with('message','Success');
    }
    
    
    
    
    
    public function show_all_bu_enabled(){
        $bus=Bu::where('bu_status',1)->orderBy('id','desc')->paginate(15);
        return view('website.bu.bu_all',compact('bus'));
    }
     public function forRent(){
        $bus=Bu::where('bu_status',1)->where('bu_rent',0)->orderBy('id','desc')->paginate(15);
        return view('website.bu.bu_all',compact('bus'));
    }
     public function forOwn(){
        $bus=Bu::where('bu_status',1)->where('bu_rent',1)->orderBy('id','desc')->paginate(15);
        return view('website.bu.bu_all',compact('bus'));
    }
     public function butype0(){
        $bus=Bu::where('bu_status',1)->where('bu_type',0)->orderBy('id','desc')->paginate(15);
      
       
        return view('website.bu.bu_all',compact('bus'));
    }
      public function butype1(){
        $bus=Bu::where('bu_status',1)->where('bu_type',1)->orderBy('id','desc')->paginate(15);
      
       
        return view('website.bu.bu_all',compact('bus'));
    }
      public function butype2(){
        $bus=Bu::where('bu_status',1)->where('bu_type',2)->orderBy('id','desc')->paginate(15);
      
       
        return view('website.bu.bu_all',compact('bus'));
    }
    public function search(Request $request){
         //  dd(array_except($request->toArray(),['_token']));
         
         $query=DB::table('bu')->select('*');
         $array=[];
        foreach(array_except($request->toArray(),['_token','page']) as $key=>$value){
        if($value !=null){
       $query->where($key,$value);
       $array[$key]=$value;
        }
        }
       $bus=$query->paginate(3);
        return view('website.bu.bu_all',compact('bus','array'));
       /*  $bus=Bu::where('bu_status',1)
         ->where('bu_type',$request->bu_type)
         ->where('bu_price',$request->bu_price)
          ->where('bu_square',$request->bu_square)
           ->where('bu_rent',$request->bu_rent)
         ->orderBy('id','desc')
         ->paginate(3);
       
        return view('website.bu.bu_all',compact('bus'));*/
    
        
    }
    public function buInfo($id){
        $buInfo=Bu::findOrFail($id);
       $busametype=Bu::where('bu_type',$buInfo->bu_type)->take(5)->get();
        return view('website.bu.buInfo',compact('buInfo','busametype'));
    }
    public function ajaxbuInformation(Request $request){
       
        return  Bu::find($request->id)->toJson();
    }
    public function contact(){
        return view('website.contact.contact');
    }
    
    /////////////////For user add
    public function userAdd(){
        return view('website.userBu.add');
    }
    public function userStore(Request $request){
        $userId=auth()->user()->id;
    
     $request->validate([
      
        'bu_name'=> 'required|min:5|max:190',
        'bu_price'=> 'required|max:20',
        'bu_rent'=> 'required|integer',
        'bu_square'=> 'required|max:10',
        'bu_type'=> 'required|integer',
        'bu_small_dis'=> 'required|min:5|max:190',
        'bu_meta'=> 'required|min:5|max:190',
        'bu_langtiude'=> 'required|min:5|max:190',
        'bu_latitude'=> 'required|min:5|max:190',
        'bu_long_dis'=> 'required|min:5|max:190',
        'bu_rooms'=> 'required|integer'
        
    ]);
    $bu=new Bu();
    $bu->bu_name=$request->bu_name;
     $bu->bu_price=$request->bu_price;
      $bu->bu_rent=$request->bu_rent;
       $bu->bu_square=$request->bu_square;
        $bu->bu_type=$request->bu_type;
         $bu->bu_small_dis=strip_tags($request->bu_small_dis);
          $bu->bu_meta=$request->bu_meta;
          $bu->bu_langtiude=$request->bu_langtiude;
           $bu->bu_latitude=$request->bu_latitude;
            $bu->bu_long_dis=strip_tags($request->bu_long_dis);
              $bu->bu_rooms=$request->bu_rooms;
              $bu->bu_place=$request->bu_place;
               $bu->user_id=$userId;
                if($request->file('bu_image')){
              
                $filename=$request->file('bu_image')->getClientOriginalName();
                $request->file('bu_image')->move(base_path().'/public/website-design/bu-images/',$filename);
                $bu->bu_image=$filename;
              }else
                    $bu->bu_image='';
              $bu->save();
              
        
     return view('website.userBu.done');
    }
    public function userShowBu(){
        $user=auth()->user();
        $bus=Bu::where('user_id',$user->id)->paginate(15);
        return view('website.userBu.showBu',compact('bus','user'));
    }
    //in the admin panal
    public function ShowBuForUser($userid){
        $username=User::find($userid)->name;
         $bus0=Bu::where('user_id',$userid)->where('bu_status',0)->get();
          $bus1=Bu::where('user_id',$userid)->where('bu_status',1)->get();
          return view('admin.showBuForOneUser.show',compact('bus0','bus1','username'));
    }
    public function showDisabledBu(){
          $bus=Bu::where('bu_status',0)->get();
    return view('admin.bu.showDisabledBu',compact('bus'));
    }
    ///////////////////
    public function sendRequest($idbu,$iduser){
        $new_request=new BulldingRequest();
        $new_request->user_id=$iduser;
        $new_request->bu_id=$idbu;
        $new_request->save();
        $user_id=Bu::findOrFail($idbu)->user_id;
        event(new NotificationRequest($user_id));
        return redirect()->back(); 
                                 
    }
    public function showMyRequest($iduser){
      $myBu=  Bu::where(['user_id'=> $iduser])->get();
     $arr=[];
     foreach($myBu as $bu=>$value){
        $arr[]=$value->id;
     }
    
     $myreq= BulldingRequest::whereIn('bu_id',$arr)->get();
      return view('website.userBu.showMyRequestBu',compact('myreq'));
    }
    public function showMyRequestInAjax(Request $request){
        $myBu=  Bu::where(['user_id'=> $request->id])->get();
        $arr=[];

        foreach($myBu as $bu=>$value){
            $arr[]=$value->id;
        }

        $myreq= BulldingRequest::whereIn('bu_id',$arr)->where('stutues',0)->count();
if($myreq==null)
    return 0;
else
        return $myreq;

    }
    public function changeRequestStutues($id){
        BulldingRequest::where('id',$id)->update(['stutues'=>1]);
          return redirect()->back(); 
    }
   
}
