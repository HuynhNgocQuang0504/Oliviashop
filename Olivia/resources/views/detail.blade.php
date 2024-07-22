@extends('layout')
@section('title','Chi tiết sản phẩm')
@section('title2','Chi tiết ản phẩm')
@section('content')
<div class="bg-body-secondary">
    <div class="container py-5 ">
        <div class="row mt-3 mb-3 ">
            <div class="col-md-9 mt-1">
                <div class="row mx-3">
                    <div class="col-sm-12  mb-3">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title mt-4 ">Áo hoodie đen</h5>
                                    <p class="card-text text-danger" style="font-size: xx-large;">100.000đ</p>
                                    <p class="card-text">Kích thước</p>
                                    <div class="d-grid gap-2 mt-4">
                                        <button class="btn btn-light me-2 border-dark btn-size" type="button"
                                            data-bs-toggle="modal" data-bs-target="#Modal">Hướng
                                            dẫn chọn size</button>
                                        <button class="btn btn-secondary me-2" type="button">Thêm vào giỏ
                                            hàng</button>
                                    </div>
                                    <p class="card-text"><b>Chất liệu:</b> Vải nỉ</p>
                                    <p class="card-text"><b>Kiểu dáng:</b> Áo khoắc zip,phù hợp cả nam và nữ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<hr>
    <div class="bg-body-secondary">
        <div class="container  ">
            <h3 class="mb-3">Sản phẩm liên quan</h3>
            <div class="row ">
                <div class="col-md-3 mb-4">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
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
                                <a href="#" class="btn btn-secondary btn-buy ">Mua</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
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
                <div class="col-md-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
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
                <div class="col-md-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
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
@endsection