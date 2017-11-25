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
                        <a href="formbahanbaku" class=" waves-effect waves-dark"><i class="fa fa-qrcode"></i> Bahan Baku</a>
                    </li>
                    <li>
                        <a href="viewsetengahjadi" class="active-menu waves-effect waves-dark"><i class="fa fa-sitemap"></i> Barang Setengah Jadi</a>
                    </li>
                    
                    
         @if(Session::has('message'))
        <div class="col s12">
            <div class="alert2">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif


                    

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Barang Setengah Jadi
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Setengah Jadi</a></li>
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


                                <div class="col-md-7">
                                <table style="border: 0;text-align: center;">

                                    <thead style="border: 0;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Sisa Barang</th>
                                            <th></th>
                                           
                                        </tr>

                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($setengahjadis as $setengahjadi)
                                        
                                    
                                        <tr>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                            <td><br></td>
                                        </tr>
                                        


                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td>{{ $setengahjadi->namabarang }}</td>
                                            <td>{{ $setengahjadi->jumlah }} unit</td>
                                            <td>
                                                <a class="waves-effect waves-light btn" href="detailsetengahjadiGudang{{$setengahjadi->id_setengahjadi}}" style="width: 80px;margin-left: -100px">Edit</a> 
                                            </td>
                                           
                                        </tr>
                                         
                               @endforeach
                               
                                    </tbody>
                                    
                                </table>
                               
                            </div>

                            <div class="row">
                            <div class="col-md-12"><br><br><br>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
      
    </div>

    
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.metisMenu.js"></script>
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
         $('.alert2').delay(3000).fadeOut(500)

</script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script> 


</body>

</html>