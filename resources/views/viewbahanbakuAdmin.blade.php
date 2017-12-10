<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winpack.com</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ URL::asset('assets/js/Lightweight-Chart/cssCharts.css') }}"> 




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
                
                  
                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" ><i class="fa fa-user fa-fw" style="margin-left: 20px;"></i> <b>Administrasi</b> <i class="materiall-icons right" style="margin-left: 30px;"></i></a></li>
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
                    <a class=" waves-effect waves-dark" href="/administrasi"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="formpemesanan" class=" waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Pemesanan</a>
                </li>
                <li>
                    <a href="formkatalogharga" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Katalog Harga</a>
                </li>
                <li>
                    <a href="viewbahanbakuAdmin" class="active-menu waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                </li>
                    
                    

                    

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Stok Bahan Baku
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Tabel</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>

            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             {{ date('d M Y') }}
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                <div class="col-md-10">
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>Bulan</th>
                                            <th style="text-align: center;">Nama Bahan</th>
                                            <th style="text-align: center;">Stok Bahan Baku</th>
                                            <th style="text-align: center;">Peramalan Bulan Depan</th>
                                            
                                          
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
                                            <td style="text-align: center;">{{$ramalbesi->peramalan}}</td>

                                        
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
                                            <td style="text-align: center;">{{$ramalalumunium->peramalan}}</td>
                                        
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
                                            <td style="text-align: center;">{{$ramalseng->peramalan}}</td>
                                        
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
                                            <td style="text-align: center;">{{$ramalplastik->peramalan}}</td>
                                        
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
                                            <td style="text-align: center;">{{$ramalkacamika->peramalan}}</td>
                                        
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
                                            <td style="text-align: center;">{{$ramaltembaga->peramalan}}</td>
                                        
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


    <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}"></script>
    
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ URL::asset('assets/materialize/js/materialize.min.js') }}"></script>
    
    <script src="{{ URL::asset('assets/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ URL::asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/morris/morris.js') }}"></script>
    
    
    <script src="{{ URL::asset('assets/js/easypiechart.js') }}"></script>
    <script src="{{ URL::asset('assets/js/easypiechart-data.js') }}"></script>
    
     <script src="{{ URL::asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>
     <script src="{{ URL::asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
     <script src="{{ URL::asset('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>


      

    

    <script src="{{ URL::asset('assets/js/custom-scripts.js') }}"></script> 
 

</body>

</html>