@extends('layouts.app')

@section('content')
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$local_state[0]->local_state_name}} वार्ड अनुसार  विवरण </div>

                <div class="panel-body">
<div class="col-md-4">
	वार्ड
	<select class="form-control" name="ward">
   	<option>--वार्ड छान्नुहोस्--</option>

      @for($i=0;$i<sizeof($ward_suchi);$i++)
      <option value="{{$ward_suchi[$i]->isAdmin}}">
      वार्ड नं {{Helpers::convertNos($ward_suchi[$i]->isAdmin)}}
      </option>
      @endfor
  </select>
</div>
<div class="col-md-4">

मिति देखि  <input type="text" name="birth_date_bs_nep" id="birth_date_bs_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar form-control" onfocus="showNdpCalendarBox('birth_date_bs_nep')"><input type="text" name="from-date" placeholder=" *" required="required" id="birth_date_ad_nep" class="dashed-input-field" style="display: none;">
</div>
<div class="col-md-4 form-group">
मिति सम्म :<input type="text" placeholder=" *" required="required" name="death_date_bs_nep" id="death_date_bs_nep" class="dashed-input-field ndp-nepali-calendar form-control" onfocus="showNdpCalendarBox('death_date_bs_nep')"><input type="text" placeholder=" *" required="required" name="to-date" class="dashed-input-field" id="death_date_ad_nep" style="display: none;">
</div>
<div class="col-md-12">
	<button class="btn btn-primary palika-btn">विवरण हेर्नुहोस </button>
</div>
           

                </div>
            </div>
        </div>
            <table class="columns">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
          <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
        
      </tr>
     
    </table>
    </div>
</div>

@stop