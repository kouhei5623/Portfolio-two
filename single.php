  <?php get_header(); ?>
    <!-- メイン開始 -->
    <main>
      <!-- ページトップ開始 -->
      <div class="page_top">
        <a href="#"></a>
      </div>
      <!-- ページトップ終了 -->
      <div class="wrap">
        <!-- 詳細開始 -->
        <?php
        if(have_posts()) :
        while(have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
        <?php
          endwhile;
        endif;
        ?>
        <!-- 詳細終了 -->
      </div>
    </main>
    <!-- メイン終了 -->
  <?php get_footer(); ?>
