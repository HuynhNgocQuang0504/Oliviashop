@extends('layout')
@section('title','Giới thiệu')
@section('title2','Giới thiệu')
@section('content')
<div class="bg-body-secondary">
    <div class="container py-5 mt-3" style="width: 700px;">
     
      <form>
        <h1>Liên hệ</h1>
        <p>Chúng tôi mong muốn lắng nghe ý kiến của khách hàng.Vui lòng gửi mọi yêu cầu,thắc mắc theo thông tin bên dưới,chúng tôi sẽ liên lạc với bạn sớm nhất có thể </p>
        <div class="mb-3">
          <label for="hoten" class="form-label">HỌ VÀ TÊN</label>
          <input type="text" class="form-control" id="hoten"  aria-describedby="emailHelp" placeholder="Nhập họ và tên">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp"placeholder="Nhập email">
        </div>
        <div class="mb-3">
          <label for="sdt" class="form-label">ĐIỆN THOẠI</label>
          <input type="text" class="form-control" id="sdt"aria-describedby="emailHelp" placeholder="Nhập số điện thoại">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">NÔI DUNG</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Nội dung liên hệ"></textarea>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-success fs-4" type="button">Gửi tin nhắn</button>
        </div>
      </form>
      <hr>
      <h2>Thông tin liên hệ</h2>
      <p>Địa chỉ: QTSC9, Khu CVPM Quang Trung, Q.12, TPHCM </p>
      <p>Email:quang@123 </p>
      <p>Số điện thoại: </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.443661489921!2d106.62525347480609!3d10.853821089299668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1715780687710!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



  

      </div>
  </div>
@endsection