@extends('admin.layouts.template')
@section('page_title')
All Sub Category-Ecommerce
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>All Sub Category</h4>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message'); }}
    </div>

    @endif
    <div class="card">
        <h5 class="card-header">Available Sub Category</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Sub Category Name</th>
                <th>Category Name</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($allsubcategories as $subcategory)
                <tr>
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->subcategory_name }}</td>
                    <td>{{ $subcategory->category_name }}</td>
                    <td>{{ $subcategory->product_count }}</td>
                    <td>
                        <a href="{{ route('editsubcat',$subcategory->id) }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('deletesubcat',$subcategory->id) }}" class="btn btn-warning">delete</a>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
