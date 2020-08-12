@extends('admin_layout')
@section('admin_content')
    

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sản phẩm
                        </header>
                        <?php 
                        $message =Session::get('message');
                        if($message){
                            echo '<span class="alert alert-warning">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="product_name" placeholder="Điền tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="product_image" placeholder="Hình ảnh sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea rows="8" class="form-control" id="exampleInputPassword1" name="product_desc" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea rows="8" class="form-control" id="exampleInputPassword1" name="product_content" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="product_price" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="">Danh mục sản phẩm</label>
                                    <select name="product_cate" id="" class="form-control  input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach                              
                                    </select>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tác giả</label>
                                    <select name="product_author" id="" class="form-control  input-sm m-bot15">
                                        @foreach($author_product as $key => $author)
                                            <option value="{{$author->author_id}}">{{$author->author_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Hiển thị</label>
                                    <select name="product_status" id="" class="form-control  input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị<option>
                                    </select>
                                </div>
                                
                                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection