<?php
include("simple_html_dom.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nonton Anime 18+ dengan subtitle Indonesia">
    <meta name="keywords" content="hentai, anime, 2D, anime2D, 2d">
    <title>Shelly - Nonton hentai subtitle Indonesia</title>
    <link rel="shortcut icon" type="image/gif" href="img/icon.gif">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-me.css">
    <link rel="stylesheet" href="https://indrijunanda.github.io/RuangAdmin/vendor/fontawesome-free/css/all.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
  <?php include("navbar/navbar.php"); ?>
  <div class="container mt-4 mb-4">
    <div class="alert alert-warning alert-dismissible fade show">
      <strong><i class="fas fa-exclamation-circle"></i> Warning!</strong> <br><br> MAU KASIH TIP KLIK DONASI/MENYUMBANG LALU AKAN DI ARAHKAN KE FACEBOOK TINGGAL CHAT AJA...VIDIO 18+ SALAM NGOCOK-NGOCOK.
    </div>
    <div class="hentai mt-4 mb-4">
      <div class="list-hentai">
        <div class="row mt-2">
          <?php
          $html = str_get_html(file_get_contents("https://nekopoi.care/series/?status=&type=&order=update"));
          foreach($html->find("div[class=bsx]") as $gm){
            foreach($gm->find("a") as $ling){
              foreach($gm->find("img") as $gmb){
                ?>
                  <div class="card ml-4 mt-4 bg-dark" style="width: 142px;">
                    <a href="hentai/info.php?id=<?php $cet=str_replace("https://nekopoi.care/", "", $ling->href); echo $cet; ?>">
                      <img class="card-img-top" src="<?= $gmb->src; ?>" alt="hentai" />
                      <div class="card-body text-left bg-dark">
                        <p class="card-text text-putih"><?= $ling->title; ?></p>
                      </div>
                    </a>
                  </div>
                <?php
              }
            }
          }
          ?>
        </div>
      </div>
    </div>
    <hr class="mt-4 mb-4" color="white">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p>Click navbarnya jika ingin melihat lebih banyak menu</p>
      </div>
    </div>
  </div>
  <footer>
    <span>Made By With ?????? <a href="https://github.com/Shelly-XD" target="_blank">Shelly</a></span>
  </footer>
  <button id="ScrollUpButton" onclick="FunctScroll()"><i class="fas fa-chevron-circle-up"></i></button>
  <script src="js/scroll-up.js"></script>
</body>
</html>
