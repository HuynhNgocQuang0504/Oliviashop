@extends('layout')
@section('title','Welcome to NQshop')
@section('title2','Welcome to NQshop')
@section('content')
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-3">
          <div class="card mb-3 border-0" >
            <div class="row g-0">
              <div class="col-4">
                <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/anh.webp  " class="img-fluid rounded-circle" alt="...">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">Quangvippro123</h5>
                  <p class="card-text"><i class="fa-solid fa-pen"></i> Chỉnh sửa</p>
                </div>
              </div>
            </div>
            <br>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa-solid fa-user"></i> Thông tin tài khoản</li>
              <li class="list-group-item"><i class="fa-solid fa-bookmark"></i> Đơn mua</li>
              <li class="list-group-item"><i class="fa-solid fa-book-open"></i> Theo dõi đơn hàng</li>
              <li class="list-group-item"><i class="fa-solid fa-clock-rotate-left"></i> Lịch sử mua</li>
              <li class="list-group-item"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</li>
            </ul>

          </div>
          </div>



      <div class="col-md-9 bg-body-secondary">
<h2 class="py-2">Thông tin tài khoản</h2>
<hr>
<p><b style="font-size: larger;">Tên đăng nhập:</b> Huỳnh Ngọc Quang</p>
<p><b style="font-size: larger;">Email:</b> qu*******gmail.com</p>
<p><b style="font-size: larger;">Số điện thoại:</b> 09*********87</p>
<b style="font-size: larger;">Giới tính</b>
<div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Nam
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Nữ
    </label>
  </div>
  <b style="font-size: larger;">Ngày sinh: 05/04/2004</b>


      </div>

    </div>
    </div>


@endsection
