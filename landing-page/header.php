<?php

   $title       = ((isset($title) && !empty($title)) ? $title : '');
   $description = ((isset($description) && !empty($description)) ? $description : '');
   $keywords    = ((isset($keywords) && !empty($keywords)) ? $keywords : '');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="<?= $title;?>" />
    <meta name="description" content="<?= $description;?>" />
    <meta name="keywords" content="<?= $keywords;?>" />
    <meta name="robots" content="index,follow" />

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <link rel="manifest" href="/manifest.json">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title;?>" />
    <meta property="og:description" content="<?= $description;?>" />

    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="" />

    <link rel="icon" type="image/ico" href="/favicon.ico" />


    <title><?= $title;?></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Ubuntu:500|Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/styles.min.css" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="header">
      <header>
       <div class="header__container header__grid">
          <picture>
            <source srcset="assets/images/social-mail-logo.webp" type="image/webp">
            <source srcset="assets/images/social-mail-logo.png" type="image/png">
            <img src="assets/images/social-mail-logo.png" alt="Social Mail">
          </picture>
          <a id="openNavgation" href="javascript:;" aria-label="Open Navigation" class="only-mobile button__navigation--mobile" title="Close"><span class="icon icon-menu"></span></a>
          <nav class="navigation">
            <a id="closeNavigation" href="javascript::void(null);" aria-label="Close Navigation" class="only-mobile button__navigation--mobile" title="Open"><span class="icon icon-close"></span></a>
            <a class="navigation--link" href="#about" title="About">About</a>
            <a class="navigation--link" href="#careers" title="Careers">Careers</a>
            <a class="navigation--link" href="#contact" title="Contact">Contact</a>
          </nav>
       </div>
      </header>
      <article class="header__container">
       <div class="header__webdoor">
          <div class="header__webdoor--item">
            <h1 class="header__webdoor--title">Email Marketing</h1>
            <p class="header__webdoor--description">It seems like hundreds of new iWatch apps pop up every week, but which ones should you bother trying?</p>
            <a class="button__default" href="//www.bancopan.com.br" target="_blank" title="Learn More Email Marketing">Learn More</a>
          </div>
          <div class="header__webdoor--item">
            <picture>
              <source srcset="assets/images/email-marketing.webp" type="image/webp">
              <source srcset="assets/images/email-marketing.png" type="image/png">
              <img src="assets/images/email-marketing.png" alt="Social Mail" class="header__webdoor--image">
            </picture>
          </div>
       </div>
      </article>
    </section>