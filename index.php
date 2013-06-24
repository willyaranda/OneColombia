<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Mozilla Colombia |  </title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="main/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="main/css/fonts.css" />
	<link rel="stylesheet" href="/	/www.mozilla.org/tabzilla/media/css/tabzilla.css"  />
	<link rel="stylesheet" type="text/css" media="screen" href="main/css/_css.css" />

	<!-- JS -->

</head>
<body>

<div id="wrap">

	<header id="header">
	<a href="http://www.mozilla.org/" id="tabzilla" data-locale="es-ES">mozilla</a>
		<div id="logo-mc"></div>
		<h1><?php echo get_bloginfo('name'); ?></h1>
		<h2><?php echo get_bloginfo('description'); ?></h2>

	</header>


<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Contenido
     :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

	<div id="mosaico"></div>

	<div id="content">
		<div id="banner-news"></div>
		<nav>
			<ul>
				<a href=""><li><span class="box-one"></span> Objetivo </li></a>
				<a href=""><li><span class="box-two"></span> Comunidad </li></a>
				<a href=""><li><span class="box-tree"></span> Web Abierta </li></a>
				<a href=""><li><span class="box-four"></span> Blog </li></a>
				<a href=""><li><span class="box-five"></span> Comunidades </li></a>
				<a href=""><li><span class="box-six"></span> </li></a>
			</ul>
		</nav>

		<a href="" class="button_colabora">COLABORA &nbsp;►</a>


	<!-- Tweeter -->
<a class="twitter-timeline"  href="https://twitter.com/Migueldavidq/mozilla"  data-widget-id="346747120050659331" data-tweet-limit="1" width="300px" height="300px"  data-chrome="nofooter noheader" ></a>



	</div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Comunidad
	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

	<div id="comunity">
		<h4>Comunidad Mozilla</h4>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Productos
	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

	<div id="products">
		<h4>Productos Mozilla</h4>

		<div id="prod_01"><a href="https://www.mozilla.org/firefox/" target="BLANK"></a></div>
		<div id="prod_02"><a href="https://www.mozilla.org/firefox/partners/#os" target="BLANK"></a></div>
		<div id="prod_03"><a href="https://www.mozilla.org/apps/" target="BLANK"></a></div>
		<div id="prod_04"><a href="https://www.mozilla.org/persona/" target="BLANK"></a></div>
		<div id="prod_05"><a href="https://www.mozilla.org/thunderbird/" target="BLANK"></a></div>
		<div id="prod_06"><a href="https://webmaker.org/" target="BLANK"></a></div>
	</div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Footer
	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

	<footer id="colophon">
		<div class="row">

			<div class="footer-logo">
				<a href="/en-US/">
					<img alt="mozilla" src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png"></a>
			</div>

			<div class="footer-license">
				<p>
					Portions of this content are &copy;1998&ndash;2013 by individual mozilla.org contributors. Content available under a
					<a href="/foundation/licensing/website-content.html">Creative Commons license</a>
					.
				</p>
				<p>
					<a href="/en-US/contribute/page/">Contribute to this page</a>
				</p>
			</div>
			<ul class="footer-nav">
				<li>
					<a href="/en-US/about/contact.html#map-mountain_view">Contact Us</a>
				</li>
				<li>
					<a href="/en-US/privacy/">Privacy Policy</a>
				</li>
				<li>
					<a href="/en-US/about/legal.html">Legal Notices</a>
				</li>
				<li>
					<a href="/en-US/legal/fraud-report/index.html">Report Trademark Abuse</a>
				</li>
			</ul>


			<ul class="footer-nav2">
				<li>
					<a href="http://twitter.com/firefox">Twitter</a>
				</li>
				<li>
					<a href="http://facebook.com/Firefox">Facebook</a>
				</li>
				<li>
					<a href="https://affiliates.mozilla.org/">Firefox Affiliates</a>
				</li>
			</ul>

		</div>
	</footer>

</div>
	<!-- JS live -->

	<!-- // <script src="js/live.js"></script> -->
	<!-- JS -->
	<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
	<!--  <script src="https://raw.github.com/debloper/tabzilla/master/media/js/tabzilla.js"></script> -->
	<!--  <script src="https://raw.github.com/debloper/tabzilla/master/media/js/locale.js"></script> -->

	<script src="main/js/jquery.js"></script>
	<script src="main/js/_js.js"></script>

	<!-- Twitter -->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</body>
</html>
