@extends('layout')
@section('title','Giới thiệu')
@section('title2','Giới thiệu')
@section('content')
<div class="bg-body-secondary">
    <div class="container py-5 ">

      <table class="table text-center ">
        <thead>
          <tr>
            <th>Ảnh</th>
            <th>Tên SP</th>
            <th>Giá SP</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" alt="" style="width: 60px;"></td>
            <td>Áo hoodie</td>
            <td>100.000đ</td>
            <td>2</td>
            <td>100.000đ</td>
            <td><button class="btn"><i class="fa-solid fa-trash-can" style="color: #f11313;"></i></button>
            </td>
          </tr>

          <tr>
            <td><img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" alt="" style="width: 60px;"></td>
            <td>Áo hoodie</td>
            <td>100.000đ</td>
            <td>2</td>
            <td>100.000đ</td>
            <td><button class="btn"><i class="fa-solid fa-trash-can" style="color: #f11313;"></i></button>
            </td>
          </tr>
          <tr>
            <td><img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" alt="" style="width: 60px;"></td>
            <td>Áo hoodie</td>
            <td>100.000đ</td>
            <td>2</td>
            <td>100.000đ</td>
            <td><button class="btn"><i class="fa-solid fa-trash-can" style="color: #f11313;"></i></button>
            </td>
          </tr>
          <tr>
            <td><img src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/img/sp1.jpeg" alt="" style="width: 60px;"></td>
            <td>Áo hoodie</td>
            <td>100.000đ</td>
            <td>2</td>
            <td>100.000đ</td>
            <td><button class="btn"><i class="fa-solid fa-trash-can" style="color: #f11313;"></i></button>
            </td>
          </tr>
        </tbody>
        <tfoot>

          <td></td>
          <td></td>
          <td rowspan="3" class="text-center ">
            <h2>Tổng tiền</h2>
          </td>
          <td></td>
          <td>800.000đ</td>
          <td><button class="btn btn-primary fs-5"><a href="#" style="color: aliceblue; text-decoration: none;"
                data-bs-toggle="modal" data-bs-target="#Modal">Thanh toán</a></button>
                <button class="btn xoaHet"><i class="fa-solid fa-trash-can" style="color: #f11313;"></i></button>  
          </td>
        </tfoot>
      </table>
    </div>
  </div>
@endsection