@extends('layout-admin')
@section('title','Update Product')
@section('title2','Update Product')
@section('admin')
<h2 class="my-3">Cập nhật sản phẩm</h2>
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


                    <button type="submit" class="btn btn-primary mt-4 float-end">Cập nhật</button>
                  </form>

@endsection