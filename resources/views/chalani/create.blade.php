@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">चलानी</div>

                <div class="panel-body">
                  <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span><strong>Message: </strong> <p id="msg"></p></span>
        </div>
   <form class="form-horizontal">
                     

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">हाल सम्मको चलानीनंबर</label>

                            <div class="col-md-6">
                           <select class="form-control">
                          <?php $reg_count=1; ?>
                               @foreach($pro_no as $i)
                             <option>{{$i->pro_no}}</option>
                             <?php  $reg_count=$i->pro_no+1;?>
                             @endforeach

                           </select>

                               
                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">चलानीनम्बर</label>

                            <div class="col-md-6">
                            <input type="number" name="chalani_number" class="form-control" value="{{$reg_count}}">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">चलानिको मिति</label>

                            <div class="col-md-6">
                          <input type="text" id="nepaliDate4" class="ndp-nepali-calendar form-control"  name="chalani_miti"  onfocus="showNdpCalendarBox('nepaliDate4')"/>



                               
                          
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">बिषय</label>

                            <div class="col-md-6">
                           <textarea class="form-control"  name="subject"></textarea>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">पत्रको किसिम</label>

                            <div class="col-md-6">
                           <select class="form-control" name="patra_kisim">
                               
                                <option value="विषय नखुलेको">विषय नखुलेको</option>
                                <option value="गोप्य">गोप्य</option>
                                <option value="अति गोप्य">अति गोप्य</option>
                                <option value="जरुरी">जरुरी</option>
                                 <option value="अति जरुरी">अति जरुरी</option>
                                <option value="अन्य">अन्य</option>
                           </select>

                               
                          
                            </div>
                        </div>

                        


                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">पत्र पाउने कार्यालयको नाम</label>

                            <div class="col-md-6">
                     
                           <input type="text" name="pauney_karyalaya" class="form-control">
     
                          
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">पत्र पाउने  कार्यालयको ठेगाना</label>

                            <div class="col-md-6">
                     
                           <input type="text" name="pauney_thegana" class="form-control">

                               
                          
                            </div>
                        </div>
                       
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">कैफियत</label>

                            <div class="col-md-6">
                           <textarea class="form-control" rows="7" name="kaifiyat"></textarea>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">पत्र बुज्ने शाखा</label>

                            <div class="col-md-6">
                         <input type="text" name="sakha" class="form-control">

                               
                          
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">बोधार्थ</label>

                            <div class="col-md-6">
                           <textarea class="form-control" rows="7" name="bodartha"></textarea>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">सबै ठिक छ</label>

                            <div class="col-md-6">
                           <input type="checkbox" name="" id="showCheckoutHistory">

                               <script type="text/javascript">
                                 jQuery(document).ready(function() {
    jQuery('#showCheckoutHistory').change(function() {
        if ($(this).prop('checked')) {
          $("#submit").removeAttr("disabled");
        }
        else {
          $("#submit").attr("disabled", true);
        }
    });
});
                               </script>
                          
                            </div>
                        </div>


                       
<input type="text" name="ward" value="{{auth()->user()->isAdmin}}" style="display: none;">


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-submit_1" id="submit" disabled>
                                   सुरक्षित गर्नुहोस
                                </button>
                            </div>
                        </div>

                    </form>

    </div>
</div>
</div>
</div>
</div>

@stop