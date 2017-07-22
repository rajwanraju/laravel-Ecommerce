@extends('admin.master')
@section('content')
</hr>

<table class="table table-bordered table-hover">
<tr>
<th>Product Id</th>
<th>{{$product->id}}</th>
</tr>

<tr>
<th>Product Name</th>
<th>{{$product->productName}}</th>
</tr>
<tr>
<th>Category Name</th>
<th>{{$product->categoryName}}</th>
</tr>
<tr>
<th>Manuacture Name</th>
<th>{{$product->manufacturName}}</th>
</tr>
<tr>
<th>Product Price</th>
<th>{{$product->productPrice}}</th>
</tr>
<tr>
<th>Product Quentity</th>
<th>{{$product->productQuentity}}</th>
</tr>
<tr>
<th>Product Short Description</th>
<th>{!! $product->productShortDescription !!}</th>
</tr>
<tr>
<th>Product Long Description</th>
<th>{!! $product->productLongDescription !!}</th>
</tr>
<tr>
<th>Product Image</th>
<th><img src="{{ asset($product->productImage)}}" alt="{{$product->productName}}"</th>
</tr>
<tr>
<th>Publication Status</th>
<th>{{$product->publicationStatus==1?'Published': 'UnPublished'}}</th>
</tr>
</table>
@endsection