@extends('admin.master')
@section('content')

<hr/>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<hr/>
<h2>Total {{ $users->total() }} users</h2>
<h3>{{  $users->count() }} in this page</h3>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Id</th>
            <th>User Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        @foreach ($users as $user)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr/>
<div>
     {{ $users->links() }}
</div>
@endsection
