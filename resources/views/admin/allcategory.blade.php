@extends('admin.layouts.template')
@section('page_title')
All Category-Ecommerce
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Category</h4>

    <div class="card">
        <h5 class="card-header">Available Category</h5>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message'); }}
        </div>

        @endif
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->subcategory_count }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{ route('editcategory',$category->id) }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('deletecategory',$category->id) }}" class="btn btn-warning">delete</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
