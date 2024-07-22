@extends('layout')
@section('title','Trang chủ')
@section('title2','Trang chủ')
@section('content')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="bg-body-secondary">
    <div class="container py-4 ">
      <h3 class="mb-3">Sản phẩm hot</h3>
      <div class="row ">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
          <div class="card shadow border-0 hover-trigger">
            <div class="position-relative">
              <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/{{$product -> image}}" class="card-img-top" alt="...">
              <a href="#"
                class="show-hover btn btn-heart position-absolute end-0 bottom-0 me-3 mb-3 btn-secondary rounded-pill">
                <i class="fa-regular fa-heart"></i> </a>
            </div>
            <div class="card-body">
              <a href="/detail" class="card-title">{{$product -> name}}</a>
              <p class="card-text mb-1">{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>

              <div class="float-end">
                <a href="#" class="btn btn-secondary btn-buy ">Mua</a>
               </div>
            </div>
          </div>
        </div> 
        @endforeach


      </div>
    </div>
  </div>

  <div class="bg-body-tertiary">
    <div class="container py-4 ">
      <h3 class="mb-3">Sale sập sàn</h3>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow border-0 hover-trigger">
            <div class="position-relative">
              <div class="badge-top">
                20%
              </div>
              <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top" alt="...">
              <a href="#"
                class="show-hover btn btn-heart position-absolute end-0 bottom-0 me-3 mb-3 btn-secondary rounded-pill">
                <i class="fa-regular fa-heart"></i> </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Áo hoodie</h5>
              <p class="card-text mb-1"><del>200.000đ</del></p>
              <p class="card-text text-danger mb-1">180.000đ</p>
              <div class="float-end">
                <a href="#" class="btn btn-secondary btn-buy">Mua</a>
               </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow border-0 hover-trigger">
            <div class="position-relative">
              <div class="badge-top">
                20%
              </div>
              <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top" alt="...">
              <a href="#"
                class="show-hover btn btn-heart position-absolute end-0 bottom-0 me-3 mb-3 btn-secondary rounded-pill">
                <i class="fa-regular fa-heart"></i> </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Áo hoodie</h5>
              <p class="card-text mb-1"><del>200.000đ</del></p>
              <p class="card-text text-danger mb-1">180.000đ</p>
              <div class="float-end">
                <a href="#" class="btn btn-secondary btn-buy">Mua</a>
               </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow border-0 hover-trigger">
            <div class="position-relative">
              <div class="badge-top">
                20%
              </div>
              <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top" alt="...">
              <a href="#"
                class="show-hover btn btn-heart position-absolute end-0 bottom-0 me-3 mb-3 btn-secondary rounded-pill">
                <i class="fa-regular fa-heart"></i> </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Áo hoodie</h5>
              <p class="card-text mb-1"><del>200.000đ</del></p>
              <p class="card-text text-danger mb-1">180.000đ</p>
              <div class="float-end">
                <a href="#" class="btn btn-secondary btn-buy">Mua</a>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="bg-body-secondary">
    <div class="container py-4 ">
      <h3 class="mb-3">Tin tức</h3>
      <div class="row">
        <div class="col-md-8">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/banner1.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card w-100 mb-3 border-0">
            <div class="card-body">
              <h5 class="card-title">
                Mùa Hè Sôi Động: Bán Quần Áo Đắt Hàng</h5>
              <p class="card-text w-100">Mỗi năm, khi những tia nắng mặt trời mở ra, cùng với làn gió mát của mùa hè,
                thị trường quần áo lại trở nên sôi động hơn bao giờ hết. Mùa hè không chỉ là thời điểm cho các chuyến du
                lịch, hội chợ nghệ thuật ngoài trời, hay các buổi tiệc tùng vui vẻ mà còn là cơ hội tuyệt vời để các nhà
                thiết kế và nhà sản xuất quần áo tung ra những bộ sưu tập mới nhất....</p>
                <div class="float-end">
              <a href="#" class="btn btn-secondary bor btn-buy  ">Xem chi tiết tại đây</a>
            </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
