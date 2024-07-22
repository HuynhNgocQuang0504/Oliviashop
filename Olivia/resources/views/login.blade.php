@extends('layout')
@section('title','Đăng nhập')
@section('title2','Đăng nhập')
@section('content')

<div class="bg-body-secondary">
    <div class="container py-lg-5" style="width: 800px;">
     
      <form>
        <h1>Đăng nhập</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email của bạn" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
        </div>
        <button type="submit" class="btn  btn-outline-primary">Đăng ký</button>
        <button type="submit" class="btn btn-primary float-end">Đăng nhập</button>
      </form>
      </div>
  </div>
@endsection