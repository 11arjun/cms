<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>दर्ता सिफारिस</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

     @stack('styles')
<style type="text/css">
  *{margin:0;}
img{ width:32.2%; }
textarea{
  background: transparent!important;
}
#overlay{
  position:fixed;
  z-index:99999;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background:rgba(0,0,0,0.9);

  transition: 1s 0.4s;
}
#progress{
  height:1px;
  background:#fff;
  position:absolute;
  width:0;                /* will be increased by JS */
  top:50%;
}
#progstat{
  font-size:0.7em;
  letter-spacing: 3px;
  position:absolute;
  top:50%;
  margin-top:-40px;
  width:100%;
  text-align:center;
  color:#fff;
}
</style>
<style>
  .container{
        width:100%;
    margin-right : 15px;
        padding-top : 15px;
  }
</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<noscript>JavaScript is off. Please enable to view full site.</noscript>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <?php   if (Auth::guest()){?>
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>दर्ता </b>सिफारिस</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>दर्ता </b>सिफारिस </span>
    </a>
   <?php }else if(auth()->user()->user_type == 'WP'){?>


      <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{$local_state[0]->local_state_name}}</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{$local_state[0]->local_state_name}}</span>
    </a>
    <?php }else if(auth()->user()->user_type == 'SA'){ ?>

     <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin Dashboard</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin Dashboard</span>
    </a>
<?php }else{?>


      <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{$local_state[0]->local_state_name}}</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{$local_state[0]->local_state_name}}</span>
    </a>
<?php }?>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
            @if (Auth::guest())

                        @else
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user fa-2x"></i>
              <span class="label label-success"> </span>
            </a>

            <ul class="dropdown-menu" role="menu">
                                    <li class="header">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout {{ Auth::user()->name }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
          </li>
     @endif

          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
          @if (Auth::guest())

                        @else
             <?php if(auth()->user()->user_type=='WP'){?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

       <li class="active"><a href="{{url('home')}}"><i class="fa fa-home"></i> गृहपृष्ठ</a></li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> रास्ट्रिय पञ्जीकरण </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('birthcertificate/create')}}"><i class="fa fa-circle-o"></i>जन्म दर्ता
</a></li>
            <li><a href="{{url('deathcertificate/create')}}"><i class="fa fa-circle-o"></i>  मृत्यु दर्ता</a></li>
              <li><a href="{{url('marriagecertificate/create')}}"><i class="fa fa-circle-o"></i> विवाह दर्ता</a></li>
                <li><a href="{{url('migration/create')}}"><i class="fa fa-circle-o"></i> बसाइँसराई दर्ता</a></li>

          </ul>

        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> नेपाली नागरिकता  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('CitizenshipCertificate/create')}}"><i class="fa fa-circle-o"></i>नागरिकता प्रतिलिपि सिफारिस
</a></li>
            <li><a href="{{url('Citizenship/create')}}"><i class="fa fa-circle-o"></i>  नागरिकता प्रमाणपत्र सिफारिस </a></li>
              <li><a href="{{url('CitizenSifaris/create')}}"><i class="fa fa-circle-o"></i> नागरिकता सिफारिस </a></li>
                <li><a href="{{url('Nagarikta/create')}}"><i class="fa fa-circle-o"></i> नागरिकता निवेदन  </a></li>

          </ul>
        </li>
 <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> घर / जग्गा जमिन</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('tresnaksa/create')}}"><i class="fa fa-circle-o"></i> ट्रेस  सिफारिस
</a></li>
            <li><a href="{{url('NaksaController/create')}}"><i class="fa fa-circle-o"></i>   नक्सा सिफारिस   </a></li>
              <li><a href="{{url('SarjiminController/create')}}"><i class="fa fa-circle-o"></i> सर्जमिन सिफारिस   </a></li>
                <li><a href="{{url('WadaSarjiminController/create')}}"><i class="fa fa-circle-o"></i> वडा सर्जमिन सिफारिस   </a></li>

                 <li><a href="{{url('ShrestaController/create')}}"><i class="fa fa-circle-o"></i>  श्रेस्ता कार्यान्वयन </a></li>
                  <li><a href="{{url('ShrestaUparSifarisController/create')}}"><i class="fa fa-circle-o"></i>  श्रेस्ता उपर सिफारिस </a></li>
                   <li><a href="{{url('MuchulkaController/create')}}"><i class="fa fa-circle-o"></i>  सर्जमिन  मुचुल्का  </a></li>
                    <li><a href="{{url('MuchulkaGuthiController/create')}}"><i class="fa fa-circle-o"></i>  सर्जमिन  मुचुल्का (गुठी)  </a></li>
                        <li><a href="{{url('SuchanaTasController/create')}}"><i class="fa fa-circle-o"></i>  सूचना टाँस   </a></li>
                   <li><a href="{{url('SuchanaTasGuthiController/create')}}"><i class="fa fa-circle-o"></i>  सूचना टाँस (गुठी)   </a></li>
                    <li><a href="{{url('GharJaggaNamsariKitaniController/create')}}"><i class="fa fa-circle-o"></i> घर जग्गा नामसारी सिफारिस (किटानी)  </a></li>
                        <li><a href="{{url('GharKaymSifaris/create')}}"><i class="fa fa-circle-o"></i>  घर कायम सिफारिस  </a></li>
                   <li><a href="{{url('GharJaggaNamsariSifaris/create')}}"><i class="fa fa-circle-o"></i> घर जग्गा नामसारी सिफारिस  </a></li>
                    <li><a href="{{url('GharJanauneSifarisController/create')}}"><i class="fa fa-circle-o"></i> घर जनाउने सिफारिस  </a></li>

                   <li><a href="{{url('kittakatsifaris/create')}}"><i class="fa fa-circle-o"></i> कित्ताकाट सिफारिस  </a></li>
                    <li><a href="{{url('gharbatopramanit/create')}}"><i class="fa fa-circle-o"></i> घरबाटो प्रमाणित  </a></li>
                      <li><a href="{{url('charkillapramanit/create')}}"><i class="fa fa-circle-o"></i>चार किल्ला प्रमाणित </a></li>
                       <li><a href="{{url('jaggadhanipramanpatrasifaris/create')}}"><i class="fa fa-circle-o"></i>जग्गाधनी प्रमाण पत्रको <br>प्रतिलिपि  सिफारिस  </a></li>
                        <li><a href="{{url('jaggadhnigharsifaris/create')}}"><i class="fa fa-circle-o"></i> जग्गाधनी प्रमाण पुर्जामा घर कायम <br> सिफारिस </a></li>
                         <li><a href="{{url('gharpatalsifaris/create')}}"><i class="fa fa-circle-o"></i> घर पाताल भएको सिफारिस </a></li>


          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i> <span>संघ संस्था</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('nonprofit/create')}}"><i class="fa fa-circle-o"></i>  गैर नाफामुलुक संस्था दर्ता </a></li>
            <li><a href="{{url('renew/create')}}"><i class="fa fa-circle-o"></i> संस्था नबिकरण सिफारिस  </a></li>
            <li><a href="{{url('new/create')}}"><i class="fa fa-circle-o"></i>  संस्था दर्ता सिफारिस  </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>व्यापार / व्यवसाय</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('NirmanBebasaye/create')}}"><i class="fa fa-circle-o"></i>  घ वर्गको निर्माण व्यवसाय इजाजत <br>पत्र
</a></li>
            <li><a href="{{url('BebasayeDartaNaya/create')}}"><i class="fa fa-circle-o"></i> व्यवसाय दर्ता दरखास्त फारम</a></li>

                <li><a href="{{url('Panno/create')}}"><i class="fa fa-circle-o"></i> नयाँ  स्थायी लेखा नं </a></li>
                  <li><a href="{{url('KarobarPanno/create')}}"><i class="fa fa-circle-o"></i> कारोबार थप स्थायी लेखा नं. </a></li>
                    <li><a href="{{url('UdyogDartaSifaris/create')}}"><i class="fa fa-circle-o"></i> उद्योग दर्ता सिफारिस</a></li>
                    <li><a href="{{url('jetmachine/create')}}"><i class="fa fa-circle-o"></i>जेत मेसिन</a></li>


          </ul>
        </li>




        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>शैक्षिक </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('scholarship/create')}}"><i class="fa fa-circle-o"></i>  छात्रवृत्ति सिफारिस  </a></li>
            <li><a href="{{url('bipanna/create')}}"><i class="fa fa-circle-o"></i>  विपन्नता सिफारिस </a></li>

          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-hourglass-1"></i> <span>भौतिक निर्माण </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('dharajadansifaris/create')}}"><i class="fa fa-circle-o"></i> धारा जडान सिफारिस</a></li>
            <li><a href="{{url('bijulijadansifaris/create')}}"><i class="fa fa-circle-o"></i>बिजुली जडान सिफारिस</a></li>
             <li><a href="{{url('sadakkhanesifaris/create')}}"><i class="fa fa-circle-o"></i>सडक खन्ने स्वीकृतिको सिफारिस</a></li>
              <li><a href="{{url('nepalsarkarbatokayem/create')}}"><i class="fa fa-circle-o"></i>नेपाल सरकारको नाममा बाटो <br>कायम सिफारिस </br></a></li>

            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hourglass-1"></i> <span>English Format </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">



               <li><a href="{{url('relationverification/create')}}"><i class="fa fa-circle-o"></i>Relationship Verification </a></li>
                <li><a href="{{url('birthdateverification/create')}}"><i class="fa fa-circle-o"></i>Birth Date Verification </a></li>
                 <li><a href="{{url('occupationverification/create')}}"><i class="fa fa-circle-o"></i>Occupation Verification  </a></li>
                <li><a href="{{url('unmarriedverification/create')}}"><i class="fa fa-circle-o"></i>Unmarried Verification </a></li>
                <li><a href="{{url('addressverification/create')}}"><i class="fa fa-circle-o"></i>Address Verification  </a></li>
                <li><a href="{{url('annualincomeverification/create')}}"><i class="fa fa-circle-o"></i>Verification of Annual Income </a></li>
                <li><a href="{{url('propertyvaluation/create')}}"><i class="fa fa-circle-o"></i>Property Valuation</a></li>
                <li><a href="{{url('taxclearance/create')}}"><i class="fa fa-circle-o"></i>Tax Clearance</a></li>


            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>आर्थिक</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('UpacharSahayogSifaris/create')}}"><i class="fa fa-circle-o"></i>उपचारमा आर्थीक सहायता सिफारिस </a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>सामाजिक / पारिवारिक</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('asthaiebasobasSifaris/create')}}"><i class="fa fa-circle-o"></i>अस्थायी बसोबास सिफारिस</a></li>
            <li><a href="{{url('esthaiebasobasSifaris/create')}}"><i class="fa fa-circle-o"></i>स्थायी बसोबास सिफारिस </a></li>
            <li><a href="{{url('marriageverification/create')}}"><i class="fa fa-circle-o"></i>विवाह प्रमणित</a></li>
            <li><a href="{{url('janmamitipramanit/create')}}"><i class="fa fa-circle-o"></i>जन्म मिति प्रमाणित</a></li>
            <li><a href="{{url('abibahitpramanit/create')}}"><i class="fa fa-circle-o"></i>अविवाहित प्रमाणित</a></li>
            <li><a href="{{url('natapramanit/create')}}"><i class="fa fa-circle-o"></i>नाता प्रमाणित</a></li>
            <li><a href="{{url('tinpustepramanit/create')}}"><i class="fa fa-circle-o"></i>तीन पुस्ते प्रमाणित</a></li>
            <li><a href="{{url('internalmigrationsifaris/create')}}"><i class="fa fa-circle-o"></i>आन्तरिक बसाइँसराई सिफारिस</a></li>
            <li><a href="{{url('nabalakparichayesifaris/create')}}"><i class="fa fa-circle-o"></i>नाबालक परीचय पत्र सिफारिस</a></li>
            <li><a href="{{url('mirtakhakdarsifaris/create')}}"><i class="fa fa-circle-o"></i>मृतकका हकदारको सिफारिस</a></li>
            <li><a href="{{url('apangaparichayasifaris/create')}}"><i class="fa fa-circle-o"></i>अपांग परीचय पत्र सिफारिस</a></li>
          </ul>
        </li>




         <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>खुल्ला ढाँचा </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('GeneralSifaris/create')}}"><i class="fa fa-circle-o"></i>   नेपाली भाषामा </a></li>
            <li><a href="{{url('GeneralSifarisEnglish/create')}}"><i class="fa fa-circle-o"></i>अंग्रेजी भाषामा  </a></li>
            <li><a href="{{url('khulaipathayeko/create')}}"><i class="fa fa-circle-o"></i>खुलाई पठाएको</a></li>
              <li><a href="{{url('kakshyathap/create')}}"><i class="fa fa-circle-o"></i>कक्षा थप स्वीकृति</a></li>
              <li><a href="{{url('courtfeenarakhne/create')}}"><i class="fa fa-circle-o"></i>कोर्ट-फि नराख्ने</a></li>
              <li><a href="{{url('mohilagatkatta/create')}}"><i class="fa fa-circle-o"></i>मोही लगत कट्टा सिफारिसा</a></li>
              <li><a href="{{url('kothakhalisifaris/create')}}"><i class="fa fa-circle-o"></i>कोठा खाली सिफारिसा</a></li>
          </ul>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>अन्य </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('FarakNameTharNagarikta/create')}}"><i class="fa fa-circle-o"></i>  फरक फरक व्यहोरा प्रमाणित</a></li>
              <li><a href="{{url('FarakFarakNameTharPramanit/create')}}"><i class="fa fa-circle-o"></i>फरक फरक नाम थर प्रमाणित</a></li>
               <li><a href="{{url('FarakFarakJanmaMitiPramanit/create')}}"><i class="fa fa-circle-o"></i> फरक फरक जन्म मिति प्रमाणित</a></li>
                <li><a href="{{url('FarakFarakEnglishHijePramanit/create')}}"><i class="fa fa-circle-o"></i>फरक फरक अंग्रेजी हिज्जे प्रमाणित </a></li>

          </ul>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>दर्ता चलानी </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('darta/create')}}"><i class="fa fa-circle-o"></i>  दर्ता</a></li>
              <li><a href="{{url('chalani/create')}}"><i class="fa fa-circle-o"></i>चलानी</a></li>
               <li><a href="{{url('darta')}}"><i class="fa fa-circle-o"></i> दर्ता उपर कारवाही</a></li>
                <li><a href="{{url('search')}}"><i class="fa fa-circle-o"></i>दर्ता खोजि </a></li>
                 <li><a href="{{url('search_chalani')}}"><i class="fa fa-circle-o"></i>चलानी खोजि </a></li>


          </ul>
        </li>




      </ul>
 <?php }else if(auth()->user()->user_type == 'SA'){?>
      <ul class="sidebar-menu" data-widget="tree">
<li><a href="{{url('register')}}"><i class="fa fa-cog"></i>  Initial Configuration</a></li>
<li><a href="{{url('client')}}"><i class="fa fa-user"></i>  Client Details</a></li>
<li><a href="{{route('userList')}}"><i class="fa fa-user"></i>  User List</a></li>
<li><a href="{{url('category')}}"><i class="fa fa-cogs"></i>  Category Arrangement</a></li>



      </ul>
<?php

}else{?>
<ul class="sidebar-menu" data-widget="tree">
<li><a href="{{url('palika')}}"><i class="fa fa-pie-chart"></i>  वार्ड अनुसार  विवरण </a></li>




      </ul>
<?php }?>
       @endif
    </section>
    <!-- /.sidebar -->
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif
   @yield('content')
    <!-- /.content -->

</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Developed By Smart Tech Nepal
    </div>
    <strong>Copyright 2018 <a href="#">Smart Tech Nepal Pvt. Ltd.</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('datepicker/nepali.datepicker.v2.2.min.js') }}"></script>

      <link rel="stylesheet" type="text/css" href="{{ asset('datepicker/nepali.datepicker.v2.2.min.css') }}" />
      <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>


      <script src="{{ asset('js/heart.js') }}"></script>

 @stack('scripts')

<script type="text/javascript">

  ;(function(){
  function id(v){ return document.getElementById(v); }
  function loadbar() {
    var ovrl = id("overlay"),
        prog = id("progress"),
        stat = id("progstat"),
        img = document.images,
        c = 0,
        tot = img.length;
    if(tot == 0) return doneLoading();

    function imgLoaded(){
      c += 1;
      var perc = ((100/tot*c) << 0) +"%";
      prog.style.width = perc;
      stat.innerHTML = "<p style=\"font-size:20px\">"+"लोड हुँदै "+"<p>"+perc;
      if(c===tot) return doneLoading();
    }
    function doneLoading(){
      ovrl.style.opacity = 0;
      setTimeout(function(){
        ovrl.style.display = "none";
      }, 1200);
    }
    for(var i=0; i<tot; i++) {
      var tImg     = new Image();
      tImg.onload  = imgLoaded;
      tImg.onerror = imgLoaded;
      tImg.src     = img[i].src;
    }
  }
  document.addEventListener('DOMContentLoaded', loadbar, false);

  var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
	 return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
	 return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

}());
</script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
</body>
</html>
