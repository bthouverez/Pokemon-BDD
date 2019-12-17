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
              <li class="nav-item {{ Request::is('pokemons') ? 'active' : '' }} dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pokemonsLink" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pokémons
                </a>
                <div class="dropdown-menu" aria-labelledby="pokemonsLink">
                  <a class="dropdown-item" href="/pokemons">Voir tous</a>
                  <a class="dropdown-item" href="/pokemons/create">Créer</a>
                </div>
              </li>
              <li class="nav-item {{ Request::is('attaques') ? 'active' : '' }} dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="attaquesLink" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Attaques
                </a>
                <div class="dropdown-menu" aria-labelledby="attaquesLink">
                  <a class="dropdown-item" href="/attaques">Voir toutes</a>
                  <a class="dropdown-item" href="/attaques/create">Créer</a>
                </div>
              </li>
              <li class="nav-item {{ Request::is('dresseurs') ? 'active' : '' }} dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dresseursLink" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dresseurs
                </a>
                <div class="dropdown-menu" aria-labelledby="dresseursLink">
                  <a class="dropdown-item" href="/dresseurs">Voir tous</a>
                  <a class="dropdown-item" href="/dresseurs/create">Créer</a>
                </div>
              </li>
		    </ul>
		  </div>
		</nav>
	</header>
	@yield('main')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


