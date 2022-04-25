@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-6" >
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-search fa-2x"></i>मिति अनुसार चलानी खोजि</div>

                <div class="panel-body">
                	<form class="form-horizontal" action="{{url('search_chalani')}}" method="POST">
                		     {{ csrf_field() }}
                		<input type="text" id="nepaliDate51" name="date" class="form-control ndp-nepali-calendar" onfocus="showNdpCalendarBox('nepaliDate51')">
                		<br>
                		<br>
                		<button class="btn btn-primary">चलानी <i class="fa fa-search"></i></button>
                	</form>


                </div>
            </div>
        </div>


         <div class="col-md-6" >
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-search fa-2x"></i>चलानी नं अनुसारको खोजि </div>

                <div class="panel-body">
                      <form class="form-horizontal" action="{{url('chalani_num')}}" method="POST">
                             {{ csrf_field() }}
                        <input type="text" id="nepaliDate51" name="chalani_num" class="form-control">
                        <br>
                        <br>
                        <button class="btn btn-primary">चलानी <i class="fa fa-search"></i></button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@stop
