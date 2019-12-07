<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">

		<title>Sitio con materialize</title>
		<link href="css/materialize.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Raleway&display=swap" rel="stylesheet">		
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar-fixed"><!-- seccion de menu --> 
			<nav class="top_nav">
				<div class="nav-wrapper container">
					<a href="/" class="brand-logo" target="_blank">Logo de sitio</a>
					<ul class="slides side-nav" id="mobile-demo">
						<a href="javascript:void(0);" class="titulo home">Titulo del sitio</a>
						<p class="subtitulo">Descripción del sitio</p>
						<li>
							<a href="javascript:void(0);" data-id="0" class="enlace">1. Título de pregunta 01</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="1" class="enlace">2. Título de pregunta 02</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="2" class="enlace">3. Título de pregunta 03</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="3" class="enlace">4. Título de pregunta 04</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="4" class="enlace">5. Título de pregunta 05</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="5" class="enlace">6. Título de pregunta 06</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="6" class="enlace">7. Título de pregunta 07</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-id="7" class="enlace">8. Título de pregunta 08</a>
						</li>
					</ul>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</div><!-- seccion de menu --> 

		<div class="container" id="inicio"><!--inicio contenedor seccion inicio-->
			<div class="row">
				<div class="col s12 m12 l6 pd-left animated bounceInLeft">
					<h1 class="titulo tblanco">Titulo del sitio</h1>
					<h4 class="subtitulo tblanco bgColor">Descripción del sitio</h4>
					<div class="info_texto">
						<p>Por Autor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos enim tenetur amet ipsa autem, laudantium dicta a incidunt ab quaerat, cum. Aut ipsam nemo incidunt neque sapiente alias ratione dignissimos.</p>
						<p>Corporis eligendi quaerat illo aperiam magnam, neque, hic recusandae fuga cumque illum incidunt ut quibusdam ea amet quam nemo perspiciatis, quae exercitationem unde pariatur. Excepturi soluta dicta adipisci quos aliquam!</p>
						<p>Fugiat maiores iste inventore libero minus ex quaerat praesentium beatae esse vitae eligendi natus tempore, recusandae nesciunt quisquam. Tenetur necessitatibus inventore suscipit cupiditate nihil voluptatum ratione voluptas quia animi, facere!</p>
						<p>Obcaecati iusto recusandae dicta laudantium illo, nisi expedita molestias laboriosam! Distinctio, ad, dolores. Corporis cumque hic voluptatibus quisquam. Omnis, itaque perferendis quos ducimus. Asperiores suscipit minima, qui, ut quisquam cum!</p>
						<a href="javascript:void(0);" id="iniciar">Iniciar <i>>>></i></a>
					</div>
				</div>
				<div class="col s12 m12 l6 animated bounceInRight">
					<div class="control hide-on-med-and-down">
						<h4 class="tconten">Contenido</h4>
						<ul class="nav_conten"><!--inicio de menu contenido-->
							<li>
								<a href="javascript:void(0);" data-id="0" class="enlace">1. Título de pregunta 01</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="1" class="enlace">2. Título de pregunta 02</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="2" class="enlace">3. Título de pregunta 03</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="3" class="enlace">4. Título de pregunta 04</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="4" class="enlace">5. Título de pregunta 05</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="5" class="enlace">6. Título de pregunta 06</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="6" class="enlace">7. Título de pregunta 07</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-id="7" class="enlace">8. Título de pregunta 08</a>
							</li>
						</ul><!--fin de menu contenido-->
					</div>
				</div>
			</div>
		</div><!--fin contenedor seccion inicio-->

		<div class="container" id="tarjetas"></div><!--tarjetas-->

		<script src="js/jquery-3.2.0.min.js"></script>
		<script src="js/materialize.min.js"></script> 
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>