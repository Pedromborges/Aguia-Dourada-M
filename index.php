<!DOCTYPE html>
<html>
	<head>   
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- SEO -->
	<title>Águia Dourada Mudanças</title>
	<meta name="keywords" content="Águia Dourada Mudanças, Porto Alegre, Rio de Janeiro, Mudanças, transporte de veículos,  frota, mudanças residenciais, montagem de móveis" />
	<meta name="description" content="Empresa com unidades em Porto Alegre e Rio de Janeiro, especializada em mudanças residenciais e comerciais, serviço de guarda-móveis e transporte de veículos." />
	<link href="https://plus.google.com/+AguiaDouradaMudan%C3%A7asPortoAlegre" rel="publisher" />
	<meta name="Robots" content="INDEX,FOLLOW">
<!-- Site -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script src="js/jquery-1.9.1.min.js"></script>
<!-- Favicon -->
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<!-- Favicon -->
	<script src="ajaxOrcamento.js" type="text/javascript"></script>
	<meta name="theme-color" content="#ffc100">
	<script src="js/prefixfree.min.js" type="text/javascript"></script>
	<script src="js/jquery.lazyload.js"></script>
<!-- Google Analytics -->
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-33562099-8', 'auto');
		  ga('send', 'pageview');
	</script>
<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.css">
<!-- Slider -->
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
<!-- JS -->
	<script src="js/popup.js" type="text/javascript"></script>
	
	
<!-- Orcamento -->
	<script type="text/javascript">
		// Função que verifica dados inseridos no formulário de orçamento
		function verificaCliente(){
		var nome = document.getElementById('solicitante');
		var tel = document.getElementById('fone_celular');
		var email = document.getElementById('email');
		if (tel.value != '' || email.value != ''){
		getOutput(nome.value, tel.value, email.value);
		}}
	</script>
	<!-- Geolocalização -->
	<script>
			//-----------------------
			function getLocation()
		  	{
		  	if (navigator.geolocation)
		    {
		    navigator.geolocation.getCurrentPosition(showPosition);
		    }
		  	else{alert("O seu navegador não suporta Geolocalização.");}
		  	}
			//-----------------------

			function showPosition(position)
		  	{
			  var lat = position.coords.latitude*-1;
			  var long = position.coords.longitude*-1;
			  var msg;
			  
			  if(lat >=21 && lat<=24 && long>=41 && long<=45){
				window.location="rio/index.php"
				}
		  	}
			//-----------------------
			var aguia = window.location.toString();
			if(aguia.indexOf("#loc")==-1){
				getLocation();
			}
		</script>
		
<!-- =================  	POPUP STYLE  ================= -->
	<style>
		.popclose{
			border-radius: 50%;
			width: 30px;
			height: 30px;
			position: fixed;
			z-index: 2;
			text-align: center;
			right: 28em;
			background-color: rgba(0, 0, 0, 0.22);
			line-height: 32px;
			color: #ffc100;
			font-family: 'Raleway',sans-serif;
			font-weight: 900;
		}
		
		.greyscreen-open > :not(.greyscreen) {
		-webkit-filter: blur(3px);
		filter: url(#blur);
		}
		
		.greyscreen-open .greyscreen {
			display: block;
		}

		.greyscreen {
			display: none;
			background: rgba(0, 0, 0, 0.68);
			position: fixed;
			z-index: 400;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			padding: 0 1.5em;
			overflow: auto;
		}

		.popover {
			padding: 1em;
			margin-left: 180px;
			margin: 0 auto;
			width: 720px;
		}
						
		.popover :first-child {
		  margin-top: 0;
		}
		.popover :last-child {
		  margin-bottom: 0;
		}



		[role="banner"] {
		  background: #c4af89;
		  padding: 1em;
		}
		[role="banner"] h1 {
		  margin: 0;
		}

		[role="navigation"] {
		  border-top: 10px solid #3b5076;
		  background: #899ec4;
		  color: #1a2334;
		}
		[role="navigation"] ul {
		  list-stye: none;
		  margin: 0;
		  padding: 0;
		  display: table;
		  width: 100%;
		  table-layout: fixed;
		  border-collapse: collapse;
		}
		[role="navigation"] ul li {
		  display: table-cell;
		  text-align: center;
		  padding: 0.5em 1em;
		}

		a {
		  color: #6e96df;
		}

		.circle {
		  border-radius: 50%;
		  display: inline-block;
		  height: 4em;
		  width: 4em;
		  margin: .5em;
		}

		.saturated-beige {
		  background: #dfb76e;
		}

		.saturated-complement {
		  background: #6e96df;
		}

		.saturated-invert {
		  background: #204891;
		}

		.main-body {
		  padding: 0 1em;
		}

		h1 {
		  margin: 0;
		}

		h1 + h2 {
		  margin: .1em 0 0;
		}

		header p {
		  margin: .5em 0 0;
		}

		.pop2 {
			display:none;
		}
	</style>
	
	<style>
		 .animated { 
					background-image: url(/css/images/logo.png); 
					background-repeat: no-repeat;
					background-position: left top; 
					padding-top: 15px;
					margin-bottom:30px;
					-webkit-animation-duration: 10s; 
					animation-duration: 10s; 
					-webkit-animation-fill-mode: both; 
					animation-fill-mode: both; 
		 }
         
        @-webkit-keyframes swing { 
            20%, 40%, 60%, 80%, 100% { -webkit-transform-origin: top center; } 
            20% { -webkit-transform: rotate(10deg); } 
            40% { -webkit-transform: rotate(-10deg); } 
            60% { -webkit-transform: rotate(5deg); } 
            80% { -webkit-transform: rotate(-5deg); } 
            100% { -webkit-transform: rotate(0deg); } 
         }
         
         @keyframes swing { 
            20% { transform: rotate(10deg); } 
            40% { transform: rotate(-10deg); } 
            60% { transform: rotate(5deg); } 
            80% { transform: rotate(-5deg); } 
            100% { transform: rotate(0deg); } 
         }
         
         .swing { 
            -webkit-transform-origin: top center; 
            transform-origin: top center; 
            -webkit-animation-name: swing; 
            animation-name: swing; 
         }
		 
</style>
<!-- =================  /POPUP STYLE  ================= -->
		
		
	</head>
<body><a class="anchor_itemgrpelem" id="loc"></a>
	<!--
	=================== Popup =============
	-->
	
			<div class="greyscreen">
			  <div class="popover">
			  <div class="popclose">X</div>
			  <div class="pop1">
			  <img class="lazy" data-original="images/trofeu.jpg" width="300" height="400" style="z-index:3 !important;position:relative;margin-left:210px;">
			  
				<script>
				$(function() {
				$("img.lazy").lazyload();
				});
				</script>

			  <br>
			   <p style="    font-weight: 900;    font-size: 46px;    font-family: 'Raleway',sans-serif;    color: #ffc100;    width: 620px;
				text-align: center;    margin-top: -15px;margin-left: 50px;" class="animated swing"><img style="margin-top: -25px;" src="images/swing-msg.png"></p>
				
				
				  
				  <script>
					 function myFunction() {
						location.reload();
					 }
				  </script>
				  
				  
				  
				<div class="popbutton"><p style="text-align:center;color:#BFBFBF;font-size:18px;font-family:'Raleway',sans-serif;margin-top: 6px;" > Conheça nossa empresa </p></div>
			  </div>
			  <div class="pop2">
			  <div style="height:100px;width:2px;"></div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/zQfH5vd7f3U?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="    margin-left: 70px;"></iframe>
			  </div>
			</div>
			</div>
			<svg style="display:none;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<filter id="blur">
					<feGaussianBlur stdDeviation="3"/>
				</filter>
			  
				<filter id="drop-shadow">
					<feGaussianBlur in="SourceAlpha" stdDeviation="2"/>
					<feOffset dx="5" dy="5" result="offsetblur"/>
					<feFlood flood-color="#000000"/>
					<feComposite in2="offsetblur" operator="in"/>
					<feMerge>
						<feMergeNode/>
						<feMergeNode in="SourceGraphic"/>
					</feMerge>
				</filter>
			</defs>
			</svg>


	<!--
	==============================================
	=================== Menu =====================
	==============================================
	--> 
	  <div>
	  
<header>
<section class="h-menu">
	<section class="top">
		<div class="socialt"><a target="blank" href="https://twitter.com/admudancas"><i class="fa fa-twitter fst"></i></a> <a target="blank" href="https://www.facebook.com/aguia.dourada.mudancas.transportes.LTDA"><i class="fa fa-facebook fst"></i></a>   <a target="blank" href="https://plus.google.com/u/0/+AguiaDouradaMudan%C3%A7asPortoAlegre"><i class="fa fa-google-plus fst"></i></a> </div>
	
		<div class="phoneslider">
			<div id="owl-demo2" class="owl-carousel owl-theme">
			<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Porto Alegre&nbsp;&nbsp;&nbsp;(51) 3381-2753</div></div>
			<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Rio de Janeiro&nbsp;&nbsp;&nbsp;(21) 3221-3913</div></div>
			<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;São Paulo&nbsp;&nbsp;&nbsp;(11) 3614-8169</div></div>
			<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Curitiba&nbsp;&nbsp;&nbsp;(11) 3321-1327</div></div>
		</div>
		</div>
	
		<div class="mailt"><i class="fa fa-envelope"></i> aguiadourada.transportes@gmail.com </div>
	
		<script>
		$(document).ready(function() {
	$("#owl-demo2").owlCarousel({    
		loop:true,
	autoPlay:true,
	slideSpeed : 300,
	paginationSpeed : 400,
	stopOnHover : true,
	singleItem : true,
	navigation: true,
	navigationText: ["Prev", "Next"],
		});
		});
		</script>
	</section>
	<div class="menu">
		<div class="logo">
			<h1>Águia Dourada Mudanças</h1>
			<a href="index.php"><img src="images/logo.png" alt="Logotipo"></a>
		</div>
		<div class="geobutton"><a href="rio/index.php"><p> Site Rio de Janeiro </p></a></div>
		<div class="buttons">
			<div class="navbutton">
				<p><a href="servicos.html">Serviços</a>
				</p>
			</div>
			<div class="navbutton">
				<p><a href="contato.html">Contato</a>
				</p>
			</div>
			<div class="navbutton">
				<p><a href="frota.html">Frota</a>
				</p>
			</div>
			<div class="navbutton" id="orcb">
				<p><a href="orcamento.php">Orçamento</a></p>
			</div>
			<div class="navbutton">
				<p><a href="empresa.html">Empresa</a></p>
			</div>
			<div class="navbutton">
				<p><a href="blog/">Blog</a>
				</p>
			</div>
		</div>
	</div>
</section>
</header>
    <div class="wrapper">
	<form action="orcamento.php" method="GET">
	    <div class="orcamento1">
	    <h2>Solicite seu Orçamento</h2>
	    <div class="orcbar"></div>
		<div class="input__line"><div class="input__text">Nome:</div><input id="solicitante" size="40" name="solicitante" placeholder="Seu Nome" class="inputs1" style="  width: 180px;"></div>
		<div class="input__line"><div class="input__text">Email:</div><input size="40" id="email" name="email" placeholder="Email" class="inputs1" style="  width: 180px;" onclick="verificaCliente()" ></div>
		<div class="input__line"><div class="input__text">Celular:</div><input id="fone_celular" size="20" name="fone_celular" placeholder="Celular" class="inputs1" style="  width: 180px !important;" onclick="verificaCliente()"></div>
	    <div class="orc-bottom">
	    <input type="submit" name="enviar" id="enviar" class="btno" style="cursor:pointer" value="Continuar Orçamento"/>
	    </div>
	    </div>
	</form>
 <!--Fim da div de formulário-->
    <div id="owl-demo" class="owl-carousel">
      	<div class="item"><img class="lazyOwl" data-src="images/slide1.png" alt="Caminhões da Águia Dourada no Laçador - Porto Alegre"></div>
       	<div class="item"><img class="lazyOwl" data-src="images/slide2.png" alt="Do Rio Grande do Sul para o Brasil"></div>
       	<div class="item"><img class="lazyOwl" data-src="images/slide3.jpg" alt="Parte da frota da Águia Dourada"></div>
    </div>

   	<script>
	    $(document).ready(function() {
	      $("#owl-demo").owlCarousel({
	      lazyLoad:true,
	      loop:true,
	      autoPlay:true,
	      navigation : true,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem : true

	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false

	      });
	    });
    </script>

	<!--	Features	-->
<div>
	<div class="features">
		<div class="boxfeature" id="feature1">
			<i class="fa fa-truck fa-2x"></i>
		    <h2>Mudanças Residenciais</h2>
		    <br> Cuidamos da sua mudança como se <br>fosse o nosso patrimônio.
		    <br><a href="mudancas-residenciais.html"><div class="featurebutton"> Saiba Mais </div></a>
		</div>

		<div class="boxfeature" id="feature2">
			<i class="fa fa-desktop fa-2x"></i>
            <h2>Mudanças Comerciais</h2>
            <br>Catalogamos e organizamos os <br>documentos da sua empresa.
            <br><a href="mudancas-comerciais.html"><div class="featurebutton"> Saiba Mais </div></a>
		</div>

		<div class="boxfeature" id="feature3">
			<i class="fa fa-cubes fa-2x"></i>
	        <h2>Guarda - Móveis </h2>
	        <br>Oferecemos amplo espaço para <br>alocação de sua mudança.
	        <br><a href="guarda-moveis.html"><div class="featurebutton"> Saiba Mais </div></a>
		</div>

		<div class="boxfeature" id="feature4">
			<i class="fa fa-car fa-x2"></i>				
		    <h2>Transporte de Veículos</h2>
		    <br>Agilidade, conforto e segurança no <br>transporte de seu veículo.
		    <br><a href="transporte-de-veiculos.html"><div class="featurebutton"> Saiba Mais </div></a>
		</div>
	</div>

	<!--
	==============================================
	================== Business ==================
	==============================================
	-->

	<div class="business">
	<h3> Conheça nossa empresa </h3>
	<div class="businesstext">
	A empresa está há 10 anos no mercado atuando no transportes de mudanças residenciais, comerciais e transportes em geral. Garantimos através da qualidade de nossos trabalhos prestados a satisfação do cliente, assegurando-lhe credibilidade, garantia, qualidade e segurança.

	<div class="businessicons">

	<a href="frota.html">
	<div class="iconfont">
	<i class="fa fa-truck fa-3x" ></i>
	<br>
	Frota
	</div>
	</a>

	<a href="servicos.html">
	<div class="iconfont">
	<i class="fa fa-wrench fa-3x" id="servicesbus"></i>
	<br>
	Serviços
	</div>
	</a>

	<a href="contato.html">
	<div class="iconfont">
	<i class="fa fa-comment fa-3x"></i>
	<br>
	Contato
	</div>
	</a>

	</div>		

	</div><br>

	<div id="businessvideo" style="margin-top: -30px;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/zQfH5vd7f3U?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>


	<!--
	
	<div class="business2">
	<div class="businessplaces">
	<div id="businessplace">
	<h3 style="font-size:14px;font-weight:800;margin-bottom:8px;">Águia Dourada Porto Alegre</h3>
	</div>
	<div id="businessplace" style="width:2px;height:88px;background-color:#000;border-radius:5px;margin-left:8px;margin-right:8px;">
	</div>
	<div id="businessplace">
	<h3 style="font-size:14px;font-weight:800;margin-bottom:8px;">Águia Dourada Rio de Janeiro</h3>
	</div>
	</div>
	</div>
	-->
	</div>		
	<!--    Places 		-->
		
	<div class="places">
		<div id="placetext">
			<div class="buildingicon">
				<i class="fa fa-building-o fa-4x"></i>
			</div>
			<h3>Nossas Unidades</h3>
			<p>Contate a unidade mais <br> próxima de você.</p>
			<br>
		<!--  <div class="faqbutton">Perguntas Frequentes</div> -->
		</div>

		<div id="place">
			
			<h4>Águia Dourada Porto Alegre</h4>
			<p>
			<img src="images/telephone4.png" alt="Telefone de Contato"> (51)8124-0179
			<small>(Whatsapp)</small>
			<br><img src="images/telephone5.png" alt="Telefone de Contato"> (51)3381-2753
			<br><img src="images/telephone5.png" alt="Telefone de Contato"> (51)3381-5809
			</p>

		</div>

		<div id="place">
		
			<h4>Águia Dourada Rio de Janeiro</h4>
			<p>
			<img src="images/telephone5.png" alt="Telefone de Contato"> (21)  4042-3056 
			<br><img src="images/telephone5.png" alt="Telefone de Contato"> (21) 98843-5759</p>
			<p class="meubox"> Nosso Self-Storage é <br>feito pela <b><a href="http://www.meuboxrio.com.br/"> MeuBox Rio </b></p>
			<p class="meubox2"> <img src="images/logo-meuboxrio.png" alt="Logo - MeuBoxRio"></p></a>
			</div>
		
		</div>


<!--	Footer     -->

		<div class="footer">
		<div class="space"></div>
		<div class="footerbar"></div>
		
		<div class="footercolumn1">
		<h4> Navegação </h4>
				<ul style="font-weight: 700;color: #101010;margin-top: -6px;">
		<li><a href="index.php" style="">Inicial</a></li>
		<li><a href="servicos.html">Serviços</a></li>
		<li><a href="contato.html">Contato</a></li>
		<li><a href="frota.html">Frota</a></li>
		<li><a href="orcamento.php">Orçamento</a></li>
		<li><a href="empresa.html">Empresa</a></li>
		</ul>
		</div>
		<div class="footercolumn3" style="line-height:24px;">
		<h4> Telefones </h4>
		<p class="teltitle">Porto Alegre</p>
		<p class="tel">(51) 3381-2753</p>
		<p class="tel"> (51) 3381-5809</p></p>
		<p class="tel" style="margin-bottom:15px;">(51) 8124-0179</p>
		<p class="teltitle">Rio de Janeiro </p>
		<p class="tel">(21) 3221-3913</p>
		<p class="tel">(21) 98843-5759</p>
		</div>

		<div class="footercolumn32" style="line-height:24px;">
		<br>
		<p class="teltitle" style="margin-top: 5px;">São Paulo </p>
		<p class="tel">(11) 3614-8169</p>
		<br>
		<p class="teltitle">Curitiba </p>
		<p class="tel">(41) 3321-1327</p></p>
		</div>

		<div class="footercolumn4">
		<h4 style="  margin-top: 6px;"> Contato </h4>

		<p class="socialmedia">Redes Sociais:</p>

		<a target="blank" href="https://plus.google.com/u/0/+AguiaDouradaMudan%C3%A7asPortoAlegre"><img src="images/icon (1).png" 
	width="35px;"></a>
&nbsp;&nbsp;&nbsp;

		<a target="blank" href="https://twitter.com/admudancas">
		<img src="images/icon (2).png" alt="Twitter" width="35px;"></a>
		&nbsp;&nbsp;&nbsp;

		<a target="blank" href="https://www.facebook.com/aguia.dourada.mudancas.transportes.LTDA">
		<img src="images/icon (3).png" alt="Facebook" width="35px;">
		<br></a>
		<p class="socialmedia" style="margin-top:42px;">Email:</p>
		<a href="contato.html"><p class="mail">aguiadourada.transportes@gmail.com</p></a>
		</div>

		<div class="footercolumn2">
		<h4 style="  margin-top: 6px;"> Clientes </h4>
		<img src="images/livro.png">
		<img src="images/tac.png">
		<img src="images/logo (2).png">
		</div>
	</div>

<div class="belowfooter">
<div style="float:left;"> @2015 Águia Dourada Mudanças</div>
<div class="bfbar"></div>
<div style="float:left;">
Produzido por Pedro Borges
</div>


</div>


	</div> <!-- wrapper -->
	</body>

</html>