<?php get_header(); ?>
    <!-- メイン開始 -->
    <main>
      <!-- ブログ開始 -->
      <section class="blog">
        <div class="wrap">
          <h2 class="ttl">BLOG</h2>
          <p class="ttl_description">- 出来事やお知らせ -</p>
          <div class="blog_unit">
            <?php
            if(have_posts()) :
            while(have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
              <figure>
              <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
              <?php else: ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/no_img.png" alt=""></a>
              <?php endif; ?>
              </figure>
              <h2 class="bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
            </article>
            <?php
              endwhile;
            endif;
            ?>
          </div>
          <?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?>
        </div>
      </section>
      <!-- ブログ終了 -->
    </main>
    <!-- メイン終了 -->
<?php get_footer(); ?>
