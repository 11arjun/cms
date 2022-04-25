@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Client Details</div>

                <div class="panel-body">
                		 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Ward</th>
        <th>Password</th>
         <th>User Type</th>
        <th>Provience </th>
         <th>District </th>
        <th>Local State</th>
       

      </tr>
    </thead>
    <tbody>
    	@foreach($data as $i)
      <tr>
        <td>{{$i->name}}</td>
        <td>{{$i->email}}</td>
        <td>{{$i->isAdmin}}</td>
        <td>***</td>
        <td>{{$i->user_type}}</td>
        <td>{{$i->province_name}}</td>
        <td>{{$i->district_name}}</td>
        <td>{{$i->local_state_name}}</td>
      </tr>
      @endforeach
          <thead>
      <tr colspan="8">
         <p style="color: red">*SA = Super Admin; WP = Ward President; PC = Palika Chairman </p>
       
      </tr>
    </thead>
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop