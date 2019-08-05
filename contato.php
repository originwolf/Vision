<!-- variavel global php para apresntar o erro ao usr -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vision VBA</title>
	<meta name="autor" content="Gabrielly Venâncio">
	<meta name="keywords" content="vba, consultoria em exel, consultoria em vba, programação em vba, cadastro de cliente, vision vba, Vision vba">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-whidth, initial-scale=1.0">
<!-- css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/all.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- JAVASCRIPT -->
<script type="js/jquery.js"></script>
<script type="js/popper.js"></script>
<script type="js/bootstrap.js"></script>
<!-- favicon -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="imagens/logo1.jpeg">
</head>
	<body>
		<div class="container-fluid">
	<!-- start header -->
<header> 
	
				<!--Início da barra de menu -->

				<nav class="navbar navbar-expand-lg no-margin">
					<a class="navbar-brand d-none d-lg-block pr-5" href="contato.php"><img id="logo" src="imagens/vision1.png" alt=""></a>
					<a class="navbar-brand font-weight-bold d-lg-none d-block pl-2 logo" href="#background"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					</button>
						<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<!-- <li class="nav-item pr-3">
								<a class="nav-link" href="#SobreNos">Sobre Nós</a>
							</li> -->
							<li class="nav-item pr-3">
								<a class="nav-link" href="#footer">Contato</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html"><div style="" class="fas fa-home mr-1" style="" >Voltar</div></a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- section linha verde -->
						<section id="linha">
							<div class="row"> 
								<div class="linha col-md-12 d-none d-md-block">		
								</div>
								<div class="linha1 col-md-12 d-md-none d-block">		
								</div>
							</div>

						</section>

				<script> //ao clicar em um link o menu recolhe
					$(document).ready(function () {
						$(".navbar-nav li a").click(function(event) {
							$(".navbar-collapse").collapse('hide');
						});
					});
				</script>
				<!-- imagem fixa -->
	<section >
		
				<img src="imagens/contato01.jpeg" alt="" class="img-fluid" style="width: 100%">
				
			
	</section>
	<!-- end imagem fixa -->				
			</header>
			<h4 id="ideia">Que tal ter um sistema em VBA para sua empresa?</h4>
		<h5>Solicite seu orçamento sem compromisso.</h5>
		<img src="imagens\email.png" alt="" class=" img-fluid col-md-12 d-none d-block" style="width: 100%; padding: 0">

		<!-- formulario -->
			
		<section id="formulario">
			<div class="container">

				<form method="POST" action="processa.php">
					<div class="col-md-12">
						<html>
    <div id="contato_form">
      <form action="processa.php" name="form_contato" method="post" >
      <p class="titulo">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
          <tr>
            <td>Nome:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="nome" maxlength="40" />
            </td>
          </tr>
          <tr>
            <td>E-mail:<sup class="asteristico">*</sup></td>
            <td>
              <input type="email" name="email" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td>Telefone:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="telefone" maxlength="14" />
            </td>
          </tr>
          <tr>
            <td>Opções:<sup class="asteristico">*</sup></td>
            <td>
              <select name="Selecione" class="campo_input" class="asterisco">*
                <option value="Opção 1"></option>
                <option value="Opção 2">Pessoa Fisica</option>
                <option value="Opção 3">Pessoa Juridica</option>
              </select>
            </td>
          </tr>
           <tr>
            <td>Mensagem:<sup class="asteristico">*</sup></td>
            <td>
              <textarea name="msg" cols="16" rows="5"></textarea>
            </td>
          </tr>
          <tr align="right";>
            <td colspan="2">
              <input type="reset" class="campo_submit" value="Limpar" />
              <input type="submit" class="campo_submit" value="Enviar" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
          </tr>
        </table>
      </form>
    </div>
<a href="#top" class="fas fa-angle-double-up"></a>
<!-- criando uma function para o icon fas fa-angle-double-up levar o usuário ao topo da pagina -->
<script>
	$(document).ready(function(){
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('a[href="#top"]').fadeIn();
			} else {
				$('a[href="#top"]').fadeOut();
			}
		});
		$('a[href="#top"]').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	});
</script>

<!-- footer start -->
<footer id="footer" class="no-margin">
	<div class="footer-top text-center">

		<section class="row col-md-12">
			<div class="col-lg-4 col-md-12 agradecimentos">
				<h3>Vision VBA</h3>
				<p>   Consultoria & Sistemas VBA</p>
			</div>
			<div class="col-lg-4 col-md-12 contatos">
				<h4>Contate-nos</h4>
				<ul>
					<div style="color: #fff"><li class="fas fa-phone mr-1" style="color:#2F4F4F;"></li>+55 (43) 99906-9250</div> <br>
					<div style="color: #fff"><li class="fas fa-envelope mr-1" style="color:#2F4F4F;"></li>sistemasvision@outlook.com</div> <br>


				</ul>
				<!-- <div class="redes-sociais">
					<ul>
						<a target="_blank" href="https://www.facebook.com/rpnaomimachado"><span class="fab fa-facebook-f facebook"></span></a>
						<a target="_blank" href="https://instagram.com/rpnaomimachado?igshid=64ep5myutwbz"><span class="fab fa-instagram instagram" ></span></a>

					</ul>	
				</div> -->
			</div>
			<div class="col-lg-4 col-md-12 loc">
				<h4>Cambé - PR
				<p>Obrigado por nos visitar!
				</p></h4>
				<a href="index.html"><div style="color: #fff" ><li class="fas fa-home mr-1" style="color:#fff" ></li>Voltar</div></a> 

			</div>
			<!-- <div class="col-lg-4 col-md-12 loc">
				<h4>Localização</h4>
				<p id="rua">Estrada Machado a Alfenas, Km 2 </p>
				<p id="rua">Machado - MG </p>

			</div> -->
		</section>

	</div>
</footer>
<div class="copyright no-margin">
	<p id="copyright" style="color:rgb(0, 100, 0)">Copyright 2019 - Gabrielly Venâncio</p> 
<a href="#top" class="fas fa-angle-double-up"></a>
<!-- criando uma function para o icon fas fa-angle-double-up levar o usuário ao topo da pagina -->
<script>
	$(document).ready(function(){
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('a[href="#top"]').fadeIn();
			} else {
				$('a[href="#top"]').fadeOut();
			}
		});
		$('a[href="#top"]').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	});
</script>
<!-- end of footer -->

</div>
</body>
</head>
</html>

