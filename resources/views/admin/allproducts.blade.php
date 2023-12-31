@extends('admin.layouts.template')
@section('page_title')
All Products-Ecommerce
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Products</h4>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message'); }}
    </div>

    @endif

    <div class="card">
        <h5 class="card-header">Available Products</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>
                    <img src="{{ asset($product->product_img) }}" alt="" height="100px">
                    <br>
                    <a href="{{ route('editproductimg',$product->id) }}" class="btn btn-primary">update image</a>
                </td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('editproduct',$product->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route('deleteproduct',$product->id) }}" class="btn btn-warning">delete</a>
                </td>
              </tr>
            @endforeach


            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
