<div class="c-sectBlock__inner">
  <h2 class="c-primaryHeading">
    <span class="c-primaryHeading__ruby">NEWS</span><span class="c-primaryHeading__main"><?php echo __('news__title', 'lawyer_naota') ?></span>
  </h2>
  <div class="c-news">
    <div class="c-news__inner">
      <ul class="c-news__list">
      <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'post',
          'posts_per_page'=> '4',
        );
        $wp_query->query( $my_posts );
        if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
      ?>
        <li class="c-news__item">
          <a class="c-news__item__inner" href="<?php the_permalink(); ?>"><span class="c-news__date"><?php the_time('Y/m/d'); ?></span><span class="c-news__desc"><?php the_title(); ?></span></a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</div>
