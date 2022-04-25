@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <?php if(auth()->user()->user_type=='WP'){?>
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">हाल सम्म जारी गरिएको सिफारिस विवरण(Pie Chart & Bar Chart)
</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">हाल सम्म जारी गरिएको सिफारिस विवरण(टेबलमा)</a></li>


            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['रास्ट्रिय पञ्जीकरण',     <?php echo $panji_max; ?>],
          ['नेपाली नागरिकता',       <?php echo $citizen_max; ?>],
          ['घर / जग्गा जमिन',  <?php echo $home_max; ?>],
          ['संघ संस्था', <?php echo $home_max; ?>],
          ['व्यापार / व्यवसाय',    <?php echo $biz_max; ?>],
          ['शैक्षिक', <?php echo $edu_max; ?>],
          ['आर्थिक',  <?php echo $eco_max; ?>],
          ['खुल्ला ढाँचा', <?php echo $open_max; ?>],
          ['अन्य',  <?php echo $other_max; ?>]
        ]);

        var piechart_options = {title:'Pie Chart: हाल सम्म जारी गरिएको सिफारिस विवरण',
                       width:550,
                       height:500};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: हाल सम्म जारी गरिएको सिफारिस विवरण',
                       width:550,
                       height:500,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }
</script>

    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
          <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>

      </tr>

    </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                  <div class="box box-default">

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal" action="{{url('date_wise')}}" method="POST">
                {{ csrf_field() }}

              <div class="form-group">
                <label>मुख्य सिफारिस :</label>

              <select class="form-control" id="sifaris_title" name="main">
                <option>--मुख्य सिफारिस--</option>
                @foreach($distinct_sifaris_title as $i)
                <option value="{{$i->sifaris_title}}">{{$i->sifaris_title}}</option>
                @endforeach

              </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>सिफारिस :</label>
                <select class="form-control" id="readable" name="child">

              </select>
              </div>

               <div class="form-group">
                <label>मिति देखि:</label>
                <input type="text" name="mithi_dekhi" id="mithi_dekhi" placeholder=" *" required="required" class="form-control ndp-nepali-calendar" onfocus="showNdpCalendarBox('mithi_dekhi')">
              </div>

              <div class="form-group">
                <label>मिति सम्म :</label>
                <input type="text" name="mithi_samma" id="mithi_samma" placeholder=" *" required="required" class="form-control ndp-nepali-calendar" onfocus="showNdpCalendarBox('mithi_samma')">
              </div>

              <div class="form-group">
                <button class="btn btn-default">Submit</button>
              </div>

            </div>
            <!-- /.col -->
                    </form>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->

      </div>
                </div>
            </div>
        </div>
    </div>
</div>
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
    <?php }else if(auth()->user()->user_type == 'SA'){?>
          <img src="http://www.stnepal.com/wp-content/uploads/2015/08/stnpepal-site-upload.png" style="object-fit: cover;
    width: 100%;">
      <?php

}else{?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$local_state[0]->local_state_name}} अन्तर्गत हाम्रो System मा Register भएका  वार्डहरूको सुची </div>

                <div class="panel-body">


                @for($i=0;$i<sizeof($ward_suchi);$i++)
                <li>
                वार्ड नं {{Helpers::convertNos($ward_suchi[$i]->isAdmin)}}
                </li>
                @endfor
                </div>
            </div>
        </div>
    </div>
</div>



<?php }?>
    </div>
</div>
@endsection
