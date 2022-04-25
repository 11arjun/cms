@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">चलानी Search Result</div>

                <div class="panel-body">
                	   	<table class="table table-bordered">
    <thead>
      <tr>
                        <th>चलानी नम्बर</th>
                        <th>चलानीको मिति</th>
                        <th>बिषय</th>
                        <th>पत्रको किसिम</th>
                        <th>पत्र पाउने कार्यालयको नाम</th>

                        <th>पठाउने कार्यालयको ठेगाना</th>

                        <th>कैफियत</th>
                        <th>पत्र बुज्ने शाखा</th>
                        <th>बोधार्थ</th>
                        <th>Action</th>
                      </tr>
    </thead>

    <tbody>
    	@foreach($data as $i)
    	<tr>
    		<td>{{$i->pro_no}}</td>
    		<td>{{$i->pro_date}}</td>
    		<td>{!!$i->subject!!}</td>
    		<td>{{$i->msg_type}}</td>
    		<td>{{$i->reciever_office}}</td>
    		<td>{{$i->reciever_office_address}}</td>
    		<td>{!!$i->extra_text!!}</td>
    		<td>{{$i->verified_by}}</td>
    		<td>{!!$i->cc!!}</td>
    		  	<td><button class="btn btn-danger btn-chalani_del" data-title="Delete" data-id='"{{$i->id}}"'><i class="fa fa-trash"></i></button></td>
    	</tr>
    	@endforeach
    </tbody>

  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
