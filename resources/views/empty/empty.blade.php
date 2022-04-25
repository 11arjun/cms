@extends('layouts.app')

@section('content')
<style type="text/css">
	.bg-overlay {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://cdn.dribbble.com/users/1554526/screenshots/3399669/no_results_found.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 950px;
    padding-top: 50px;
}
</style>
<div class="right_col" role="main">
  <div class="clearfix"></div>    
  <div class="row" >
  	    <div class="col-md-12 col-sm-12 col-xs-12">
<div class="container bg-overlay">
	<div class="row text-center">
		<h1>Sorry No Result Found :( </h1>
       
        <br><br>
  
        <a href="{{url('/home#tab_2')}}" class="btn btn-primary btn-lg">Search Again</a>
	</div>
</div>

  </div>
</div>
</div>


@stop