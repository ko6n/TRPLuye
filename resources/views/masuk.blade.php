<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>winapack.com</title>
  
  
  
      <link rel="stylesheet" href="login/css/style.css">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
  
</head>

<body>
  <div class="wrapper">
	<div class="container">
	<br>
	<br>
	<br>
	<br>

	  			
				
	
		<h1 style="color: white;">Welcome</h1>
		
		<div class="isi" style="margin-left: -370px;margin-top: -100px">
	<div class="form-login">
		<form class="login"  action="{{URL('dash')}}" method="POST">

		{{csrf_field()}}
			<div class="login-item">
				<center><span class="judullogin">
					
				</span></center>	
			</div>
			<div class="login-item">
			@if(Session::has('alertUsername'))
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				     <span>{{ Session::get('alertUsername') }}</span>
				</div>
				@endif
				<div class="ui fluid left icon input">
						  <input type="text" name="username" placeholder="Username">
						  <i class="user icon"></i>
						</div>
						</div>
		    <div class="login-item">
		    @if(Session::has('alertPassword'))
		    	<div class="alert">
				  <span class="closebtn">&times;</span>  
				  	<span>{{ Session::get('alertPassword') }}</span>
				  	<?Session::forget('alertPassword') ;?>
				</div>
				@endif
				<div class="ui fluid left icon input">
						  <input type="password" name="password" placeholder="Password" >
						  <i class="lock icon"></i>
						</div>
		    </div>
		    <div class="login-item">
		    	<button class="fluid inverted ui silver button" style="height: 50px;">Login</button>
		    </div>
  		</form>
	</div>
	</div>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>