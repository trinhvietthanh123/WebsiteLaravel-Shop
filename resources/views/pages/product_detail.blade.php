@extends('layout')
@section('content')
@foreach ($detail_product as $key => $value)
    

    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
            <img src="{{url('public/upload/'.$value->product_image)}}" alt="" />
                
            </div>
            

        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$value->product_name}}</h2>
                <br/>
            <p>Web ID: {{$value->product_id}}</p>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                    <span>{{$value->product_price}}</span>
                    <label>Số lượng:</label>
                    <input type="number" min="1" max="10" value="1" />
                    <button type="button" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Thêm vào giỏ hàng
                    </button>
                </span>
                <p><b>Trạng thái:</b> Còn hàng</p>
            <p><b>Thể loại:</b> {{$value->category_name}}</p>
                <p><b>Tác giả:</b> {{$value->author_name}}</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
        @endforeach
   <!--/product-details-->
   <div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a href="#details" data-toggle="tab">Nội dung</a></li>
           
            <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade" id="details" >
           
            <p>{!!$value->product_content!!}</p>
        </div>
        
        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
            <p>{!!$value->product_desc!!}</p>
        </div>
        
    </div>
</div><!--/category-tab-->
                   
                   
@endsection