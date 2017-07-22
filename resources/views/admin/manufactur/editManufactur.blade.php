@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

  
{!!Form::open(['url'=>'manufactur/update','method'=>'POST','class'=>'form-horizontal','name'=>'editManufacturForm'])!!}
  <div class="form-group">
<label for="" class="col-sm-2 control-label">Manufactur Name</label>
<div class="col-sm-10">
<input type="text" value="{{$manufacturById->manufacturName}}" class="form-control" name="manufacturName">
<input type="hidden" value="{{$manufacturById->id}}" class="form-control" name="manufacturId">

<span class="text-danger">{{$errors->has('manufacturName')? $errors->first('ManufacturName'):''}}</span>
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" value="{{$manufacturById->manufacturDescription}}"" class="form-control" name="manufacturDescription">
 <span class="text-danger">{{$errors->has('manufacturDescription')? $errors->first('manufacturDescription'):''}}</span>
</div>
</div>
<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" name="publicationStatus">
    <option>Select Publication Status</option>
    <option value="1">Publish</option>
    <option value="0">UnPublish</option>
  </select>
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
{!!Form::close()!!}

  
</div>
</div>
</div>
<script>
  document.forms['editManufacturForm'].elements['publicationStatus'].value={{$manufacturById->publicationStatus}}


</script>
@endsection