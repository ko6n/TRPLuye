<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winpack.com</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
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
                    <a href="formpemesanan" class="  waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Pemesanan</a>
                </li>
                <li>
                    <a href="formkatalogharga" class=" active-menu waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Katalog Harga</a>
                </li>
                <li>
                    <a href="tab-panel.html" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                </li>





            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                             Katalog Harga
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Katalog</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
        
            <div id="page-inner"> 
             <div class="row">
             <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Tambah Katalog Harga
                        </div>
                        <div class="card-content">


    <div class="wow fadeIn" id="wrapper-d">

        @if(Session::has('message'))
        <div class="col s12">
            <div class="alert">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif


    <form class="col s12" action="{{ url('tambahkatalogharga') }}">
     {{ csrf_field() }}   
     
      <div class="row">
        <div class="input-field col s8">
          <input id="namabarang" type="text" name="namabarang" required="">
          <label for="first_name">Nama Barang / Custom</label>
        </div>
        <div class="input-field col s8">
          <input id="hargaunit" type="text" name="harga" required="">
          <label for="last_name">Harga Barang / Unit</label>
        </div>
      </div>
       
      
      <button class="waves-effect waves-light btn" style="width: 100px;">Tambah</button>
      <a class="waves-effect waves-light btn" href="{{ url('lihatpemesanan') }}" style="width: 100px;">Lihat</a> 
       </form>

       
    <div class="clearBoth"></div>
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


$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 5 // Creates a dropdown of 15 years to control year
    });

      new WOW().init();

</script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script> 


</body>

</html>