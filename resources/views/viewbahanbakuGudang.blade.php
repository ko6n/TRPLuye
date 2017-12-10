<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winpack.com</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">insert_chart</i> <strong>PT.WINAPACK</strong></a>
                
        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right" > 
                
                  
                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" ><i class="fa fa-user fa-fw" style="margin-left: 20px;"></i> <b>Gudang</b> <i class="materiall-icons right" style="margin-left: 30px;"></i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="/masuk"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>


       <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class=" waves-effect waves-dark" href="/gudang"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="formbahanbaku" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Tambah Bahan Baku</a>
                    </li>
                    <li>
                        <a href="viewbahanbakuGudang" class=" active-menu waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                    </li>
                    <li>
                        <a href="viewsetengahjadi" class=" waves-effect waves-dark"><i class="fa fa-sitemap"></i> Barang Setengah Jadi</a>
                    </li>
                    
                    
                    

                    

            </div>

            @if(Session::has('message'))
        <div class="col s12">
            <div class="alert1">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Bahan Baku
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Bahan Baku</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }} / Ambil Bahan Baku
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                <div class="col-md-10">
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>Bulan</th>
                                            <th style="text-align: center;">Nama Bahan</th>
                                            <th style="text-align: center;">Sisa Bahan</th>
                                            <!-- <th style="text-align: center;">Peramalan Bulan Depan</th> -->
                                            
                                          
                                        </tr>


                                    </thead>

                                    

                                    <tbody  >
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>
                                        
                                        


                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramalbesi->bulan . "-01"))}} {{ date('Y', strtotime($ramalbesi->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramalbesi->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramalbesi->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramalbesi->peramalan}}</td> -->

                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahanbesi{{$ramalbesi->id_besi }}" style="width: 80px;">Edit</a> 
                                            </td>

                                        
                                        </tr>

                                          <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>

                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramalalumunium->bulan . "-01"))}} {{ date('Y', strtotime($ramalalumunium->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramalalumunium->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramalalumunium->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramalalumunium->peramalan}}</td> -->
                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahanalmunium{{$ramalalumunium->id_almunium }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>

                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramalseng->bulan . "-01"))}} {{ date('Y', strtotime($ramalseng->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramalseng->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramalseng->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramalseng->peramalan}}</td> -->
                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahanseng{{$ramalseng->id_seng }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>

                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramalplastik->bulan . "-01"))}} {{ date('Y', strtotime($ramalplastik->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramalplastik->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramalplastik->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramalplastik->peramalan}}</td> -->
                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahanplastik{{$ramalplastik->id_plastik }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>

                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramalkacamika->bulan . "-01"))}} {{ date('Y', strtotime($ramalkacamika->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramalkacamika->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramalkacamika->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramalkacamika->peramalan}}</td> -->
                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahankacamika{{$ramalkacamika->id_kacamika }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                           
                                        </tr>

                                        <tr style="text-align: center;">
                                            <td >{{date("F", strtotime("2001-" . $ramaltembaga->bulan . "-01"))}} {{ date('Y', strtotime($ramaltembaga->created_at)) }}</td>
                                            <td style="text-align: center;">{{$ramaltembaga->namabahan}}</td>
                                            <td style="text-align: center;">{{$ramaltembaga->jumlah}}</td>
                                            <!-- <td style="text-align: center;">{{$ramaltembaga->peramalan}}</td> -->
                                            <td>
                                            <a class="waves-effect waves-light btn" href="detailbahantembaga{{$ramaltembaga->id_tembaga }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>

                                        

                                    </tbody>


                                    
                                </table>



                               </div>
                            </div>

                            
                        </div>
                        
                    </div>
                    

                  <!-- $user = DB::table('users')
                ->latest()
                ->first();
                </div> -->
            </div>
      




      
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    
   
    
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
     <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>


     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
       

    <script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script> 
<script src="{{ URL::asset('assets/js/wow.min.js') }}" type="text/javascript"></script> 
<script src="{{ URL::asset('assets/js/materialize.min.js') }}" type="text/javascript"></script> 
<script>

    

      new WOW().init();
         $('.alert1').delay(3000).fadeOut(500)

</script>

    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>