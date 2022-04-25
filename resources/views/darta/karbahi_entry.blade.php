@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-12" >
            <div class="panel panel-default">
                <div class="panel-heading">दर्ता</div>

                <div class="panel-body" style="overflow: scroll;">

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
                     
                      </tr>
    </thead>
    <tbody>
    	@foreach($data as $i)
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
      	
      	
      </tr>

      @endforeach
    </tbody>
                		</table>
                		@if($errors->any())
<h4 class="btn btn-danger">Below Field is blank</h4>
@endif
<form class="form-horizontal" method="POST" action="{{url("darta/$id")}}">
	{{ csrf_field() }}
	{{ method_field('PATCH') }}
	<textarea name="karbahi" required>
	
</textarea>
<br>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop