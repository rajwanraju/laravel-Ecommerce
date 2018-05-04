@extends('admin.master')

@section('content')
<hr/>
<h3> Product Manage</h3>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
          <th> IMAGE</th>
            <th>Title</th>
            <th>Category </th>
            <th>Producer</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Add More</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr> <td><img src="{{ asset($product->productImage)}}" width="128px" height="128px" alt="{{$product->productName}}"</td>
            <th scope="row">{{$product->productName }}</th>
            <td>{{ $product->categoryName }}</td>
            <td>{{ $product->manufacturName }}</td>
            <td>TK. {{ $product->productPrice }}</td>
            <td> {{ $product->productQuentity }}</td>
            <td>{{ $product->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td>
            <td ><a href="{{url('/admin/addImages')}}" class="btn btn-primary" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Images
</a></td>
            <td>
                <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
                <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-success" title="Product Edit">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ url('/product/delete/'.$product->id) }}" title="Product Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
