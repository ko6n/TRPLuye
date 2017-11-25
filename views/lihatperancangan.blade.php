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
   <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


</head>

<style type="text/css">
  .help-block{
    color: red;
  }
</style>

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


        <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" ><i class="fa fa-user fa-fw" style="margin-left: 20px;"></i> <b>Perancangan</b> <i class="materiall-icons right" style="margin-left: 30px;"></i></a></li>
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
            <a class=" waves-effect waves-dark" href="perancangan"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
            <a href="viewpemesanan" class="waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Pemesanan</a>
          </li>
          <li>
            <a href="uploaddesain" class="active-menu waves-effect waves-dark"><i class="fa fa-edit"></i> Desain Perancangan</a>
          </li>






        </div>

      </nav>
      <!-- /. NAV SIDE  -->
      
      <div id="page-wrapper">
        <div class="header"> 
          <h1 class="page-header">
            Desain Perancangan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Lihat Desain</a></li>
            <li class="active">Data</li>
          </ol> 

        </div>

        <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Download File Desain
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >

                                    <thead>
                                        <tr >
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Desain</th>
                                            <th style="text-align: center;">Tanggal Upload</th>
                                            <th style="text-align: center;">Aksi</th>
                                            <th></th>
                                           
                                        </tr>
                                    </thead>

                                    

                                    <tbody  >

                                <?php $no=1; ?>
                                @foreach($uploads as $upload)
                                        
                                        <tr>
                                            <th style="text-align: center;">{{$no++}}</th>
                                            <td style="text-align: center;">{{ $upload->namaperancangan }}</td>
                                            <td style="text-align: center;">{{ $upload->created_at }}</td>
                                            <td style="text-align: center;">

                                                <a class="waves-effect waves-light btn" href="up_file/{{ $upload->file_name }}" download="{{ $upload->file_name }}" style="width: 150px" >Download</a> 
                                            </td>

                                            <td style="text-align: center;">

                                              <form method="POST" action="hapusPerancang{{$upload->id_upload}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                             <input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="waves-effect waves-light btn" tabindex="0" value="Hapus" style="width: 80px;"
                                            /> 
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


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
  $(document).ready(function () {
    $('#dataTables-example').dataTable();
  });
</script>

<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){

    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;

    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif
</script>


<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script> 


</body>

</html>
































<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  

</head>


<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<body>



  <div class="container">


                  

    <h2>Upload file</h2>
 
  

  {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control namaperancangan_c" id="namaperancangan_id" name="namaperancangan" placeholder="Enter Tile"  value="{{old('namaperancangan') }}">

        @if ($errors->has('namaperancangan')) <p class="help-block">{{ $errors->first('namaperancangan') }}</p> @endif

        </div>


      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="filenam" class="filename">

        @if ($errors->has('filenam')) <p class="help-block">{{ $errors->first('filenam') }}</p> @endif

      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>



    </div>

    
{!! Form::close() !!}

</div>
 


<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>

</body>
</html> -->