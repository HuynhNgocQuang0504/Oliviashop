@extends('layout')
@section('title','Sản phẩm')
@section('title2','Sản phẩm')
@section('content')
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-3">
            <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-solid fa-bars"></i> DANH MỤC
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                              @foreach ($categories as $item)
                              <li class="list-group-item border-0 border-bottom"><a href="{{ route('list',$item -> id) }}">{{$item -> name}}</a></li>

                              @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="row mx-3">
              @foreach ($products as $item)
              <div class="col-sm-4  mb-3">
                <div class="card shadow border-0 hover-trigger">
                    <div class="position-relative">
                        <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/{{$item -> image}}" class="card-img-top"
                            alt="...">
                        <a href="#"
                            class="show-hover btn btn-heart position-absolute end-0 bottom-0 me-3 mb-3 btn-secondary rounded-pill">
                            <i class="fa-regular fa-heart"></i> </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$item -> name}}</h5>
                        <p class="card-text text-danger mb-1">{{ number_format($item->price, 0, ',', '.') }}</p>
                        <div class="float-end">
                            <a href="#" class="btn btn-secondary btn-buy">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach


                <div class="col-sm-4  mb-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
                            <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top"
                                alt="...">
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

                <div class="col-sm-4  mb-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
                            <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top"
                                alt="...">
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

                <div class="col-sm-4  mb-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
                            <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top"
                                alt="...">
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

                <div class="col-sm-4  mb-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
                            <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top"
                                alt="...">
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

                <div class="col-sm-4  mb-3">
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative">
                            <img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" class="card-img-top"
                                alt="...">
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

        
            <div class="offset-sm-5 col-sm-4">
                <ul class="pagination rounded ">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-hand-point-up"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-hand-point-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-hand-point-right"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-hand-point-down"></i></a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>

@endsection