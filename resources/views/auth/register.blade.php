    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Client Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Provience</label>

                                <div class="col-md-6">

                                   <select class="form-control" id="prov" name="prov">
                                    <option>--Select Provience--</option>

                                     @foreach($provience1 as $i)

                                       <option value="{{$i->province_id}}">{{$i->province_name}}</option>
                                       @endforeach
                                   </select>

                                    @if ($errors->has('provience'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('provience') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">District</label>

                                <div class="col-md-6">

                                   <select class="form-control" id="district" name="district">
                                   @foreach($district as $i)
                                       <option value="{{$i->district_id}}">{{$i->district_name}}</option>
                                       @endforeach
                                   </select>

                                    @if ($errors->has('district'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Local State</label>

                                <div class="col-md-6">

                                   <select class="form-control" id="local_state" name="local_state">
                                   @foreach($local_state as $i)
                                       <option value="{{$i->local_state_id}}">{{$i->local_state_name}}</option>
                                       @endforeach
                                   </select>

                                    @if ($errors->has('local_state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('local_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <input type="hidden" name="user_type" value="WP">
                          {{-- <div class="form-group">
                            <label for="name" class="col-md-4 control-label">User Type</label>

                            <div class="col-md-6">

                               <select class="form-control" name="user_type">
                                <option value="SA">Super Admin</option>
                                <option value="PC">Palika Chairman</option>
                                 <option value="WP">Ward President</option>
                               </select>


                              </div>
                          </div> --}}

                          <input type="hidden" name="ward" value="0">

                         {{-- <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Ward No/Municipal Office</label>

                            <div class="col-md-6">

                               <select class="form-control" name="ward">
                                @php 
                                for($i=0;$i<25;$i++){ 
                                @endphp
                                <option value="{{$i}}">{{$i}}</option>
                                @php } @endphp 
                               </select>

                               <span class="help-block">
                                        <strong style="color: red;">*SET 0 FOR MUN/RMUN</strong>
                                    </span>
                            </div>
                        </div>
 --}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
