@if(isset($bus))
@if(count($bus)>0)
    @foreach($bus as $bu)
     
    <div class="col-md-3 pull-right bigtest" style="margin:15px;height:455px;">

	<figure class="card card-product test" >
		<div class="img-wrap">

        @if($bu->bu_image !="" || $bu->bu_image !=null)
        <img src="{{showImageIfexists($bu->bu_image)}}" class="" style="width:100%;height:100%">
      
    @else
        
        <img src="{{showImageIfexists()}}" style="width:100%;height:100%">
    @endif
        </div>
		<figcaption class="info-wrap">
				<h4 class="title">{{$bu->bu_name}}</h4>
                    @if(strlen($bu->bu_meta)>24)
				<p class="desc">{{substr($bu->bu_meta, 0, 22).'..'}}</p>
                @else
                    <p class="desc">{{$bu->bu_meta}}</p>
                    @endif
				<div class="rating-wrap">
					<div class="label-rating">{{$bu->bu_place}}</div>
					<div class="label-rating"><span>المساحه :</span>{{$bu->bu_square}}</div>
                        	<div class="label-rating"><span>صاحب العقار :</span>{{App\User::find($bu->user_id)->name}}</div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<a href="{{url('/buInfo/'.$bu->id)}}" class="btn btn-sm btn-primary float-right">عرض العقار</a>	
			<div class="price-wrap h5">
				<span class="price-new"> السعر {{ $bu->bu_price }}</span>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
       
</div> <!-- col // -->
@endforeach

@else
    <div class="alert alert-danger">لا توجد عقارات</div>
@endif
@endif
