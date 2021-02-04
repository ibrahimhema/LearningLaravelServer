@if(Session::has('message'))
   <div class="alert alert-danger sweet" style="display:none">
   gffffffffffffffffffffffffffffffffffffxkuuuuuuuuuuu
     {{ Session::get('message')}}
   </div>
 {{ Session::forget('message')}}
   
  
@endif
