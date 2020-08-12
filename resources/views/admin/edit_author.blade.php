@extends('admin_layout')
@section('admin_content')
    

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sử tác giả
                        </header>
                        <?php 
                        $message =Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                    ?>
                        <div class="panel-body">
                           @foreach($edit_author_name as $key =>$edit_value) 
                            <div class="position-center">
                                <form role="form" action="{{url('/update-author-product')}}" method="post">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Tên tác giả</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$edit_value->author_name}}" name="author_name" placeholder="Điền tên tác giả">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Các tác phẩm</label>
                                    <textarea rows="8" class="form-control" id="exampleInputPassword1" name="Books_By_Author">{{$edit_value->author_name}}</textarea>
                                </div>
                               
                                <button type="submit" name="add_author_product" class="btn btn-info">Cập nhật tác giả</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection