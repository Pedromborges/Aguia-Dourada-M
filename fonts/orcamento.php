<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!-- ___ JQuery ___ -->
    <script src="js/jquery-2.1.1.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <!-- ____ Elastislide ___ -->
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <!-- ____ Modernizr.js ___ -->
    <script src="js/modernizr.js"></script>
    <!-- ___ Immersive Slider ___ -->
    <script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
    <link href='css/tabulous.css' rel='stylesheet' type='text/css'>
<style>
    html {
        height: 100%;
    }
    body {
        background: #f3f3f3;
        padding: 0;
        text-align: center;
        position: relative;
        margin: 0;
        height: 100%;
    }
    .wrapper {
        height: auto !important;
        height: 100%;
        margin: 0 auto;
        overflow: hidden;
    }
    .pointer {
        color: #9b59b6;
        font-family: 'Pacifico', cursive;
        font-size: 30px;
        margin-top: 15px;
    }
    pre {
        margin:80px auto;
    }
    pre code {
        padding: 35px;
        border-radius: 5px;
        font-size: 15px;
        background: rgba(0, 0, 0, 0.1);
        border: rgba(0, 0, 0, 0.05) 5px solid;
        max-width: 500px;
    }
    .main {
        float: left;
        width: 100%;
        margin: 0 auto;
        background: #161923;
    }
    .main h1 {
        padding: 20px 50px;
        float: left;
        width: 100%;
        font-size: 90px;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        font-weight: 100;
        color: black;
        margin: 0;
        margin-top: 70px;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: -1px;
    }
    .main h1.demo1 {
        background: #1ABC9C;
    }
    .reload.bell {
        font-size: 12px;
        padding: 20px;
        width: 45px;
        text-align: center;
        height: 47px;
        border-radius: 50px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
    }
    .reload.bell #notification {
        font-size: 25px;
        line-height: 140%;
    }
    .reload,
    .btn {
        display: inline-block;
        border: 4px solid #A2261E;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        background: #CC3126;
        display: inline-block;
        line-height: 100%;
        padding: 0.7em;
        text-decoration: none;
        color: #fff;
        width: 100px;
        line-height: 140%;
        font-size: 17px;
        font-family: open sans;
        font-weight: bold;
    }
    .reload:hover {
        background: #A2261E;
    }
    .btn {
        width: 200px;
        color: #fff;
        border: none;
        margin-left: 10px;
        background: black;
    }
    .clear {
        width: auto;
    }
    .btn:hover,
    .btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }
    .btns {
        width: 410px;
        margin: 50px auto;
    }
    .credit {
        text-align: center;
        color: #444;
        padding: 10px;
        margin: 0 0 0 0;
        background: #161923;
        color: #FFF;
        float: left;
        width: 100%;
    }
    .credit a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }
    .back {
        position: absolute;
        top: 0;
        left: 0;
        text-align: center;
        display: block;
        padding: 7px;
        width: 100%;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        background: rgba(255, 255, 255, 0.25);
        font-weight: bold;
        font-size: 13px;
        color: #000;
        -webkit-transition: all 200ms ease-out;
        -moz-transition: all 200ms ease-out;
        -o-transition: all 200ms ease-out;
        transition: all 200ms ease-out;
    }
    .back:hover {
        color: black;
        background: rgba(255, 255, 255, 0.5);
    }
    .page_container {
        max-width: 960px;
        margin: 50px auto;
    }
    .header {
        background: white;
        padding-top: 10px;
        margin-bottom: 0;
    }
    .header h1 {
        margin-bottom: 0;
        font-size: 45px;
    }
    .header .menu {
        padding-bottom: 10px;
    }
    .benefits {
        color: black;
        height: 100px;
        background: #FFF;
        position: relative;
        width: 100%;
        padding: 25px;
        font-size: 40px;
        font-weight: 100;
        float: left;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }
    .benefits .page_container {
        margin-bottom: 50px;
        margin-top: 0;
    }
    .immersive_slider .is-slide .content h2 {
        line-height: 140%;
        font-weight: 100;
        color: white;
        font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
        color: white;
    }
    .immersive_slider .is-slide .content p {
        float: left;
        font-weight: 100;
        width: 100%;
        font-size: 17px;
        margin-top: 5px;
    }
    </style>

    <!-- ___ Site ___ -->
    <link href="css/main.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">

<script type="text/javascript">	function f_tel(objeto){		if (objeto.value.length == 1){			objeto.value = "("+objeto.value;		}		if (objeto.value.length == 3){			objeto.value = objeto.value+")";		}		if (objeto.value.length == 8){			objeto.value = objeto.value+"-";		}	}</script>
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
<body onload="MM_preloadImages('images/eventos_empresariais_taboo2.jpg','images/eventos_empresariais_taboo2.png','images/eventos_sociais_taboo2.png','images/despedida_solteiro_taboo2.png','images/formaturas_poa_taboo2.png','images/fotos_taboo_eventos2.png','images/sistemas_embalagem_mudancas3.jpg','images/avancar_aguia_dourada2.png')">


    <header style="height:30px;">
    <section class="h-menu">
        <section class="top">
            <div class="telephone1"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Curitiba &nbsp;&nbsp;&nbsp;(41) 3321-1327</div>
       <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;SP&nbsp;&nbsp;&nbsp;(11) 3614-8169</div>
            <div class="telephone1"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;RJ&nbsp;&nbsp;&nbsp;(21) 4042-3056</div>
           <div class="telephone"><img src="images/telephone5.png" alt="Telefone de Contato" style="width: 16px;">&nbsp;&nbsp;&nbsp;Porto Alegre&nbsp;&nbsp;&nbsp;(51) 3338-1111</div>
             </section>
    </header>

                <div class="menu">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="Logotipo"></a>
                    </div>
                    <div class="buttons">
                        <div class="navbutton">
                            <p><a href="index.php">Inicial</a>
                            </p>
                        </div>
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
<div class="navbutton" id="orcb" style="background-color:#ffc100;font-weight:700;border-bottom:4px solid #ffc100;">
	                            <p><a href="orcamento.php" style="color:#FFFFFF !important;">Orçamento</a>
	                            </p>
	                        </div>
                        <div class="navbutton">
                            <p><a href="empresa.html">Empresa</a>
                            </p>
                        </div>
                    </div>


                    <div class="dropdown-menu">
                        <ul class="menu2">
                         <li style="width:195px;text-align:center;height:70px;padding-top:24px;font-weight:700;font-family:'Source Sans Pro', sans-serif;background:#F4BF20;"> Menu
                                <a href="#"></a>
                                <ul style="margin-top:39px;z-index:20;">
                                    <li>
                                        <p><a href="index.php">Inicial</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><a href="servicos.html">Serviços</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><a href="contato.html">Contato</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><a href="frota.html">Frota</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><a href="orcamento.php">Orçamento</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p><a href="empresa.html">Empresa</a>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown-menu2">
                    <ul class="menu2">
                        <li style="width:100%;text-align:center;height:70px;padding-top:24px;font-weight:700;font-family:'Source Sans Pro', sans-serif;background:#F4BF20;"> Menu
                            <a href="#"></a>
                            <ul style="margin-top:39px;z-index:20;">
                                <li>
                                    <p><a href="index.php">Inicial</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="servicos.html">Serviços</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="contato.html">Contato</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="frota.html">Frota</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="orcamento.php">Orçamento</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="empresa.html">Empresa</a>
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>

         </nav>
      </section>


      <div class="clear"></div>

  </div>
      <form action="enviaorc.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" name="contato" id="contato" class="form">
<div class="orcamentopart1">

<div class="personal">
<i class="fa fa-user fa-x2"></i> Informações Pessoais
</div>

<p style="font-size:14px;margin-top:8px;"> Atenção: os campos com * são de preenchimento obrigatório. </p>

<p>
<div class="input__line" style="margin-top: 12px;">
<div class="input__text">
Seu nome:</div>
<input id="solicitante" size="40" name="solicitante" placeholder="Seu Nome">
</div>

<p>
<div class="input__line">
<div class="input__text">
Email:</div>
<input size="40" name="email" placeholder="Email">
</div>

<p>
<div class="input__line">
<div class="input__text">
Empresa:
</div>
<input size="40" name="empresa" placeholder="Empresa">
</div>

<div class="input__line">
<div class="input__text">
Celular:
</div>
<input id="fone_celular" size="20" name="fone_celular" style="width: 277px;" placeholder="Empresa">
</div>

<div class="input__line" style="float:left;  width: 600px;  margin-left: 150px;">
<div class="input__text">
Fone Resid.:
</div>
<input id="fone_residencial" size="20" name="fone_residencial" placeholder="Fone Residencial">

<div class="input__text" style="line-height: 20px;margin-top: 10px;">
Fone Comercial:
</div>
<input id="fone_comercial" size="20" name="fone_comercial" placeholder="Fone Comercial">
</div>

</div>


<div class="orcamentopart2" style="margin-top:30px;  height: 790px;">
<div class="personal" style="margin-bottom:2px;">
<i class="fa fa-truck fa-x2"></i> Informações da Mudança
</div>

<div class="input__line" style="  width: 580px;height:50px;margin-bottom:10px;">
    <p> Uso de guarda móveis &nbsp;&nbsp; 

    <input value=Sim type=radio name=guardamoveis> Sim
                   <input value=Não checked 
                        type="radio" name="guardamoveis" >
                   Não &nbsp;&nbsp;&nbsp;&nbsp;
                   <p>
</div>

<div class="orcamentopart2-1">
<div class="personal1">Origem</div>
<div class="input__line" style="margin-top: 12px;">
<div class="input__text">
Cidade:
</div>
<input size=24 name=ocidade class="inputs1">*
                                 <label 
                                for=select></label>
</div>

<p>
<div class="input__line">
<div class="input__text">
Estado:
</div>
<select style="WIDTH: 175px" class="inputs2" id=oestado name="oestado" placeholder="">
                                 <option selected value=n></option>
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
                               </select>
</div>

<br><br>
<div class="input__line" style="margin-top: -26px;  height: 90px;">
<div class="input__text">
Endereço:
</div>
<textarea style="WIDTH: 175px" id="end_origem" rows="3" name="end_origem"></textarea>
</div>

<br>
<div class="input__line">
<div class="input__text">
Bairro:
</div>
<input id="obairro" size="24" name="obairro" class="inputs1">
</div>

<br>
<div class="input__line">
<div class="input__text" style="  line-height: 18px;margin-top:15px;">
Data da Coleta:
</div>
<input id="data_carga" size="24" name="data_carga" class="inputs1">
</div>

<br>
<div class="input__line" style="  height: 40px;">
<div class="input__text" style="  height: 40px;">
Elevador: 
</div>
<div class="select" style="  height: 40px;">
<input value=Sim type=radio name="o_elevador"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value=Não checked type=radio name="o_elevador"> Não
</div>
</div>

<br>
<div class="input__line" style="  height: 40px;margin-bottom:25px;">
<div class="input__text" style="  height: 40px;">
Escada:
</div>
<div class="select" style="  height: 40px;">
<input value="Sim" type="radio" name="o_escada"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value="Não" checked type="radio" name="o_escada"> Não
</div>
</div>
<p style="font-size:14px;margin-top:8px;width: 190px;margin: 0 auto;}"> * em caso positivo será cobrada uma taxa adicional. </p>

</div>

<!-- Destino -->

<div class="orcamentopart2-1">
<div class="personal1">Destino</div>

<div class="input__line" style="margin-top: 12px;">
<div class="input__text">
Cidade:
</div>
<input id="dcidade" size="23" name="dcidade" class="inputs1">*
                                 <label 
                                for=select></label>
</div>

<p>
<div class="input__line">
<div class="input__text">
Estado:
</div>
<select style="WIDTH: 175px" class="inputs2" id=destado name="destado" placeholder="">
                                 <option selected value=n></option>
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
                               </select>
</div>

<br><br>
<div class="input__line" style="margin-top: -26px;  height: 90px;">
<div class="input__text">
Endereço:
</div>
<textarea style="WIDTH: 175px" id="end_destino" rows="3" name="end_destino"></textarea>
</div>

<br>
<div class="input__line">
<div class="input__text">
Bairro:
</div>
<input id="dbairro" size="24" name="dbairro" class="inputs1">
</div>

<br>
<div class="input__line">
<div class="input__text" style="  line-height: 18px;margin-top:15px;">
Data de Entrega:
</div>
<input id="data_decarga" size="24" name="data_descarga" class="inputs1">
</div>

<br>
<div class="input__line" style="  height: 40px;">
<div class="input__text" style="  height: 40px;">
Elevador: 
</div>
<div class="select" style="  height: 40px;">
<input value=Sim type=radio name="d_elev"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value=Não checked type=radio name="d_elev"> Não
</div>
</div>

<br>
<div class="input__line" style="  height: 40px;margin-bottom:25px;">
<div class="input__text" style="  height: 40px;">
Escada:
</div>
<div class="select" style="  height: 40px;">
<input value="Sim" type="radio" name="d_esc"> Sim
&nbsp;&nbsp;&nbsp;&nbsp;
<input value="Não" checked type="radio" name="d_esc"> Não
</div>
</div>

<p style="font-size:14px;margin-top:8px;width: 190px;margin: 0 auto;}"> * em caso positivo será cobrada uma taxa adicional. </p>

</div>

</div><!-- inputs -->

<?php echo "<h2>".$msg_erro."</h2>";?></div>

<!-- _______________________________________________________  -->
<br><br><br>
<div class="tableroom">


<div id="tabs">
    <ul>
      <li><a href="#tabs-1" title="">Cozinha</a></li>
      <li><a href="#tabs-2" title="">Sala de Estar</a></li>
      <li><a href="#tabs-3" title="">Sala de Jantar</a></li>
      <li><a href="#tabs-4" title="">Escritório</a></li>
      <li><a href="#tabs-5" title="">Dormitório de Casal</a></li>
      <li><a href="#tabs-6" title="">Dormitório de Solteiro</a></li>
      <li><a href="#tabs-7" title="">Dormitório de Solteiro 2</a></li>
      <li><a href="#tabs-8" title="">Diversos</a></li>
    </ul>

    <div id="tabs_container" style="height:900px !important;">
      



    <div id="tabs-1">
          <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p><p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>

    <div id="tabs-2">
          <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
  
    </div>

    <div id="tabs-3">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>

    <div id="tabs-4">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>

    <div id="tabs-5">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>

    <div id="tabs-6">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>

    <div id="tabs-7">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>

    <div id="tabs-8">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
    </div>



        </div><!--End tabs container-->
    
  </div><!--End tabs-->
</div>
<br><br><br>
 <table border="0" cellspacing="2" cellpadding="0" width="100%" bgcolor="f7f7f7" align="center">
        <tbody>
          <tr>
            <td bgcolor=#ffffff><table border="0" cellspacing="2" cellpadding="0" width="100%" bgcolor="f7f7f7" align="center">
              <tbody>
                <tr align=middle bgcolor=#cc3300>
                  <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>COZINHA</th>
                </tr>
                <tr class=titorcamento1 bgcolor=#cc3300>
                  <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                  <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                  <td class=titorcamento1 bgcolor=#e9e9e9 width="18%">Item</td>
                  <td width="18%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                  <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                  <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Alto 1 porta </td>
                  <td width="16%" bgcolor=#ffffff><input id=q0 onkeyup=soma(0,0.6) 
                        size=4 name=q0 />
                    <input style="COLOR: #000000" id=t0 class=tot readonly size=4 type="hidden" name=t0 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Balcão 3 portas </td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(12,1.5) size=4 
                        name=q12 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t12 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Forno Elétrico</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(24,0.3) size=4 
                        name=q24 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t24 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Alto 2 portas</td>
                  <td width="16%" bgcolor=#ffffff><input id=q1 onkeyup=soma(1,1.3) 
                        size=4 name=q1 />
                    <input style="COLOR: #000000" id=t1 
                        class=tot readonly size=4 type="hidden" name=t1 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Balcão 4 portas </td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(13,2.0) size=4 
                        name=q13 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t13 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Freezer Grande</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(25,1.5) size=4 
                        name=q25 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t25 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Alto 3 portas</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(2,2.0) size=4 
                        name=q2 />
                    <input style="COLOR: #000000" id=t2 
                        class=tot readonly size=4 type="hidden" name=t2 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Banquinhos</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(14,0.2) size=4 
                        name=q14 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t14 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Freezer Pequeno</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(26,1.2) size=4 
                        name=q26 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t26 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Alto 4 portas</td>
                  <td width="16%" bgcolor=#ffffff><input id=q3 onkeyup=soma(3,2.4) 
                        size=4 name=q3 />
                    <input style="COLOR: #000000" id=t3 
                        class=tot readonly size=4 type="hidden" name=t3 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Bebedouro</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(15,0.3) size=4 
                        name=q15 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t15 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Frigobar</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(27,0.6) size=4 
                        name=q27 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t27 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Aéreo de canto</td>
                  <td width="16%" bgcolor=#ffffff><input id=q4 onkeyup=soma(4,0.4) 
                        size=4 name=q4 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t4 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Botijão Água</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(16,0.2) size=4 name=q16 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t16 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Geladeira Média</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(28,1.5) size=4 
                        name=q28 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t28 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Aéreo 1 porta</td>
                  <td width="16%" bgcolor=#ffffff><input id=q5 onkeyup=soma(5,0.4) 
                        size=4 name=q5 />
                    <input style="COLOR: #000000" id=t5 
                        class=tot readonly size=4 type="hidden" name=t5 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Botijão de Gás Vazio</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(17,0.2) size=4 
                        name=q17 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t17 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Geladeira Grande</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(29,2.0) size=4 
                        name=q29 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t29 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Aéreo 2 portas</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(6,0.6) size=4 
                        name=q6 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t6 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Cadeira Simples</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(18,0.2) size=4 
                        name=q18 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t18 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Máquina Lavar Louça (pq)</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(30,0.5) size=4 
                        name=q30 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t30 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Aéreo 3 portas</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(7,0.8) size=4 
                        name=q7 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t7 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Cadeira de Criança</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(19,0.2) size=4 
                        name=q19 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t19 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Máquina Lavar Louça (gr)</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(31,1.0) size=4 
                        name=q31 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t31 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Arm. Aéreo 4 portas</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(8,1.0) size=4 
                        name=q8 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t8 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Exaustor</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(20,0.1) size=4 
                        name=q20 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t20 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Mesa pequena</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(32,0.5) size=4 
                        name=q32 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t32 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Balcão de Canto</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(9,0.8) size=4 
                        name=q9 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t9 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Fogão a Gás 6 a.</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(21,0.7) size=4 
                        name=q21 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 name=t21 type="hidden" /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Mesa grande</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(33,0.7) size=4 
                        name=q33 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t33 /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Balcão 1 porta</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(10,0.5) size=4 
                        name=q10 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t10 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Fogão a Gás 4 a.</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(22,0.5) size=4 
                        name=q22 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 name=t22 type="hidden" /></td>
                </tr>
                <tr>
                  <td width="16%" align="right" bgcolor=#ffffff><b></b>Balcão 2 portas </td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(11,1.0) size=4 
                        name=q11 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t11 /></td>
                  <td width="16%" align="right" bgcolor=#ffffff> Microondas</td>
                  <td width="16%" bgcolor=#ffffff><input onkeyup=soma(23,0.2) size=4 
                        name=q23 />
                    <input style="COLOR: #000000" 
                        class=tot readonly size=4 name=t23 type="hidden" /></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" 
                  bgcolor="f7f7f7">
        <tbody>
          <tr>
            <td bgcolor=#ffffff align=left><table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" 
                  bgcolor="f7f7f7">
              <tbody>
              <tr>
                <td bgcolor=#ffffff align=left><table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" 
                  bgcolor="f7f7f7">
                  <tbody>
                  <tr>
                    <td bgcolor=#ffffff align=left><table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" 
                  bgcolor="f7f7f7">
                      <tbody>
                        <tr align=middle bgcolor=#cc3300>
                          <th height="40" colspan=6 bgcolor=#CCCCCC>SALA DE ESTAR</th>
                        </tr>
                        <tr bgcolor=#cc3300>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="18%">Item</td>
                          <td width="18%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Abajour</td>
                          <td width="16%" align=left bgcolor=#ffffff>
                            <input onkeyup=soma(34,0.2) maxlength=3 size=4 name=q34 />
                            <input style="COLOR: #000000" class=tot readonly size=4 type="hidden" name=t34 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Almofadões</td>
                          <td width="16%" align=left bgcolor=#ffffff>
                            <input onkeyup=soma(35,0.1) maxlength=3 size=4 name=q35 />
                            <input style="COLOR: #000000" class=tot readonly size=4 type="hidden" name=t35 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Aparadores</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(36,0.2) 
                        maxlength=3 size=4 name=q36 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t36 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Banqueta</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(37,0.1) 
                        maxlength=3 size=4 name=q37 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t37 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Bar</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(38,1.0) 
                        maxlength=3 size=4 name=q38 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t38 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Biombo</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(40,0.2) 
                        maxlength=3 size=4 name=q40 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t40 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Cadeira Braço</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(42,0.3) size=4 
                        name=q42 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t42 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Cadeira Balanço</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(43,0.5) size=4 
                        name=q43 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t43 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Cadeira do Papai</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(44,0.5) size=4 
                        name=q44 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t44 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Cadeira Simples</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(45,0.2) size=4 
                        name=q45 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t45 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Carrinho de Chá</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(46,0.3) size=4 
                        name=q46 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t46 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Console ou Rack</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(47,0.5) size=4 
                        name=q47 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t47 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Estante Pequena</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(48,1.0) size=4 
                        name=q48 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t48 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Estante Média</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(49,1.5) size=4 
                        name=q49 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t49 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Estante Grande</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(50,2.0) size=4 
                        name=q50 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t50 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Lustre</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(51,0.3) size=4 
                        name=q51 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t51 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Mesa de Centro</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(52,0.3) size=4 
                        name=q52 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t52 /></td>
                          <td width="16%" align="right" bgcolor=#ffffff> Mesa Lateral</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(53,0.2) size=4 
                        name=q53 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t53 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Mesa de TV</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(54,0.3) size=4 
                        name=q54 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t54 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Mesa Telefone</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(55,0.3) size=4 
                        name=q55 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t55 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Multiuso</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(56,0.3) size=4 
                        name=q56 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t56 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Piano de Armário</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(57,2.0) size=4 
                        name=q57 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t57 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Piano de Cauda</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(58,3.0) size=4 
                        name=q58 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t58 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Poltrona Grande</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(59,1.0) size=4 
                        name=q59 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t59 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Poltrona Pequena</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(60,0.7) size=4 
                        name=q60 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t60 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Sofá 2 Lugares Grande</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(61,1.5) size=4 
                        name=q61 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t61 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Sofá 2 Lugares Pequeno</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(62,1.0) size=4 
                        name=q62 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t62 /></td>
                        </tr>
                        <tr>
                          <td width="16%" align="right" bgcolor=#ffffff> Sofá 3 Lugares Grande</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(63,2.0) size=4 
                        name=q63 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t63 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Sofá 3 Lugares Pequeno</td>
                          <td width="16%" align=left bgcolor=#ffffff><input onkeyup=soma(64,1.5) size=4 
                        name=q64 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t64 /></td>
                        <td width="16%" height=22 align="right" bgcolor=#ffffff> Sofá 4 Lugares Grande</td>
                          <td width="16%" height=22 align=left bgcolor=#ffffff><input onkeyup=soma(65,2.4) size=4 
                        name=q65 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t65 /></td>
                        </tr>
                        <tr>
                          <td width="16%" height=22 align="right" bgcolor=#ffffff> Sofá 4 Lugares Pequeno</td>
                          <td width="16%" height=22 align=left bgcolor=#ffffff><input onkeyup=soma(66,1.8) size=4 
                        name=q66 />
                            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t66 /></td>
                        </tr>
                      </tbody>
                    </table></td>
                  </tr>
                  </tbody>
                </table></td>
              </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
        </table>
        <table width="100%" border=0 align="center" cellpadding=0 cellspacing=2 
                  bgcolor=#f7f7f7>
  <tbody>
    <tr align=middle bgcolor=#000099>
      <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>SALA DE 
        JANTAR</th>
    </tr>
    <tr class=titorcamento1 bgcolor=#cc3300>
      <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="18%">Item</td>
                          <td width="18%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
      </tr>
    <tr>
      <td width="16%"  align="right" bgcolor=#ffffff>
        Balcão Oratório Grande</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(67,2.0) size=4 
                        name=q67>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t67 /></td>
                        <td width="16%"  align="right" bgcolor=#ffffff>
        Balcão Simples</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(68,1.5) size=4 
                        name=q68>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t68 /></td>
                        <td width="16%"  align="right" bgcolor=#ffffff>
        Cadeira Simples</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(69,0.2) size=4 
                        name=q69>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t69 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Cristaleira</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(70,0.8) size=4 
                        name=q70>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t70 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Lustre</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(71,0.3) size=4 
                        name=q71>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t71 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Mesa de Jantar Peq.</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(72,1.0) size=4 
                        name=q72>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t72 /></td>
      </tr>
    <tr>
      <td width="16%"  align="right" bgcolor=#ffffff>
        Mesa de Jantar Grd.</td>
      <td width="16%" align=left bgcolor=#ffffff><input onKeyUp=soma(73,1.5) size=4 
                        name=q73>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t73 /></td>
      </tr>
  </tbody>
</table>
<table width="100%" border=0 align="center" cellpadding=0 cellspacing=2 
                  bgcolor=#f7f7f7>
  <tbody>
    <tr align=middle bgcolor=#000099>
      <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>ESCRITÓRIO</th>
    </tr>
    <tr class=titorcamento1 bgcolor=#cc3300>
      <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
                          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
                          <td width="20%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Arquivo</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(74,0.5) size=4 
                        name=q74>
        <input style="COLOR: #000000" id=t74 
                        class=tot readonly size=4 type="hidden" name=t74 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Armário de Aço </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(75,1.0) size=4 
                        name=q75>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t75 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cadeira Giratória </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(76,0.2) size=4 
                        name=q76>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t76 /></td>
      </tr>
    <tr>
      <td width="16%" height=23 align="right" bgcolor=#ffffff>
        Cadeira Simples</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(77,0.2) size=4 
                        name=q77>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t77 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cofre
        <input id=cofre size=5 name=cofre>
        kg</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(78,0.5) size=4 
                        name=q78>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t78 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Computador</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(79,0.3) size=4 
                        name=q79>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t79 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Escrivaninha</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(80,0.5) size=4 
                        name=q80>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t80 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Equip. Dentário</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(81,1.0) size=4 
                        name=q81>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t81 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Impressora</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(82,0.3) size=4 
                        name=q82>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t82 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Máquina de Escrever </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(83,0.2) size=4 
                        name=q83>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t83 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Mesa de Reunião </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(84,1.0) size=4 
                        name=q84>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t84 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Retroprojetor </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(85,0.2) size=4 
                        name=q85>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t85 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Sofá</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(86,1.5) size=4 
                        name=q86>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t86 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Scanner</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(87,0.2) size=4 
                        name=q87>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t87 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Telefones / Fax </td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(88,0.1) size=4 
                        name=q88>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t88 /></td>
      </tr>
  </tbody>
</table>
<table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
<tbody>
  <tr>
    <td bgcolor=#ffffff width="50%" align=left><table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
      <tbody>
        <tr align=middle bgcolor=#cc3300>
          <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>DORMITÓRIO DE CASAL</th>
        </tr>
        <tr class=titorcamento1 bgcolor=#cc3300>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="20%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Baú</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(89,0.4) size=4 
                        name=q89 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t89 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Bicama</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(90,1.6) size=4 
                        name=q90 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t90 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Bicama</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(90,1.6) size=4 
                        name=q90 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t90 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Cabideiro</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(91,0.2) size=4 
                        name=q91 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t91 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Cadeira Simples</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(92,0.2) size=4 
                        name=q92 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t92 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Cama Box </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(93,1.7) size=4 
                        name=q93 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t93 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Cama de Criança</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(94,0.5) size=4 
                        name=q94 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t94 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Cama Comum </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(95,0.8) size=4 
                        name=q95 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t95 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Carro de Bebê</td>
      <td bgcolor=#ffffff width="16%" align=left><input onKeyUp=soma(97,0.3) size=4 
                        name=q97>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t97 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Cesto de Roupas</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(98,0.2) size=4 
                        name=q98 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t98 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Colchão de Casal</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(99,0.5) size=4 
                        name=q99 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t99 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Cômoda</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(101,0.8) size=4 
                        name=q101 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t101 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Lustre</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(102,0.3) size=4 
                        name=q102 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t102 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Malas</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(103,0.2) size=4 
                        name=q103 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t103 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Mesa de Cabeceira</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(104,0.5) size=4 
                        name=q104 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t104 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Pentiadeira</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(105,1.0) size=4 
                        name=q105 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t105 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 2P </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(106,1.5) size=4 
                        name=q106 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t106 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 3P </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(109,2.0) size=4 
                        name=q109 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t109 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 4P </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(112,1.3) size=4 
                        name=q112 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t112 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 5P </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(114,1.8) size=4 
                        name=q114 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t114 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 6P </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(115,2.5) size=4 
                        name=q115 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t115 /></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
</tbody>
</table>
<table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
<tbody>
  <tr>
    <td bgcolor=#ffffff width="50%" align=left><table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
      <tbody>
      <tr>
        <td width="50%" align="right" bgcolor=#ffffff><table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
          <tbody>
            <tr align=middle bgcolor=#cc3300>
              <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>DORMITÓRIO DE SOLTEIRO (1)</th>
            </tr>
            <tr class=titorcamento1 bgcolor=#cc3300>
              <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
              <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
              <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="20%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff> Baú</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q201 onkeyup=soma(201,0.4) 
                        size=4 name=q201 />
                <input style="COLOR: #000000" id=t201 
                        class=tot readonly size=4 type="hidden" name=t201 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Bicama</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q202 onkeyup=soma(202,1.6) 
                        size=4 name=q202 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t202 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Cabideiro</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q203 onkeyup=soma(203,0.2) 
                        size=4 name=q203 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t203 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff> Cadeira Simples</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q204 onkeyup=soma(204,0.2) 
                        size=4 name=q204 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t204 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Cama Box </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q205 onkeyup=soma(205,1.7) 
                        size=4 name=q205 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t205 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Cama de Criança</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q206 onkeyup=soma(206,0.5) 
                        size=4 name=q206 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t206 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff> Cama Comum </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q207 onkeyup=soma(207,0.8) 
                        size=4 name=q207 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t207 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Carro de Bebê</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q208 onkeyup=soma(208,0.3) 
                        size=4 name=q208 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t208 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Cesto de Roupas</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q209 onkeyup=soma(209,0.2) 
                        size=4 name=q209 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t209 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff> Colchão de Solteiro </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q210 onkeyup=soma(210,0.5) 
                        size=4 name=q210 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t210 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Cômoda</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q211 onkeyup=soma(211,0.8) 
                        size=4 name=q211 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t211 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Lustre</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q212 onkeyup=soma(212,0.3) 
                        size=4 name=q212 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t212 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff> Malas</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q213 onkeyup=soma(213,0.2) 
                        size=4 name=q213 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t213 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Mesa de Cabeceira</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q214 onkeyup=soma(214,0.5) 
                        size=4 name=q214 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t214 /></td>
              <td width="16%" align="right" bgcolor=#ffffff> Pentiadeira</td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q215 onkeyup=soma(215,1.0) 
                        size=4 name=q215 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t215 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 2P </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q216 onkeyup=soma(216,1.5) 
                        size=4 name=q216 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t216 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 3P </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q217 onkeyup=soma(217,2.0) 
                        size=4 name=q217 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t217 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 4P </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q218 onkeyup=soma(218,1.3) 
                        size=4 name=q218 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t218 /></td>
            </tr>
            <tr>
              <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 5P </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q219 onkeyup=soma(219,1.8) 
                        size=4 name=q219 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t219 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Roup. 6P </td>
              <td bgcolor=#ffffff width="16%" align=left><input id=q220 onkeyup=soma(220,2.5) 
                        size=4 name=q220 />
                <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t220 /></td>
            </tr>
            <tr>
              
            </tr>
          </tbody>
        </table></td>
      </tr>
      </tbody>
    </table></td>
  </tr>
</tbody>
</table>
<table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
  <tbody>
    <tr align=middle bgcolor=#cc3300>
      <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>DORMITÓRIO DE SOLTEIRO (2)</th>
    </tr>
    <tr class=titorcamento1 bgcolor=#cc3300>
      <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
              <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
              <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
              <td width="20%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Baú</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q221 onKeyUp=soma(221,0.4) 
                        size=4 name=q221>
        <input style="COLOR: #000000" id=t221 
                        class=tot readonly size=4 type="hidden" name=t221 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Bicama</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q222 onKeyUp=soma(222,1.6) 
                        size=4 name=q222>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t222 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cabideiro</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q223 onKeyUp=soma(223,0.2) 
                        size=4 name=q223>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t223 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Cadeira Simples</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q224 onKeyUp=soma(224,0.2) 
                        size=4 name=q224>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t224 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cama Box </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q225 onKeyUp=soma(225,1.7) 
                        size=4 name=q225>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t225 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cama de Criança</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q226 onKeyUp=soma(226,0.5) 
                        size=4 name=q226>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t226 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Cama Comum </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q227 onKeyUp=soma(227,0.8) 
                        size=4 name=q227>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t227 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Carro de Bebê</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q228 onKeyUp=soma(228,0.3) 
                        size=4 name=q228>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t228 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cesto de Roupas</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q229 onKeyUp=soma(229,0.2) 
                        size=4 name=q229>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t229 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Colchão de Solteiro </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q230 onKeyUp=soma(230,0.5) 
                        size=4 name=q230>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t230 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Cômoda</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q231 onKeyUp=soma(231,0.8) 
                        size=4 name=q231>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t231 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Lustre</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q232 onKeyUp=soma(232,0.3) 
                        size=4 name=q232>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t232 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        Malas</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q233 onKeyUp=soma(233,0.2) 
                        size=4 name=q233>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t233 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Mesa de Cabeceira</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q234 onKeyUp=soma(234,0.5) 
                        size=4 name=q234>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t234 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        Pentiadeira</td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q235 onKeyUp=soma(235,1.0) 
                        size=4 name=q235>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t235 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        <b></b>Roup. 2P </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q236 onKeyUp=soma(236,1.5) 
                        size=4 name=q236>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t236 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        <b></b>Roup. 3P </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q237 onKeyUp=soma(237,2.0) 
                        size=4 name=q237>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t237 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        <b></b>Roup. 4P </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q238 onKeyUp=soma(238,1.3) 
                        size=4 name=q238>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t238 /></td>
      </tr>
    <tr>
      <td width="16%" align="right" bgcolor=#ffffff>
        <b></b>Roup. 5P </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q239 onKeyUp=soma(239,1.8) 
                        size=4 name=q239>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t239 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff>
        <b></b>Roup. 6P </td>
      <td bgcolor=#ffffff width="16%" align=left><input id=q240 onKeyUp=soma(240,2.5) 
                        size=4 name=q240>
        <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t240 /></td>
      </tr>
    <tr>
      
      </tr>
  </tbody>
</table>
<table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
<tbody>
  <tr>
    <td bgcolor=#ffffff width="50%" align=left><table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
      <tbody>
        <tr align=middle bgcolor=#cc3300>
          <th height="40" colspan=6 bgcolor=#CCCCCC class=titorcamento>DIVERSOS</th>
        </tr>
        <tr class=titorcamento1 bgcolor=#cc3300>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="16%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
          <td class=titorcamento1 bgcolor=#e9e9e9 width="16%">Item</td>
          <td width="20%" bgcolor=#e9e9e9 class=titorcamento1>Quant. Itens</td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Antena Parabólica Grande</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(118,1.0) size=4 
                        name=q118 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t118 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Antena Parabólica Pequena</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(119,0.4) size=4 
                        name=q119 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t119 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Ap. de Ginástica</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(120,0.7) size=4 
                        name=q120 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t120 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Ap. de Som</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(121,0.4) size=4 
                        name=q121 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t121 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Aquecedor</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(122,0.1) size=4 
                        name=q122 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t122 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Aspirador de Pó</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(123,0.3) size=4 
                        name=q123 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t123 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Bicicleta Grande</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(124,0.7) size=4 
                        name=q124 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t124 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Bicicleta Pequena</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(125,0.4) size=4 
                        name=q125 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t125 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Caixas com Bebidas </td>
          <td width="16%" align=left bgcolor=#ffffff><input id=q153 onkeyup=soma(153,0.2) 
                        size=4 name=q153 />
            <input style="COLOR: #000000" id=t153 
                        class=tot readonly size=4 type="hidden" name=t153 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Caixas com Livros </td>
          <td width="16%" align=left bgcolor=#ffffff><input id=q154 onkeyup=soma(154,0.2) 
                        size=4 name=q154 />
            <input style="COLOR: #000000" id=t154 
                        class=tot readonly size=4 type="hidden" name=t154 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Caixas com Roupas </td>
          <td width="16%" align=left bgcolor=#ffffff><input id=q156 onkeyup=soma(156,0.2) 
                        size=4 name=q156 />
            <input style="COLOR: #000000" id=t156 
                        class=tot readonly size=4 type="hidden" name=t156 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Churrasqueira</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(126,0.3) size=4 
                        name=q126 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t126 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Condicionador-de-ar Grande</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(127,0.4) size=4 
                        name=q127 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t127 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Condicionador-de-ar Pequeno</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(128,0.3) size=4 
                        name=q128 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t128 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Circulador de Ar</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(129,0.2) size=4 
                        name=q129 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t129 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> DVD</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(130,0.2) size=4 
                        name=q130 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t130 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Enceradeira</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(131,0.2) size=4 
                        name=q131 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t131 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Engradados</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(132,0.2) size=4 
                        name=q132 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t132 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Escada</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(133,0.2) size=4 
                        name=q133 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t133 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Esteira</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(134,0.5) size=4 
                        name=q134 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t134 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Filmadora</td>
          <td width="16%" align=left bgcolor=#ffffff><input id=q157 onkeyup=soma(157,0.1) 
                        size=4 name=q157 />
            <input style="COLOR: #000000" id=t157 
                        class=tot readonly size=4 type="hidden" name=t157 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Filtro</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(135,0.2) size=4 
                        name=q135 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t135 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Máq Costura</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(136,0.2) size=4 
                        name=q136 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t136 /></td>
          <td width="16%" align="right" bgcolor=#ffffff> Moto</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(137,3.0) size=4 
                        name=q137 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t137 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Lavadora de Roupa até 
            8kg</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(138,1.0) size=4 
                        name=q138 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t138 /></td>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Lavadora de Roupa até 
            5kg</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(139,0.7) size=4 
                        name=q139 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t139 /></td>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Secadora de Roupa grande</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(140,0.8) size=4 
                        name=q140 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t140 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Secadora de Roupa 
            pequena</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(141,0.3) size=4 
                        name=q141 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t141 /></td>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Tábua de Passar</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(142,0.2) size=4 
                        name=q142 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t142 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Tapete (gr)</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(143,0.3) size=4 
                        name=q143 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t143 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Tapete (pq)</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(144,0.2) size=4 
                        name=q144 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t144 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Teclado </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(145,0.2) size=4 
                        name=q145 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t145 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Televisão até 20" </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(146,0.3) size=4 
                        name=q146 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t146 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff><b></b>Televisão de 29 a 40" </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(147,1.0) size=4 
                        name=q147 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t147 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Televisão acima de 40" </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(148,1.5) size=4 
                        name=q148 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t148 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff> Ventilador</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(149,0.2) size=4 
                        name=q149 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t149 /></td>
        </tr>
        <tr>
          <td width="16%" align="right" bgcolor=#ffffff> Video-Cassete</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(150,0.2) size=4 
                        name=q150 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t150 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Vídeo Game </td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(151,0.2) size=4 
                        name=q151 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t151 /></td>
                        <td width="16%" align="right" bgcolor=#ffffff><b></b>Violão</td>
          <td bgcolor=#ffffff width="16%" align=left><input onkeyup=soma(152,0.2) size=4 
                        name=q152 />
            <input style="COLOR: #000000" 
                        class=tot readonly size=4 type="hidden" name=t152 /></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
</tbody>
</table>
<table width="100%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
             <tbody>
               <tr align=middle bgcolor=#000099>
                 <th height="40" colspan=2 bgcolor=#CCCCCC class=titorcamento>SEGURO</th>
               </tr>
               <tr>
                 <td width="50%" align="right" bgcolor=#ffffff>Qual o valor de seguro pretendido para 
                   sua mudança? R$</td>
                 <td bgcolor=#ffffff width="50%" align=left>
                   <input id=seg1 size=12 name=seg1>
                </td>
               </tr>
               <tr>
                 <td width="50%" align="right" bgcolor=#ffffff>Moto R$(se for transportado no
                   caminhão)</td>
                 <td bgcolor=#ffffff width="50%" align=left>
                   <input id=seg2 size=12 name=seg2>
                 </td>
               </tr>
               <tr>
                 <td align="right" bgcolor=#ffffff>Carro R$ (se for transportado no 
                   caminhão)</td>
                 <td bgcolor=#ffffff align=left>
                   <input id=seg3 size=12 name=seg3>
                 </td>
               </tr>
               <tr align=middle>
                 <td bgcolor=#e9e9e9 colspan=2><div align=left><strong>&nbsp;&nbsp;» 
                   Observações</strong></div></td>
               </tr>
               <tr align=middle>
                 <td colspan=2 align="center" bgcolor=#ffffff>
                   <textarea name=obs cols=80 rows="6" wrap=virtual id=obs></textarea>
                 </td>
               </tr>
             </tbody>
           </table>
        <table width="80%" border=0 align="center" 
                  cellpadding=0 cellspacing=2 bordercolor=#ffffff bgcolor=#f7f7f7>
             <tbody>
               <tr align=middle bgcolor=#cc3300>
                 <td width="100%" bgcolor=#CCCCCC><div align=left><span 
                        class="titorcamento style2"><strong>ENCAIXOTAMENTO</strong></span><span 
                        class=style2><strong><br>
                   Descreva abaixo o que precisa ser encaixotado. </strong>Por ex.: garrafas, cristais, bebidas, etc.</span></div></td>
               </tr>
             </tbody>
           </table>
           <table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
             <tbody>
               <tr>
                 <td width="723" height="120" align="center" bgcolor=#ffffff>
                   <textarea rows=6 cols=80 type="hidden" name=textarea></textarea>
                </td>
               </tr>
             </tbody>
           </table>
           <div align="center" style="height:50px;padding-top:25px">
        <input type="submit" name="enviar" id="enviar" value="Enviar Orçamento" class="bt" style="cursor:pointer" /></div>
      </form>



      </div>
      <span class="titulo"><img src="images/orcamento_mudancas_aguia_tit.png" alt="" width="977" height="70" /></span>
      <div class="clear"></div>
  </div>

<div id="footer_bot">
  <div id="footer_top">
    <div id="column1">
      <p><a href="empresa.html"><img src="images/aguia_dourada_tit.png" alt="Águia Dourada" width="122" height="30" /></a></p>
       width="100%" border="0" cellspacing="0" cellpadding="0">
        
          <  align="left" valign="middle"><p class="contato">Somos uma empresa especializada em mudanças, fretes e transporte de cargas, dispondo de frota própria de caminhões. </p>
            <p>&nbsp;</p>
            <p class="contato">Também disponibilizamos aos clientes serviços de embalagem, montagem e desmontagem dos móveis. </p>
          <  width="115" align="left" valign="middle"><img src="images/icone_aguiadourada.jpg" alt="Águia" width="113" height="85" />
        
      
    </div>
    <div id="column1">
      <p><a href="contato.php"><img src="images/contato_mudancas_tit.png" alt="Entre em Contato" width="122" height="30" /></a></p>
       width="90%" border="0" cellspacing="0" cellpadding="0">
        
          <  width="45" height="65" align="left" valign="middle"><img src="images/icone_telefone.jpg" alt="Telefone" width="31" height="37" />
          <  height="65" align="left" valign="middle"><p class="fone">(51) 3381.2753<br />
              (51) 8124.0179<br />
              (51) 8124.0180<br />
            </p>
            <p></p>
        
        
          <  width="45" height="60" align="left" valign="middle"><img src="images/icone_email.jpg" alt="Email" width="31" height="37" />
          <  height="60" align="left" valign="middle" class="contato">aguiadourada.transportes@gmail.com<br />
        
        
          <  width="45" height="50" align="left" valign="middle"><img src="images/icone_mapa.jpg" alt="Localizaçã" width="31" height="37" />
          <  height="50" align="left" valign="middle" class="contato">Rua 19 de Fevereiro, 201- Mário Quintana<br />
            Porto Alegre / RS&nbsp;- CEP: 91270-450
        
      
      <p>&nbsp;</p>
    </div>
    <div id="column1">
      <p><img src="images/orcamento_mudancas_tit.png" alt="Solicite Orçamento" width="122" height="30" /><br />
      </p>
       width="100%" border="0" cellspacing="0" cellpadding="0">
        
          <  width="150" height="150" align="left" valign="middle"><p class="contato"><a href="orcamento.php"><img src="images/orcamento_mudancas_aguia.png" alt="" width="150" height="144" /></a></p>
          <  height="150" align="right" valign="top"><span class="contato">Faça agora mesmo um orçamento online.<br />
            Em poucos segundos você terá uma estimativa do custo da sua mudança ou transporte para qualquer lugar do Brasil.<br />
            <br />
            <a href="orcamento.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image33','','images/avancar_aguia_dourada2.png',1)"><img src="images/avancar_aguia_dourada.png" alt="Orçamento - Avançar" width="108" height="28" border="0" id="Image33" /></a><br />
            </span>
        
      
      <p>&nbsp;</p>
      <p>&nbsp; </p>
    </div>
  </div>
  <div id="footer_assinatura">Copyright 2012. Desenvolvido por <span style="background-color:#888;"> <a href="http://ideiaagenciadigital.com.br" title="Ideia Agência Digital" target="_blank">Ideia Agência Digital</a></span></div>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="js/js.js"></script>
<script src="js/tabulous.js"></script>
<!-- CARROUSEL --> 



</body>
</html>