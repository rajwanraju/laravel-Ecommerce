@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

	
{!!Form::open(['url'=>'manufactur/save','method'=>'POST','class'=>'form-horizontal'])!!}
	<div class="form-group">
<label for="" class="col-sm-2 control-label">Manufactur Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="manufacturName">
 @if ($errors->has('manufacturName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ManufacturName') }}</strong>
                                    </span>
                                @endif

</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="manufacturDescription">
 @if ($errors->has('manufacturDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ManufacturDescription') }}</strong>
                                    </span>
                                @endif

</div>
</div>
<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" name="publicationStatus">
    <option>select Publication Status</option>
    <option value="1">Publish</option>
    <option value="0">UnPublish</option>
  </select>
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Submit</button>
</div>
</div>
{!!Form::close()!!}

	
</div>
</div>
</div>

@endsection