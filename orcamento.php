﻿<!DOCTYPE html>
<html>
<head>
    <!-- Site -->
  <title>Orçamento - Águia Dourada Mudanças</title>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
     <script src="js/owl.carousel.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,800,900' rel='stylesheet' type='text/css'>
<!-- Favicon -->
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="css/font-awesome.css">  

      <link href="css/owl.theme.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">

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
    
	<style>

  body {background-color:#e8e8e8;}

  </style>

<script type="text/javascript"> function f_tel(objeto){   if (objeto.value.length == 1){      objeto.value = "("+objeto.value;    }   if (objeto.value.length == 3){      objeto.value = objeto.value+")";    }   if (objeto.value.length == 8){      objeto.value = objeto.value+"-";    } }</script>

<script type="text/javascript">
  // Script insere dados do cliente
  (function(){
    document.addEventListener("DOMContentLoaded", function() {
      var parameters = location.search.substring(1).split("&");
        
        var temp = parameters[0].split("=");
        var paramNome = unescape(temp[1]);
        
        temp = parameters[1].split("=");
        var paramEmail = unescape(temp[1]);
        
        temp = parameters[2].split("=");
        var paramTel = unescape(temp[1]);
        
      
      var nome = document.getElementById('solicitante');
      var tel = document.getElementById('fone_celular');
      var email = document.getElementById('email');
      
      if (paramNome != 'undefined')
        nome.value = paramNome;
      if (paramTel != 'undefined')
        tel.value = paramTel;
      if (paramEmail != 'undefined')
        email.value = paramEmail;
    });
  })();
</script>

<script>

function soma (nome, volume) {

  var ifis
  var ifist
  var varnome
  var nomeq
  var nomet
  
  nomeq = ("q"+nome);
  nomet = ("t"+nome);
  
  ifis = eval("document.contato."+nomeq+".value")
  ifist = eval("document.contato."+nomet+".value")
  varnomeq = eval("document.contato."+nomeq)
  varnome = eval("document.contato."+nomet)
  
  if (isNaN(ifis) == true) {
        alert("Digite somente valores numéricos");
        varnomeq.value = "";
    }  
  
    if (Math.floor(ifis) >= 0){
//    tot = volume * 10 * eval("document.form1."+nomeq+".value");
    tot = volume * 10 * Math.floor(ifis);
//    cal = tot*10;
    tot = Math.floor(tot) / 10;
    varnome.value = tot.toFixed(1);
  }
}
</script>
<script type="text/javascript">
function validateForm(){
var a = document.contato["solicitante"].value
var b = document.contato["email"].value
var c = document.contato["ocidade"].value
var d = document.contato["dcidade"].value
var e = document.contato["oestado"].value
var f = document.contato["destado"].value
var g = document.contato["end_origem"].value
var h = document.contato["end_destino"].value

if (a=="null" || a=="" || b=="null" || b=="" || c=="null" || c=="" || d=="null" || d=="" || e=="n" || f=="n" || g=="null" || g=="" || h=="null" || h=="")
  {
  alert("Por favor, preencha todos os campos obrigatórios");
  return false;
  }
}
</script>


</head>
<body>
 
  
    <header>
    <section class="h-menu">
    <section class="top">
    <div class="socialt"><a target="blank" href="https://twitter.com/admudancas"><i class="fa fa-twitter fst"></i></a> <a target="blank" href="https://www.facebook.com/aguia.dourada.mudancas.transportes.LTDA"><i class="fa fa-facebook fst"></i></a>   <a target="blank" href="https://plus.google.com/u/0/+AguiaDouradaMudan%C3%A7asPortoAlegre"><i class="fa fa-google-plus fst"></i></a> </div>

  <div class="phoneslider">
      <div id="owl-demo2" class="owl-carousel owl-theme">
      <div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Porto Alegre&nbsp;&nbsp;&nbsp;(51) 3381-2753</div></div>
      <div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Rio de Janeiro&nbsp;&nbsp;&nbsp;(21) 3221-3913</div></div>
<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;São Paulo&nbsp;&nbsp;&nbsp;(11) 3614-8169</div></div>
<div class="item"> <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Curitiba&nbsp;&nbsp;&nbsp;(41) 3321-1327</div></div>
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
      <form action="enviaorc.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" name="contato" id="contato" class="form">

<a href="rio/orcamento.php">
<div class="companyplace">
<img src="images/arrow.png" tab="Flechas indicando a mensagem" style="    width: 24px;
    float: left;
    margin-right: 10px;"><h5>A origem da mudança é<br> no Rio de Janeiro?</h5>
<div style="    width: 260px;    margin-top: 6px;    height: 1px;    background-color: #FFC100;    margin-bottom: 6px;"></div>
Se for o seu caso, realize seu orçamento no site da <b>unidade Rio de Janeiro</b>.
</div>
</a>


<div class="orcamentopart1">
<div class="title">
Informações Básicas
</div>

<p style="font-size:14px;margin-top:2px;text-align:center;"> Atenção: os campos com * são de preenchimento obrigatório. </p>


<p>
<div class="input__line" style="margin-top: 12px;">
<div class="input__text">
Nome:</div>
<input id="solicitante" name="solicitante" placeholder="Digite o seu nome" class="inputs1">*
</div>

<div class="input__line">
<div class="input__text">
Email:</div>
<input id="email" name="email" placeholder="Digite seu Email" class="inputs1">*
</div>

<div class="input__line">
<div class="input__text">
Empresa:
</div>
<input name="empresa" placeholder="Empresa" class="inputs1">
</div>

<div class="input__line">
<div class="input__text">
Celular:
</div>
<input id="fone_celular" name="fone_celular" placeholder="Digite seu celular informando o DDD" class="inputs1">
</div>

<div class="input__line" style="width:600px;margin-left:26px;margin-top: 10px;">
<div class="input__text" style="line-height: 20px;margin-top: 12px;  width: 55px;">
Fone Resid.:
</div>
<input id="fone_residencial" name="fone_residencial" placeholder="Fone Residencial" class="inputs1" style="width:180px;">

<div class="input__text" style="line-height: 20px;margin-top: 10px;">
Fone Comercial:
</div>
<input id="fone_comercial" name="fone_comercial" placeholder="Fone Comercial" class="inputs1" style="width:180px;">
</div>

</div>


<div class="orcamentopart2" style="margin-top:30px;">
  <div class="title" style="margin-bottom:2px;">
  Informações da Mudança
  </div>

  <div class="input__line" style="  width: 280px; height: 20px;  margin: 0 auto;">
      <p> Uso de guarda móveis &nbsp;&nbsp;
  <input value=Sim type=radio name=guardamoveis> Sim
  <input value=Não checked type="radio" name="guardamoveis" >Não 
  </div>

  <div class="title" style="  height: 50px;">Origem</div>
  <div class="title" style="  line-height: 20px;
    font-size: 14px;  height: 20px;font-weight:300;font-family:'Source Sans Pro',sans-serif;color:#A1A1A1;">Dados da origem de sua mudança</div>
  <br>
  <div style="background-color:#CBCBCB;height:1px;width:550px;margin-left:35px;margin-right:35px;"></div>

  <div class="input__line" style="width:600px;margin-left:26px;margin-top: 10px;">
  <div class="input__text" style="  width: 55px;  margin-left: 20px;">
  Cidade:
  </div>
  <input  name="ocidade" placeholder="Digite a Cidade de Origem" class="inputs1" style="width:180px;  margin-left: 30px;"><label for=select></label>

  <div class="input__text" style="  width: 50px;">
  Estado:
  </div>
  <select class="inputs1" id=oestado name="oestado" style="width: 131px;">
                                   <option selected value=n>Escolha o Estado...</option>
                                   <option value=AC>AC - Acre</option>
                                   <option value=AL>AL - Alagoas</option>
                                   <option value=AM>AM - Amazonas</option>
                                   <option value=AP>AP - Amapá</option>
                                   <option value=BA>BA - Bahia</option>
                                   <option value=CE>CE - Ceará</option>
                                   <option value=DF>DF - Distrito Federal</option>
                                   <option value=ES>ES - Espírito Santo</option>
                                   <option value=GO>GO - Goiás</option>
                                   <option value=MA>MA - Maranhão</option>
                                   <option value=MG>MG - Minas  Gerais</option>
                                   <option value=MS>MS - Mato Grosso do Sul</option>
                                   <option value=MT>MT - Mato Grosso</option>
                                   <option value=PA>PA - Pará</option>
                                   <option value=PB>PB - Paraíba</option>
                                   <option value=PE>PE - Pernambuco</option>
                                   <option value=PI>PI - Piauí</option>
                                   <option value=PR>PR - Paraná</option>
                                   <option value=RJ>RJ - Rio de Janeiro</option>
                                   <option value=RN>RN - Rio Grande do Norte</option>
                                   <option value=RO>RO - Rondônia</option>
                                   <option value=RR>RR - Roraima</option>
                                   <option value=RS>RS - Rio Grande do Sul</option>
                                   <option value=SC>SC - Santa Catarina</option>
                                   <option value=SE>SE - Sergipe</option>
                                   <option value=SP>SP - São Paulo</option>
                                   <option value=TO>TO - Tocantins</option>
  </select>*
  </div>

  <div class="input__line">
  <div class="input__text">
  Endereço:
  </div>
  <input id="end_origem" placeholder="Digite o endereço de origem" class="inputs1" name="end_origem"></input>*
  </div>

  <br>
  <div class="input__line">
  <div class="input__text">
  Bairro:
  </div>
  <input id="obairro" size="24" name="obairro" placeholder="Digite o bairro de origem" class="inputs1">
  </div>

  <br>
  <div class="input__line">
  <div id="input__text" style="line-height: 18px;margin-top:15px;  height: 66px;
    width: 80px;
    float: left;">
  Data da Coleta:
  </div>
  <input id="data_carga" name="data_carga" class="inputs1">
  </div>

  <br>
  <div class="input__line" style="height: 40px;line-height:70px;width:480px; margin: 0 auto;">
  <div class="input__text" style="height: 40px;">
  Elevador: 
  </div>
  <div class="select" style="  height: 40px;">
  <input value=Sim type=radio name="o_elevador"> Sim
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input value=Não checked type=radio name="o_elevador"> Não
  </div>

  <div class="input__text" style="  height: 40px;">
  Escada:
  </div>
  <div class="select" style="  height: 40px;">
  <input value="Sim" type="radio" name="o_escada"> Sim
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input value="Não" checked type="radio" name="o_escada"> Não
  </div>
  </div>
  <p style="  font-size: 14px;
    margin-top: 16px !important;
    width: 320px;
    margin: 0 auto;"> * em caso positivo será cobrada uma taxa adicional. </p>

<br>
<div class="title" style="  height: 50px;">Destino</div>
<div class="title" style="  line-height: 20px;
  font-size: 14px;  height: 20px;font-weight:300;font-family:'Source Sans Pro',sans-serif;color:#A1A1A1;">Dados do destino de sua mudança</div>
<br>
<div style="background-color:#CBCBCB;height:1px;width:550px;margin-left:35px;margin-right:35px;"></div>

<div class="input__line" style="width:600px;margin-left:26px;margin-top: 10px;">
<div class="input__text" style="  width: 55px;  margin-left: 20px;">
Cidade:
</div>
<input id="dcidade" name=dcidade placeholder="Digite a Cidade de Destino" class="inputs1" style="width:180px;  margin-left: 30px;"><label for=select></label>

<div class="input__text" style="  width: 50px;">
Estado:
</div>
<select class="inputs1" id=destado name="destado" style="  width: 131px;">
    <option selected value=n>Escolha o Estado...</option>
    <option value=AC>AC - Acre</option>
    <option value=AL>AL - Alagoas</option>
    <option value=AM>AM - Amazonas</option>
    <option value=AP>AP - Amapá</option>
    <option value=BA>BA - Bahia</option>
    <option value=CE>CE - Ceará</option>
    <option value=DF>DF - Distrito Federal</option>
    <option value=ES>ES - Espírito Santo</option>
    <option value=GO>GO - Goiás</option>
    <option value=MA>MA - Maranhão</option>
    <option value=MG>MG - Minas  Gerais</option>
    <option value=MS>MS - Mato Grosso do Sul</option>
    <option value=MT>MT - Mato Grosso</option>
    <option value=PA>PA - Pará</option>
    <option value=PB>PB - Paraíba</option>
    <option value=PE>PE - Pernambuco</option>
    <option value=PI>PI - Piauí</option>
    <option value=PR>PR - Paraná</option>
    <option value=RJ>RJ - Rio de Janeiro</option>
    <option value=RN>RN - Rio Grande do Norte</option>
    <option value=RO>RO - Rondônia</option>
    <option value=RR>RR - Roraima</option>
    <option value=RS>RS - Rio Grande do Sul</option>
    <option value=SC>SC - Santa Catarina</option>
    <option value=SE>SE - Sergipe</option>
    <option value=SP>SP - São Paulo</option>
    <option value=TO>TO - Tocantins</option>
</select>*
</div>

<div class="input__line">
<div class="input__text">
Endereço:
</div>
<input id="end_destino" class="inputs1" placeholder="Digite o endereço de destino" name="end_destino"></input>*
</div>
<br>
<div class="input__line">
<div class="input__text">
Bairro:
</div>
<input id="dbairro" size="24" placeholder="Digite o bairro de destino" name="dbairro" class="inputs1">*
</div>

<br>
<div class="input__line">
<div id="input__text" style="line-height: 18px;margin-top:15px;  height: 66px;
  width: 80px;
  float: left;">
Data da Entrega:
</div>
<input id="data_descarga"  name="data_descarga" class="inputs1">
</div>

<br>
<div class="input__line" style="height: 40px;line-height:70px;width:480px; margin: 0 auto;">
<div class="input__text" style="height: 40px;">
Elevador: 
</div>
<div class="select" style="  height: 40px;">
<input value=Sim type=radio name="d_elev"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value=Não checked type=radio name="d_elev"> Não
</div>

<div class="input__text" style="  height: 40px;">
Escada:
</div>
<div class="select" style="  height: 40px;">
<input value="Sim" type="radio" name="d_esc"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value="Não" checked type="radio" name="d_esc"> Não
</div>
</div>
<p style="font-size: 14px;margin-top: 16px !important;width: 320px;margin: 0 auto;"> 
* em caso positivo será cobrada uma taxa adicional. </p>
</div>


<!-- _______________________________________________________  -->

<br><br><br>
<div class="tableroom">
<!--- -_________________________________________________________________________ -->

  <div class="title" style="  height: 50px;">Itens da Mudança</div>
  <div class="title" style="  line-height: 20px;
    font-size: 14px;  height: 20px;font-weight:300;font-family:'Source Sans Pro',sans-serif;color:#A1A1A1;">Determine os itens a serem transportados e sua quantidade.</div>
  <br>
  <div style="background-color: #CBCBCB;
  height: 1px;
  width: 550px;
  margin: 0 auto;
  margin-bottom: 50px;"></div>

<section style="width:760px;border:1px solid #d1d1d1;background-color:#EFEFEF;margin:0 auto">
    <div class="page" id="page-one">
     

         <div class="titlelist">
          Cozinha
          </div>
          <div class="linelist">
          <div class="linecolumn">
            Item

          </div>
          <div class="linecolumn" style="  width: 40px;">
            Quant.

          </div>
          <div class="linecolumn">
            Item
          </div>
          <div class="linecolumn" style="  width: 40px;">
             Quant.
          </div>
          <div class="linecolumn">
            Item
          </div>
          <div class="linecolumn" style="  width: 40px;">
             Quant.

          </div>
          </div>


         <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">
              Arm. Alto 1 porta
            </div>
            <div class="linecolumn2inp">
              <input id=q0 onkeyup=soma(0,0.6) 
                        size=4 name=q0 />
                    <input style="COLOR: #000000" id=t0 class=tot readonly size=4 type="hidden" name=t0 />            </div>
            <div class="linecolumn2">
              Balcão 3 portas 
            </div><div class="linecolumn2inp">
               <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(12,1.5) size=4 name=q12 /><input style="COLOR: #000000" class=tot readonly size=4 type="hidden" name=t12 />
            </div>
            <div class="linecolumn2">
              Forno Elétrico
            </div><div class="linecolumn2inp">
               <input onkeyup=soma(24,0.3) size=4 
                        name=q24 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t24 />
            </div>
          </div>



         <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">
              Arm. Alto 2 portas
            </div>
            <div class="linecolumn2inp">
             <input id=q1 onkeyup=soma(1,1.3) 
                        size=4 name=q1 />
                    <input style="COLOR: #000000" id=t1 
                        class=tot readonly size=4 type="hidden" name=t1 />
            </div>
            <div class="linecolumn2">
              Balcão 4 portas 
            </div>
            <div class="linecolumn2inp"> <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(13,2.0) size=4 name=q13 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t13 />

            </div>
            <div class="linecolumn2">
              

                Freezer Grande
            </div>
            <div class="linecolumn2inp">

          <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(25,1.5) size=4 name=q25 />
                        <input style="COLOR: #000000"  class="inputs1"
                            class=tot readonly size=4 type="hidden" name=t25 />

            </div>
          </div>

          <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">

              Arm. Alto 3 portas

            </div>
            <div class="linecolumn2inp">

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(2,2.0) size=4
                            name=q2 />
                        <input style="COLOR: #000000" id=t2 class="tot"readonly size=4 type="hidden" name=t2 />

            </div>
            <div class="linecolumn2">


              Banquinhos
            </div>
            <div class="linecolumn2inp">
               
                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(14,0.2) size=4
                            name=q14 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t14 />
               
            </div>
            <div class="linecolumn2">
              
            Freezer Pequeno

            </div>
            <div class="linecolumn2inp">

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(26,1.2) size=4
                            name=q26 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t26 />

            </div>
          </div>


          <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">

              Arm. Alto 4 portas

            </div>
            <div class="linecolumn2inp">

              <input id=q3 style="width: 60px;" onkeyup=soma(3,2.4) size=4 name=q3 />
              <input style="COLOR: #000000" id=t3 class="tot"readonly size=4 type="hidden" name=t3 />

            </div>
            <div class="linecolumn2">


              Bebedouro
            </div>
            <div class="linecolumn2inp">
               

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(15,0.3) size=4
                            name=q15 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t15 />
               
            </div>
            <div class="linecolumn2">
              
            Frigobar

            </div>
            <div class="linecolumn2inp">

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(27,0.6) size=4
                            name=q27 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t27 />

            </div>
          </div>


          <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">

              Arm. Aéreo de canto

            </div>
            <div class="linecolumn2inp">

             <input id=q4 style="width: 60px;" onkeyup=soma(4,0.4) 
                            size=4 name=q4 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t4 />

            </div>
            <div class="linecolumn2">


              Botijão Água
            </div>
            <div class="linecolumn2inp">
               

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(16,0.2) size=4 name=q16 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t16 />
               
            </div>
            <div class="linecolumn2">
              
            Geladeira Média

            </div>
            <div class="linecolumn2inp">

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(28,1.5) size=4
                            name=q28 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t28 />

            </div>
          </div>

          <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">

              Arm. Aéreo 1 porta

            </div>
            <div class="linecolumn2inp">

             <input id=q5 style="width: 60px;" onkeyup=soma(5,0.4) 
                            size=4 name=q5 />
                        <input style="COLOR: #000000" id=t5 class="tot"readonly size=4 type="hidden" name=t5 />

            </div>
            <div class="linecolumn2">


              Botijão de Gás Vazio
            </div>
            <div class="linecolumn2inp">
               
                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(17,0.2) size=4
                            name=q17 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t17 />
               
            </div>
            <div class="linecolumn2">
              
            Geladeira Grande

            </div>
            <div class="linecolumn2inp">

                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(29,2.0) size=4
                            name=q29 />
                        <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t29 />

            </div>
          </div>

          <!-- __________________________ -->

          <div class="linelist">
            <div class="linecolumn2">

              Arm. Aéreo 2 portas

            </div>
            <div class="linecolumn2inp">

            <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(6,0.6) size=4
                                    name=q6 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t6 />

                    </div>
                    <div class="linecolumn2">


                      Cadeira Simples

                    </div>
                    <div class="linecolumn2inp">
                       
                             <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(18,0.2) size=4
                                    name=q18 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t18 />
                       
                    </div>
                    <div class="linecolumn2">
                      
             Máquina Lavar Louça (pq)


                    </div>
                    <div class="linecolumn2inp">

                             <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(30,0.5) size=4
                                    name=q30 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t30 />

                    </div>
                  </div>                                

                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">

                      Arm. Aéreo 3 portas

                    </div>
                    <div class="linecolumn2inp">
             <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(7,0.8) size=4
                                    name=q7 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t7 />
                              
                             



                    </div>
                    <div class="linecolumn2">


                      Cadeira de Criança
                    </div>
                    <div class="linecolumn2inp">
                       
                            <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(19,0.2) size=4
                                    name=q19 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t19 />
                       
                    </div>
                    <div class="linecolumn2">
                      
                              Máquina Lavar Louça (gr)


                    </div>
                    <div class="linecolumn2inp">
                    <input onkeyup=soma(31,1.0) size=4 
                        name=q31 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t31 />

                    </div>
                  </div>                       
                         
                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">

                      Arm. Aéreo 4 portas

                    </div>
                    <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(8,1.0) size=4  
                                    name=q8 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t8 />
                              
                    </div>
                    <div class="linecolumn2">


                    Exaustor
                    </div>
                    <div class="linecolumn2inp">
                       
              <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(20,0.1) size=4
                                    name=q20 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t20 />
                       
                    </div>
                    <div class="linecolumn2">
                      
                              Mesa pequena


                    </div>
                    <div class="linecolumn2inp">

                             <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(32,0.5) size=4
                                    name=q32 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t32 />

                    </div>
                  </div>                       

                      
                                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">

                      Balcão de Canto

                    </div>
                    <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(9,0.8) size=4
                                    name=q9 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t9 />
                              
                    </div>
                    <div class="linecolumn2">


                     Fogão a Gás 6 a.
                    </div>
                    <div class="linecolumn2inp">
                        <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(21,0.7) size=4
                                    name=q21 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 name=t21 type="hidden" />
                       
                    </div>
                    <div class="linecolumn2">
                      
                              Mesa grande


                    </div>
                    <div class="linecolumn2inp">
            <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(33,0.7) size=4
                                    name=q33 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t33 />

                    </div>
                  </div>                       

                                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">

                      Balcão 1 porta

                    </div>
                    <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(10,0.5) size=4
                                    name=q10 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t10 />
                              
                    </div>
                    <div class="linecolumn2">


                      Fogão a Gás 4 a.
                    </div>
                    <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(22,0.5) size=4  
                                    name=q22 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 name=t22 type="hidden" />
                       
                    </div>
                    <div class="linecolumn2">
                      
                              Balcão 2 portas 


                    </div>
                    <div class="linecolumn2inp"><input style="  width: 60px;" style="width: 60px;" onkeyup=soma(11,1.0) size=4 
                                    name=q11 />
                                <input style="COLOR: #000000" class="tot"readonly size=4 type="hidden" name=t11 />

                    </div>
                              <!-- __________________________ -->

                    <div class="linelist">
                      <div class="linecolumn2">

                        Microondas

                      </div>
                      <div class="linecolumn2inp">
                               <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(23,0.2) size=4  
                                      name=q23 />
                                  <input style="COLOR: #000000" class="tot"readonly size=4 name=t23 type="hidden" />
                                
                      </div></div>
 </div><!-- /page-one -->

    </div><!-- /page-one -->
    <div class="page" id="page-two">
             
                 <div class="titlelist">
                  Sala de Estar
                  </div>
                  <div class="linelist">
                  <div class="linecolumn">
                    Item

                  </div>
                  <div class="linecolumn" style="  width: 40px;">
                    Quant.
                  </div>
                  <div class="linecolumn">
                    Item
                  </div>
                  <div class="linecolumn" style="  width: 40px;">
                     Quant.

                  </div>
                  <div class="linecolumn">
                    Item
                  </div>
                  <div class="linecolumn" style="  width: 40px;">
                     Quant.

                  </div>
                  </div>



                                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">

                      Banqueta

                    </div>
                    <div class="linecolumn2inp">

                 <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(37,0.1) 
                 maxlength=3 size=4 name=q37 />
                     <input style="COLOR: #000000" 
                 class=tot readonly size=4 type="hidden" name=t37 />
                                  
                        </div>
                        <div class="linecolumn2">

                          Bar

                        </div>
                        <div class="linecolumn2inp">
                                
                     <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(38,1.0) 
                 maxlength=3 size=4 name=q38 />
                     <input style="COLOR: #000000" 
                 class=tot readonly size=4 type="hidden" name=t38 />
                           
                        </div>
                        <div class="linecolumn2">
                      
                    Biombo


                    </div>
                    <div class="linecolumn2inp">

                    <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(40,0.2) 
                         maxlength=3 size=4 name=q40 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t40 />

                                </div>
                              </div>    

                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                                  Cadeira Braço

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(42,0.3) size=4 
                         name=q42 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t42 />
                                          
                                </div>
                                <div class="linecolumn2">

                                Cadeira Balanço

                                </div>
                                <div class="linecolumn2inp">


                        <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(43,0.5) size=4 
                         name=q43 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t43 />

                                   
                                </div>
                                <div class="linecolumn2">
                                  

                                Cadeira do Papai

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(44,0.5) size=4 
                         name=q44 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t44 />



                                </div>
                              </div>    

                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                        Cadeira Simples

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(45,0.2) size=4 
                         name=q45 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t45 />
                                          
                                </div>
                                <div class="linecolumn2">

                        Carrinho de Chá

                                </div>
                                <div class="linecolumn2inp">


                        <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(46,0.3) size=4 
                         name=q46 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t46 />
                                   
                                </div>
                                <div class="linecolumn2">
                                  

                        Console ou Rack

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(47,0.5) size=4 
                         name=q47 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t47 />



                                </div>
                              </div>    

                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                        Estante Pequena

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(48,1.0) size=4 
                         name=q48 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t48 />
                                          
                                </div>
                                <div class="linecolumn2">

                        Estante Média

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(49,1.5) size=4 
                         name=q49 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t49 />

                                   
                                </div>
                                <div class="linecolumn2">
                                  

                        Estante Grande

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(50,2.0) size=4 
                         name=q50 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t50 />



                                </div>
                              </div>    


                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">


                        Lustre
                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(51,0.3) size=4 
                         name=q51 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t51 />
                                          
                                </div>
                                <div class="linecolumn2">

                        Mesa de Centro

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(52,0.3) size=4 
                         name=q52 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t52 />

                                   
                                </div>
                                <div class="linecolumn2">
                                  
                        Mesa Lateral


                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(53,0.2) size=4 
                         name=q53 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t53 />



                                </div>
                              </div>    

                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                        Mesa de TV

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(54,0.3) size=4 
                         name=q54 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t54 />
                                          
                                </div>
                                <div class="linecolumn2">

                        Mesa Telefone

                                </div>
                                <div class="linecolumn2inp">


                        <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(55,0.3) size=4 
                         name=q55 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t55 />
                                   
                                </div>
                                <div class="linecolumn2">
                                  
                        Multiuso


                                </div>
                                <div class="linecolumn2inp">


                        <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(56,0.3) size=4 
                         name=q56 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t56 />


                                </div>
                              </div>    


                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                        Piano de Armário

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(57,2.0) size=4 
                         name=q57 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t57 />
                                          
                                </div>
                                <div class="linecolumn2">

                        Piano de Cauda

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(58,3.0) size=4 
                         name=q58 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t58 />

                                   
                                </div>
                                <div class="linecolumn2">
                                  

                        Poltrona Grande

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(59,1.0) size=4 
                         name=q59 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t59 />



                                </div>
                              </div>    



                                              <!-- __________________________ -->

                              <div class="linelist">
                                <div class="linecolumn2">

                        Poltrona Pequena

                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(60,0.7) size=4 
                         name=q60 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t60 />
                                          
                                </div>
                                <div class="linecolumn2">
                        Sofá Grande 2 Lugares


                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(61,1.5) size=4 
                         name=q61 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t61 />

                                   
                                </div>
                                <div class="linecolumn2">
                                  
                        Sofá Pequeno 2 Lugares


                                </div>
                                <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(62,1.0) size=4 
                         name=q62 />
                             <input style="COLOR: #000000" 
                         class=tot readonly size=4 type="hidden" name=t62 />



                                </div>
                              </div>    


                                  <!-- __________________________ -->

                  <div class="linelist">
                    <div class="linecolumn2">
                    Sofá Grande 3 Lugares
                    </div>
                    <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(63,2.0) size=4 
                   name=q63 />
                       <input style="COLOR: #000000" 
                   class=tot readonly size=4 type="hidden" name=t63 />
                          </div>
                          <div class="linecolumn2">
                          Sofá Pequeno 3 Lugares
                          </div>
                          <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(64,1.5) size=4 
                   name=q64 />
                       <input style="COLOR: #000000" 
                   class=tot readonly size=4 type="hidden" name=t64 />
                          </div>
                          <div class="linecolumn2">
                          Sofá Grande 3 Lugares

                          </div>
                          <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(65,2.4) size=4 
                   name=q65 />
                       <input style="COLOR: #000000" 
                   class=tot readonly size=4 type="hidden" name=t65 />

                          </div>
                        </div>    

                                        <!-- __________________________ -->

                        <div class="linelist">
                          <div class="linecolumn2">
                          Sofá Pequeno 4 Lugares
                          </div>
                          <div class="linecolumn2inp">
                                  <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(66,1.8) size=4 
                   name=q66 />
                       <input style="COLOR: #000000" 
                   class=tot readonly size=4 type="hidden" name=t66 />  
                          </div>
                        </div>    
    </div><!-- /page-two -->


    <div class="page" id="page-three">


                        <div class="titlelist">
                        Sala de Jantar
                        </div>
                        <div class="linelist">
                        <div class="linecolumn">
                          Item

                        </div>
                        <div class="linecolumn" style="  width: 40px;">
                          Quant.

                        </div>
                        <div class="linecolumn">
                          Item
                        </div>
                        <div class="linecolumn" style="  width: 40px;">
                           Quant.

                        </div>
                        <div class="linecolumn">
                          Item
                        </div>
                        <div class="linecolumn" style="  width: 40px;">
                           Quant.


                        </div>
                            </div>

                                      <!-- __________________________ -->

                      <div class="linelist">
                        <div class="linecolumn2">
                Balcão Oratório Grande

                        </div>
                        <div class="linecolumn2inp">

                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(67,2.0) size=4 
                                        name=q67>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t67 />

                        </div>
                        <div class="linecolumn2">

                Balcão Simples

                        </div>
                        <div class="linecolumn2inp">


                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(68,1.5) size=4 
                                        name=q68>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t68 />
                        </div>
                        <div class="linecolumn2">

                Cadeira Simples
                        </div>
                        <div class="linecolumn2inp">


                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(69,0.2) size=4 
                                        name=q69>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t69 />

                        </div>
                      </div>    
                                      <!-- __________________________ -->

                      <div class="linelist">
                        <div class="linecolumn2">
                Cristaleira

                        </div>
                        <div class="linecolumn2inp">

                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(70,0.8) size=4 
                                        name=q70>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t70 />

                        </div>
                        <div class="linecolumn2">

                Lustre

                        </div>
                        <div class="linecolumn2inp">

                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(71,0.3) size=4 
                                        name=q71>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t71 />

                        </div>
                        <div class="linecolumn2">
                Mesa de Jantar Pequena

                        </div>
                        <div class="linecolumn2inp">

                      <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(72,1.0) size=4 
                                        name=q72>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t72 />


                        </div>
                      </div>    

                      <!-- __________________________ -->

                      <div class="linelist">
                        <div class="linecolumn2">

                Mesa de Jantar Grande
                        </div>
                        <div class="linecolumn2inp">


                <input style="  width: 60px;" style="width: 60px;" onkeyup=soma(73,1.5) size=4 
                                        name=q73>
                        <input style="COLOR: #000000" 
                                        class=tot readonly size=4 type="hidden" name=t73 />

                        
                        </div>


    </div><!-- /page-three -->    </div><!-- /page-three -->
      <div class="page" id="page-four">
     
              <div class="titlelist">
      Escritório
      </div>
      <div class="linelist">
      <div class="linecolumn">
        Item

      </div>
      <div class="linecolumn" style="  width: 40px;">
        Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;">
         Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;padding-right:50px;padding-left:15px;">
         Quant.

      </div>
      </div>
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

        Arquivo
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(74,0.5) size=4 
                        name=q74>
        <input style="COLOR: #000000" id=t74 
                        class=tot readonly size=4 type="hidden" name=t74 />

        </div>
        <div class="linecolumn2">

Armário de Aço

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(75,1.0) size=4 
                        name=q75>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t75 />

        </div>
        <div class="linecolumn2">
 Cadeira Giratória

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(76,0.2) size=4 
                        name=q76>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t76 />
        </div>
        </div>

                      <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Cadeira Simples

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(77,0.2) size=4 
                        name=q77>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t77 />

        </div>
        <div class="linecolumn2">

Cofre   <input id="cofre" name="cofre" style="   height: 20px;
  width: 30px;
  padding: 0px;
  margin: 0px;
  display: initial;
  float: none;
  border-radius: 0;
  border: 1px solid #A9A9A9;
  background-color: #fff;">kg

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(78,0.5) size=4 
                        name=q78>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t78 />

        </div>
        <div class="linecolumn2">
 Computador

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(79,0.3) size=4 
                        name=q79>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t79 />


        </div>
      </div>    
                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Escrivaninha

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(80,0.5) size=4 
                        name=q80>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t80 />


        </div>
        <div class="linecolumn2">

Equip. Dentário

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(81,1.0) size=4 
                        name=q81>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t81 />

        </div>
        <div class="linecolumn2">

Impressora

        </div>
        <div class="linecolumn2inp">


<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(82,0.3) size=4 
                        name=q82>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t82 />

        </div>
      </div>    
                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Máquina de Escrever

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(83,0.2) size=4 
                        name=q83>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t83 />

        </div>
        <div class="linecolumn2">

Mesa de Reunião

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(84,1.0) size=4 
                        name=q84>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t84 />

        </div>
        <div class="linecolumn2">
Retroprojetor 

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(85,0.2) size=4 
                        name=q85>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t85 />


        </div>
      </div>    


                                <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
        Sofá

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(86,1.5) size=4 
                        name=q86>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t86 />
        </div>
        <div class="linecolumn2">
        Scanner

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(87,0.2) size=4 
                        name=q87>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t87 />
        </div>
        <div class="linecolumn2">
        Telefones / Fax

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(88,0.1) size=4 
                        name=q88>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t88 />


        </div>
      </div>    
    </div><!-- /page-three -->
      <div class="page" id="page-five">
          <div class="titlelist">
      Dormitório de Casal
      </div>
      <div class="linelist">
      <div class="linecolumn">
        Item

      </div>
      <div class="linecolumn" style="  width: 40px;">
        Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;">
         Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;padding-left:15px;padding-right:50px;">
         Quant.

      </div>
      </div>





     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

        Baú
        </div>
        <div class="linecolumn2inp">

<input onkeyup=soma(89,0.4) size=4 
                        name=q89 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t89 />
                        
        </div>
        <div class="linecolumn2">

Bicama

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(90,1.6) size=4 
                        name=q90 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t90 />

        </div>
        <div class="linecolumn2">

Cabideiro
        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(91,0.2) size=4 
                        name=q91 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t91 />



        </div>
      </div>    
                      <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Cadeira Simples

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(92,0.2) size=4 
                        name=q92 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t92 />

        </div>
        <div class="linecolumn2">

Cama Box

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(93,1.7) size=4 
                        name=q93 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t93 />

        </div>
        <div class="linecolumn2">
Cama de Criança

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(94,0.5) size=4 
                        name=q94 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t94 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Cama Comum

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(95,0.8) size=4 
                        name=q95 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t95 />

        </div>
        <div class="linecolumn2">

Carro de Bebê

        </div>
        <div class="linecolumn2inp">
<input onKeyUp=soma(97,0.3) size=4 
                        name=q97>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t97 />

        </div>
        <div class="linecolumn2">
Cesto de Roupas

        </div>
        <div class="linecolumn2inp">


<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(98,0.2) size=4 
                        name=q98 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t98 />

        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Colchão de Casal
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(99,0.5) size=4 
                        name=q99 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t99 />

        </div>
        <div class="linecolumn2">

Cômoda

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(101,0.8) size=4 
                        name=q101 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t101 />

        </div>
        <div class="linecolumn2">

Lustre
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(102,0.3) size=4 
                        name=q102 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t102 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

        Malas
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(103,0.2) size=4 
                        name=q103 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t103 />

        </div>
        <div class="linecolumn2">

        Mesa de Cabeceira

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(104,0.5) size=4 
                        name=q104 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t104 />

        </div>
        <div class="linecolumn2">

        Pentiadeira
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(105,1.0) size=4 
                        name=q105 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t105 />


        </div>
      </div>    



     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Roupeiro 2 Portas
        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(106,1.5) size=4 
                        name=q106 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t106 />


        </div>
        <div class="linecolumn2">


Roupeiro 3 Portas
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(109,2.0) size=4 
                        name=q109 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t109 />

        </div>
        <div class="linecolumn2">
Roupeiro 4 Portas

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(112,1.3) size=4 
                        name=q112 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t112 />



        </div>
      </div>    


     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Roupeiro 5 Portas

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(114,1.8) size=4 
                        name=q114 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t114 />


        </div>
        <div class="linecolumn2">
Roupeiro 6 Portas


        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(115,2.5) size=4 
                        name=q115 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t115 />


        </div>
      </div>    

    </div><!-- /page-three -->
      <div class="page" id="page-six">
         <div class="titlelist">
      Dormitório de Solteiro 1
      </div>
      <div class="linelist">
      <div class="linecolumn">
        Item

      </div>
      <div class="linecolumn" style="  width: 40px;">
        Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;">
         Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;padding-left:15px;padding-right:50px;">
         Quant.

      </div>
      </div>





     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
        Baú

        </div>
        <div class="linecolumn2inp">

<input id=q201 style="width: 60px;" onkeyup=soma(201,0.4) 
                        size=4 name=q201 />
                <input style="COLOR: #000000" id=t201 
                        class=tot readonly size=4 type="hidden" name=t201 />

        </div>
        <div class="linecolumn2">

Bicama

        </div>
        <div class="linecolumn2inp">

<input id=q202 style="width: 60px;" onkeyup=soma(202,1.6) 
                        size=4 name=q202 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t202 />

        </div>
        <div class="linecolumn2">

Cabideiro
        </div>
        <div class="linecolumn2inp">

<input id=q203 style="width: 60px;" onkeyup=soma(203,0.2) 
                        size=4 name=q203 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t203 />


        </div>
      </div>    
                      <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
        Cadeira Simples

        </div>
        <div class="linecolumn2inp">

<input id=q204 style="width: 60px;" onkeyup=soma(204,0.2) 
                        size=4 name=q204 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t204 />

        </div>
        <div class="linecolumn2">
        Cama Box


        </div>
        <div class="linecolumn2inp">
<input id=q205 style="width: 60px;" onkeyup=soma(205,1.7) 
                        size=4 name=q205 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t205 />


        </div>
        <div class="linecolumn2">
Cama de Criança

        </div>
        <div class="linecolumn2inp">

<input id=q206 style="width: 60px;" onkeyup=soma(206,0.5) 
                        size=4 name=q206 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t206 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Cama Comum
        </div>
        <div class="linecolumn2inp">

<input id=q207 style="width: 60px;" onkeyup=soma(207,0.8) 
                        size=4 name=q207 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t207 />

        </div>
        <div class="linecolumn2">
Cesto de Roupas


        </div>
        <div class="linecolumn2inp">

<input id=q209 style="width: 60px;" onkeyup=soma(209,0.2) 
                        size=4 name=q209 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t209 />

        </div>
        <div class="linecolumn2">
Colchão de Solteiro

        </div>
        <div class="linecolumn2inp">

<input id=q210 style="width: 60px;" onkeyup=soma(210,0.5) 
                        size=4 name=q210 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t210 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Lustre

        </div>
        <div class="linecolumn2inp">

<input id="q212" style="width: 60px;" onkeyup=soma(212,0.3) 
                        size=4 name=q212 /><input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t212 />

        </div>
        <div class="linecolumn2">

Cômoda

        </div>
        <div class="linecolumn2inp">

<input id=q211 style="width: 60px;" onkeyup=soma(211,0.8) 
                        size=4 name=q211 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t211 />

        </div>
        <div class="linecolumn2">
Malas

        </div>
        <div class="linecolumn2inp">
<input id=q213 style="width: 60px;" onkeyup=soma(213,0.2) 
                        size=4 name=q213 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t213 />

        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Mesa de Cabeceira
        </div>
        <div class="linecolumn2inp">
<input id=q214 style="width: 60px;" onkeyup=soma(214,0.5) 
                        size=4 name=q214 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t214 />


        </div>
        <div class="linecolumn2">
Pentiadeira


        </div>
        <div class="linecolumn2inp">
<input id=q215 style="width: 60px;" onkeyup=soma(215,1.0) 
                        size=4 name=q215 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t215 />


        </div>
        <div class="linecolumn2">

Roupeiro 2 Portas
        </div>
        <div class="linecolumn2inp">

<input id=q216 style="width: 60px;" onkeyup=soma(216,1.5) 
                        size=4 name=q216 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t216 />


        </div>
      </div>    



     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Roupeiro 3 Portas

        </div>
        <div class="linecolumn2inp">

<input id=q217 style="width: 60px;" onkeyup=soma(217,2.0) 
                        size=4 name=q217 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t217 />

        </div>
        <div class="linecolumn2">
Roupeiro 4 Portas


        </div>
        <div class="linecolumn2inp">


<input id=q218 style="width: 60px;" onkeyup=soma(218,1.3) 
                        size=4 name=q218 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t218 />
        </div>
        <div class="linecolumn2">

Roupeiro 5 Portas
        </div>
        <div class="linecolumn2inp">

<input id=q219 style="width: 60px;" onkeyup=soma(219,1.8) 
                        size=4 name=q219 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t219 />


        </div>
      </div>    

      
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Roupeiro 6 Portas

        </div>
        <div class="linecolumn2inp">

<input id=q220 style="width: 60px;" onkeyup=soma(220,2.5) 
                        size=4 name=q220 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t220 />

        </div>
    </div><!-- /page-three -->
</div>
      <div class="page" id="page-seven">
                   <div class="titlelist">
      Dormitório de Solteiro 2
      </div>
      <div class="linelist">
      <div class="linecolumn">
        Item

      </div>
      <div class="linecolumn" style="  width: 40px;">
        Quant. 

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;">
         Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;padding-left:15px;padding-right:50px;">
         Quant.

      </div>
      </div>

     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Baú

        </div>
        <div class="linecolumn2inp">
<input id=q221 style="width: 60px;" onkeyup=soma(221,0.4) 
                        size=4 name=q221>
        <input style="COLOR: #000000" id=t221 
                        class=tot readonly size=4 type="hidden" name=t221 />


        </div>
        <div class="linecolumn2">
Bicama


        </div>
        <div class="linecolumn2inp">
<input id=q222 style="width: 60px;" onkeyup=soma(222,1.6) 
                        size=4 name=q222>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t222 />


        </div>
        <div class="linecolumn2">

Cabideiro
        </div>
        <div class="linecolumn2inp">

<input id=q223 style="width: 60px;" onkeyup=soma(223,0.2) 
                        size=4 name=q223>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t223 />
        </div>
      </div>    
                      <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Cadeira Simples
        </div>
        <div class="linecolumn2inp">

<input id=q224 style="width: 60px;" onkeyup=soma(224,0.2) 
                        size=4 name=q224>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t224 />

        </div>
        <div class="linecolumn2">
Cama Box


        </div>
        <div class="linecolumn2inp">

<input id=q225 style="width: 60px;" onkeyup=soma(225,1.7) 
                        size=4 name=q225>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t225 />

        </div>
        <div class="linecolumn2">
Cama de Criança

        </div>
        <div class="linecolumn2inp">
<input id=q226 style="width: 60px;" onkeyup=soma(226,0.5) 
                        size=4 name=q226>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t226 />



        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Cama Comum

        </div>
        <div class="linecolumn2inp">

<input id=q227 style="width: 60px;" onkeyup=soma(227,0.8) 
                        size=4 name=q227>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t227 />

        </div>
        <div class="linecolumn2">

Carro de Bebê

        </div>
        <div class="linecolumn2inp">

<input id=q228 style="width: 60px;" onkeyup=soma(228,0.3) 
                        size=4 name=q228>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t228 />

        </div>
        <div class="linecolumn2">

Cesto de Roupas
        </div>
        <div class="linecolumn2inp">

<input id=q229 style="width: 60px;" onkeyup=soma(229,0.2) 
                        size=4 name=q229>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t229 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Colchão de Solteiro
        </div>
        <div class="linecolumn2inp">

<input id=q230 style="width: 60px;" onkeyup=soma(230,0.5) 
                        size=4 name=q230>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t230 />

        </div>
        <div class="linecolumn2">

Cômoda

        </div>
        <div class="linecolumn2inp">


<input id=q231 style="width: 60px;" onkeyup=soma(231,0.8) 
                        size=4 name=q231>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t231 />
        </div>
        <div class="linecolumn2">

Lustre
        </div>
        <div class="linecolumn2inp">

<input id=q232 style="width: 60px;" onkeyup=soma(232,0.3) 
                        size=4 name=q232>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t232 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Malas
        </div>
        <div class="linecolumn2inp">

<input id=q233 style="width: 60px;" onkeyup=soma(233,0.2) 
                        size=4 name=q233>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t233 />

        </div>
        <div class="linecolumn2">

Mesa de Cabeceira

        </div>
        <div class="linecolumn2inp">

<input id=q234 style="width: 60px;" onkeyup=soma(234,0.5) 
                        size=4 name=q234>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t234 />

        </div>
        <div class="linecolumn2">

Pentiadeira
        </div>
        <div class="linecolumn2inp">

<input id=q235 style="width: 60px;" onkeyup=soma(235,1.0) 
                        size=4 name=q235>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t235 />


        </div>
      </div>    



     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Roupeiro 2 Portas

        </div>
        <div class="linecolumn2inp">
<input id=q236 style="width: 60px;" onkeyup=soma(236,1.5) 
                        size=4 name=q236>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t236 />


        </div>
        <div class="linecolumn2">

Roupeiro 3 Portas

        </div>
        <div class="linecolumn2inp">
<input id=q237 style="width: 60px;" onkeyup=soma(237,2.0) 
                        size=4 name=q237>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t237 />


        </div>
        <div class="linecolumn2">
Roupeiro 4 Portas

        </div>
        <div class="linecolumn2inp">
<input id=q238 style="width: 60px;" onkeyup=soma(238,1.3) 
                        size=4 name=q238>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t238 />



        </div>
      </div>    

      
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Roupeiro 5 Portas

        </div>
        <div class="linecolumn2inp">

<input id=q239 style="width: 60px;" onkeyup=soma(239,1.8) 
                        size=4 name=q239>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t239 />

        </div>
        <div class="linecolumn2">

Roupeiro 6 Portas

        </div>
        <div class="linecolumn2inp">

<input id=q240 style="width: 60px;" onkeyup=soma(240,2.5) 
                        size=4 name=q240>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t240 />

        </div>
      </div>    
    </div><!-- /page-three -->

      <div class="page" id="page-eight">
      


              <div class="titlelist">
      Diversos
      </div>
      <div class="linelist">
      <div class="linecolumn">
        Item

      </div>
      <div class="linecolumn" style="  width: 40px;">
        Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;">
         Quant.

      </div>
      <div class="linecolumn">
        Item
      </div>
      <div class="linecolumn" style="  width: 40px;padding-right:50px;padding-left:15px;">
         Quant.

      </div>
      </div>





     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
        Antena Parabólica Grande

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(118,1.0) size=4 
                        name=q118 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t118 />

        </div>
        <div class="linecolumn2">

Antena Parabólica Pequena

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(119,0.4) size=4 
                        name=q119 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t119 />


        </div>
        <div class="linecolumn2">
Aparelho de Ginástica

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(120,0.7) size=4 
                        name=q120 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t120 />


        </div>
      </div>    
                      <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Aparalho de Som
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(121,0.4) size=4 
                        name=q121 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t121 />

        </div>
        <div class="linecolumn2">

Aquecedor

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(122,0.1) size=4 
                        name=q122 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t122 />


        </div>
        <div class="linecolumn2">
Aspirador de Pó

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(123,0.3) size=4 
                        name=q123 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t123 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Bicicleta Grande

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(124,0.7) size=4 
                        name=q124 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t124 />


        </div>
        <div class="linecolumn2">
Bicicleta Pequena

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(125,0.4) size=4 
                        name=q125 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t125 />

        </div>
        <div class="linecolumn2">

Caixas com Bebidas
        </div>
        <div class="linecolumn2inp">

<input id="q153" style="width: 60px;" onkeyup=soma(153,0.2) 
                        size=4 name=q153 />
            <input style="COLOR: #000000" id=t153 
                        class=tot readonly size=4 type="hidden" name=t153 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Caixa com Livros

        </div>
        <div class="linecolumn2inp">
<input id="q154" style="width: 60px;" onkeyup=soma(154,0.2) 
                        size=4 name=q154 />
            <input style="COLOR: #000000" id=t154 
                        class=tot readonly size=4 type="hidden" name=t154 />


        </div>
        <div class="linecolumn2">
Caixas com Roupas


        </div>
        <div class="linecolumn2inp">


<input id="q156" style="width: 60px;" onkeyup=soma(156,0.2) 
                        size=4 name=q156 />
            <input style="COLOR: #000000" id=t156 
                        class=tot readonly size=4 type="hidden" name=t156 />
        </div>
        <div class="linecolumn2">

Churrasqueira
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(126,0.3) size=4 
                        name=q126 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t126 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Condicionador de ar Grande

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(127,0.4) size=4 
                        name=q127 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t127 />


        </div>
        <div class="linecolumn2">

Condicionador de ar Pequeno

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(128,0.3) size=4 
                        name=q128 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t128 />

        </div>
        <div class="linecolumn2">

Circulador de Ar

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(129,0.2) size=4 
                        name=q129 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t129 />


        </div>
      </div>    



     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
DVD

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(130,0.2) size=4 
                        name=q130 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t130 />

        </div>
        <div class="linecolumn2">

Encerradeira

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(131,0.2) size=4 
                        name=q131 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t131 />

        </div>
        <div class="linecolumn2">

Engradados
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(132,0.2) size=4 
                        name=q132 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t132 />


        </div>
      </div>    

      
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Escada
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(133,0.2) size=4 
                        name=q133 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t133 />

        </div>
        <div class="linecolumn2">

Esteira

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(134,0.5) size=4 
                        name=q134 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t134 />

        </div>
        <div class="linecolumn2">

Filmadora

        </div>
        <div class="linecolumn2inp">

<input id="q157" style="width: 60px;" onkeyup=soma(157,0.1) 
                        size=4 name=q157 />
            <input style="COLOR: #000000" id=t157 
                        class=tot readonly size=4 type="hidden" name=t157 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Filtro

        </div>
        <div class="linecolumn2inp">


<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(135,0.2) size=4 
                        name=q135 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t135 />
        </div>
        <div class="linecolumn2">
Máquina de Costura


        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(136,0.2) size=4 
                        name=q136 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t136 />


        </div>
        <div class="linecolumn2">

Moto
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(137,3.0) size=4 
                        name=q137 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t137 />


        </div>
      </div>    

                            <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
        Lavadora de Roupa até 8kg

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(138,1.0) size=4 
                        name=q138 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t138 />

        </div>
        <div class="linecolumn2">

Lavadora de Roupa até 5kg

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(139,0.7) size=4 
                        name=q139 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t139 />

        </div>
        <div class="linecolumn2">

Secadora de Roupa Grande

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(140,0.8) size=4 
                        name=q140 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t140 />



        </div>
      </div>    



     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Secadora de Roupa Pequena
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(141,0.3) size=4 
                        name=q141 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t141 />

        </div>
        <div class="linecolumn2">

Tábua de Passar

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(142,0.2) size=4 
                        name=q142 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t142 />

        </div>
        <div class="linecolumn2">
Tapete Grande

        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(143,0.3) size=4 
                        name=q143 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t143 />



        </div>
      </div>    

      
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">

Tapete Pequeno
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(144,0.2) size=4 
                        name=q144 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t144 />

        </div>
        <div class="linecolumn2">

Teclado

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(145,0.2) size=4 
                        name=q145 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t145 />

        </div>
        <div class="linecolumn2">

Televisão até 20"
        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(146,0.3) size=4 
                        name=q146 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t146 />


        </div>
      </div>  

     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Televisão de 29 a 40"

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(147,1.0) size=4 
                        name=q147 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t147 />

        </div>
        <div class="linecolumn2">

Televisão acima de 40"

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(148,1.5) size=4 
                        name=q148 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t148 />

        </div>
        <div class="linecolumn2">

Ventilador
        </div>
        <div class="linecolumn2inp">
<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(149,0.2) size=4 
                        name=q149 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t149 />

        </div>
      </div>    

      
     <!-- __________________________ -->

      <div class="linelist">
        <div class="linecolumn2">
Video-Cassete

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(150,0.2) size=4 
                        name=q150 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t150 />

        </div>
        <div class="linecolumn2">

Vídeo Game

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(151,0.2) size=4 
                        name=q151 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t151 />

        </div>
        <div class="linecolumn2">

Violão

        </div>
        <div class="linecolumn2inp">

<input style="  width: 60px;" style="width: 60px;" onkeyup=soma(152,0.2) size=4 name=q152 />
            <input style="COLOR: #000000" class=tot readonly size=4 type="hidden" name=t152 />


        </div>
      </div>  

    </div>
    




    </div><!-- /page-three -->
  </div><!-- /container -->
</section>



<!-- _____________________________________________________________________________________________________________________-->


<div class="orcamentopart1" style="width:760px;height:800px;">
<div class="title">
Seguro
</div>
<div style="background-color:#CBCBCB;height:1px;width:500px;margin-left:100px;margin-right:100px;"></div>

<p>
<div class="input__line" style="margin-top: 12px;">
<div class="input__text" style="  width: 400px;
  font-size: 16px;
  line-height: 20px;
  margin-top: 20px;height:20px;">
Qual o valor de seguro pretendido para sua mudança?: R$</div><input class="inputs1" style="width:120px" id=seg1 size=12 name=seg1>
</div>

<div class="input__line">
<div class="input__text" style="  width: 400px;
  font-size: 16px;
  line-height: 20px;
  margin-top: 20px;height:20px;">
Moto(se transportada no caminhão) R$:</div>
<input  class="inputs1" style="width:120px"  id="seg2" name="seg2">
</div>

<div class="input__line">
<div class="input__text" style="  width: 400px;
  font-size: 16px;
  line-height: 20px;
  margin-top: 20px;height:20px;">
Carro(se transportado no caminhão R$:
</div>
<input id=seg3 size=12 name=seg3 class="inputs1" style="width:120px" >
</div>
<br>
<div class="title">
Observações
</div>
<div style="background-color:#CBCBCB;height:1px;width:500px;margin-left:100px;margin-right:100px;"></div>

                   <textarea name=obs cols=80 rows="6" wrap=virtual style="  float: none;
  margin-left: 92px;
  border: 2px solid #DADADA;"id="obs"></textarea>

<div class="title">
Encaixotamento
</div>
<div class="title" style="  line-height: 20px;    font-size: 14px;  height: 20px;font-weight:300;font-family:'Source Sans Pro',sans-serif;color:#A1A1A1;margin-top:-10px;">
Descreva abaixo o que precisa ser encaixotado. Por ex.: garrafas, cristais, bebidas, etc.</div>
<div style="background-color:#CBCBCB;height:1px;width:500px;margin-left:100px;margin-right:100px;"></div>
<textarea rows=6 cols=80 type="hidden" name=textarea  style="  float: none;
  margin-left: 92px;
  border: 2px solid #DADADA;"></textarea>
<input type="submit" name="enviar" id="enviar" value="Enviar Orçamento" class="bt" style="  cursor: pointer;
  border: 2px solid #ffc100;
  font-weight: 700;
  color: #fff;
  background-color: #ffc100;
  padding: 10px;
  border-radius: 5px;
  margin-left: 260px;
  padding-left: 50px;
  padding-right: 50px;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 18px;"/>
</div>
        
</div>
      </form>
  </div>
</div>
 <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<div style="margin-bottom:100px;">
</body>
</html>