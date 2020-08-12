<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/Front-End/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Front-End/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Front-End/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/Front-End/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/Front-End/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/Front-End/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/Front-End/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/Front-End/css/style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/Front-End/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/Front-Endimages/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/Front-Endimages/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/Front-Endimages/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/Front-Endimages/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="{{url('/admin')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Thể loại<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										@foreach($category as $key=>$cate)
									<li><a href="{{url('/the-loai/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
										@endforeach
                                        
					
									
                                    </ul>
                                </li> 
								<li><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                  
                                </li> 
								<li><a href="404.html">404</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Ruồi Trâu</span></h1>
									<h2>96.000đ</h2>
									<p>Truyện xoay quanh nhân vật trung tâm là chàng thanh niên Arthur - bí danh “Ruồi trâu”, một thanh niên hiền lành, thánh thiện, hiến dâng tất cả tình cảm riêng tư cho lý tưởng cách mạng. </p>
									<button type="button" class="btn btn-default get">Xem ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/Front-End/images/home/Ruoitrau.jpg')}}" class="girl img-responsive')}}" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Thép đã tôi thế đấy</span></h1>
									<h2>92.900đ</h2>
									<p> Nhân vật Paven là một hình ảnh điển hình sâu sắc, thể hiện những phẩm chất chính trị, lòng trung thành sâu sắc của người thanh niên Xô Viết đối với Đảng, Tổ quốc, nhân dân. </p>
									<button type="button" class="btn btn-default get">Xem ngay</button>
								</div>
								<div class="col-sm-6"><img src="{{('public/Front-End/images/home/thepda.jpg')}}" class="girl img-responsive')}}" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Những người khốn khổ</span></h1>
									<h2>120.000đ</h2>
									<p>Những người khốn khổ là bộ truyện lớn nhất mà cũng là tác phẩm có giá trị nhất trong sự nghiệp văn chương của Victor Hugo. Ông đã suy nghĩ về tác phẩm này và viết nó trong ngót ba mươi năm. </p>
									<button type="button" class="btn btn-default get">Xem ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/Front-End/images/home/khonkho.jpg')}}" class="girl img-responsive')}}" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Thể loại</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $key=>$cate)
								<div class="panel-heading">
								<h4 class="panel-title"><a href="{{url('/the-loai/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							@endforeach
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Tác giả</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($author as $key=>$aut)
								<li><a href="{{url('/tac-gia/'.$aut->author_id)}}"> <span class="pull-right">({{$aut->author_id}})</span>{{$aut->author_name}}</a></li>
									@endforeach
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('public/Front-Endimages/home/shipping.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Books</span>-shopper</h2>
							
						</div>
					</div>
					
						
						
						<div class="col-sm-7">
							<p class="info_1">Phông nền website được lấy từ trên mạng và được thiết kế lại thành web bán sách bởi Trịnh Việt Thành
								<br/>
								
							</p>
						</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/Front-End/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	

  
    <script src="{{asset('public/Front-End/js/jquery.js')}}"></script>
	<script src="{{asset('public/Front-End/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/Front-End/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/Front-End/js/price-range.js')}}"></script>
    <script src="{{asset('public/Front-End/js/jquer.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/Front-End/js/main.js')}}"></script>
</body>
</html>