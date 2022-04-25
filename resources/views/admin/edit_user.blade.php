@extends('layouts.app')

@section('content')

<div class="container">

<div class="user-list">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-center"><strong>Update User</strong></p>
                    
                </div>

                <div class="panel-body">
                	<form class="form-horizontal" method="POST" action="{{route('updateUser',[$user->id])}}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 control-label text-primary">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Name" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 control-label text-primary">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        @if($user->isAdmin != 0)
                        <div class="form-group">                           
                            <label for="email" class="col-sm-3 control-label text-primary">Ward NO</label>
                            <div class="col-sm-9">

                                <select class="form-control" id="ward" name="ward" required>
                                    
                                     @for($i = 1; $i < 25; $i++ )
                                     
                                     <option value="{{$i}}" {{ $i == $user->isAdmin ? "selected" : ""}}>{{$i}}</option>

                                     @endfor 
                                </select>
                                
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="ward-name-nepali" class="col-sm-3 control-label text-primary">Ward Name (in Nepali)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ward-name-nepali" name="ward_name_np" value="{{ $user->ward_name_np }}" placeholder="Ward Name (Nepali)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ward-name-english" class="col-sm-3 control-label text-primary">Ward Name (in English)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ward-name-english" name="ward_name_en" value="{{ $user->ward_name_en }}" placeholder="Ward Name (English)">
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="telephone-no-nepali" class="col-sm-3 control-label text-primary">Telephone NO. (in Nepali)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="telephone-no-nepali" name="telephone_num" value="{{ $user->telephone_num }}" placeholder="Telephone NO. (in Nepali)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone-no-english" class="col-sm-3 control-label text-primary">Telephone NO. (in English)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="telephone-no-english" name="telephone_num_en" value="{{ $user->telephone_num_en }}" placeholder="Telephone NO. (in English)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fax-number-nepali" class="col-sm-3 control-label text-primary">Fax Number ( in Nepali)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fax-number-nepali" name="fax_number" value="{{ $user->fax_number }}" placeholder="Fax Number ( in Nepali)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fax-number-english" class="col-sm-3 control-label text-primary">Fax Number ( in English)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fax-number-english" name="fax_number_en" value="{{ $user->fax_number_en }}" placeholder="Fax Number ( in English)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="office-email" class="col-sm-3 control-label text-primary">Office Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="office-email" name="office_email" value="{{ $user->office_email }}" placeholder="Office Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-3 control-label text-primary">Website</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="website" name="website" value="{{ $user->website }}" placeholder="Website">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label text-primary"></label>
                            <div class="col-sm-9">
                                 <button type="submit" class="btn btn-success btn-lg">
                                     <i class="fa fa-save"> &nbsp;Update</i>
                                 </button>

                            </div>
                        </div>

                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection