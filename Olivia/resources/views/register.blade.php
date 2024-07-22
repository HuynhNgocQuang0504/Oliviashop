@extends('layout')
@section('title','Đăng ký')
@section('title2','Đăng ký')
@section('content')
<div class="bg-body-secondary">
    <div class="container py-lg-5" style="width: 800px;">
     <form>
        <h1>Đăng ký</h1>
        <div class="mb-3">
          <label for="hoten" class="form-label">Họ và tên</label>
          <input type="text" class="form-control" id="hoten"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email1"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="pass1" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="pass1" >
        </div>
        <div class="mb-3">
          <label for="pass2" class="form-label">Nhập lại mật khẩu</label>
          <input type="password" class="form-control" id="pass2" >
        </div>
        

        <button type="submit" class="btn  btn-outline-primary float-end">Đăng ký</button>
      </form>
      </div>
  </div>
@endsection