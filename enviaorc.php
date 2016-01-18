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
    <title>Orçamento Enviado - Águia Dourada Mudanças</title>
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
//		tot = volume * 10 * eval("document.form1."+nomeq+".value");
		tot = volume * 10 * Math.floor(ifis);
//		cal = tot*10;
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
<!-- Favicon -->
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
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
   	  <div style="width:860px !important;margin:auto !important">
      <?php 
$solicitante = $_POST["solicitante"]; 
$empresa = $_POST["empresa"];
$email = $_POST["email"];
$fone_comercial = $_POST["fone_comercial"];
$fone_residencial = $_POST["fone_residencial"]; 
$fone_celular = $_POST["fone_celular"]; 
$guardamoveis = $_POST["guardamoveis"]; 
$tempoguarda = $_POST["tempoguarda"]; 
$ocidade = $_POST["ocidade"]; 
$dcidade = $_POST["dcidade"];
$oestado = $_POST["oestado"];
$destado = $_POST["destado"];
$end_origem = $_POST["end_origem"];
$end_destino = $_POST["end_destino"];
$obairro = $_POST["obairro"];
$dbairro = $_POST["dbairro"];
$data_carga = $_POST["data_carga"];
$data_descarga = $_POST["data_descarga"];
$o_elevador = $_POST["o_elevador"];
$o_escada = $_POST["o_escada"];
$d_elev = $_POST["d_elev"];
$d_esc = $_POST["d_esc"];
$q0 = $_POST["q0"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$q11 = $_POST["q11"];
$q12 = $_POST["q12"];
$q13 = $_POST["q13"];
$q14 = $_POST["q14"];
$q15 = $_POST["q15"];
$q16 = $_POST["q16"];
$q17 = $_POST["q17"];
$q18 = $_POST["q18"];
$q19 = $_POST["q19"];
$q20 = $_POST["q20"];
$q21 = $_POST["q21"];
$q22 = $_POST["q22"];
$q23 = $_POST["q23"];
$q24 = $_POST["q24"];
$q25 = $_POST["q25"];
$q26 = $_POST["q26"];
$q27 = $_POST["q27"];
$q28 = $_POST["q28"];
$q29 = $_POST["q29"];
$q30 = $_POST["q30"];
$q31 = $_POST["q31"];
$q32 = $_POST["q32"];
$q33 = $_POST["q33"];
$q34 = $_POST["q34"];
$q35 = $_POST["q35"];
$q36 = $_POST["q36"];
$q37 = $_POST["q37"];
$q38 = $_POST["q38"];
$q39 = $_POST["q39"];
$q40 = $_POST["q40"];
$q41 = $_POST["q41"];
$q42 = $_POST["q42"];
$q43 = $_POST["q43"];
$q44 = $_POST["q44"];
$q45 = $_POST["q45"];
$q46 = $_POST["q46"];
$q47 = $_POST["q47"];
$q48 = $_POST["q48"];
$q49 = $_POST["q49"];
$q50 = $_POST["q50"];
$q51 = $_POST["q51"];
$q52 = $_POST["q52"];
$q53 = $_POST["q53"];
$q54 = $_POST["q54"];
$q55 = $_POST["q55"];
$q56 = $_POST["q56"];
$q57 = $_POST["q57"];
$q58 = $_POST["q58"];
$q59 = $_POST["q59"];
$q60 = $_POST["q60"];
$q61 = $_POST["q61"];
$q62 = $_POST["q62"];
$q63 = $_POST["q63"];
$q64 = $_POST["q64"];
$q65 = $_POST["q65"];
$q66 = $_POST["q66"];
$q67 = $_POST["q67"];
$q68 = $_POST["q68"];
$q69 = $_POST["q69"];
$q70 = $_POST["q70"];
$q71 = $_POST["q71"];
$q72 = $_POST["q72"];
$q73 = $_POST["q73"];
$q74 = $_POST["q74"];
$q75 = $_POST["q75"];
$q76 = $_POST["q76"];
$q77 = $_POST["q77"];
$q78 = $_POST["q78"];
$q79 = $_POST["q79"];
$q80 = $_POST["q80"];
$q81 = $_POST["q81"];
$q82 = $_POST["q82"];
$q83 = $_POST["q83"];
$q84 = $_POST["q84"];
$q85 = $_POST["q85"];
$q86 = $_POST["q86"];
$q87 = $_POST["q87"];
$q88 = $_POST["q88"];
$q89 = $_POST["q89"];
$q90 = $_POST["q90"];
$q91 = $_POST["q91"];
$q92 = $_POST["q92"];
$q93 = $_POST["q93"];
$q94 = $_POST["q94"];
$q95 = $_POST["q95"];
$q96 = $_POST["q96"];
$q97 = $_POST["q97"];
$q98 = $_POST["q98"];
$q99 = $_POST["q99"];
$q100 = $_POST["q100"];
$q101 = $_POST["q101"];
$q102 = $_POST["q102"];
$q103 = $_POST["q103"];
$q104 = $_POST["q104"];
$q105 = $_POST["q105"];
$q106 = $_POST["q106"];
$q107 = $_POST["q107"];
$q108 = $_POST["q108"];
$q109 = $_POST["q109"];
$q110 = $_POST["q110"];
$q111 = $_POST["q111"];
$q112 = $_POST["q112"];
$q113 = $_POST["q113"];
$q114 = $_POST["q114"];
$q115 = $_POST["q115"];
$q116 = $_POST["q116"];
$q117 = $_POST["q117"];
$q118 = $_POST["q118"];
$q119 = $_POST["q119"];
$q120 = $_POST["q120"];
$q121 = $_POST["q121"];
$q122 = $_POST["q122"];
$q123 = $_POST["q123"];
$q124 = $_POST["q124"];
$q125 = $_POST["q125"];
$q126 = $_POST["q126"];
$q127 = $_POST["q127"];
$q128 = $_POST["q128"];
$q129 = $_POST["q129"];
$q130 = $_POST["q130"];
$q131 = $_POST["q131"];
$q132 = $_POST["q132"];
$q133 = $_POST["q133"];
$q134 = $_POST["q134"];
$q135 = $_POST["q135"];
$q136 = $_POST["q136"];
$q137 = $_POST["q137"];
$q138 = $_POST["q138"];
$q139 = $_POST["q139"];
$q140 = $_POST["q140"];
$q141 = $_POST["q141"];
$q142 = $_POST["q142"];
$q143 = $_POST["q143"];
$q144 = $_POST["q144"];
$q145 = $_POST["q145"];
$q146 = $_POST["q146"];
$q147 = $_POST["q147"];
$q148 = $_POST["q148"];
$q149 = $_POST["q149"];
$q150 = $_POST["q150"];
$q151 = $_POST["q151"];
$q152 = $_POST["q152"];
$q153 = $_POST["q153"];
$q154 = $_POST["q154"];
$q155 = $_POST["q155"];
$q156 = $_POST["q156"];
$q157 = $_POST["q157"];
$q158 = $_POST["q158"];
$q159 = $_POST["q159"];
$q160 = $_POST["q160"];
$q161 = $_POST["q161"];
$q162 = $_POST["q162"];
$q163 = $_POST["q163"];
$q164 = $_POST["q164"];
$q165 = $_POST["q165"];
$q166 = $_POST["q166"];
$q167 = $_POST["q167"];
$q168 = $_POST["q168"];
$q169 = $_POST["q169"];
$q170 = $_POST["q170"];
$q171 = $_POST["q171"];
$q172 = $_POST["q172"];
$q173 = $_POST["q173"];
$q174 = $_POST["q174"];
$q175 = $_POST["q175"];
$q176 = $_POST["q176"];
$q177 = $_POST["q177"];
$q178 = $_POST["q178"];
$q179 = $_POST["q179"];
$q180 = $_POST["q180"];
$q181 = $_POST["q181"];
$q182 = $_POST["q182"];
$q183 = $_POST["q183"];
$q184 = $_POST["q184"];
$q185 = $_POST["q185"];
$q186 = $_POST["q186"];
$q187 = $_POST["q187"];
$q188 = $_POST["q188"];
$q189 = $_POST["q189"];
$q190 = $_POST["q190"];
$q191 = $_POST["q191"];
$q192 = $_POST["q192"];
$q193 = $_POST["q193"];
$q194 = $_POST["q194"];
$q195 = $_POST["q195"];
$q196 = $_POST["q196"];
$q197 = $_POST["q197"];
$q198 = $_POST["q198"];
$q199 = $_POST["q199"];
$q200 = $_POST["q200"];
$q201 = $_POST["q201"];
$q202 = $_POST["q202"];
$q203 = $_POST["q203"];
$q204 = $_POST["q204"];
$q205 = $_POST["q205"];
$q206 = $_POST["q206"];
$q207 = $_POST["q207"];
$q208 = $_POST["q208"];
$q209 = $_POST["q209"];
$q210 = $_POST["q210"];
$q211 = $_POST["q211"];
$q212 = $_POST["q212"];
$q213 = $_POST["q213"];
$q214 = $_POST["q214"];
$q215 = $_POST["q215"];
$q216 = $_POST["q216"];
$q217 = $_POST["q217"];
$q218 = $_POST["q218"];
$q219 = $_POST["q219"];
$q220 = $_POST["q220"];
$q221 = $_POST["q221"];
$q222 = $_POST["q222"];
$q223 = $_POST["q223"];
$q224 = $_POST["q224"];
$q225 = $_POST["q225"];
$q226 = $_POST["q226"];
$q227 = $_POST["q227"];
$q228 = $_POST["q228"];
$q229 = $_POST["q229"];
$q230 = $_POST["q230"];
$q231 = $_POST["q231"];
$q232 = $_POST["q232"];
$q233 = $_POST["q233"];
$q234 = $_POST["q234"];
$q235 = $_POST["q235"];
$q236 = $_POST["q236"];
$q237 = $_POST["q237"];
$q238 = $_POST["q238"];
$q239 = $_POST["q239"];
$q240 = $_POST["q240"];

$t0 = $_POST["t0"];
$t1 = $_POST["t1"];
$t2 = $_POST["t2"];
$t3 = $_POST["t3"];
$t4 = $_POST["t4"];
$t5 = $_POST["t5"];
$t6 = $_POST["t6"];
$t7 = $_POST["t7"];
$t8 = $_POST["t8"];
$t9 = $_POST["t9"];
$t10 = $_POST["t10"];
$t11 = $_POST["t11"];
$t12 = $_POST["t12"];
$t13 = $_POST["t13"];
$t14 = $_POST["t14"];
$t15 = $_POST["t15"];
$t16 = $_POST["t16"];
$t17 = $_POST["t17"];
$t18 = $_POST["t18"];
$t19 = $_POST["t19"];
$t20 = $_POST["t20"];
$t21 = $_POST["t21"];
$t22 = $_POST["t22"];
$t23 = $_POST["t23"];
$t24 = $_POST["t24"];
$t25 = $_POST["t25"];
$t26 = $_POST["t26"];
$t27 = $_POST["t27"];
$t28 = $_POST["t28"];
$t29 = $_POST["t29"];
$t30 = $_POST["t30"];
$t31 = $_POST["t31"];
$t32 = $_POST["t32"];
$t33 = $_POST["t33"];
$t34 = $_POST["t34"];
$t35 = $_POST["t35"];
$t36 = $_POST["t36"];
$t37 = $_POST["t37"];
$t38 = $_POST["t38"];
$t39 = $_POST["t39"];
$t40 = $_POST["t40"];
$t41 = $_POST["t41"];
$t42 = $_POST["t42"];
$t43 = $_POST["t43"];
$t44 = $_POST["t44"];
$t45 = $_POST["t45"];
$t46 = $_POST["t46"];
$t47 = $_POST["t47"];
$t48 = $_POST["t48"];
$t49 = $_POST["t49"];
$t50 = $_POST["t50"];
$t51 = $_POST["t51"];
$t52 = $_POST["t52"];
$t53 = $_POST["t53"];
$t54 = $_POST["t54"];
$t55 = $_POST["t55"];
$t56 = $_POST["t56"];
$t57 = $_POST["t57"];
$t58 = $_POST["t58"];
$t59 = $_POST["t59"];
$t60 = $_POST["t60"];
$t61 = $_POST["t61"];
$t62 = $_POST["t62"];
$t63 = $_POST["t63"];
$t64 = $_POST["t64"];
$t65 = $_POST["t65"];
$t66 = $_POST["t66"];
$t67 = $_POST["t67"];
$t68 = $_POST["t68"];
$t69 = $_POST["t69"];
$t70 = $_POST["t70"];
$t71 = $_POST["t71"];
$t72 = $_POST["t72"];
$t73 = $_POST["t73"];
$t74 = $_POST["t74"];
$t75 = $_POST["t75"];
$t76 = $_POST["t76"];
$t77 = $_POST["t77"];
$t78 = $_POST["t78"];
$t79 = $_POST["t79"];
$t80 = $_POST["t80"];
$t81 = $_POST["t81"];
$t82 = $_POST["t82"];
$t83 = $_POST["t83"];
$t84 = $_POST["t84"];
$t85 = $_POST["t85"];
$t86 = $_POST["t86"];
$t87 = $_POST["t87"];
$t88 = $_POST["t88"];
$t89 = $_POST["t89"];
$t90 = $_POST["t90"];
$t91 = $_POST["t91"];
$t92 = $_POST["t92"];
$t93 = $_POST["t93"];
$t94 = $_POST["t94"];
$t95 = $_POST["t95"];
$t96 = $_POST["t96"];
$t97 = $_POST["t97"];
$t98 = $_POST["t98"];
$t99 = $_POST["t99"];
$t100 = $_POST["t100"];
$t101 = $_POST["t101"];
$t102 = $_POST["t102"];
$t103 = $_POST["t103"];
$t104 = $_POST["t104"];
$t105 = $_POST["t105"];
$t106 = $_POST["t106"];
$t107 = $_POST["t107"];
$t108 = $_POST["t108"];
$t109 = $_POST["t109"];
$t110 = $_POST["t110"];
$t111 = $_POST["t111"];
$t112 = $_POST["t112"];
$t113 = $_POST["t113"];
$t114 = $_POST["t114"];
$t115 = $_POST["t115"];
$t116 = $_POST["t116"];
$t117 = $_POST["t117"];
$t118 = $_POST["t118"];
$t119 = $_POST["t119"];
$t120 = $_POST["t120"];
$t121 = $_POST["t121"];
$t122 = $_POST["t122"];
$t123 = $_POST["t123"];
$t124 = $_POST["t124"];
$t125 = $_POST["t125"];
$t126 = $_POST["t126"];
$t127 = $_POST["t127"];
$t128 = $_POST["t128"];
$t129 = $_POST["t129"];
$t130 = $_POST["t130"];
$t131 = $_POST["t131"];
$t132 = $_POST["t132"];
$t133 = $_POST["t133"];
$t134 = $_POST["t134"];
$t135 = $_POST["t135"];
$t136 = $_POST["t136"];
$t137 = $_POST["t137"];
$t138 = $_POST["t138"];
$t139 = $_POST["t139"];
$t140 = $_POST["t140"];
$t141 = $_POST["t141"];
$t142 = $_POST["t142"];
$t143 = $_POST["t143"];
$t144 = $_POST["t144"];
$t145 = $_POST["t145"];
$t146 = $_POST["t146"];
$t147 = $_POST["t147"];
$t148 = $_POST["t148"];
$t149 = $_POST["t149"];
$t150 = $_POST["t150"];
$t151 = $_POST["t151"];
$t152 = $_POST["t152"];
$t153 = $_POST["t153"];
$t154 = $_POST["t154"];
$t155 = $_POST["t155"];
$t156 = $_POST["t156"];
$t157 = $_POST["t157"];
$t158 = $_POST["t158"];
$t159 = $_POST["t159"];
$t160 = $_POST["t160"];
$t161 = $_POST["t161"];
$t162 = $_POST["t162"];
$t163 = $_POST["t163"];
$t164 = $_POST["t164"];
$t165 = $_POST["t165"];
$t166 = $_POST["t166"];
$t167 = $_POST["t167"];
$t168 = $_POST["t168"];
$t169 = $_POST["t169"];
$t170 = $_POST["t170"];
$t171 = $_POST["t171"];
$t172 = $_POST["t172"];
$t173 = $_POST["t173"];
$t174 = $_POST["t174"];
$t175 = $_POST["t175"];
$t176 = $_POST["t176"];
$t177 = $_POST["t177"];
$t178 = $_POST["t178"];
$t179 = $_POST["t179"];
$t180 = $_POST["t180"];
$t181 = $_POST["t181"];
$t182 = $_POST["t182"];
$t183 = $_POST["t183"];
$t184 = $_POST["t184"];
$t185 = $_POST["t185"];
$t186 = $_POST["t186"];
$t187 = $_POST["t187"];
$t188 = $_POST["t188"];
$t189 = $_POST["t189"];
$t190 = $_POST["t190"];
$t191 = $_POST["t191"];
$t192 = $_POST["t192"];
$t193 = $_POST["t193"];
$t194 = $_POST["t194"];
$t195 = $_POST["t195"];
$t196 = $_POST["t196"];
$t197 = $_POST["t197"];
$t198 = $_POST["t198"];
$t199 = $_POST["t199"];
$t200 = $_POST["t200"];
$t201 = $_POST["t201"];
$t202 = $_POST["t202"];
$t203 = $_POST["t203"];
$t204 = $_POST["t204"];
$t205 = $_POST["t205"];
$t206 = $_POST["t206"];
$t207 = $_POST["t207"];
$t208 = $_POST["t208"];
$t209 = $_POST["t209"];
$t210 = $_POST["t210"];
$t211 = $_POST["t211"];
$t212 = $_POST["t212"];
$t213 = $_POST["t213"];
$t214 = $_POST["t214"];
$t215 = $_POST["t215"];
$t216 = $_POST["t216"];
$t217 = $_POST["t217"];
$t218 = $_POST["t218"];
$t219 = $_POST["t219"];
$t220 = $_POST["t220"];
$t221 = $_POST["t221"];
$t222 = $_POST["t222"];
$t223 = $_POST["t223"];
$t224 = $_POST["t224"];
$t225 = $_POST["t225"];
$t226 = $_POST["t226"];
$t227 = $_POST["t227"];
$t228 = $_POST["t228"];
$t229 = $_POST["t229"];
$t230 = $_POST["t230"];
$t231 = $_POST["t231"];
$t232 = $_POST["t232"];
$t233 = $_POST["t233"];
$t234 = $_POST["t234"];
$t235 = $_POST["t235"];
$t236 = $_POST["t236"];
$t237 = $_POST["t237"];
$t238 = $_POST["t238"];
$t239 = $_POST["t239"];
$t240 = $_POST["t240"];

$seg1 = $_POST["seg1"];
$seg2 = $_POST["seg2"];
$seg3 = $_POST["seg3"];
$obs = $_POST["obs"];
$textarea = $_POST["textarea"];

$totm = $t0+$t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15+$t16+$t17+$t18+$t19+$t20+$t21+$t22+$t23+$t24+$t25+$t26+$t27+$t28+$t29+$t30+$t31+$t32+$t33+$t34+$t35+$t36+$t37+$t38+$t39+$t40+$t41+$t42+$t43+$t44+$t45+$t46+$t47+$t48+$t49+$t50+$t51+$t52+$t53+$t54+$t55+$t56+$t57+$t58+$t59+$t60+$t61+$t62+$t63+$t64+$t65+$t66+$t67+$t68+$t69+$t70+$t71+$t72+$t73+$t74+$t75+$t76+$t77+$t78+$t79+$t80+$t81+$t82+$t83+$t84+$t85+$t86+$t87+$t88+$t89+$t90+$t91+$t92+$t93+$t94+$t95+$t96+$t97+$t98+$t99+$t100+$t101+$t102+$t103+$t104+$t105+$t106+$t107+$t108+$t109+$t110+$t111+$t112+$t113+$t114+$t115+$t116+$t117+$t118+$t119+$t120+$t121+$t122+$t123+$t124+$t125+$t126+$t127+$t128+$t129+$t130+$t131+$t132+$t133+$t134+$t135+$t136+$t137+$t138+$t139+$t140+$t141+$t142+$t143+$t144+$t145+$t146+$t147+$t148+$t149+$t150+$t151+$t152+$t153+$t154+$t155+$t156+$t157+$t158+$t159+$t160+$t161+$t162+$t163+$t164+$t165+$t166+$t167+$t168+$t169+$t170+$t171+$t172+$t173+$t174+$t175+$t176+$t177+$t178+$t179+$t180+$t181+$t182+$t183+$t184+$t185+$t186+$t187+$t188+$t189+$t190+$t191+$t192+$t193+$t194+$t195+$t196+$t197+$t198+$t199+$t200+$t201+$t202+$t203+$t204+$t205+$t206+$t207+$t208+$t209+$t210+$t211+$t212+$t213+$t214+$t215+$t216+$t217+$t218+$t219+$t220+$t221+$t222+$t223+$t224+$t225+$t226+$t227+$t228+$t229+$t230+$t231+$t232+$t233+$t234+$t235+$t236+$t237+$t238+$t239+$t240;

$msg = "
<table width='600' cellpadding='3' cellspacing='0' border='0' bordercolor='#CCCCCC' align='center'>
  <tr>
    <td width='550' align='center' bgcolor='#FFFFFF'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
        <tr>
          <td width='550'></td>
        </tr>
        <tr>
          <td ></td>
        </tr>
        <tr>
          <td bgcolor='#EFEFEF'></td>
        </tr>
        <tr>
          <td height='324' valign='top' bgcolor='#E1E1E1'><table width='100%' height='100%' border='0' cellpadding='10' cellspacing='0' class='fonte_cinza'>
              <tr>
                <td height='314' valign='top' bgcolor='#FFFFFF'><h2 align='justify'><b>Solicitação de Orçamento</b></h2>
                  <p>Solicitante: $solicitante<br>
                    Empresa: $empresa<br>
                    Email: $email<br>
                    Fone Comercial: $fone_comercial<br>
                    Fone Residencial: $fone_residencial<br>
                    Fone Celular: $fone_celular<br>
                    <BR>
                    Guarda Moveis: $guardamoveis<br>
                    Tempo Guarda Moveis: $tempoguarda</p>
                  <h3>Dados Origem</h3>
                  <p> Cidade: $ocidade<br>
                    Estado: $oestado<br>
                    Endereço: $end_origem<br>
                    Bairro: $obairro<br>
                    Data para Coleta: $data_carga<br>
                    Elevador: $o_elevador<br>
                    Escada: $o_escada</p>
                  <h3>Dados Destino</h3>
                  <p>Cidade: $dcidade<br>
                    Estado: $destado<br>
                    Endereço: $end_destino<br>
                    Bairro: $dbairro<br>
                    Data para Entrega: $data_descarga<br>
                    Elevador: $d_elev<br>
                    Escada: $d_esc</p>
                  <h3>Cozinha</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Arm. Alto 1 porta </td>
                      <td align='center'>0,6</td>
                      <td align='center'>$q0</td>
                      <td align='center'>$t0</td>
                    </tr>
                    <tr>
                      <td>Arm. Alto 2 portas </td>
                      <td align='center'>1,3</td>
                      <td align='center'>$q1</td>
                      <td align='center'>$t1</td>
                    </tr>
                    <tr>
                      <td>Arm. Alto 3 portas </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q2</td>
                      <td align='center'>$t2</td>
                    </tr>
                    <tr>
                      <td>Arm. Alto 4 portas </td>
                      <td align='center'>2,4</td>
                      <td align='center'>$q3</td>
                      <td align='center'>$t3</td>
                    </tr>
                    <tr>
                      <td>Arm. Aéreo de canto </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q4</td>
                      <td align='center'>$t4</td>
                    </tr>
                    <tr>
                      <td>Arm. Aéreo 1 porta </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q5</td>
                      <td align='center'>$t5</td>
                    </tr>
                    <tr>
                      <td>Arm. Aéreo 2 porta </td>
                      <td align='center'>0,6</td>
                      <td align='center'>$q6</td>
                      <td align='center'>$t6</td>
                    </tr>
                    <tr>
                      <td>Arm. Aéreo 3 porta </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q7</td>
                      <td align='center'>$t7</td>
                    </tr>
                    <tr>
                      <td>Arm. Aéreo 4 porta </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q8</td>
                      <td align='center'>$t8</td>
                    </tr>
                    <tr>
                      <td>Balcão de Canto </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q9</td>
                      <td align='center'>$t9</td>
                    </tr>
                    <tr>
                      <td>Balcão 1 porta </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q10</td>
                      <td align='center'>$t10</td>
                    </tr>
                    <tr>
                      <td>Balcão 2 porta </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q11</td>
                      <td align='center'>$t11</td>
                    </tr>
                    <tr>
                      <td>Balcão 3 porta</td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q12</td>
                      <td align='center'>$t12</td>
                    </tr>
                    <tr>
                      <td>Balcão 4 porta </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q13</td>
                      <td align='center'>$t13</td>
                    </tr>
                    <tr>
                      <td>Banquinhos </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q14</td>
                      <td align='center'>$t14</td>
                    </tr>
                    <tr>
                      <td>Bebedouro </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q15</td>
                      <td align='center'>$t15</td>
                    </tr>
                    <tr>
                      <td>Botijão água </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q16</td>
                      <td align='center'>$t16</td>
                    </tr>
                    <tr>
                      <td>Botijão de Gás Vazio </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q17</td>
                      <td align='center'>$t17</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q18</td>
                      <td align='center'>$t18</td>
                    </tr>
                    <tr>
                      <td>Cadeira de Criança </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q19</td>
                      <td align='center'>$t19</td>
                    </tr>
                    <tr>
                      <td>Exaustor </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q20</td>
                      <td align='center'>$t20</td>
                    </tr>
                    <tr>
                      <td>Fogão a Gás 6 a. </td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q21</td>
                      <td align='center'>$t21</td>
                    </tr>
                    <tr>
                      <td>Fogão a Gás 4 a. </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q22</td>

                      <td align='center'>$t22</td>
                    </tr>
                    <tr>
                      <td>Forno Microondas </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q23</td>
                      <td align='center'>$t23</td>
                    </tr>
                    <tr>
                      <td>Forno Elétrico </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q24</td>
                      <td align='center'>$t24</td>
                    </tr>
                    <tr>
                      <td>Freezer Grande </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q25</td>
                      <td align='center'>$t25</td>
                    </tr>
                    <tr>
                      <td>Freezer Pequeno </td>
                      <td align='center'>1,2</td>
                      <td align='center'>$q26</td>
                      <td align='center'>$t26</td>
                    </tr>
                    <tr>
                      <td>Frigobar </td>
                      <td align='center'>0,6</td>
                      <td align='center'>$q27</td>
                      <td align='center'>$t27</td>
                    </tr>
                    <tr>
                      <td>Geladeira Média </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q28</td>
                      <td align='center'>$t28</td>
                    </tr>
                    <tr>
                      <td>Geladeira Grande </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q29</td>
                      <td align='center'>$t29</td>
                    </tr>
                    <tr>
                      <td>Máquina Lavar Louça (pq) </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q30</td>
                      <td align='center'>$t30</td>
                    </tr>
                    <tr>
                      <td>Máquina Lavar Louça (gr) </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q31</td>
                      <td align='center'>$t31</td>
                    </tr>
                    <tr>
                      <td>Mesa pequena </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q32</td>
                      <td align='center'>$t32</td>
                    </tr>
                    <tr>
                      <td>Mesa grande </td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q33</td>
                      <td align='center'>$t33</td>
                    </tr>
                  </table>
                  <h3>Sala de Estar</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Banqueta </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q37</td>
                      <td align='center'>$t37</td>
                    </tr>
                    <tr>
                      <td>Bar </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q38</td>
                      <td align='center'>$t38</td>
                    </tr>
                    <tr>
                      <td>Baú </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q39</td>
                      <td align='center'>$t39</td>
                    </tr>
                    <tr>
                      <td>Biombo </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q40</td>
                      <td align='center'>$t40</td>
                    </tr>
                    <tr>
                      <td>Cadeira Braço </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q42</td>
                      <td align='center'>$t42</td>
                    </tr>
                    <tr>
                      <td>Cadeira Balanço </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q43</td>
                      <td align='center'>$t43</td>
                    </tr>
                    <tr>
                      <td>Cadeira do Papai </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q44</td>
                      <td align='center'>$t44</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q45</td>
                      <td align='center'>$t45</td>
                    </tr>
                    <tr>
                      <td>Carrinho de Chá</td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q46</td>
                      <td align='center'>$t46</td>
                    </tr>
                    <tr>
                      <td>Console ou Rack</td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q47</td>
                      <td align='center'>$t47</td>
                    </tr>
                    <tr>
                      <td>Estante Pequena </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q48</td>
                      <td align='center'>$t48</td>
                    </tr>
                    <tr>
                      <td>Estante Média </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q49</td>
                      <td align='center'>$t49</td>
                    </tr>
                    <tr>
                      <td>Estante Grande </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q50</td>
                      <td align='center'>$t50</td>
                    </tr>
                    <tr>
                      <td>Lustre</td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q51</td>
                      <td align='center'>$t51</td>
                    </tr>
                    <tr>
                      <td>Mesa de Centro </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q52</td>
                      <td align='center'>$t52</td>
                    </tr>
                    <tr>
                      <td>Mesa Lateral </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q53</td>
                      <td align='center'>$t53</td>
                    </tr>
                    <tr>
                      <td>Mesa de TV </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q54</td>
                      <td align='center'>$t54</td>
                    </tr>
                    <tr>
                      <td>Mesa Telefone </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q55</td>
                      <td align='center'>$t55</td>
                    </tr>
                    <tr>
                      <td>Multiuso </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q56</td>
                      <td align='center'>$t56</td>
                    </tr>
                    <tr>
                      <td>Piano de Armário </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q57</td>
                      <td align='center'>$t57</td>
                    </tr>
                    <tr>
                      <td>Piano de Cauda </td>
                      <td align='center'>3,0</td>
                      <td align='center'>$q58</td>
                      <td align='center'>$t58</td>
                    </tr>
                    <tr>
                      <td>Poltrona Grande </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q59</td>
                      <td align='center'>$t59</td>
                    </tr>
                    <tr>
                      <td>Poltrona Pequena </td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q60</td>
                      <td align='center'>$t60</td>
                    </tr>
                    <tr>
                      <td>Sofá 2 Lugares Grande </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q61</td>
                      <td align='center'>$t61</td>
                    </tr>
                    <tr>
                      <td>Sofá 2 Lugares Pequeno</td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q62</td>
                      <td align='center'>$t62</td>
                    </tr>
                    <tr>
                      <td>Sofá 3 Lugares Grande </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q63</td>
                      <td align='center'>$t63</td>
                    </tr>
                    <tr>
                      <td>Sofá 3 Lugares Pequeno</td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q64</td>
                      <td align='center'>$t64</td>
                    </tr>
                    <tr>
                      <td>Sofá 4 Lugares Grande</td>
                      <td align='center'>2,4</td>
                      <td align='center'>$q65</td>
                      <td align='center'>$t65</td>
                    </tr>
                    <tr>
                      <td>Sofá 4 Lugares Pequeno </td>
                      <td align='center'>1,8</td>
                      <td align='center'>$q66</td>
                      <td align='center'>$t66</td>
                    </tr>
                  </table>
                  <h3>Sala de Jantar</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Balcão Oratório Grande </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q67</td>
                      <td align='center'>$t67</td>
                    </tr>
                    <tr>
                      <td>Balcão Simples </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q68</td>
                      <td align='center'>$t68</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q69</td>
                      <td align='center'>$t69</td>
                    </tr>
                    <tr>
                      <td>Cristaleira </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q70</td>
                      <td align='center'>$t70</td>
                    </tr>
                    <tr>
                      <td>Lustre </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q71</td>
                      <td align='center'>$t71</td>
                    </tr>
                    <tr>
                      <td>Mesa de Jantar Peq. </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q72</td>
                      <td align='center'>$t72</td>
                    </tr>
                    <tr>
                      <td>Mesa de Jantar Grd. </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q73</td>
                      <td align='center'>$t73</td>
                    </tr>
                  </table>
                  <h3>Escritório</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Arquivo </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q74</td>
                      <td align='center'>$t74</td>
                    </tr>
                    <tr>
                      <td>Armário de Aço </td>
                      <td align='center'>1,2</td>
                      <td align='center'>$q75</td>
                      <td align='center'>$t75</td>
                    </tr>
                    <tr>
                      <td>Cadeira Giratória </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q76</td>
                      <td align='center'>$t76</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q77</td>
                      <td align='center'>$t77</td>
                    </tr>
                    <tr>
                      <td>Cofre Kg</td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q78</td>
                      <td align='center'>$t78</td>
                    </tr>
                    <tr>
                      <td>Computador </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q79</td>
                      <td align='center'>$t79</td>
                    </tr>
                    <tr>
                      <td>Escrivaninha </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q80</td>
                      <td align='center'>$t80</td>
                    </tr>
                    <tr>
                      <td>Equip. Dentário </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q81</td>
                      <td align='center'>$t81</td>
                    </tr>
                    <tr>
                      <td>Impressora </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q82</td>
                      <td align='center'>$t82</td>
                    </tr>
                    <tr>
                      <td>Máquina de Escrever </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q83</td>
                      <td align='center'>$t83</td>
                    </tr>
                    <tr>
                      <td>Mesa de Reunião </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q84</td>
                      <td align='center'>$t84</td>
                    </tr>
                    <tr>
                      <td>Retroprojetor </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q85</td>
                      <td align='center'>$t85</td>
                    </tr>
                    <tr>
                      <td>Sofá </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q86</td>
                      <td align='center'>$t86</td>
                    </tr>
                    <tr>
                      <td>Scanner </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q87</td>
                      <td align='center'>$t87</td>
                    </tr>
                    <tr>
                      <td>Telefones / Fax </td>
                      <td align='center'>0,1</td>
                      <td align='center'>$q88</td>
                      <td align='center'>$t88</td>
                    </tr>
                  </table>
                  <h3>Dormitório de Casal</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Baú </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q89</td>
                      <td align='center'>$t89</td>
                    </tr>
                    <tr>
                      <td>Bicama</td>
                      <td align='center'>1,6</td>
                      <td align='center'>$q90</td>
                      <td align='center'>$t90</td>
                    </tr>
                    <tr>
                      <td>Cabideiro </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q91</td>
                      <td align='center'>$t91</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q92</td>
                      <td align='center'>$t92</td>
                    </tr>
                    <tr>
                      <td>Cama Box</td>
                      <td align='center'>1,7</td>
                      <td align='center'>$q93</td>
                      <td align='center'>$t93</td>
                    </tr>
                    <tr>
                      <td>Cama de Criança </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q94</td>
                      <td align='center'>$t94</td>
                    </tr>
                    <tr>
                      <td>Cama Comum </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q95</td>
                      <td align='center'>$t95</td>
                    </tr>
                    <tr>
                      <td>Carro de Bebê </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q97</td>
                      <td align='center'>$t97</td>
                    </tr>
                    <tr>
                      <td>Cesto de Roupa </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q98</td>
                      <td align='center'>$t98</td>
                    </tr>
                    <tr>
                      <td>Colchão de Solteiro </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q99</td>
                      <td align='center'>$t99</td>
                    </tr>
                    <tr>
                      <td>Cômoda </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q101</td>
                      <td align='center'>$t101</td>
                    </tr>
                    <tr>
                      <td>Lustre </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q102</td>
                      <td align='center'>$t102</td>
                    </tr>
                    <tr>
                      <td>Malas </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q103</td>
                      <td align='center'>$t103</td>
                    </tr>
                    <tr>
                      <td>Mesa de Cabeceira </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q104</td>
                      <td align='center'>$t104</td>
                    </tr>
                    <tr>
                      <td>Pentiadeira </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q105</td>
                      <td align='center'>$t105</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 2P </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q106</td>
                      <td align='center'>$t106</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 3P </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q109</td>
                      <td align='center'>$t109</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 4P </td>
                      <td align='center'>1,3</td>
                      <td align='center'>$q112</td>
                      <td align='center'>$t112</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 5P </td>
                      <td align='center'>1,8</td>
                      <td align='center'>$q114</td>
                      <td align='center'>$t114</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 6P </td>
                      <td align='center'>2,5</td>
                      <td align='center'>$q115</td>
                      <td align='center'>$t115</td>
                    </tr>
                  </table>
                  <h3>Dormitório de Solteiro (1)</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Baú </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q201</td>
                      <td align='center'>$t201</td>
                    </tr>
                    <tr>
                      <td>Bicama</td>
                      <td align='center'>1,6</td>
                      <td align='center'>$q202</td>
                      <td align='center'>$t202</td>
                    </tr>
                    <tr>
                      <td>Cabideiro </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q203</td>
                      <td align='center'>$t203</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q204</td>
                      <td align='center'>$t204</td>
                    </tr>
                    <tr>
                      <td>Cama Box</td>
                      <td align='center'>1,7</td>
                      <td align='center'>$q205</td>
                      <td align='center'>$t205</td>
                    </tr>
                    <tr>
                      <td>Cama de Criança </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q206</td>
                      <td align='center'>$t206</td>
                    </tr>
                    <tr>
                      <td>Cama Comum </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q207</td>
                      <td align='center'>$t207</td>
                    </tr>
                    <tr>
                      <td>Carro de Bebê </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q208</td>
                      <td align='center'>$t208</td>
                    </tr>
                    <tr>
                      <td>Cesto de Roupa </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q209</td>
                      <td align='center'>$t209</td>
                    </tr>
                    <tr>
                      <td>Colchão de Casal </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q210</td>
                      <td align='center'>$t210</td>
                    </tr>
                    <tr>
                      <td>Cômoda </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q211</td>
                      <td align='center'>$t211</td>
                    </tr>
                    <tr>
                      <td>Lustre </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q212</td>
                      <td align='center'>$t212</td>
                    </tr>
                    <tr>
                      <td>Malas </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q213</td>
                      <td align='center'>$t213</td>
                    </tr>
                    <tr>
                      <td>Mesa de Cabeceira </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q214</td>
                      <td align='center'>$t214</td>
                    </tr>
                    <tr>
                      <td>Pentiadeira </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q215</td>
                      <td align='center'>$t215</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 2P </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q216</td>
                      <td align='center'>$t216</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 3P </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q217</td>
                      <td align='center'>$t217</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 4P </td>
                      <td align='center'>1,3</td>
                      <td align='center'>$q218</td>
                      <td align='center'>$t1218</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 5P </td>
                      <td align='center'>1,8</td>
                      <td align='center'>$q219</td>
                      <td align='center'>$t219</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 6P </td>
                      <td align='center'>2,5</td>
                      <td align='center'>$q220</td>
                      <td align='center'>$t220</td>
                    </tr>
                  </table>
                  <h3>Dormitório de Solteiro (2)</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Baú </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q221</td>
                      <td align='center'>$t221</td>
                    </tr>
                    <tr>
                      <td>Bicama</td>
                      <td align='center'>1,6</td>
                      <td align='center'>$q222</td>
                      <td align='center'>$t222</td>
                    </tr>
                    <tr>
                      <td>Cabideiro </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q223</td>
                      <td align='center'>$t223</td>
                    </tr>
                    <tr>
                      <td>Cadeira Simples </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q224</td>
                      <td align='center'>$t224</td>
                    </tr>
                    <tr>
                      <td>Cama Box</td>
                      <td align='center'>1,7</td>
                      <td align='center'>$q225</td>
                      <td align='center'>$t225</td>
                    </tr>
                    <tr>
                      <td>Cama de Criança </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q226</td>
                      <td align='center'>$t226</td>
                    </tr>
                    <tr>
                      <td>Cama Comum </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q227</td>
                      <td align='center'>$t227</td>
                    </tr>
                    <tr>
                      <td>Carro de Bebê </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q228</td>
                      <td align='center'>$t228</td>
                    </tr>
                    <tr>
                      <td>Cesto de Roupa </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q229</td>
                      <td align='center'>$t229</td>
                    </tr>
                    <tr>
                      <td>Colchão de Casal </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q230</td>
                      <td align='center'>$t230</td>
                    </tr>
                    <tr>
                      <td>Cômoda </td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q231</td>
                      <td align='center'>$t231</td>
                    </tr>
                    <tr>
                      <td>Lustre </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q232</td>
                      <td align='center'>$t232</td>
                    </tr>
                    <tr>
                      <td>Malas </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q233</td>
                      <td align='center'>$t233</td>
                    </tr>
                    <tr>
                      <td>Mesa de Cabeceira </td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q234</td>
                      <td align='center'>$t234</td>
                    </tr>
                    <tr>
                      <td>Pentiadeira </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q235</td>
                      <td align='center'>$t235</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 2P </td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q236</td>
                      <td align='center'>$t236</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 3P </td>
                      <td align='center'>2,0</td>
                      <td align='center'>$q237</td>
                      <td align='center'>$t237</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 4P </td>
                      <td align='center'>1,3</td>
                      <td align='center'>$q238</td>
                      <td align='center'>$t238</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 5P </td>
                      <td align='center'>1,8</td>
                      <td align='center'>$q239</td>
                      <td align='center'>$t239</td>
                    </tr>
                    <tr>
                      <td>Roupeiro 6P </td>
                      <td align='center'>2,5</td>
                      <td align='center'>$q240</td>
                      <td align='center'>$t240</td>
                    </tr>
                  </table>
                  <h3>Diversos</h3>
                  <table width=100% border=1 cellpadding='2' cellspacing='0' class=fonte_cinza>
                    <tr bgcolor=#cccccc>
                      <th width=46% scope=col>Item</th>
                      <th width=19% align='center' scope=col>m3</th>
                      <th width=18% align='center' scope=col>Quant.Itens</th>
                      <th width=17% align='center' scope=col>Total m3</th>
                    </tr>
                    <tr>
                      <td>Antena Parabólica Grande</td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q118</td>
                      <td align='center'>$t118</td>
                    </tr>
                    <tr>
                      <td>Antena Parabólica Pequena</td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q119</td>
                      <td align='center'>$t119</td>
                    </tr>
                    <tr>
                      <td>Ap. de Ginástica </td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q120</td>
                      <td align='center'>$t120</td>
                    </tr>
                    <tr>
                      <td>Ap. de Som </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q121</td>
                      <td align='center'>$t121</td>
                    </tr>
                    <tr>
                      <td>Aquecedor</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q122</td>
                      <td align='center'>$t122</td>
                    </tr>
                    <tr>
                      <td>Aspirador de Pó </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q123</td>
                      <td align='center'>$t123</td>
                    </tr>
                    <tr>
                      <td>Bicicleta Grande </td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q124</td>
                      <td align='center'>$t124</td>
                    </tr>
                    <tr>
                      <td>Bicicleta Pequena </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q125</td>
                      <td align='center'>$t125</td>
                    </tr>
                    <tr>
                      <td>Caixas com Bebidas </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q153</td>
                      <td align='center'>$t153</td>
                    </tr>
                    <tr>
                      <td>Caixas com Livros </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q154</td>
                      <td align='center'>$t154</td>
                    </tr>
                    <tr>
                      <td>Caixas com Louças </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q155</td>
                      <td align='center'>$t155</td>
                    </tr>
                    <tr>
                      <td>Caixas com Roupas </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q156</td>
                      <td align='center'>$t156</td>
                    </tr>
                    <tr>
                      <td>Churrasqueira</td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q126</td>
                      <td align='center'>$t126</td>
                    </tr>
                    <tr>
                      <td>Condicionador-de-ar Grande </td>
                      <td align='center'>0,4</td>
                      <td align='center'>$q127</td>
                      <td align='center'>$t127</td>
                    </tr>
                    <tr>
                      <td>Condicionador-de-ar Pequeno </td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q128</td>
                      <td align='center'>$t128</td>
                    </tr>
                    <tr>
                      <td>Circulador de Ar </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q129</td>
                      <td align='center'>$t129</td>
                    </tr>
                    <tr>
                      <td>DVD </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q130</td>
                      <td align='center'>$t130</td>
                    </tr>
                    <tr>
                      <td>Enceradeira </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q131</td>
                      <td align='center'>$t131</td>
                    </tr>
                    <tr>
                      <td>Engradados </td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q132</td>
                      <td align='center'>$t132</td>
                    </tr>
                    <tr>
                      <td>Escada</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q133</td>
                      <td align='center'>$t133</td>
                    </tr>
                    <tr>
                      <td>Esteira</td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q134</td>
                      <td align='center'>$t134</td>
                    </tr>
                    <tr>
                      <td>Filmadora</td>
                      <td align='center'>0,1</td>
                      <td align='center'>$q157</td>
                      <td align='center'>$t157</td>
                    </tr>
                    <tr>
                      <td>Filtro</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q135</td>
                      <td align='center'>$t135</td>
                    </tr>
                    <tr>
                      <td>Máq Costura c/Móvel</td>
                      <td align='center'>0,5</td>
                      <td align='center'>$q136</td>
                      <td align='center'>$t136</td>
                    </tr>
                    <tr>
                      <td>Moto</td>
                      <td align='center'>3,0</td>
                      <td align='center'>$q137</td>
                      <td align='center'>$t137</td>
                    </tr>
                    <tr>
                      <td>Lavadora de Roupa até 8kg</td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q138</td>
                      <td align='center'>$t138</td>
                    </tr>
                    <tr>
                      <td>Lavadora de Roupa até 5kg</td>
                      <td align='center'>0,7</td>
                      <td align='center'>$q139</td>
                      <td align='center'>$t139</td>
                    </tr>
                    <tr>
                      <td>Secadora de Roupa grande</td>
                      <td align='center'>0,8</td>
                      <td align='center'>$q140</td>
                      <td align='center'>$t140</td>
                    </tr>
                    <tr>
                      <td>Secadora de Roupa pequena</td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q141</td>
                      <td align='center'>$t141</td>
                    </tr>
                    <tr>
                      <td>Tábua de Passar</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q142</td>
                      <td align='center'>$t142</td>
                    </tr>
                    <tr>
                      <td>Tapete (gr)</td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q143</td>
                      <td align='center'>$t143</td>
                    </tr>
                    <tr>
                      <td>Tapete (pq)</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q144</td>
                      <td align='center'>$t144</td>
                    </tr>
                    <tr>
                      <td>Teclado</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q145</td>
                      <td align='center'>$t145</td>
                    </tr>
                    <tr>
                      <td>Televisão até 20 pol</td>
                      <td align='center'>0,3</td>
                      <td align='center'>$q146</td>
                      <td align='center'>$t146</td>
                    </tr>
                    <tr>
                      <td>Televisão de 29 a 40 pol </td>
                      <td align='center'>1,0</td>
                      <td align='center'>$q147</td>
                      <td align='center'>$t147</td>
                    </tr>
                    <tr>
                      <td>Televisão acima de 40 pol</td>
                      <td align='center'>1,5</td>
                      <td align='center'>$q148</td>
                      <td align='center'>$t149</td>
                    </tr>
                    <tr>
                      <td>Ventilador</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q149</td>
                      <td align='center'>$t149</td>
                    </tr>
                    <tr>
                      <td>Video-Cassete</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q150</td>
                      <td align='center'>$t150</td>
                    </tr>
                    <tr>
                      <td>Video Game</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q151</td>
                      <td align='center'>$t151</td>
                    </tr>
                    <tr>
                      <td>Violão</td>
                      <td align='center'>0,2</td>
                      <td align='center'>$q152</td>
                      <td align='center'>$t152</td>
                    </tr>
                  </table>
                  <h2>Total em m3: $totm</h2>
                  <hr />
                  <h3>Dados Seguro</h3>
                  <p><strong>Qual o valor de seguro pretendido para sua mudança?</strong> R$ $seg1<br>
                    <strong>Moto:</strong> R$ $seg2 (se for transportado no caminhão)<br>
                    <strong>Carro:</strong> R$ $seg3 (se for transportado no caminhão)<br>
                    <strong>Observação:</strong> $obs</p>
                  <h3>Encaixotamento</h3>
                  <p><strong>Observações</strong>: $textarea<br>
                    <br>
                  </p></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
";

//$destino ="aguiadourada.transportes@gmail.com";
//$assunto ="ORÇAMENTO - site Águia Dourada";
//$headers ="From: $email\n";
//$headers.="Content-type: text/html; charset=utf-8\n";
//$headers.="Bcc: cicerosouza@gmail.com\n";

//if( mail($destino, $assunto, $msg, $headers) ){
	//$msg_erro = "Obrigado pelo seu e-mail, em breve faremos contato.";}
//}

require_once("class.phpmailer.php"); //caminho do arquivo da classe do phpmailer

$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->CharSet  = "UTF-8";
$mail->Host = "mail.aguiadouradamudanca.com.br"; //seu servidor SMTP
$mail->SMTPAuth = true; // 'true' para autenticação
$mail->Username = "contato@aguiadouradamudanca.com.br"; // usuário de SMTP
$mail->Password = "aguia14"; // senha de SMTP
//$mail->From = "aguiadourada.transportes@gmail.com";
$mail->From = "contato@aguiadouradamudanca.com.br";
//coloque aqui o seu correio, para que a autenticação não barre a mensagem
$mail->FromName = "Orcamento aguia dourada";
$mail->AddAddress("orcamento.aguiadourada@gmail.com","Aguia Dourada");
//$mail->AddAddress("web@webconecte.com.br");  (opcional) só o envio pelo email
$mail->AddReplyTo("email@destinatario.copia","Nome do Destinatario para quem ira a resposta");
//aqui você coloca o endereço de quem está enviando a mensagem pela sua página
$mail->WordWrap = 50; // Definição de quebra de linha
$mail->IsHTML(true); // envio como HTML se 'true'
$mail->Subject = "Orcamento site Aguia Dourada ";
$mail->Body = $msg;
$mail->AltBody = "Para mensagens somente texto";
//Verifica se o e-mail foi enviado
if(!$mail->Send())
{
    echo "Mensagem não enviada<br />";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<h3>Mensagem enviada</h3><br>Obrigado pelo seu email, em breve responderemos sua solicitação.";
}

?>
      </div>
   	  
  </div>

</div>

    <!--
    ==============================================
    =================== Footer ===================
    ==============================================
-->
  <footer class="footer" style="margin-top:400px;">
    <div style="height:35px;"></div>
    <div style="height:1px;background-color:#5e5e5e;margin-left:50px;margin-right:50px;"></div>
    <div class="footercolumn1">
      <h3> Navegação </h3>
      <ul style="font-weight: 700;color: #101010;margin-top: -6px;">
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
  <div style="float:left;">Produzido por Pedro Borges</div>
</div>

--[--[[[ 1054860 ]]]--]-->

    </div> <!-- wrapper -->
    </body>

</html>