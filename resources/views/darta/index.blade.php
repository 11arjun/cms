@extends('layouts.app')

@section('content')
<div class="container" style="overflow: scroll;">
    <div class="row" >
        <div class="col-md-8" >
            <div class="panel panel-default">
                <div class="panel-heading">दर्ता</div>

                <div class="panel-body">
                  <form class="form-horizontal" method="GET" action="{{url('find_darta')}}">
                  	 {{ csrf_field() }}

                  	<select class="form-control" name="year">
                			@for($i=2070;$i<=2085;$i++)
                			<option value="{{$i}}">{{$i}}</option>
                			@endfor
                		</select>
                		<br>
                		<br>
                		<input type="submit" name="submit" class="btn btn-primary">
                		
                  </form>
                		
                  </div>
              </div>
          </div>
      </div>
  </div>

  @stop