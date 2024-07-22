@extends('layout')
@section('title','Giới thiệu')
@section('title2','Giới thiệu')
@section('content')
<div class="container">
    <div class="row mt-3 mb-3">

      <div class="col-md-6">
        <h2>Thanh toán</h2>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <label for="exampleInputPassword1" class="form-label">Họ</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="col-6 mb-3 ">
              <label for="exampleInputPassword1" class="form-label">Tên</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="row">
            <div class="col-6 mb-3">

              <select class="form-select" aria-label="Default select example">
                <option selected>Chọn Quốc Gia</option>
                <option value="1">Việt Nam</option>
                <option value="2">Mỹ</option>
                <option value="3">Canada</option>
              </select>
            </div>

            <div class="col-6 mb-3 ">
              <select class="form-select" aria-label="Default select example">
                <option selected>Chọn Tỉnh/Thành phố</option>
                <option value="1">Hồ Chí Minh</option>
                <option value="2">Hà Nội</option>
                <option value="3">Long An</option>
              </select>
            </div>
          </div>

        </form>
      </div>


      <div class="col-md-6">
        <div class="p-3 p-lg-5 border bg-white">
          <table class="table site-block-order-table mb-5">
            <thead>
              <tr><th>Sản phẩm</th>
              <th>Giá</th>
            </tr></thead>
            <tbody>
              <tr>
                <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                <td>100.000 VND</td>
              </tr>
              <tr>
                <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                <td>100.000 VND</td>
              </tr>

              <tr>
                <td class="text-black font-weight-bold"><strong>Tổng số đơn hàng</strong></td>
                <td class="text-black font-weight-bold"><strong>200.000 VND</strong></td>
              </tr>
            </tbody>
          </table>

          <div class="border p-3 mb-3">
            <h3 class="h6 mb-0"><a class="d-block collapsed" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Thanh toán bằng thẻ tín dụng</a></h3>

            <div class="collapse" id="collapsebank" style="">
              <div class="py-2">
                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
              </div>
            </div>
          </div>

          <div class="border p-3 mb-3">
            <h3 class="h6 mb-0"><a class="d-block collapsed" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">ZaloPays</a></h3>

            <div class="collapse" id="collapsecheque" style="">
              <div class="py-2">
                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
              </div>
            </div>
          </div>

          <div class="border p-3 mb-5">
            <h3 class="h6 mb-0"><a class="d-block collapsed" data-bs-toggle="collapse" href="#collapsepaypal"  role="button" aria-expanded="false" aria-controls="collapsepaypal">Thanh toán khi nhận hàng</a></h3>

            <div class="collapse" id="collapsepaypal" style="">
              <div class="py-2">
                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
              </div>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-success btn-lg py-3 btn-block" >Thanh toán</button>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection