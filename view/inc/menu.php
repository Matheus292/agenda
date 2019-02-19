<link rel="stylesheet" href="<?= VIEW ?>css/bootstrap.css">
<link rel="stylesheet" href="<?= VIEW ?>css/estilo.css">
<link rel="stylesheet" href="<?= VIEW ?>css/bootstrap-theme.css">
<link rel="stylesheet" href="<?= VIEW ?>css/bootstrap.min.css">

<body>
<nav class = "navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
			<span class = "sr-only"> Toogle navigation </span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?=BASEURL;?>">
			<span class="glyphicon glyphicon-home"></span>
		</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					Contato <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?= VIEW ?>inserir.php">Adicionar</a></li>
					<li><a href="<?= VIEW ?>consultar.php">Gerenciar</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<main class="container">
