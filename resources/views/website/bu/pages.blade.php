<div class="col-md-3 col-sm-3 col-xs-12">

       <div class="nav-sidebar2">
       <div>
       <form class="form-search-in-bu" action="{{url('/serach')}}" method="GET">
       @csrf
        <input type="text"  class="form-control" name="bu_price" placeholder="ادخل السعر"/>
          <input id="bu_square" type="text" class="form-control" name="bu_square" placeholder="ادخل المساحه">
        <select id="bu_type" class="form-control " name="bu_type" >
                                <option value="0">شقه</option>
                                <option value="1">فيلا</option>
                                <option value="2">شاليه</option>
         </select>
              <select id="bu_rent"  class="form-control" name="bu_rent">
                                <option value="0">ايجار</option>
                                <option value="1">تمليك</option>
                                </select>
                                     <button type="submit" class="btn btn-primary">
                                    {{"بحث في العقارات" }}
                                </button>
                                    </form>
       </div>
		<ul class="">
        @if(Auth::user())
            <li ><a href="{{url('/user/showBu')}}" >عقاراتي</a></li>
                  <li ><a href="{{url('/user/showMyRequest/'.Auth::user()->id)}}" >طلبات المعاينه لعقاراتي
                  <span data-id="{{Auth::user()->id}}" class="countrequest" style="color: red;margin-right: 20px">0</span><i class="fa fa-bell"></i></a>
                  </li>
                     <li ><a href="{{url('/user/add')}}" >اضف عقار</a></li>
                        <hr>
        @endif
        <hr>
          <li class="{{setactive('forrent')}}"><a href="{{url('/forrent')}}">ايجار</a></li>
          <li class="{{setactive('forown')}}"><a href="{{url('/forown')}}" >تمليك</a></li>
            <li class="{{setactive('butype0')}}"><a href="{{url('/butype0')}}" >شقق</a></li> 
                <li class="{{setactive('butype1')}}"><a href="{{url('/butype1')}}" >فيلا</a></li>
                    <li class="{{setactive('butype2')}}"><a href="{{url('/butype2')}}" >شاليهات</a></li>                              
		</ul>
	</div>
</div>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('4c85000816d9d510aa31', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('new-notification');

    channel.bind('App\\Events\\NotificationRequest', function (data) {
        var userId ={{ (auth()->user())? auth()->user()->id:null }};
        if (userId != null) {

            var buid = data.idbu;
            if (userId == buid) {
                alert("you have new request from user id " + data.idbu + "  ");

                window.location.reload();
            }
        }
        else
            alert("not register");
    });
    /*  channel.bind('App\\Events\\NotificationRequest', function(data) {
          alert(data);
          alert(JSON.stringify(data));
      });*/
</script>

    <script>
        //this script for get notification by ajax without pusher

        $(document).ready(function () {
            var id=$('.countrequest').data('id');

            var url="{{Request::root()}}";
            $.get(url+'/ajax/req/request?id='+id, function(data, status){

                var json=JSON.parse(data);
                $('.countrequest').html(json);

            });
        });

    </script>