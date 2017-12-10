<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>winapack.com</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="/admin">WINAPACK</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#intro">About</a></li>
          <li><a href="#services">Divisi</a></li>
          <li><a href="#works">Product</a></li>
          <!-- <li><a href="#teams">Our Team</a></li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>PT. WINAPACK </h1>
        <p>Perusahan Manufaktur Pembuatan Mesin Pengemasan di indonesia</p>
        @guest
        <a href="/masuk" class="btn btn-large">Login Here</a> 
        @else
        <a href="{{ route('logout') }}" class="btn btn-large" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                     </div>
                     @endguest
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>PT. Winapack!</h3>
      <p>Selamat Datang di Website PT WINAPACK. Kami merupakan perusahaan yang berdiri sejak 1993 bergerak dalam industri Makanan dalam Kemasan. PT. Winapack adalah perusahaan manufaktur yang bergerak dalam bidang pembuatan mesin pengemasan, mesin pengemasan tersebut dapat mengemas makanan, minuman, dan sebuk.</p>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>Administrasi</h5>
          <p>Mengatur segala jenis administrasi perusahaan seperti pemesanan, pembelihan bahan baku, dan keuangan perusahaan.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Gudang</h5>
          <p>Mengatur semua hal yang bersangkutan dengn penyimpanan barang sepeti, penyimpanan bahan baku, product setengah jadi
          dan lain-lain.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Perancangan</h5>
          <p>Membuat desain atau rancangan dari product yang akan di buat, dan akan melakukan pembuatan perancangan lagi jika
          ada pemesanan khusus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Perakitan</h5>
          <p>Membuat produk jadi, yaitu bagian ini merakit produk setangah jadi menjadi produk jadi.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Produksi</h5>
          <p>Mengolah bahan baku menjadi bagian-bagian dari mesin (produk setengah jadi)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Manager</h5>
          <p>Memantau segala janis aktifitas dari seluruh divisi yang ada pada PT.Winapack.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- work section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin1.jpg" class="work-box"> <img src="images/mesin1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Veritcal Mesin</h5>
            <p>Pembungkus kemasan rentengan</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin2.jpg" class="work-box"> <img src="images/mesin2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Vertical Mesin</h5>
            <p>Pembungkus Minuman</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin3.jpg" class="work-box"> <img src="images/mesin3.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Vertical Mesin</h5>
            <p>Macam-macam Warna vertikal mesin</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin4.jpg" class="work-box"> <img src="images/mesin4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Horisontal Mesin</h5>
            <p>Pembungkus Kemasan minuman gelas</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin5.jpg" class="work-box"> <img src="images/mesin5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Vertical Mesin</h5>
            <p>Costume wadah tabung</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin6.jpg" class="work-box"> <img src="images/mesin6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Horisontal Mesin</h5>
            <p>Pembungkus kemasan saset</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin7.jpg" class="work-box"> <img src="images/mesin7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Horisontal Mesin</h5>
            <p>Pembungkus Kardus</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/mesin8.jpg" class="work-box"> <img src="images/mesin8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Horisontal Mesin</h5>
            <p>Costum mesin pembungkus</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- work section --> 
<!-- our team section -->
<!-- <section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Fitri Febrianti</h4>
            <h5 class="role">Project Manager</h5>
            <p></p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Gilang Hidayatullah</h4>
            <h5 class="role">Programer</h5>
            <p></p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Ahmad Feril Khr</h4>
            <h5 class="role">Programer</h5>
            <p></p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Umi Sulistiani</h4>
            <h5 class="role">Analis</h5>
            <p></p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
        <div class="col-md-4 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Lanang Nazula</h4>
            <h5 class="role">Testing</h5>
            <p></p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- our team section --> 
<!-- contact section -->
<section id="contact" class="section intro">
  <div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Temukan kami!</h3>
      <ul>
        <li>jl. Nangka No.265a, Sruni, Gedangan</li>
        <li>Kabupaten Sidoarjo, Jawa Timur</li>
        <li>(031) 8918899</li>
      </ul>
    </div>
    </div>
  </div>
</section>
<!-- contact section --> 

<!-- Footer section -->
<footer class="footer">
  <div class="footer-top sections">
    <div class="container">
      <div class="row">
          <p><center>Copyright © 2017 TRPL kelompok 8C</center></p>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top 
  
</footer> -->
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>