<?php
  include("../simple_html_dom.php");
  if (empty($_GET)){
    header("Location: ../hentai");
  }
  $name = $_GET["name"];
  
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
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      Jangan lupa kecilkan volumenya brother
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="card border-0">
      <?php
      $ht = str_get_html(file_get_contents("http://209.126.6.6/".$name));
      foreach($ht->find("iframe[height=100%]") as $vid){
	      $ved = $vid->src;
      }
      foreach($ht->find("h1[class=entry-title]") as $titlee){
	      $judult = $titlee->plaintext;
      }
      ?>
      <iframe src="<?= $ved; ?>" title="Video-hentai" width="100%" height="100%" allowfullscreen></iframe>
      <div class="card-body bg-dark">
        <h5 class="text-center"><?= $judult; ?></h5>
      </div>
    </div>
    <div class="title mt-3">
      <b>DOWNLOAD VIDEO SUBTITLE INDONESIA</b>
    </div>
    <table class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col"><i>Server</i></th>
        <th scope="col"><i>Quality</i></th>
        <th scope="col"><i>Links</i></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $url; ?></td>
        <td>-</td>
        <?php
          foreach($ht->find("a[rel=nofollow noopener noreferrer]") as $dol){
          	$vei = $dol->href;
          }
        ?>
        <td><a href="<?= $vei; ?>" class="btn btn-primary" target="_blank">download</a></td>
      </tr>
    </tbody>
  </table>
  <hr color="white">
  <p class="text-center">Share video ini ke teman anda dengan klik <a href="whatsapp://send?text=<?= $judult." ".$ssl.$url."/hentai/nonton.php?name=".$name; ?>" target="_blank"><i>Share</i></a></p>
  </div>
  <footer>
    <span>Made By With ❤️ <a href="https://github.com/Shelly-XD" target="_blank">Shelly</a></span>
  </footer>
  <button id="ScrollUpButton" onclick="FunctScroll()"><i class="fas fa-chevron-circle-up"></i></button>
  <script src="../js/scroll-up.js"></script>
</body>
</html>
