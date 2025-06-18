<?php
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);

# ----------------------------------------
# Cases
# ----------------------------------------
switch ($activePage) {
  case "institucional":
    $title       = "Institucional";
    $description = "";
    $hasSubtitle = true;
    break;

  case "produto-interna":
    $title       = "Produto Interna";
    $description = "";
    break;
}
$keywords = "";

$proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
$canonical = $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$titleHome = 'Home';
$descriptionHome = '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include_once 'inc/inc.config.php'; ?>


  <!-- Title -->
  <title><?= !empty($title) ? $title : $titleHome  ?><?= $isHome = !isset($isHome) ? ' | Acro Cabos' : ''; ?>
  </title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags -->
  <meta name="description" content="<?= !empty($description) ? $description : $descriptionHome ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <!-- Canonical -->
  <link rel="canonical" href="<?= $canonical ?>">
  <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:site_name" content="<?= $title ?>">
  <meta property="og:keywords" content="<?= $keywords ?>">
  <meta property="og:canonical" content="<?= $canonical ?>">


  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil">
  <meta name="geo.region" content="-BR">
  <meta name="copyright" content="Copyright ">
  <meta name="geo.position" content="-23.539351;-46.681925">
  <meta name="geo.placename" content="São Paulo-SP">
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/carouzel.min.js"></script>

  <!-- Favicon -->
  <link rel="icon" href="img/logo/icon.ico" type="image/x-icon">

  <!-- CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <?php include 'inc/inc.css.php'; ?>
  <?php include 'inc/schema.php'; ?>