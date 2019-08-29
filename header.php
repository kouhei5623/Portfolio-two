<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      if(!is_home()){
        wp_title('|', true, 'right');
      }
      bloginfo('name');
      ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- GoogleFont読み込み -->
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
    <!-- fontawesome読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('kouhei-js', get_template_directory_uri() . '/script.js');
  wp_head();
  ?>
  </head>
  <body>
    <!-- ヘッダー開始 -->
    <header>
      <div class="header">
        <h1 class="main_ttl"><a href="<?php echo home_url(); ?>">Kouhei Fukada</a></h1>
        <p class="description">- <?php bloginfo('description'); ?> -</p>
        <nav class="header_menu">
          <?php
            $args = array(
              'menu' => 'global-navigation',
              'container' => 'false',
            );
            wp_nav_menu($args);
          ?>
        </nav>
      </div>
    </header>
    <!-- ヘッダー終了 -->
