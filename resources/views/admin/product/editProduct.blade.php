@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

	
{!!Form::open(['url'=>'product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm'])!!}
	<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Name</label>
<div class="col-sm-10">
    <input type="text" value="{{$productById->productName}}" class="form-control" name="productName">
    <input type="hidden" value="{{$productById->id}}" class="form-control" name="productId">

    @if ($errors->has('productName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ProductName') }}</strong>
                                    </span>
                                @endif
</div>
</div>


<div class="form-group">
  <label for="sel1"  class="col-sm-2 control-label" >Category Name</label>
 <div class="col-sm-10">
  <select class="form-control" name="categoryid">
    <option>Select Category Name</option>
     @foreach($categories as $category) 
    <option value="{{$category->id}}">{{$category->categoryName}}</option>
  
   @endforeach
  </select>
</div>
</div>


<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Manufactur Name</label>
<div class="col-sm-10">
  <select class="form-control" name="menufacturid">
    <option>Select Manufactur Name</option>
     @foreach($manufacturs as $manufactur) 
    <option value="{{$manufactur->id}}">{{$manufactur->manufacturName}}</option>
  
   @endforeach
  </select>
</div>
</div>


  <div class="form-group">
<label for="" class="col-sm-2 control-label">Product Price</label>
<div class="col-sm-10">
<input type="number" value="{{$productById->productPrice}}" class="form-control" name="productPrice">
 @if ($errors->has('productPrice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ProductPrice') }}</strong>
                                    </span>
                                @endif
</div>
</div>
 

  <div class="form-group">
<label for="" class="col-sm-2 control-label">Product Quentity</label>
<div class="col-sm-10">
<input type="number" value="{{$productById->productQuentity}}" class="form-control" name="productQuentity">
 @if ($errors->has('productQuentity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ProductQuentity') }}</strong>
                                    </span>
                                @endif
</div>
</div>


 <div class="form-group">
<label for="" class="col-sm-2 control-label">Product Short Description</label>
<div class="col-sm-10">
<textarea class="form-control" name="productShortDescription" rows="4">{{$productById->productShortDescription}}</textarea>
  @if ($errors->has('productShortDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productShortDescription') }}</strong>
                                    </span>
                                @endif
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Long Description</label>
<div class="col-sm-10">
<textarea class="form-control"  name="productLongDescription" rows="6">{{$productById->productLongDescription}}</textarea>
 @if ($errors->has('productLongDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productLongDescription') }}</strong>
                                    </span>
                                @endif
</div>
</div>


  <div class="form-group">
<label for="" class="col-sm-2 control-label">Product Image</label>
<div class="col-sm-10">
<input type="file" value="{{$productById->productImage}}"  name="productImage" accept="image/*">
<img src="{{asset($productById->productImage)}}" alt="" height="150" width="150">

</div>
</div> 



<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" value="{{$productById->productShortDescription}}"  name="publicationStatus">
    <option>select Publication Status</option>
    <option value="1">Publish</option>
    <option value="0">UnPublish</option>
  </select>
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update Product Info</button>
</div>
</div>
{!!Form::close()!!}

	
</div>
</div>
</div>
<script>
  document.forms['editProductForm'].elements['publicationStatus'].value={{$productById->publicationStatus}}
  document.forms['editProductForm'].elements['categoryid'].value={{$productById->categoryid}}
  document.forms['editProductForm'].elements['menufacturid'].value={{$productById->menufacturid}}


</script>

@endsection