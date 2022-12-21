<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
<title>Sabores do Zodíaco - Verace Pizza</title>
		  
<?php include("meta.php"); ?>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script type="text/javascript" src="js/main.js" charset="UTF-8"></script>

	<style>
		.logozodiaco{float: right;width: 22%;}
		
		.ast_banner_text{height: 1080px;}
		
		.ast_slider_wrapper.ast_index_tarot{height: 1080px;}
		
		p{font-size: 22px;}
		
		.bgsignos{
			background: url("images/bg_signos.png");
			background-repeat: no-repeat;
			background-position: center center;
		}

		.signo-descricao{float: right;margin-right: 5%;margin-top: 15%;width: 40%;}	
	
		.pizza-signos{padding-left: 10%;width: 45%;padding-top: 20%;float: left;}
		
		.divcompartilha{float: right;margin-top: 5%;width: 45%;}
		
		
		@media screen and (min-width: 750px) and (max-width: 1200px) {
			.col-sm-8 { width: 100%!important;}
			
			.ast_header_bottom .col-sm-3 {width: 25% !important;}
			
			.logozodiaco{width: 30% !important;}
			
			.ast_banner_text{height: 1800px;}
			
			.ast_slider_wrapper.ast_index_tarot {
				background-image: linear-gradient(rgba(0,0,0,0.4) , rgba(0,0,0,0.4)) , url(images/bg-zodiaco-tablet.jpg);
				height: 1800px;
			}
			
			.ast_header_bottom {
				margin-top: 20px !important;
			}

			.signo-descricao{float: right;margin-right: 5%;margin-top: 25%;width: 40%;}	
	
			.pizza-signos{padding-left: 10%;width: 45%;padding-top: 25%;float: left;}
			
			.divcompartilha{float: right;
				right: 0%;
				margin-top: 5%;
				width: 45%;
				position: relative;}
			
		}
		
		@media only screen and (max-device-width: 700px) {
			.ast_banner_text{height: auto;}
		
			.ast_slider_wrapper.ast_index_tarot{height: auto;}
			
			.ast_header_bottom {
				margin-top: 20px !important;
			}

			.signo-descricao{float: none;
				margin-right: 0%;
				margin-top: 0%;
				width: 100%;
				padding: 15px;}	
	
			.pizza-signos{padding-left: 0%;
				width: 100%;
				padding-top: 30%;
				float: none;
			}
			
			.divcompartilha{float: none;
			right: 0%;
			margin-top: 5%;
			width: 100%;
			position: relative;}
		}
	
	</style>
</head>

<body style="margin: 0px;">

	<div class="ast_header_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-32 col-md-3 col-sm-3 col-xs-12">
				<div class="ast_logo">
					<a href="#"><img src="images/logo-verace.png" alt="Logo" title="Logo"></a>
				</div>
			</div>

			<div class="col-lg-32 col-md-3 col-sm-3 col-xs-12 logozodiaco">
					<img src="images/logo-zodiaco.png" alt="Logo" title="Logo">
			</div>
		</div>
	</div>
</div>
<!-- Header End -->
	<form action="acao.php" method="POST" id="formteste">
	
	<div class="ast_slider_wrapper ast_index_tarot">
	<div class="ast_banner_text">
		
		<?php include('acao.php'); ?>
		
		<div class="divcompartilha">	
			<p style="text-align: left;">
				<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsrv254.teste.website%2F%7Everacepizza%2Fsignos%2Fresultado.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="images/bt-compartilhar.png" alt="" /></a>

				<!--<a href="https://api.whatsapp.com/send?text=Sabores do Zodíaco - http://srv254.teste.website/~veracepizza/signos/ " target="_blank" style="padding-right: 10px;"><img src="https://ideiasantenadas.com.br/wp-content/uploads/2017/10/whatsappesse200x200.png" width="40" alt="" /></a>-->
				
				<div class="share-button" data-layout="button" data-size="large" style="float: left;"><a target="_blank"><img src="images/bt-compartilhar.png" alt="" /></a></div>

			</p>

			<p style="text-align: left;">
			<a href="combinacao.php"><img src="images/bt-outras-comb.png" alt="" style="margin-top: 10px;"/></a>
			</p>
			<p style="text-align: left;">
			<a href="https://xmenu.com.br/web/index.html?loja=1102" target="_blank"><img src="images/bt-compre-agora.png" alt="" /></a>
			</p>
		</div>
		</div>	
	</div>
	</form>
	

	<script>
		const shareData = {
			title: 'Sabores do Zodíaco - Verace Pizza',
			text: 'Teste de compartilhamento com textinho bonitinho',
			url: 'http://veracepizza.com.br/saboresdozodiaco/',
		}

const btn = document.querySelector('.share-button');

// Deve ser acionado algum tipo de "ativação do usuário"
btn.addEventListener('click', async () => {
  try {
    await navigator.share(shareData)
  } catch(err) {
    resultPara.textContent = 'Error: ' + e
  }
});
	</script>
</body>
</html>
