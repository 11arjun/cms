@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h2> चार किल्ला प्रमाणित </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('charkillapramanit',[$data->id])}}" method="post">
           {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="x_content">
              @include('master.master_header_ne2')
         <!--    <div class="col-md-12">
              <div class="col-md-2">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
              <div class="col-md-8">
              <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, </b></p>
                 <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>
              </div>
              <div class="col-md-2">


              </div>
            </div> -->

            <div class="col-md-12">
              <div class="col-md-6">
              {{--  <p align="left"><b>पत्र संख्या:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" value="{{$data->patra_sankya}}" name="patra_sankya" id="patra_sankya" required="required"/></b></p> --}}
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
             {{--  <p align="left"><b>चलानी नं.:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" value="{{$data->chalani_no}}" name="chalani_no" id="chalani_no" required="required"/></b></p> --}}


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field"  value="{{$data->issued_date}}" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: चार किल्ला प्रमाणित।</u></b></h4>
            </p>
          </div>


         

          <div class="col-md-12">

            <p align="left"><b> {{$local_state[0]->local_state_name}}</b> वडा नं. <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> (साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address" value="{{$data->sabik_address}}"/>) अन्तर्गत 

              <select name="person_title">
              <option value="श्री" {{$data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>

             <input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$data->person_name}}" name="person_name"/> को नाममा मालपोत कार्यलयमा श्रेस्ता दर्ता कायम रहेको जग्गाको चार किल्ला निम्न विवरण अनुसार भएको प्रमाणित गरिन्छ |</p>
          </div>
          
          <div class="col-md-12">

            <h4 align="center"><b>चार किल्ला विवरण</b> </h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="char_killa_bibaran_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>वडा नं.</th>
                    <th>सिट नं./कि नं./क्षेत्रफ़ल</th>
                    <th>बाटो भएको/नभएको </th>
                    <th>पूर्व </th>
                    <th>पश्चिम</th>
                    <th>उत्तर </th>
                    <th>दक्षिण </th>                    
                    <th>कैफियत </th>
                    <th> </th>
                  </thead>
                  <tbody>

                    <?php $count=1; ?>
                @foreach($detail as $d)
                      <tr>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value="{{ Helpers::convertNos($count)}}"> </td>
                        <?php $count++; ?>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ward_no[]" value="{{$d->ward_no}}"></td> 

                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="seat_kitta_area[]" value="{{$d->seat_kitta_area}}"></td> 

                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="batto_abastha[]" value="{{$d->batto_abastha}}"></td> 
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="east[]" value="{{$d->east}}"></td> 
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="west[]" value="{{$d->west}}"></td> 
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="north[]" value="{{$d->north}}"></td> 
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="south[]" value="{{$d->south}}"></td> 
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="remark[]" value="{{$d->remark}}"></td> 


                        <td><a href="" id="add_more_char_killa_bibaran" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></a></td>
                      
                         <td><a href="" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus "></span></a></td>
                     


                      </tr>
                          @endforeach

                  


                  </tbody>
                </table>
              </div>
              <p class="btm-last">  वडा अध्यक्ष </p>
            </div>
          </div>
           <div class="clearfix"></div>
        <hr>
        <section class="bibaran">
        <fieldset>

        <legend>निवेदकको विवरण</legend>


        <div class="form-group">
        <label>निवेदकको नाम</label>
        <input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
        </div>
        <div class="form-group">
        <label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
        </div><div class="form-group">
        <label>निवेदकको नागरिकता नं.</label>
        <input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
        </div>
        <div class="form-group">
        <label>निवेदक (NID) </label>
        <input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
        </div>

        </fieldset>
        </section>
          <div class="col-md-12">
             <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
           </hr>

            <center><input  type="submit" class="btn btn-success" name="update_char_killa_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस">
              </center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>

@stop