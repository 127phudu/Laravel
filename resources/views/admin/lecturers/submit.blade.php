@extends('admin.admin_layout.admin_layout')

@section('content_header')

@endsection

@section('content')
    <link rel="stylesheet" href="http://localhost/Laravel/public/css/admin_view/form.css">
    <div class="form">
        <form>
            <h2>Thêm mới sinh viên</h2>
            <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="student_code" placeholder="Mã sinh viên">
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Nhập VNU email">
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                    <input type="text" class="form-control" name="class" placeholder="Khóa đào tạo">
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>





@endsection
