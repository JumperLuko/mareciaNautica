<html>
<?php require_once('rdd/head.php'); ?>
<body style="background:#063E61;color:#ffffff;">
    <style>
        @media only screen and (max-width: 959px){
            .menu-cover{
                display:none;
            }
        }
    </style>
    <div class="col-12 menu-cover" style="height:100px;background-color: #011C2E;"></div>
    <header class="col-12 startW" id="menu" style="display: flex;z-index:0;">
    	<a href="." class="col-12 wow bounceInLeft center" style="height: 100px;"><span style="font-size: 50px;"><i class="fas fa-angle-double-left"></i>Voltar</span></a>
    </header>

    <div class="center h1 col-12" style="background-image: url('img/onda.svg');background-attachment: fixed;padding:2vw;color:#E2FDF6;font-weight:bold;">
        <span class="wow tada">Classe 5</span>
    </div>
    <div class="col-6 centerHW">
        <img id="zoom_mw" src="temp/capas/classe5-esp.png" data-zoom-image="http://www.velho.marecianautica.com.br/uploads/produtos/V/fotos/editado/V-Az-frenteLado.jpg"/ height="500px">
        <div><span style="position: absolute;">* Use o scroll(roleta do mouse) para ver mais</span></div>
        <div id="galery" class="col-12 centerW">
            <a href="#" data-image="temp/capas/classe5-esp.png" data-zoom-image="http://www.velho.marecianautica.com.br/uploads/produtos/V/fotos/editado/V-Az-frenteLado.jpg">
                <img id="zoom_mw" src="temp/capas/classe5-esp.png" data-zoom-image="temp/capas/classe5-esp.png"/ height="300px">
            </a>
            <a href="#" data-image="temp/capas/AxFl.png" data-zoom-image="http://www.velho.marecianautica.com.br/uploads/produtos/AxFl/fotos/frente/Aux_frente_4288x3216.jpg">
                <img id="zoom_mw" src="temp/capas/AxFl.png" data-zoom-image="temp/capas/AxFl.png"/>
            </a>
        </div>
    </div>
    <div class="col-6 wrap">
        <div class="col-12 centerText" style="display:block;">
            <p class="h2 center">Tamanhos</p>
            <p class="h3">P até 35Kg</p>
            <p class="h3">M até 55Kg</p>
            <p class="h3">G até 110Kg</p>
            <p class="h3">GG acima 110Kg</p>
        </div>
        <div class="col-12 wrap">
            <p class="h2 col-12 centerH">Cores</p>
            <div class="centerHW top col-12">
                <div style="background-color:#e86e21;height:100px;width:100px;"></div>
                <div style="background-color:#ebe024;height:100px;width:100px;"></div>
                <div style="background-color:#e0333b;height:100px;width:100px;"></div>
                <div style="background-color:#215793;height:100px;width:100px;"></div>
                <div style="background-color:#13775e;height:100px;width:100px;"></div>
                <div style="background-color:#0a0a0a;height:100px;width:100px;"></div>
            </div>
        </div>
    </div>
    <div class="col-12" style="display:block; padding:4vw;">
        <p class="h3"><strong>Modelo Classe V</strong> . Para atividades esportivas de alta velocidade como: jet-ski, banana-boat, esqui aquático, windsurf, pesca e pequenos veleiros. Em águas brasileiras, permite homologar embarcações de até 5m para mar aberto e de até 24m para embarcações em águas abrigadas.</p>
    </div>
    <div class="col-12 center h2 wrap" style="padding:0 0 4vw 0;"><span>Ficha tecnica</span><span class="col-12 centerH"><i class="fas fa-download" style="font-size:100px;"></i></span></div>
    <script>
    $("#zoom_mw").elevateZoom({gallery:'galery', galleryActiveClass: 'active', scrollZoom : true, tint:true, tintColour:'#000', tintOpacity:0.7, cursor: 'none', easing:true,zoomWindowWidth:500, zoomWindowHeight:500,zoomWindowPosition: 1, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, galleryActiveClass: "active-zoom",lensFadeIn: true, lensFadeOut: true, zoomWindowOffetx:1, responsive: true});
    // $("#zoom_mw").elevateZoom({gallery:'galery', galleryActiveClass: 'active',zoomWindowWidth:0, zoomWindowHeight:0, galleryActiveClass: "active-galery"});
    //pass the images to Fancybox
	$("#zoom_mw").bind("click", function(e) {
	  var ez =   $('#zoom_mw').data('elevateZoom');
		$.fancybox(ez.getGalleryList());
	  return false;
	});
    </script>
    <?php require_once('rdd/footer.php'); ?>
</body>
</html>
