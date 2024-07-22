@extends('layout-admin')
@section('title','Thêm sản phẩm')
@section('title2','Thêm sản phẩm')
@section('admin')
<h2 class="my-3">Thêm sản phẩm</h2>
<form>
    <div class="mb-3">
      <label for="sodienthoai" class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="hoten" class="form-label">Giá sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <label for="product_image">Hình ảnh:</label><br>
      <input type="file" id="product_image" name="product_image"><br>


    <button type="submit" class="btn btn-primary mt-4 float-end">Thêm</button>
  </form>
@endsection