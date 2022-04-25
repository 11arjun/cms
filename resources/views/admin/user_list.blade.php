@extends('layouts.app')

@section('content')


<div class="container">
<div class="user-list">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	User Lists
            	</div>

                <div class="panel-body">
                	<div class="table-responsive">
                		<table class="table table-hover table-stripped">
                			<thead>
                				<tr>
                					<th>#</th>
                					<th>Username</th>
                					<th>Email</th>
                					<th>Local State</th>
                					<th></th>
                				</tr>
                			</thead>
                			<tbody>
                				@if($palikaUsers)
                				@php
                				 $i = 1;
                				@endphp
	                				@foreach($palikaUsers as $palikaUser)
		                				<tr>
		                					<td>{{$i}}</td>
		                					<td>{{$palikaUser->email}}</td>
		                					<td>{{$palikaUser->email}}</td>
		                					<td>{{$palikaUser->localState->local_state_name}}</td>
		                					
		                					<td>
		                						<a href="{{route('wardUsers',[$palikaUser->id])}}" class="btn btn-primary" title="Ward Detail">Ward</a>
                                                <a href="" 
                                                    title="View User" 
                                                    class="btn btn-success view-user"
                                                    data-name = "{{ $palikaUser->name }}"
                                                    data-email = "{{ $palikaUser->email }}"
                                                    data-district-np = "{{ $palikaUser->district->district_name }}"
                                                    data-district-en = "{{ $palikaUser->district->district_name_english }}"
                                                    data-province-np = "{{ $palikaUser->provience->province_name }}"
                                                    data-province-en = "{{ $palikaUser->provience->province_name_english }}"
                                                    data-lst-np = "{{ $palikaUser->localState->local_state_name }}"
                                                    data-lst-en = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-tel-np = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-tel-en = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-fax-np = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-fax-en = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-office-email = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    data-website = "{{ $palikaUser->localState->local_state_name_english }}"
                                                    >
                                                    <i class="fa fa-eye"></i>
                                                </a>
		                						<a href="{{route('editUserForm',[$palikaUser->id])}}" class="btn btn-warning" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{route('deleteUser',$palikaUser->id)}}" 
                                                    class="btn btn-danger" 
                                                    title="Delete User" 
                                                    onclick="return window.confirm('Are you sure? You want to delete this User.');">
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

<div class="modal" id="view-user-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">&times;</button>
                <p><strong>Name: <span id="name"></span></strong></p>
                <p><strong>Email: <span id="email"></span></strong></p>
                <p><strong>Address: <span id="address"></span></strong></p>
                <p><strong>Phone: <span id="phone"></span></strong></p>
                <p><strong>Message: <span id="message"></span></strong></p>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $(".view-user").click(function (event) {
            event.preventDefault();
            // var t = $(this);
            // var n = t.data('n');
            // var e = t.data('e');
            // var ad = t.data('ad');
            // var phone = t.data('phone');
            // var message = t.data('message');

            // $("#name").text(n);
            // $("#email").text(e);
            // $("#address").text(ad);
            // $("#phone").text(phone);
            // $("#message").text(message);

            $("#view-user-modal").modal('show');
        });
    });
</script>
@endpush