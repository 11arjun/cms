@extends('layouts.app')

@section('content')



<div class="container">

<div class="user-list">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Ward Users</strong>
                    <a href="{{route('wardRegisterForm',[$palika_id])}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp;Add Ward User</a>
                    <div class="clearfix"></div> 
                </div>

                <div class="panel-body">
                	<div class="table-responsive">
                		<table class="table table-hover table-stripped">
                			<thead>
                				<tr>
                					<th>#</th>
                                    <th>ward</th>
                					<th>Username</th>
                					<th>Email</th>
                					<th></th>
                				</tr>
                			</thead>
                			<tbody>
                                @if($wardUsers)
                                @php
                                    $i = 1;
                                @endphp    
                                    @foreach($wardUsers as $wardUser)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$wardUser->isAdmin}}</td>
                                        <td>{{$wardUser->name}}</td>
                                        <td>{{$wardUser->email}}</td>
                                        <td>
                                            <a href="" class="btn btn-success" title="View User"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('editUserForm',[$wardUser->id])}}" class="btn btn-warning" title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('deleteUser',$wardUser->id)}}" class="btn btn-danger" title="Delete User" onclick="return window.confirm('Are you sure? You want to delete this User.');">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                @endif
                				
                			</tbody>
                		</table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection