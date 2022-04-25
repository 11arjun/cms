@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">दर्ता नं अनुसारको खोजि Search Result</div>

                <div class="panel-body">
                	<table class="table table-bordered">
    <thead>
      <tr>
                        <th>दर्ता नम्बर</th>
                        <th>दर्ताको मिति</th>
                        <th>बिषय</th>
                        <th>पत्रको किसिम</th>
                        <th>पत्रको मिति</th>
                        <th>पठाउने कार्यालयको नाम</th>
                        <th>पठाउने कार्यालयको ठेगाना</th>
                        <th>पत्रको चलानी नं</th>
                        <th>कैफियत</th>
                        <th>पत्र बुज्ने शाखा</th>
                        <th>कारबाही</th>
                        <th>Action</th>
                      </tr>
    </thead>
    <tbody>
    	<?php $count=0; ?>
    	@foreach($data as $i)
    <?php $count++; ?>	
      <tr>
      	<td>{{$i->reg_no}}</td>
      	<td>{{$i->reg_date}}</td>
      	<td>{!!$i->subject!!}</td>
      	<td>{{$i->msg_type}}</td>
      	<td>{{$i->msg_date}}</td>
      	<td>{{$i->sender_office}}</td>
      	<td>{{$i->sender_office_address}}</td>
      	<td>{{$i->msg_proceed_no}}</td>
      	<td>{!!$i->extra_text!!}</td>
      	<td>{{$i->verified_by}}</td>
      	<td>{!!$i->karbahi!!}</td>
      	<td><button class="btn btn-danger btn-darta_del" data-title="Delete" data-id='"{{$i->id}}"'><i class="fa fa-trash"></i></button></td>
      	
      </tr>
      @endforeach
    </tbody>
  </table>
<p>Number of Result found: {{$count}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@stop