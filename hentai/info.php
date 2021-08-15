<?php

  include("../simple_html_dom.php");
  if (empty($_GET)){
    header("Location: ../hentai");
  }
  $ht = str_get_html(file_get_contents("http://209.126.6.6/".$_GET["id"]));
  
  function ambil_gambar(){
    global $ht;
    foreach($ht->find("img[class=attachment- size- wp-post-image]") as $pul){
    	return $pul->src;
    }
  }
  
  function ambil_title(){
    global $ht;
    foreach($ht->find("h1[class=entry-title]") as $judul){
	    return trim($judul->plaintext);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nonton Anime dengan subtitle Indonesia">
    <meta name="keywords" content="hentai, anime, 2D, anime2D, 2d">
    <title>KawaiDesu - Nonton hentai subtitle Indonesia</title>
    <link rel="shortcut icon" type="image/gif" href="../img/icon.gif">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-me.css">
    <link rel="stylesheet" href="https://indrijunanda.github.io/RuangAdmin/vendor/fontawesome-free/css/all.min.css">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
<body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container mt-4 mb-4">
    <div class="card">
      <img src="<?= ambil_gambar(); ?>" alt="animek">
      <div class="card-body bg-dark">
        <h5 class="text-center"><?= ambil_title(); ?></h5>
        <hr color="white" />
        <?php
        foreach($ht->find("div[class=entry-content]") as $vir){
          foreach($vir->find("p") as $txt){
            ?>
		        <b><?= trim($txt->plaintext)."<br>"; ?></b>
		        <?php
        	}
        }
        ?>
      </div>
    </div>
    <div class="title mt-3">
      <b>EPISODE <span class="color-black">|</span> Subtitle Indonesia</b>
    </div>
    <div class="eg">
      <?php
      foreach($ht->find("div[class=eplister]") as $val){
	      foreach($val->find("a") as $li){
		      foreach($li->find("div[class=epl-num]") as $ahr){
			      $a = $ahr->plaintext;
		      }
		      foreach($li->find("div[class=epl-title]") as $ti){
			      $b = $ti->plaintext;
		      }
		      ?>
          <a href="nonton.php?name=<?php $cut = str_replace("http://209.126.6.6/", "", $li->href); echo $cut; ?>"><h6><span class="text-left"><?= $a; ?>.</span> <span class="text-center"><?= $b; ?></span></h6></a><br>
		      <?php
	      }
      }
      ?>
    </div>
  </div>
  <footer>
    <span>Made By With ❤️ <a href="https://github.com/Shelly-XD" target="_blank">Shelly</a></span>
  </footer>
  <button id="ScrollUpButton" onclick="FunctScroll()"><i class="fas fa-chevron-circle-up"></i></button>
  <script src="../js/scroll-up.js"></script>
</body>
</html>
