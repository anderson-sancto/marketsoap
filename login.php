<?php
session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Login</title>
	<link rel="icon" type="imagem/png" href="assets/img/fav.ico" />
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-login.css">
</head>

<body id="body" class="bg">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand" href="#"><img class="logo-img" src="assets/img/logo-banner.svg" width="30" height="25" alt="">Market Soap</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"></li>
			</ul>
			<a href="index.html" class="btn btn-light btn-login">Home</a>
		</div>
	</nav>
	<!--Caixa login-->
	<section id="login" class="login-banner">
		<?php
		if (isset($_GET['login'])) {
		?>
			<div class="alert alert-danger alert-dismissible fade show">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Falhou!</strong> Login ou Senha incorreto.
			</div>

		<?php } ?>
		<form action="control/ctr-funcionario.php" method="POST" class="login-box">
			<p class="acesso-adm">Acesso Administrativo</p>
			<div class="form-group">
				<label for="exampleInputEmail1" class="text-email">Login</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtlogin">
				<small id="emailHelp" class="form-text text-muted descricao-email"></small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1" class="text-pass">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="txtsenha">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label text-check" for="exampleCheck1">Lembre-me</label>
			</div>
			<button type="submit" class="btn btn-light botao-box btn-login">Acessar</button>
		</form>
	</section>
	<!--footer-->
	<footer id="contato">
		<div class="row">
			<div class="col-sm-6 col-md-4 footer-navigation">
				<h3><img src="assets/img/logo-footer.png"></h3>
				<p class="links"><a href="index.html">Home</a><strong> · </strong><a href="#linhas">
					</a><strong> ·
					</strong><a href="#produto"></a><strong> · </strong><a href="#sobrenos">
					</a><strong> ·
					</strong><a href="#depoimentos"></a><strong> · </strong><a href="#contato"></a>
				</p>
				<p class="company-name">Market Soap © 2021 </p>
			</div>
			<div class="col-sm-6 col-md-4 footer-contacts">
				<div>
					<span class="fa fa-map-marker footer-contacts-icon"> </span>
					<p><span class="new-line-span">Rua x, nº 666</span> Salvador, Bahia</p>
				</div>
				<div>
					<i class="fa fa-phone footer-contacts-icon"></i>
					<p class="footer-center-info email text-left"> +55 71 987 654 321</p>
				</div>
				<div>
					<i class="fa fa-envelope footer-contacts-icon"></i>
					<p> <a href="#" target="_blank">support@marketsoap.com</a></p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4 footer-about">
				<h4>Redes Sociais</h4>
				<div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>