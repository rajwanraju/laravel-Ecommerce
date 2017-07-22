@extends('admin.master')
@section('content')
</hr>

<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Catergory Name</th>
                                        <th>manufacture Name</th>
                                       <th>Product Price</th>
                                       <th>Product Quentity</th>
                                        <th>Publication Status</th>
                                       <th>Actions</th>
                                       
                                    </tr>
                                   
                                    @foreach($products as $product)
                        
                                    <tr>
                                   <th scope="row">{{$product->productName}}
            <td>{{$product->categoryName}}</td>
            <td>{{$product->manufacturName}}</td>
             <td>TK: {{$product->productPrice}}</td>
            <td>{{$product->productQuentity}}</td>
  <td>{{$product->publicationStatus==1?'Published': 'UnPublished'}}</td>

 <td><a href="{{url('/product/view/'.$product->id)}}" class="btn btn-info" title="Product View">

<span class="glyphicon glyphicon-eye-open"></span></a>



 <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success" title="Product Edit">

<span class="glyphicon glyphicon-edit"></span></a>
<a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger" title="Product Delete" onclick="return confirm('Are You sure to delete this');">
 
<span class="glyphicon glyphicon-trash"></span></a>
 </td>
                                    	 </tr>
                                    	@endforeach
                                        
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

@endsection