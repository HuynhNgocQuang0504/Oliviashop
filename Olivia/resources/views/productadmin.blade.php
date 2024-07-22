@extends('layout-admin')
@section('title','Product-admin')
@section('title2','Product-admin')
@section('admin')
<a href="#" class="btn btn-primary float-end">Thêm sản phẩm </a>
<h2 class="my-3">Sản phẩm</h2>
<table class="table text-center align-middle">
  <thead>
    <tr>
      <th>STT</th>
      <th>Ảnh</th>
      <th>Tên SP</th>
      <th>Giá SP</th>
      <th>Lượt xem</th>
      <th>Lượt bán</th>
      <th class="text-end">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><img src="" class="rounded-3" style="width: 40px;" alt=""></td>
      <td>Áo hoodie</td>
      <td>100.000 VND</td>
      <td>100</td>
      <td>50</td>
      <td class="text-end">
        <button class="btn btn-warning">Cập nhật</button>
        <button class="btn btn-danger">Xóa</button>
      </td>
    </tr>

  </tbody>
</table>
@endsection