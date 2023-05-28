<?php
// Return http response 503 service unavailable. This is important for SEO too!
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' ); // 10 minutes
?>
<!DOCTYPE html>
<html>
<head>
  <title>Päivitämme sivustoamme parhaillaan - WP-Opas</title>
	<meta charset="utf-8" />
	<style>
		@import url(http://fonts.googleapis.com/css?family=Lora);
		@import url(http://fonts.googleapis.com/css?family=Oswald);
		body{
			color: #333;
			font-family: 'Lora', serif;
			font-size: 16px;
			line-height: 1.5625;
			margin: 0;
			padding: 0;
			text-decoration: none;
			background-color: #272729;
		}
		h1 {
			font-size: 36px;
			font-family: 'Oswald', arial, serif;
			font-weight: normal;
		}
		#mDiv{
			display:block;
			width: 100%;
		}
		.content .wrap{
			display:block;
			margin: 0 auto;
			width: 960px;
		}
		.content{
			background-color: #fff;
			padding: 20px 0 40px 0;
		}
		a {
			color: #2883be;
			text-decoration: none;
		}
		.header, .footer{
			text-align:center;
			padding-top: 15px;
			padding-bottom: 15px;
			color: #fff;
		}
		img{
			max-width: 100%;
			border:none;
		}
		
		@media only screen and (max-width: 960px) {
			.content .wrap{
				width: 100%;
				padding: 0 20px;
				box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
			}
		}
	</style>
</head>
<body>
	<div id="mDiv">
		<div class="header">
			<a href="/"><img src="/wp-content/uploads/iso-wpopas.png"/></a>
		</div>
		<div class="content">
			<div class="wrap">
				<h1 style="text-align: center;">Oijoijoi!</h1>
				<p>
					Nyt kävi niin, että olemme parhaillaan päivittämässä sivustoamme.
					Palaamme takaisin kymmenen minuutin sisällä. Sinä aikana voit tsekata vaikkapa <a target="_blank" href="http://youtube.com/user/wpopas">Youtube-kanavamme</a> tai <a href="https://www.facebook.com/wpopas" target="_blank">Facebook-sivut</a>.
				</p>
				<p style="text-align: center">
					<img src="/wp-content/uploads/huolto-pieni.jpg">
				</p>
			</div>
		</div>
		<div class="footer">&copy; <?php echo date('Y'); ?> wpopas.fi</div>
	</div>
</body>
</html>
<?php die(); ?>
