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
function redimenciona(){
	var geral=document.getElementById('conteudo_geral').scrollHeight;
	var menu=(document.getElementById('conteudo_menu')==null)?0:document.getElementById('conteudo_menu').scrollHeight;
	var conteudo_site=document.getElementById('conteudo_site');
	if(geral > menu){
		var url=window.location;
		if(url.indexOf("servicos")>0){	
			conteudo_site.style.height=geral+200;
			alert("oi");
		}
		else
			conteudo_site.style.height=geral;
		if(menu!=0)
			document.getElementById('conteudo_menu').style.height=geral-15;
		
	}
	else{
		conteudo_site.style.height=menu+15;
	}
}
function trocar_foto(element){
	var endereco=element.src;
	var nome_arquivo="";
	var url="";
	var achou=false;
	for(var i=endereco.length-1;i>=0;i--){
		var letra=endereco.substring(i,i+1);
		if (((letra=="/")||(letra=="\\"))&&(!achou)){
			nome_arquivo=url;
			url="";
			achou=true;
		}
		url=letra+url;
	}
	nome_arquivo="g"+nome_arquivo.substring(1,endereco.length-1);
	endereco=url+nome_arquivo;
	//endereco=element.src;/*------------------------------------*/				
	document.getElementById('ampliar').src=endereco;				
}
function redimencionaMenuDinamico(){
	var x=countClassName("div","coluna_menu");
	document.getElementById('menu_dinamico').style.width=140*x;	
}
function countClassName(tag,classname){
	var tags=document.getElementsByTagName(tag)
	var acc=0;
	for(var i=0;i<tags.length;i++){
		if(tags[i].className==classname){
			acc++;
		}
	}
	return acc;
}
function loadPage(){
	redimencionaMenuDinamico();
	redimenciona();
}