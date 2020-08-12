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
                            echo '<span class="alert alert-warning">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{url('/save-author-product')}}" method="post">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Tên tác giả</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="author_name" placeholder="Điền tên tác giả">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Các tác phẩm của tác giả</label>
                                    <textarea rows="8" class="form-control" id="exampleInputPassword1" name="Books_By_Author" placeholder="Các tác phẩm"></textarea>
                                </div>
            
                                
                                <button type="submit" name="add_author_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection