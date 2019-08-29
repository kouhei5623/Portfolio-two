  <?php get_header(); ?>
    <!-- メイン開始 -->
    <main>
      <!-- メイン開始 -->
      <section class="main">
        <div class="main_message">
          <p>ご覧頂き、誠にありがとうございます。</p>
          <p>現在、大学に通いながら、<br>岐阜を拠点にWebサイト制作を行っております。</p>
          <p>Webサイトを作成するお客様を始め、<br>全ての人の心を引き付けられるようなサイトを作成します。</p>
          <p class="bold">学生が生み出すWebサイト</p>
          <p>是非体験してみてください。</p>
        </div>
      </section>
      <!-- メイン終了 -->
      <!-- サービス開始 -->
      <section class="service">
        <div class="wrap">
          <h2 class="ttl">SERVICE</h2>
          <p class="ttl_description">- 私にできること -</p>
          <div class="service_unit">
            <div class="col">
              <div class="service_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/code.svg" alt="">
              </div>
              <dl class="service_text">
                <dt>コーディング</dt>
                <dd class="text">デザインをもとに見やすく、更新のかけやすい丁寧なコーディングを行います。また、近年では、スマートフォンからのWebサイトへのアクセスが多く、レスポンシブ対応は必須です。レスポンシブ対応も受け付けておりますので、お気軽にご相談ください。その他既存サイトの修正なども受け付けております。</dd>
              </dl>
            </div>
            <div class="col">
              <div class="service_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/design.svg" alt="">
              </div>
              <dl class="service_text">
                <dt>デザイン</dt>
                <dd class="text">お客様のご希望に沿ったデザインでWebサイトを作成させて頂きます。なるべく無駄を省き、本当に必要な内容だけを取捨選択し、見やすく分かりやすいデザインを作成します。シンプル・明るい・かっこいいなど、お客様の理想のイメージをお聞かせください。</dd>
              </dl>
            </div>
            <div class="col">
              <div class="service_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt="">
              </div>
              <dl class="service_text">
                <dt>ワードプレス</dt>
                <dd class="text">最近では、WordPress（ワードプレス）で作成されたWebサイトがほとんどです。WordPress自体には、ブログとしての機能やページを更新するための仕組みが組み込まれているため、サイトを作成・更新が今までのツールよりも簡単にできるという利点があります。是非、ご相談ください。</dd>
              </dl>
            </div>
          </div>
        </div>
      </section>
      <!-- サービス終了 -->
      <!-- ブログ開始 -->
      <section class="blog">
        <div class="wrap">
          <h2 class="ttl">BLOG</h2>
          <p class="ttl_description">- 出来事やお知らせ -</p>
          <div class="blog_unit">
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 9,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php
            if($the_query->have_posts()) :
            while($the_query->have_posts() ) : $the_query->the_post();
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
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </section>
      <!-- ブログ終了 -->
      <!-- 実績開始 -->
      <section class="work">
        <div class="wrap">
          <h2 class="ttl">WORKS</h2>
          <p class="ttl_description">- 制作実績 -</p>
          <div class="blog_unit">
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 9,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'works',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php
            if($the_query->have_posts()) :
            while($the_query->have_posts() ) : $the_query->the_post();
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
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </section>
      <!-- 実績終了 -->
      <!-- お問い合わせ開始 -->
      <section class="contact">
        <div class="wrap">
          <h2 class="ttl">CONTACT</h2>
          <p class="ttl_description">- お問い合わせ -</p>
          <?php echo do_shortcode('[contact-form-7 id="54" title="コンタクトフォーム 1"]'); ?>
        </div>
      </section>
      <!-- お問い合わせ終了 -->
    </main>
    <!-- メイン終了 -->
  <?php get_footer(); ?>
