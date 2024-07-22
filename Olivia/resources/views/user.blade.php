@extends('layout-admin')
@section('title','Admin')
@section('title2','Admin')
@section('admin')
<a href="#" class="btn btn-primary float-end">Thêm tài khoản</a>
            <h2 class="my-3">TÀI KHOẢN</h2>
            <table class="table text-center align-middle">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Ảnh</th>
                  <th class="text-start">Họ tên</th>
                  <th>Số điện thoại</th>
                  <th class="text-end">Hành Động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><img src="dongco.jpg" class="rounded-3" style="width: 40px;" alt=""></td>
                  <td class="text-start">Huỳnh Ngọc Quang</td>
                  <td>0334252565</td>
                  <td class="text-end">
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                  </td>
                </tr>

              </tbody>
            </table>
@endsection