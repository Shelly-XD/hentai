<?php

  $url = $_SERVER["HTTP_HOST"];
  if (empty($_SERVER["REQUEST_SCHEME"])){
    $ssl = "http://";
  }else{
    $ssl = $_SERVER["REQUEST_SCHEME"]."://";
  }
?>
  <nav class="navbar navbar-expand-md navbar-light bg-pink">
    <a href="<?= $ssl.$url; ?>" class="navbar-brand"><img src="../img/logor.jpg" with="50" height="40" alt="logo"></a>
    <button type="button" class="exa navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <i class="fas fa-align-right fa-1x color-black"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav tks-mono">
        <a href="<?= $ssl.$url; ?>" class="nav-item nav-link tks-mono active"><i class="fas fa-home"></i> Home</a>
        <a href="<?= $ssl.$url.'/hentai'; ?>" class="nav-item tks-mono nav-link active"><i class="fas fa-cat"></i> Hentai</a>
        <a href="https://saweria.co/RizkyDev" target="_blank" class="nav-item tks-mono nav-link active"><i class="fas fa-donate"></i> Donate</a>
      </div>
    </div>
  </nav>