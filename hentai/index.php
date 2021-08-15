<?php include("../simple_html_dom.php"); ?>
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
    <form action="search.php" method="get" class="mb-4">
      <div class="input-group">
        <input type="search" name="q" class="form-control rounded" placeholder="example: bitch" aria-label="Search" aria-describedby="search-addon" />
        <button type="submit" class="btn btn-primary ml-1"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <div class="hentai mt-4 mb-4">
      <div class="list-hentai">
        <div class="row mt-2">
          <?php
            $html = str_get_html(file_get_contents("http://209.126.6.6/series/?status=&type=&order=update"));
            foreach($html->find("div[class=bsx]") as $bsx){
              foreach($bsx->find("a") as $hrf){
                foreach($bsx->find("img") as $gbr){
                  ?>
                  <div class="card ml-4 mt-4 bg-dark" style="width: 142px;">
                    <a href="info.php?id=<?php $cet=str_replace("http://209.126.6.6/", "", $hrf->href); echo $cet; ?>">
                      <img class="card-img-top" src="<?= $gbr->src; ?>" alt="hentai" />
                      <div class="card-body text-left bg-dark">
                        <p class="card-text text-putih"><?= $hrf->title; ?></p>
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
    <nav>
    <ul class="pagination justify-content-center">
      <?php
        foreach ($html->find("div[class=hpage]") as $got){
          foreach($got->find("a") as $gut){
            $goy = str_replace(array("?page=","&status=&type=&order=update"), array("",""), $gut->href);
            ?>
              <li class="page-item"><a href="next.php?page=<?= $goy; ?>" class="page-link">Next</a></li>
            <?php
          }
        }
      ?>
    </ul>
</nav>
  </div>
  <footer>
    <span>Made By With ❤️ <a href="https://github.com/Shelly-XD" target="_blank">Shelly</a></span>
  </footer>
  <button id="ScrollUpButton" onclick="FunctScroll()"><i class="fas fa-chevron-circle-up"></i></button>
  <script src="../js/scroll-up.js"></script>
</body>
</html>
