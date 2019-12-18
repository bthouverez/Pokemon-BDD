<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="hyperspace/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="hyperspace/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="/pokemons" class="{{ Request::is('pokemons') ? 'active' : '' }}">Pokémons</a></li>
							<li><a href="/dresseurs" class="{{ Request::is('dresseurs') ? 'active' : '' }}">Dresseurs</a></li>
							<li><a href="/attaques" class="{{ Request::is('attaques') ? 'active' : '' }}">Attaques</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				@yield('main')

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="hyperspace/assets/js/jquery.min.js"></script>
			<script src="hyperspace/assets/js/jquery.scrollex.min.js"></script>
			<script src="hyperspace/assets/js/jquery.scrolly.min.js"></script>
			<script src="hyperspace/assets/js/browser.min.js"></script>
			<script src="hyperspace/assets/js/breakpoints.min.js"></script>
			<script src="hyperspace/assets/js/util.js"></script>
			<script src="hyperspace/assets/js/main.js"></script>

	</body>
</html>