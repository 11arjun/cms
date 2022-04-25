@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" >

                	Category Listing
                </div>

                <div class="panel-body">
                		 <table class="table table-bordered">
    <thead>
      <tr>
        <th>सिफारिस शिर्षक</th>
        <th>सिफारिसको नाम</th>

        <th>Database Table Name</th>




      </tr>
    </thead>
    <tbody>

    	<tr>
    		<td>रास्ट्रिय पञ्जीकरण</td>
    		<td>
    		@foreach($panjikaran as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($panjikaran as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>


    	<tr>
    		<td>नेपाली नागरिकता</td>
    		<td>
    		@foreach($cit as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($cit as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>


    	<tr>
    		<td>घर / जग्गा जमिन</td>
    		<td>
    		@foreach($ghar as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($ghar as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>



    	<tr>
    		<td>संघ संस्था</td>
    		<td>
    		@foreach($org as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($org as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>


    	<tr>
    		<td>व्यापार / व्यवसाय</td>
    		<td>
    		@foreach($biz as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($biz as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>

    	<tr>
    		<td>शैक्षिक</td>
    		<td>
    		@foreach($edu as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($edu as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>

    	</tr>
      <tr>
        <td>भौतिक निर्माण</td>
        <td>
        @foreach($bhautik as $i)
        <li>
          {{$i->table_readable_name}}
        </li>

        @endforeach
        </td>

        <td>
        @foreach($bhautik as $i)
        <li>
          {{$i->table_name}}
        </li>

        @endforeach
        </td>

      </tr>
      <tr>
        <td>English Format</td>
        <td>
        @foreach($english as $i)
        <li>
          {{$i->table_readable_name}}
        </li>

        @endforeach
        </td>

        <td>
        @foreach($english as $i)
        <li>
          {{$i->table_name}}
        </li>

        @endforeach
        </td>

      </tr>
    	<tr>
    		<td>आर्थिक</td>
    		<td>
    		@foreach($eco as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($eco as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>
      <tr>
        <td>सामाजिक / पारिवारिक</td>
        <td>
        @foreach($samjik as $i)
        <li>
          {{$i->table_readable_name}}
        </li>

        @endforeach
        </td>

        <td>
        @foreach($samjik as $i)
        <li>
          {{$i->table_name}}
        </li>

        @endforeach
        </td>

      </tr>

    	<tr>
    		<td>खुल्ला ढाँचा</td>
    		<td>
    		@foreach($free as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($free as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>

    	<tr>
    		<td>अन्य</td>
    		<td>
    		@foreach($other as $i)
    		<li>
    			{{$i->table_readable_name}}
    		</li>

    		@endforeach
    		</td>

    		<td>
    		@foreach($other as $i)
    		<li>
    			{{$i->table_name}}
    		</li>

    		@endforeach
    		</td>


    	</tr>

    </tbody>
</table>
</div>
</div>
</div>
<div class="col-md-4">

	<a href="{{url('category/create')}}" class="btn btn-primary pull-left" style="margin-top: 50%;
    height: 200px;
    text-align: center;
    padding: 23%;">Click Here To Arrange Category</a>
</div>
</div>
</div>

@stop
