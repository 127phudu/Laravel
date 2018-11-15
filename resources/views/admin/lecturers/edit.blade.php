@extends('admin.admin_layout.admin_layout')

@section('content_header')
    <h1>Sửa thông tin sinh viên</h1>
@endsection

@section('content')
    <form>
        <div class="form-group">
            <label>Mã sinh viên</label>
            <input type="text" class="form-control" name="student_code" placeholder="Mã sinh viên của đối tượng">
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" name="name" placeholder="Họ và tên của đối tượng">
        </div>
        <div class="form-group">
            <label>VNU email</label>
            <input type="email" class="form-control" name="email" placeholder="Email của đối tượng">
        </div>
        <div class="form-group">
            <label>Khóa đào tạo</label>
            <input type="text" class="form-control" name="class" placeholder="Khóa đào tạo của đối tượng">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
