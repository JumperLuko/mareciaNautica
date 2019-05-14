<!DOCTYPE html>
<html lang="pt-br">
<?php require_once('rdd/head.php'); ?>
</head>
<body style="overflow-x:hidden;">
    <script>
    function menu() {
    	if (document.getElementById("menu").style.display == "flex"){
    		document.getElementById("menu").style.display = "none";
        }else{
        	document.getElementById("menu").style.display = "flex";
        }
    }
    </script>
    <button style="position:fixed;bottom:10px;left:10px;font-size: 20px;background: #011C2E;color:#fff;border:0;border-radius:20px;padding:10px;z-index:99;animation-name: lookatme; animation-duration: 4s;animation-iteration-count: infinite;animation-direction: alternate;" onclick="fechar()">Colete novo?!</button>
    <div id="myBtn" style="position: fixed;width: 100%;height:100%;background-color: #000000ee;top: 0;display: none;justify-content:center;align-content: center;z-index:99;overflow:auto;">
        <div style="background-color: #fff;width: 1000px;min-width: 350px;max-width: 100%;background-image: url('uploads/capas/kids-capa.png');background-position: right;background-repeat: no-repeat;text-shadow: 0px 0px 10px #fff;">
        <button style="float:right;background:#fff;border:0;padding: 20px;font-size: 30px;" onclick="fechar()">X</button><h1 class="h3" style="background: #ffffffaa;padding: 20px;"><p>O mais novo xodó da Mar&Cia, o Auxiliar de flutuação <a href="http://www.marecianautica.com.br/produto.php?nome=Kids"><strong>Kids</strong></a>.</p><p>Super confortável e seguro.</p><p>Tamanhos: PP até <strong>20Kg</strong> e P até <strong>30Kg</strong>.</p><p>Nas cores: <strong><span style="color: #caca1a;">Amarelo</span>, <span style="color: #000058;">Azul</span>, <span style="color: #d28800;">Laranja</span>, <span style="color: #e0a4af;">Rosa</span> e <span style="color: #8a0000;">vermelho.</span></strong></span></p><p>Com as mais diversas estampas.</p></h1>
    </div>
    </div>
    <style>
        #myBtn{
                align-items: center;
            }
        @media only screen and (max-height: 580px) {
            #myBtn{
                align-items: flex-start;
            }
        }
        @keyframes lookatme {
            0% {
                box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
                transform: translatey(0px);
            }
            50% {
                box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
                transform: translatey(-10px);
            }
            100% {
                box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
                transform: translatey(0px);
            }
        }
    </style>
    <script>
      function fechar() {
        if (document.getElementById("myBtn").style.display == "flex"){
          document.getElementById("myBtn").style.display = "none";
          }else{
            document.getElementById("myBtn").style.display = "flex";
          }
      }
    </script>
    <script>
        function scrollBanner() {
            var paralaxItem = document.querySelector(".titleMarecia");
            var scrollPos = window.scrollY;
            // var scrollPosVh = (window.scrollY/screen.height)*100;
            if(document.querySelector("body").offsetWidth < 960){
                var topHeader = document.querySelector(".bannerProd").offsetHeight + document.querySelector("header").offsetHeight;
            }else{
                var topHeader = document.querySelector(".bannerProd").offsetHeight;
            }
            // var topHeaderVh = (topHeader/screen.height)*100;

            // Exemple in ViewHeight (VH), but are slow
            // if (scrollPosVh < 75+topHeaderVh && scrollPos > topHeader){
            // 	paralaxItem.style.height = (75-(scrollPosVh-topHeaderVh)) +"vh";
            if (scrollPos < 600+topHeader && scrollPos > topHeader){
                paralaxItem.style.height = (600-(scrollPos-topHeader)) +"px";
                // paralaxItem.style.opacity = 1 - ((scrollPos-topHeader)/1000);
                paralaxItem.style.marginTop = scrollPos-topHeader+0 +"px";
            }else if(scrollPos < topHeader){
                paralaxItem.style.marginTop= +0+"px";
                paralaxItem.style.height = 600+"px";
            }
        }
        window.addEventListener('scroll', scrollBanner);
    </script>
    <button class="buttonMenu" onclick="menu()"><img src="img/menu_smart.svg" alt="Sanduiche"></button>
    <div class="col-12" style="height:60px;position:absolute;background-color: #011C2E;z-index:1;"></div>
    <header class="col-12 flex startW" id="menu" style="display: flex;">
    	<a href="." class="col-m-2 flex centerA animated bounceInLeft"><img src="img/MareCia_logo.svg" alt="Mar&Cia" style="max-width:100%;object-fit:contain;"/></a>
        <div class="flex wrap col-m-10">
        	<a href="#produtos" class="col-ss-6 col-m-3 animated bounce center" style="animation-delay:0.5s;"><span><i class="fas fa-life-ring"></i>Produtos</span></a>
        	<a href="#sobre" class="col-ss-6 col-m-3 animated bounce center" style="animation-delay:0.6s;"><span><i class="fas fa-building"></i>Sobre</span></a>
        	<a href="#qualidade" class="col-ss-6 col-m-3 animated bounce center" style="animation-delay:0.7s;"><span><i class="fas fa-check"></i>Qualidade</span></a>
        	<a href="#contato" class="col-ss-6 col-m-3 animated bounce center" style="animation-delay:0.8s;"><span><i class="fas fa-envelope-open"></i>Contato</span></a>
        </div>
    </header>
    <div class="bannerProd col-12 center" style="z-index:0;">
        <div class="center items-center">
            <div class="wow bounceInLeft" style="animation-delay: 1.5s;"><img src="https://www.marecianautica.com.br/uploads/capas/classe4-plat.png" alt="Classe 4 Plataforma"></div>
            <div class="wow bounceInLeft" style="animation-delay: 1.0s;z-index:1;"><img src="https://www.marecianautica.com.br/uploads/capas/classe5-esp.png" alt="Classe 5 Esportivo"></div>
            <div class="wow bounceInUp" style="animation-delay: 0.5s;z-index:2;"><img src="https://www.marecianautica.com.br/uploads/capas/classe2-canga.png" alt="Classe 2 Canga"></div>
            <div class="wow bounceInRight" style="animation-delay: 1.0s;z-index:1;"><img src="https://www.marecianautica.com.br/uploads/capas/CmFl.png" alt="Camisa Flutuadora"></div>
            <div class="wow bounceInRight" style="animation-delay: 1.5s;"><img src="https://www.marecianautica.com.br/uploads/capas/CmPr.png" alt="Camisa Protetora"></div>
        </div>
    </div>
    <div class="col-12 flex center centerText titleMarecia">
        <div class="wow swing" data-wow-duration="1s" data-wow-delay="1s">
            <img src="https://www.marecianautica.com.br/img/marecia-colorido2.svg" style="max-height: 150px;max-width: 100%;">
            <div style="font-size:22px;">Fabricação e Comercialização de Coletes Salva Vidas</div>
        </div>
    </div>
    <div class="col-12 certificacao flex center" id="qualidade" style="z-index:1;">
		<div class="col-12 flex center">
			<div class="col-8 col-m-9 flex items-center"><div>
                <p class="h3 wow fadeInUp" data-wow-delay="0.5s"><b>Empresa Certificada</b></p>
                <p class="h5 wow fadeInUp" data-wow-delay="1s">Possuimos diversos modelos de coletes salva-vidas Homologados pela Marinha do Brasil e com certificação da <b>NBR ISO 9001:15.</b></p>
                <p  class="h3 wow fadeInUp" data-wow-delay="0.5s"><b>Política da Qualidade</b></p>
                <p  class="h5 wow fadeInUp" data-wow-delay="1s">Desenvolver, fabricar e comercializar equipamentos de salvatagem, atendendo as necessidades do cliente e requisitos regulamentares, gerando a melhoria do sistema de gestão da qualidade.</p>
                <p class="h3 wow fadeInUp" data-wow-delay="0.5s"><b>Escopo do SGQ</b></p>
                <p class="h5 wow fadeInUp" data-wow-delay="1s">Desenvolvimento, fabricação e comercialização de coletes salva vidas.</p>
			</div></div>
			<div class="col-4 col-m-3 col-b-3 col-g-2 startW centerV" style="align-content: space-around;">
				<div style="padding:0px 40px 0 40px;width:100%;" class="wow fadeInUp"><object class="col-s-12 col-b-11" type="image/svg+xml" data="img/ISO-9001(2015).svg"  style="visibility: visible; animation-delay: 0.5s; animation-name: rubberBand;"></object></div>
				<div style="padding:0px 40px 0 40px;"><img class="col-s-12 col-b-11 wow fadeInUp" data-wow-delay="0.5s" src="img/marinha.svg" alt="Marinha do Brasil"></div>
			</div>
		</div>
    </div>
    <div class="col-12 flex center wrap" id="produtos" style="padding: 0 0 10vh 0;">
        <h1 class="col-12 center centerText h1" style="padding:5vh 0 5vh 0;">Nossos Produtos</h1>
        <?php
            //Abrir a conexão com o banco
            require_once('rdd/connect.php');
            $consulta = "select post.name_post,post.imgCapa_post,post.post_post from post ORDER BY post.name_post;";
            $query = mysqli_query($conexao,$consulta);
            while($line  =  mysqli_fetch_array($query)){
               echo '<div class="col-s-6 col-4 col-b-3 col-g-2 cubes"><a href="produto.php?nome='.$line['name_post'].'" style="background-image:url(\''.$line['imgCapa_post'].'\');"><div class="center centerText h4">'.$line['name_post'].'</div></a></div>';
            }
        ?>
    </div>
    <div class="col-12 flex center wrap centerText sobre" id="sobre" style="padding:0 5vw 8vh 5vw;">
        <h1 class="col-12 h1">Sobre a Empresa</h1>
        <p class="h2" style="margin-top:0;">Deste 2002</p>
        <p class="h5">Com sede R. Pref. Helmuth Fallgatter n° 1208 em Joinville, Santa Catarina, a Mar & Cia Equipamentos Náuticos atua desde 2002 na fabricação e comercialização de coletes salva vidas para o segmento profissional e esportivo.</p>
        <p class="h5">Possuimos diversos modelos de coletes salva-vidas Homologados pela Marinha do Brasil e certificação da NBR <strong>ISO 9001:15</strong>.</p>
        <div class="col-6 centerW">
            <p class="h2 col-12 center">Missão</p>
            <p class="h5">Desenvolver e produzir e coletes salva-vidas seguros e confortáveis, dentro dos padrões e normas estabelicida pela Marinha do Brasil, Deixando nossos clientes seguro de estar levando o melhor produto possível, visando superar as expectativas dos nossos clientes, colaboradores e fornecedores.</p>
            <p class="h2 col-12 center">Visão</p>
            <p class="h5">Ter sempre o melhor produto desenvolvido, dar segurança ao cliente.</p>
        </div>
        <div class="col-6 flex center wrap">
            <p class="col-12 center h2">Valores</p>
            <div class="leftText items-center" style="display: grid;grid-template-columns: auto auto;grid-gap:40px 0;">
                <div class="h5"><i class="fas fa-check"></i></div><div class="h5 startW">Políticas comerciais exclusivas para pessoa jurídica; </div>
                <div class="h5"><i class="fas fa-check"></i></div><div class="h5 startW">Rigoroso sistema de inspeção; </div>
                <div class="h5"><i class="fas fa-check"></i></div><div class="h5 startW">Cobertura de todo o território nacional; </div>
                <div class="h5"><i class="fas fa-check"></i></div><div class="h5 startW">Atendimento para todos os níveis de orçamentos.</div>
            </div>
        </div>
    </div>
    <?php require_once('rdd/footer.php'); ?>
    <iframe title="Mapa Santa Catarina" class="col-12" style="height:80vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6043987.8524484085!2d-54.00796800834868!3d-28.402730947671937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d94d25c052fff9%3A0x2b277580ed7fab2b!2sSanta+Catarina!5e0!3m2!1spt-BR!2sbr!4v1527217802060" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
    <footer class="links col-12" style="background-color:#000000;padding:40px;">
        <h1 class="col-12 centerText" style="color:#cccccc;margin: 0 0 40px 0;">Acesse também</h1>
        <div class="col-12 flex centerV aroundH">
        	<a href="https://www.facebook.com/MareCiacoletes/"><img src="img/facebook.svg" style="height: 45px;width: 231px;" alt="Facebook"></a>
        	<a href="https://www.instagram.com/marecianautica/"><img src="img/instagram.svg" style="height: 55px;width: auto;" alt="Instagram"></a>
        </div>
        </footer>
    <div style="background-color:#607890;text-decoration:none;color: #ffffff;font-weight: bold;padding: 14px;" class="col-12 center centerText h7"><span>Site desenvolvido por <a href="https://JumperLuko.com" style="color: #000000;"> JumperLuko </a>(Thiago Augusto). <a href="mailto:jumper.luko@gmail.com" style="color: #000000;">jumper.luko@gmail.com</a></span></div>
</body>
</html>
