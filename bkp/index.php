<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<META http-equiv=Content-Type content="text/html">
		<title>Altec Materiais Elétricos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<style type="text/css">
			body {
				margin-bottom:0px;
				margin-left:0px;
				margin-right:0px;
				margin-top:0px;
				width:100%;
				height:100%;
			}
			/*fontes incorporadas*/
			@font-face {		
				font-style: normal;
				font-weight: normal;
				font-family:"calisto";

				_src: url("./fontes/calisto.eot"),url("./fontes/calisto.otf");
				src: url("./fontes/calisto.ttf");
			}
			@font-face {		
				font-style: normal;
				font-weight: normal;
				font-family:"myriad";

				_src: url("./fontes/myriad.eot"),url("./fontes/myriad.otf");
				src: url("./fontes/myriad.ttf");
			}
			#apDiv1 {
				position:absolute;
				left:1011px;
				top:63px;
				width:213px;
				height:31px;
				z-index:1;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="./cssmenu/menu_style.css">
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
		<script type="text/javascript">			
			function elementEvent(e){
				var targ;
				if (!e) var e = window.event;
				if (e.target) targ = e.target;
				else if (e.srcElement) targ = e.srcElement;
				if (targ.nodeType == 3) // defeat Safari bug
					targ = targ.parentNode;
				return targ;
			}
			function ativa_menu_produtos(){
				document.getElementById('menu_produtos').src='./imagens/menus/produtos_azul.png';
				ativa_sub_menu_produtos()
			}
			function ativa_sub_menu_produtos(){				
				document.getElementById('menu_produtos').src='./imagens/menus/produtos_azul.png';
				document.getElementById('menu_dinamico').style.display="block";				
			}
			function desativa_sub_menu_produtos(){
				document.getElementById('menu_dinamico').style.display="none";
				document.getElementById('menu_produtos').src='./imagens/menus/produtos_cinza.png';
			}
		</script>
	</head>
	<body >
		<div id="apDiv1" style="display:none;width:221px; height:32px; background-image: url(imagens/pesquisa.jpg); position:absolute;">
			<input type="text" style="line-height:32px;" />
		</div>
		<div id="tudo">
			<?php include('topo.php');?>
			<!----------------------------------conteudo---------------------------------------------------->	  
			<div class="linhas" id="conteudo_site">
			<?php 
				$pg=$_GET["pg"];
				if($pg=="categorias")
					include('categorias.php');
				else if($pg=="contatos")
					include('contatos.php');
				else if($pg=="institucional")
					include('institucional.php');
				else if($pg=="orcamento")
					include('orcamento.php');
				else if($pg=="produtos")
					include('produtos.php');
				else if($pg=="servicos")
					include('servicos.php');
				else if($pg=="home")
					include('home.php');
				else
					include('home.php');
			?>
			<!----------------------------------conteudo---------------------------------------------------->
			</div>
			<?php include('rodape.php');?>		 
		</div>
	</body>
</html>
