@extends('layout')
@section('title','Quên mật khẩu')
@section('title2','Quên mật khẩu')
@section('content')

 
<div class="bg-body-secondary">
    <div class="container py-5 mt-3" style="width: 700px;">
     
      <form>
        <h1>Quên mật khẩu?</h1>
        <h3>Điền email gắn với tài khoản của bạn để nhận đường dẫn thay đổi mật khẩu</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="button">Tiếp tục</button>
          <button class="btn btn-light border-1" type="button">Quay lại đăng nhập</button>
        </div>
      </form>



  

      </div>
  </div> 
@endsection