<!DOCTYPE html>
<html>
      
<head>

        <!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33562099-8', 'auto');
  ga('send', 'pageview');

</script>


        <!-- Google Analytics -->
    <!-- SEO -->
    <meta name="Robots" content="INDEX,FOLLOW">
    <title>Contato Enviado - Águia Dourada Mudanças</title>
    
    <!-- Site -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    
      </head>

<body style="background-color:#ffc100;">


    <header>
    <section class="h-menu">
   	<section class="top">
    <div class="socialt"><a target="blank" href="https://twitter.com/admudancas"><i class="fa fa-twitter fst"></i></a> <a target="blank" href="https://www.facebook.com/aguia.dourada.mudancas.transportes.LTDA"><i class="fa fa-facebook fst"></i></a>   <a target="blank" href="https://plus.google.com/u/0/+AguiaDouradaMudan%C3%A7asPortoAlegre"><i class="fa fa-google-plus fst"></i></a> </div>

	<div class="phoneslider">
    	<div id="owl-demo2" class="owl-carousel owl-theme">
  		<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Porto Alegre&nbsp;&nbsp;&nbsp;(51) 3381-5809</div></div>
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


    <div style="width:1340px;min-width:1340px;margin-bottom:80px;"></div>
  <div style="height:230px;line-height:20px;">
<div style="margin-bottom:32px;">


    <div id="formulario">

         		<?php

$nome = $_POST['nome'];
$emailcliente = $_POST['emailcliente'];
$telefone = $_POST['fone'];
$assunto = "Enviado pelo site Aguia Dourada, por: ".$_POST['nome'];
$msg = $_POST['mensagem'];
$msg = nl2br($msg);


$mensagem = "Mensagem enviada por: ".$nome." \n <br />
Abaixo seguem os dados do usuario:\n <br />
E-mail: ".$emailcliente."\n <br />
Telefone: ".$telefone."\n <br />
Assunto: ".$assunto."\n <br />
A mensagem enviada foi a seguinte: \n <br />
".$msg;


require_once("class.phpmailer.php"); //caminho do arquivo da classe do phpmailer

$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->CharSet  = "UTF-8";
$mail->Host = "mail.aguiadouradamudanca.com.br"; //seu servidor SMTP
$mail->SMTPAuth = true; // 'true' para autenticação
$mail->Username = "contato@aguiadouradamudanca.com.br"; // usuário de SMTP
$mail->Password = "aguia14"; // senha de SMTP
$mail->From = "contato@aguiadouradamudanca.com.br";
//coloque aqui o seu correio, para que a autenticação não barre a mensagem
$mail->FromName = "site aguia dourada";
$mail->AddAddress("orcamento.aguiadourada@gmail.com","Aguia Dourada");
//$mail->AddAddress("web@webconecte.com.br");  (opcional) só o envio pelo email
$mail->AddReplyTo("orcamento.aguiadourada@gmail.com","Contato");
//aqui você coloca o endereço de quem está enviando a mensagem pela sua página
$mail->WordWrap = 50; // Definição de quebra de linha
$mail->IsHTML(true); // envio como HTML se 'true'
$mail->Subject = "Contato site Aguia Dourada ";
$mail->Body = $mensagem;
$mail->AltBody = "Para mensagens somente texto";
//Verifica se o e-mail foi enviado
if(!$mail->Send())
{
    echo "Mensagem não enviada<br/>";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mensagem enviada<br>Obrigado pelo seu contato, em breve responderemos sua solicitação.";
}
?>

  </div></div>
    <!--
    ==============================================
    =================== Footer ===================
    ==============================================
-->
        <footer class="footer">
        <div style="height:35px;"></div>
        <div style="height:1px;background-color:#5e5e5e;margin-left:50px;margin-right:50px;"></div>
        
        <div class="footercolumn1">
        <h3> Navegação </h3>
        <ul style="
            font-weight: 700;
            color: #101010;
              margin-top: -6px;
        ">
		<li><a href="index.php" style="color:#101010;">Inicial</a></li>
		<li><a href="servicos.html" style="color:#101010;">Serviços</a></li>
		<li><a href="contato.html" style="color:#101010;">Contato</a></li>
		<li><a href="frota.html" style="color:#101010;">Frota</a></li>
		<li><a href="orcamento.php" style="color:#101010;">Orçamento</a></li>
		<li><a href="empresa.html" style="color:#101010;">Empresa</a></li>
        </ul>

        </div>



        <div class="footercolumn3" style="line-height:24px;">
        <h3> Telefones </h3>
        <p style="font-weight:700;  color: #101010;">Porto Alegre</p>
        <p style="font-weight:700;color:#1A1A1A;">(51) 3381-2753</p>
        <p style="font-weight:700;color:#1A1A1A;">(51) 3381-5809</p></p>
        <p style="font-weight:700;;color:#1A1A1A;margin-bottom:15px;";>(51) 8124-0179</p>
        <p style="font-weight:700;  color: #101010;">Rio de Janeiro </p>
        <p style="font-weight:700;color:#1A1A1A;";>(21) 3221-3913</p>
        <p style="font-weight:700;color:#1A1A1A;">(21) 98843-5759</p>
        </div>

                <div class="footercolumn32" style="line-height:24px;">
                <br>
        <p style="font-weight:700;  color: #101010;  margin-top: 5px;">São Paulo </p>
        <p style="font-weight:700;color:#1A1A1A;">(11) 3614-8169</p>
        <br>
        <p style="font-weight:700;  color: #101010;">Curitiba </p>
        <p style="font-weight:700;color:#1A1A1A;">(41) 3321-1327</p></p>
        </div>

        <div class="footercolumn4">
        <h3 style="  margin-top: 6px;"> Contato </h3>

        <p style="font-weight:700;  color: #101010;margin-bottom:12px;">Redes Sociais:</p>

        <a target="blank" href="https://plus.google.com/u/0/+AguiaDouradaMudan%C3%A7asPortoAlegre"><img src="images/icon (1).png" width="35px;"></a>
&nbsp;&nbsp;&nbsp;

        <a target="blank" href="https://twitter.com/admudancas">
        <img src="images/icon (2).png" width="35px;"></a>
        &nbsp;&nbsp;&nbsp;

        <a target="blank" href="https://www.facebook.com/aguia.dourada.mudancas.transportes.LTDA">
        <img src="images/icon (3).png" width="35px;">
        <br></a>
        <p style="font-weight:700;  color: #101010;margin-bottom:12px;margin-top:42px;">Email:</p>
                <a href="contato.html"><p style="font-weight:700;color:#1A1A1A;">aguiadourada.transportes@gmail.com</p></a>
        </div>


        <div class="footercolumn2">
        <h3 style="  margin-top: 6px;"> Clientes </h3>
        <img src="images/livro.png">
        <img src="images/tac.png">
        <img src="images/logo (2).png">
        </div>
    </footer>
<div class="belowfooter">
<div style="float:left;"> @2015 Águia Dourada Mudanças</div>
<div style="height:20px;width:1px;margin-left:15px;margin-right:15px;margin-bottom:5px;margin-top:5px;background-color:#585858;float:left;"></div>
<div style="float:left;">
Produzido por Pedro Borges
</div>


</div>



    


    </div> <!-- wrapper -->
    </body>

</html>