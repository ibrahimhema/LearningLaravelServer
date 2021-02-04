<?php

use App\SiteSetting;
use App\Contact;
use App\Bu;
use App\BulldingRequest;
use App\User;

function getSetting($namesetting='settingname'){

    return SiteSetting::where('settingname',$namesetting)->get()->first()->value;

}
function getname(){
    return [
        'bu_price'=>'السعر',
        'bu_rent'=>'نوع العمليه',
        'bu_square'=>'المساحه',
        'bu_type'=>'نوع العقار'
    ];
}
function getvalueoftype(){
    return [
        '0'=>'شقق',
        '1'=>'فيلا ',
        '2'=>'شاليه',

    ];
}
function getvalueofrent(){
    return [
        '0'=>'ايجار',
        '1'=>'تمليك ',

    ];
}
function showImageIfexists($iamgeName=''){
    if($iamgeName !=''){
        if(file_exists(base_path().'/public/website-design/bu-images/'.$iamgeName)){
            return Request::root().'/website-design/bu-images/'.$iamgeName;
        }
        return Request::root().getSetting('no-image');
    }
    else
        return Request::root().getSetting('no-image');

}
function getCountOfBulldingsForUser($userId){
    return Bu::where('user_id',$userId)->count();
}
function getCountOfBulldingsDisabled(){
    return Bu::where('bu_status',0)->count();
}
function getCountOfUsers(){
    return User::all()->count();
}
function getCountOfBu(){
    return Bu::all()->count();
}
function getCountUnReadMessage(){
    return Contact::where('contact_view',0)->count();
}
function getCountMessage(){
    return Contact::count();
}
function getUnReadMessage(){
    return Contact::where('contact_view',0)->get();
}
function setactive($strUrl){
    $requstUrl=Request::segment(1);
    if($strUrl==$requstUrl)
        return "active";
    else
        return '';
}
function getMonth(){
    return ["","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
}
//////////////////
function checkIfRequestSent($userid,$buid){
    $row=BulldingRequest::where(['bu_id'=>$buid,'user_id'=>$userid])->get();
    if(count($row)>0)
        return 1;
    else
        return 0;
}
function getUserNameFromId($userid){
    return User::select('name')->where('id',$userid)->first();

}
function getBuFromId($buid){
    return Bu::select('bu_name','bu_rooms','bu_price','bu_type','bu_place','created_at')->where('id',$buid)->first();

}
///////////////API////////////
function returnError($errorname,$message){
    return response()->json(['stutus'=>false,'ERRnum'=>$errorname,'message'=>$message]);
}
function returnSuccess($errorname="5000",$message=""){
    return response()->json(['stutus'=>true,'ERRnum'=>$errorname,'message'=>$message]);
}
function returnSuccessWithData($value,$errorname="5000",$message="",$key="data"){
    return response()->json(['stutus'=>true,'ERRnum'=>$errorname,'message'=>$message,$key=>$value]);
}


