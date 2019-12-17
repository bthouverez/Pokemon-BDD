<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		main, nav {
			width: 75%;
			margin: auto;
		}
        .card { 
            margin: auto;  
        }
        .card img {
        }
 		html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
	</style>

</head>
<body>
	<header class="bg-light">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="/">Accueil</a>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item  {{ Request::is('pokemons') ? 'active' : '' }}">
		        <a class="nav-link" href="/pokemons">Pokémons</a>
		      </li>
		      <li class="nav-item  {{ Request::is('attaques') ? 'active' : '' }}">
		        <a class="nav-link" href="/attaques">Attaques</a>
		      </li>
		      <li class="nav-item  {{ Request::is('dresseurs') ? 'active' : '' }}">
		        <a class="nav-link" href="/dresseurs">Dresseurs</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
	@yield('main')

</body>
</html>


