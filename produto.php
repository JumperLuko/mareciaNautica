<html lang="pt-br">
<?php require_once('rdd/head.php');
require_once('rdd/connect.php');
?>
<body style="background: url('img/cubes.png') fixed 200px,#c4d6ee;color:#333;justify-content:center;">
    <style>
        @media only screen and (max-width: 959px){
            .menu-cover{
                display:none;
            }
        }
    </style>
    <!-- <div class="col-12 menu-cover" style="height:100px;background-color: #011C2E;"></div> -->
    <header class="col-12 startW" id="menu" style="display: flex;z-index:0;background-color: #011C2E;position: unset;">
    	<a href=".#produtos" class="col-12 wow bounceInLeft center" style="height: 100px;"><span style="font-size: 50px;"><i class="fas fa-angle-double-left"></i>Voltar</span></a>
    </header>
    <?php
    if(isset($_GET['nome'])){
        $consulta = "select post.name_post,post.imgCapa_post,post.post_post from post where post.name_post='".$_GET['nome']."';";
        $query = mysqli_query($conexao,$consulta);
        while($line  =  mysqli_fetch_array($query)){
           echo '<div class="center centerText h1 col-12" style="background-image: url(\'img/onda.svg\');background-attachment: fixed;padding:2vw;color:#E2FDF6;font-weight:bold;"><span class="wow tada">'.$line['name_post'].'</span></div>';
           // echo '<div class="center h3" style="width:100%;">'.$line['imgCapa_post'].'</div>';
           echo $line['post_post'];
        }
    }else {
        echo '</div>';
    }
    ?>
    <script>
    $("#zoom_mw").elevateZoom({gallery:'galery', galleryActiveClass: 'active-zoom', scrollZoom : true, tint:true, tintColour:'#000', tintOpacity:0.0, cursor: 'crosshair', easing:true,zoomWindowWidth:500, zoomWindowHeight:500,zoomWindowPosition: 1, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500,lensFadeIn: true, lensFadeOut: true, zoomWindowOffetx:1, responsive: true});
    // $("#zoom_mw").elevateZoom({gallery:'galery', galleryActiveClass: 'active',zoomWindowWidth:0, zoomWindowHeight:0, galleryActiveClass: "active-galery"});
    //pass the images to Fancybox
	$("#zoom_mw").bind("click", function(e) {
	  var ez =   $('#zoom_mw').data('elevateZoom');
		$.fancybox(ez.getGalleryList());
	  return false;
	});
    </script>
    <footer class="col-12 around wrap contato" id="contato" style="overflow: hidden;background: #000000;">
        <div class="col-12 centerW centerText h1" style="margin:40px 4vw 0 4vw;">Contato</div>
        <div class="centerW centerText h3" style="margin: 40px 1vw 40px 1vw;"><div class="col-12 center"><span><i class="fa fa-phone"></i></span></div><span>(47) 3026-5141</span></div>
        <div class="centerW centerText h3" style="margin: 40px 1vw 40px 1vw;"><div class="col-12 center"><span><i class="fas fa-at col-12"></i></span></div><span>comercial.marecia@gmail.com</span></div>
        <div class="centerW centerText h3" style="margin: 40px 1vw 40px 1vw;"><div class="col-12 center"><span><i class="fas fa-map-marker col-12"></i></span></div><span>Rua Prefeito Helmuth Fallgatter, 1208<br> 89206-100 – Boa Vista – Joinville/SC</span></div>
    </footer>
</body>
</html>
