<script>
function menu() {
	if (document.getElementById("menu").style.display == "flex"){
		document.getElementById("menu").style.display = "none";
    }else{
    	document.getElementById("menu").style.display = "flex";
    }
}
</script>
<button class="buttonMenu" onclick="menu()"><img src="img/menu_smart.svg"></button>
<div class="col-12" style="height:60px;position:absolute;background-color: #011C2E;"></div>
<header class="col-12 startW" id="menu" style="display: flex;">
	<a href="." class="col-m-2 wow bounceInLeft center"><img src="img/MareCia_logo.svg" style="max-width:100%;object-fit: contain;"/></a>
	<a href="#produtos" class="col-ss-6 col-s-4 col-m-2 wow bounce center" data-wow-delay="0.5s"><span><i class="fas fa-life-ring"></i>Produtos</span></a>
	<a href="#sobre" class="col-ss-6 col-s-4 col-m-2 wow bounce center" data-wow-delay="0.6s"><span><i class="fas fa-building"></i>Sobre</span></a>
	<a href="#qualidade" class="col-ss-6 col-s-4 col-m-2 wow bounce center" data-wow-delay="0.7s"><span><i class="fas fa-check"></i>Qualidade</span></a>
	<a href="#contato" class="col-ss-6 col-s-6 col-m-2 wow bounce center" data-wow-delay="0.8s"><span><i class="fas fa-envelope-open"></i>Contato</span></a>
	<div class="col-ss-12 col-s-6 col-m-2 pesquisa">
		<input type="search" placeholder="Pesquisar" class="wow bounce" data-wow-delay="1s"/>
	</div>
</header>
