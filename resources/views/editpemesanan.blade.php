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
                    <a href="formpemesanan" class=" active-menu waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Pemesanan</a>
                </li>
                <li>
                    <a href="formkatalogharga" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Katalog Harga</a>
                </li>
                <li>
                    <a href="viewbahanbakuAdmin" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                </li>





            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                             Pemesanan
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Forms</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
        
            <div id="page-inner"> 
             <div class="row">
             <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Detail Pemesanan
                        </div>
                        <div class="card-content">


    <div class="wow fadeIn" id="wrapper-d">

        @if(Session::has('message'))
        <div class="col s12">
            <div class="alert1">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif


    <form class="col s12" action="{{ url('ubahpesanan') }}&{{ $pemesanan->id_pemesanan }}">
     {{ csrf_field() }}   
      <div class="row">
      <div class="input-field col s8">
          <label for="last_name">Nama Pemesan</label><br>
          </div>
        <div class="input-field col s8">
          <input id="nama" type="text" name="nama_pemesan" value="{{ $pemesanan->nama_pemesan }}" required="">
          
        </div>
        <div class="input-field col s8">
          <label for="last_name">Tanggal Pemesanan</label><br>
        </div>
          <div class="input-field col s8">
            <input id="tanggal" type="date" class="datepicker" name="tanggalpesan" value="{{ $pemesanan->tanggalpesan }}" required="">
          </div>
          <div class="input-field col s8">
          <label for="last_name">Tanggal Jadi</label><br>
        </div>
          <div class="input-field col s8">
            <input id="estimasi" type="date" class="datepicker" name="estimasi" value="{{ $pemesanan->estimasi }}" required="">
          </div>
      </div>
      <div class="row">
        <div class="input-field col s6"><br>
          <input id="alamat" type="text" name="alamat" value="{{ $pemesanan->alamat }}" required="">
          <label for="first_name">Alamat Pemesan</label>
        </div>
         <div class="input-field col s6" style="margin-top: 39px;">
            <select id="jenis_barang" name="jenis_barang" class="required" required="">
              <option value="{{ $pemesanan->jenis_barang }}">- Pilih jenis Mesin -</option>
              <option value="Vertikal">Vertikal</option>
              <option value="Horizontal">Horizontal</option>
              
            </select>
          </div>
      </div>
       <div class="row">
        <div class="input-field col s6"><br>
          <input id="telepon" type="text" name="no_telepon" value="{{ $pemesanan->no_telepon }}" required="">
          <label for="first_name">No Telepon</label>
        </div>
        <div class="input-field col s6"><br>
          <input id="jumlah" type="number" name="jumlah" value="{{ $pemesanan->jumlah }}" required="">
          <label for="last_name">Jumlah</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6"><br>
          <input id="gunamesin" type="text" name="kegunaanmesin" value="{{ $pemesanan->kegunaanmesin }}" required="">
          <label for="first_name">Kegunaan Mesin</label>
        </div>
        <div class="input-field col s6"><br>
          <input id="harga" type="number" name="harga" value="{{ $pemesanan->harga }}" required="">
          <label for="last_name">Harga Total</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8"><br>
          <input id="keterangan" type="text" name="keterangan" value="{{ $pemesanan->keterangan }}" required="">
          <label for="first_name">Keterangan Mesin</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s6"><br>
          <input  id="status" type="text" name="status_jadi" value="{{ $pemesanan->status_jadi }}" readonly="">
         <label for="first_name">status jadi</label>
        </div>
        <div class="input-field col s6"><br>
          <input id="desain" type="text" name="desain" value="{{ $pemesanan->desain }}" readonly="">
          <label for="last_name">desain</label>
        </div>
      </div>
      
      <button class="waves-effect waves-light btn" style="width: 100px;">Simpan</button>
      <a class="waves-effect waves-light btn" href="{{ url('lihatpemesanan') }}" style="width: 100px;">Kembali</a> 
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



$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 5 // Creates a dropdown of 15 years to control year
    });

      new WOW().init();
         $('.alert1').delay(3000).fadeOut(500)

</script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script> 


</body>

</html>