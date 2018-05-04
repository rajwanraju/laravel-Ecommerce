@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->


{!!Form::open(['url'=>'/product/image/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
{{ csrf_field() }}


  <div class="form-group">
<label for="" class="col-sm-2 control-label">Product Image</label>
<div class="col-sm-6">
<input type="file" name="image[]" multiple  accept="image/*">
</div>
</div>





<div class="form-group">

<div class="col-sm-6">
<button type="submit" name="btn" class="btn btn-success btn-block">Save Product Images</button>
</div>
</div>
{!!Form::close()!!}


</div>
</div>
</div>

@endsection
