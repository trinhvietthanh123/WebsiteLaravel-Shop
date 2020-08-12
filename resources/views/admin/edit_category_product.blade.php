@extends('admin_layout')
@section('admin_content')
    

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục
                        </header>
                        <?php 
                        $message =Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                    ?>
                        <div class="panel-body">
                           @foreach($edit_category_product as $key =>$edit_value) 
                            <div class="position-center">
                                <form role="form" action="{{url('/update-category-product')}}" method="post">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$edit_value->category_name}}" name="category_product_name" placeholder="Điền tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea rows="8" class="form-control" id="exampleInputPassword1" name="category_product_desc">{{$edit_value->category_name}}</textarea>
                                </div>
                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection