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
                
                  
                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" ><i class="fa fa-user fa-fw" style="margin-left: 20px;"></i> <b>Perakitan</b> <i class="materiall-icons right" style="margin-left: 30px;"></i></a></li>
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
                        <a class=" waves-effect waves-dark" href="/perakitan"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewpemesananperakitan" class=" active-menu waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Pemesanan</a>
                    </li>
                     <li>
                        <a href="viewsetengahjadiPerakitan" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Barang Setengah Jadi</a>
                    </li>
                    <li>
                        <a href="viewfilePerakitan" class="waves-effect waves-dark"><i class="fa fa-edit"></i>Desain Perancangan</a>
                    </li>
                    
                    

                    

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
       <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Pemesanan
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Pemesanan</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>

            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Tabel Pemesanan
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pesanan</th>
                                            <th>Nama Pemesan</th>
                                           
                                            <th>Jenis Barang</th>
                                            <th>Kegunaan</th>
                                            <th>Jumlah</th>
                                           
                                            <th>Status</th>
                                            <th>Desain</th>
                                            
                                            <th></th>
                                        </tr>
                                    </thead>

                                    

                                    <tbody style="text-align: center;" >

                                <?php $no=1; ?>
                                @foreach($pemesanans as $pemesanan)
                                        
                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $pemesanan->tanggalpesan }}</td>
                                            <td>{{ $pemesanan->nama_pemesan }}</td>
                                            
                                            <td>{{ $pemesanan->jenis_barang }}</td>
                                            <td>{{ $pemesanan->kegunaanmesin }}</td>
                                            <td>{{ $pemesanan->jumlah }}</td>
                                            
                                            <td>{{ $pemesanan->status_jadi }}</td>
                                            <td>{{ $pemesanan->desain }}</td>
                
                                            <td>
                                                <a class="waves-effect waves-light btn" href="detailpemesananPerakitan{{ $pemesanan->id_pemesanan }}" style="width: 80px;">Edit</a> 
                                            </td>
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>
                            
                        </div>
                    </div>
                  
                </div>
            </div>
      
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/materialize/js/materialize.min.js"></script>
    
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
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>