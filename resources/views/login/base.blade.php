<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href=" {{ asset('/css/materialize.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/font-awesome-4.1.0/css/font-awesome.min.css') }} ">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			nav{
				background: none repeat scroll 0% 0% #1F646C !important;
			}
			body{
				background-image: url("{{ asset('/img/login/bg1.png')}}");
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

            .side-nav{
                background: none repeat scroll 0% 0% #1F646C !important;
            }

            .side-nav a{
                color: white;
            }
            .side-nav a:hover{
                color: black;
            }

			.input-field label{
				color: white;
			}
			.input-field input {
                color: white;
            }
             .input-field input[type=text]:disabled{
                 color: white;
             }
            .input-field input[type=text]:disabled + label{
                color: white;
            }
			main {
				flex: 1 0 auto;
			}
			footer{
				background: none repeat scroll 0% 0% #1F646C !important;
			}
		</style>
		@yield('style')
	</head>
	<body>
		<nav>
			<div class="nav-wraper">
				<div class="container">
					<a href="{{ URL::route('Login')}}" class="brand-logo">NETSUL</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="#">Registrar</a></li>
						<li><a href="#">Serviços</a></li>
						<li><a href="#">SAC</a></li>
					</ul>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					<!-- Collapse Mobile - Menu lateral esquerdo -->
					<ul class="side-nav" id="mobile-demo">
						@if (Auth::guest())
						<li><a href="#">Registrar</a></li>
						@endif
						<li><a href="#">Serviços</a></li>
						<li><a href="#">SAC</a></li>
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')

		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 m12 s12">
						<h5 class="white-text">Netsul bla bla</h5>
						<p class="grey-text text-lighten-4">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
					</div>
					<div class="col l6 m12 s12">
						<div class="col l6 m12 s12">
							<ul>
								<li><a href="" class="grey-text text-lighten-3">Registrar</a></li>
								<li><a href="" class="grey-text text-lighten-3">Serviços</a></li>
								<li><a href="" class="grey-text text-lighten-3">SAC</a></li>
							</ul>
						</div>
						<div class="col l6 m12 s12">
							<p class="white-text">Telefone, endereço bla bla bla</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Scripts -->
		<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>

        @yield('script')
	</body>
	</html>
