@extends('layout')
@section('content')
                    <div class="features_items"><!--features_items-->
                        @foreach($author_name as $key => $name)
                    <h2 class="title text-center">{{$name->author_name}}</h2>
                        @endforeach
						@foreach ($author_by_id as $key => $prod)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									
										<div class="productinfo text-center">
											<img src="{{URL::to('public/upload/'.$prod->product_image)}}" alt="" />
										<h2>{{$prod->product_price}}</h2>
											<p>{{$prod->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<!--features_items-->
                   
                   
@endsection