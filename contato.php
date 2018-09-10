<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acrotti Mudanças e Transportes</title>
	<meta name="author" name="Everton Fontes">
	<meta name="description" content="Mudanças, Transportes e Fretes na Zona Leste">
	<meta name="keywords" content="mudanças,transportes,fretes,carretos">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contato.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
		  	<div class="container">
		    	<!-- Brand and toggle get grouped for better mobile display -->
		    	<div class="navbar-header">
		     		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1" aria-expanded="false">
				        <span class="sr-only">Menu</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		      		</button>
		      			<a class="navbar-brand" href="index.php" target="blank">Acrotti Transportes</a>
		    	</div>

		    		<!-- Collect the nav links, forms, and other content for toggling -->
		    		<div class="collapse navbar-collapse" id="menu1">
		      			<ul class="nav navbar-nav">
					        <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
					        <li><a href="servico.php">Serviços</a></li>
					        <li><a href="contato.php">Contato</a></li>
			  			</ul>
					</div>
		   	</div> 
		</nav>
	<!--
	<header class="header-site">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12">
					
				</div>
			</div>
		</div>
	</header>
	-->
	<header class="header-site">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="imagens/logo.svg" class="img-responsive" alt="logotipo da empresa">
					<h1 class="text-center">Transportes e Mudanças Nacionais</h1>
				</div>
			</div>
		</div>	
	</header>

			<section id="cont">
				<div class="container">
					<h1 class="text-center">Agende uma Visita</h1>
					<div class="row">
						<div class="col-md-4">
							<h2 class="text-center">Endereço</h2>
							<p class="lead text-center">R. Iolando Ribeiro Boaventura, 57 <br>Jardim Maringa, São Paulo - SP</p>
						</div>

						<div class="col-md-4">
							<h2 class="text-center">Telefone</h2>
							<p class="lead text-center">(11) 2783-9733</p>
						</div>

						<div class="col-md-4">
							<h2 class="text-center">WhatsApp</h2>
							<p class="lead text-center"><a href="https://bit.ly/2tS24jl" target="blank"><i class="fab fa-whatsapp iconwhats"></i>Fale com Acrotti</a></p>
							<!--<p class="lead text-center">(11) 97622-9401</p>-->
						</div>
					</div><br>

					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<h3 class="text-success">Ou envie uma Menssagem que em breve retornaremos</h3>

							<form id="formContato" action="enviar.php" method="post">
								<div class="form-group">
								    <label for="nome">Nome:</label>
								    <input type="text" class="form-control" name="nome" placeholder="Digite seu Nome..">
								</div>

								<div class="form-group">
								    <label for="nome">Telefone:</label>
								    <input type="tel" class="form-control" name="telefone" placeholder="Digite seu Telefone..">
								</div>


								<div class="form-group">
								    <label for="email">Email:</label>
								    <input type="email" class="form-control" name="email" placeholder="Digite seu melhor Email..">
								</div>

								<div class="form-group">
									<label for="mensagem">Mensagem:</label>
								    <textarea name="mensagem" class="form-control" rows="5" placeholder="Escreva aqui sua Mensagem.."></textarea>
								</div>
								  <button type="submit" class="btn btn-success">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		
		</section>

		<section class="imagens">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<p class="lead text-center">Para comprovação do nosso propósito, contate nosso Departamento Comercial através do telefone (11) 2783-9733, e teste nossa capacidade e nossa técnica, confiando á nós a sua mudança de residência, de sua empresa, as de seus executivos, ou a de seus produtos, pois com certeza corresponderemos inteiramente ás suas necessidades e de sua empresa.</p>
					</div>
					
					<div class="col-md-5 col-xs-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.410645988364!2d-46.518971985022404!3d-23.553690684686675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5df872f495a7%3A0x2c01f59ff18a13b6!2sR.+Iolando+Ribeiro+Boaventura%2C+57+-+Jardim+Maringa%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1528032994721" width="100%" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>

		<footer class="navbar navbar-inverse rodape">
			<div class="container">
				<div class="col-md-12">
					<p class="lead text-center">&copy 2018 - Direitos Reservados Acrotti Transportes</p>
				</div>
			</div>
		</footer>
	<script src="bootstrap/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#formContato").validate({
				rules:{
					nome:{
						required: true, minlength:2
					},

					telefone:{
						required:true, digits:true, minlength:8 ,maxlength:9
					},

					email:{
						required: true, email:true
					},

					mensagem:{
						required: true, minlength:5
					}
				},

				messages:{
					nome:{
						required:"Digite o seu nome!",
						minlength:"O seu nome deve conter, no minimo 2 caracteres!"
					},

					telefone:{
						required:"Digite seu Telefone",
						digits:"Este campo só aceita números,Preencha com um número válido!!",
						minlength:"Digite um telefone correto!!",
						maxlength:"Máximo de numeros permitidos = 9"
					},

					email:{
						required:"Digite o seu email para contato!",
						email:"Digite um e-mail válido!"
					},

					mensagem:{
						required:"Digite sua mensagem!",
						minlength:"A sua mensagem deve conter, no minimo 5 caracteres!"
					}
				}
			});

		});
	</script>	
</body>
</html>