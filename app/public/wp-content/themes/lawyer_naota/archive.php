<?php
  /*
  Template Name: Archives
  */
 get_header(); ?>
<main class="l-main">
  <div class="l-main__inner">
    <section class="c-hero js-hero">
      <div class="c-hero__inner">
        <div class="c-hero__detail js-fadeInAnimate">
          <h2 class="c-hero__title">
            <?php echo __('archive__title', 'lawyer_naota') ?>
          </h2>
          <p class="c-hero__read">
            <?php echo __('archive__subtitle', 'lawyer_naota') ?>
          </p>
        </div>
      </div>
    </section>
    <ol class="p-breadcrumbs">
      <li class="p-breadcrumbs__item">
        <a href="/"><?php echo __('breadcrumbs__home', 'lawyer_naota') ?></a>
      </li>
      <li class="p-breadcrumbs__item">
        <?php echo __('archive__title', 'lawyer_naota') ?>
      </li>
    </ol>
    <section class="c-sectBlock">
      <div class="c-sectBlock__inner">
        <h2 class="c-primaryHeading">
          <span class="c-primaryHeading__ruby">NEWS LIST</span>
          <span class="c-primaryHeading__main"><?php echo __('archive__description', 'lawyer_naota') ?></span>
        </h2>
        <div class="c-article">
          <div class="c-article__inner">
            <div class="c-article__unit c-article__unit--col3">
              <?php
                $i = 1; //カウント用
                $wp_query = new WP_Query();
                $my_posts = array(
                  'post_type' => 'post',
                  'posts_per_page'=> '7',
                );
                $wp_query->query( $my_posts );
                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
                <?php if($i === 1): ?>
                <article class="c-article__block c-article__block--full">
                  <div class="c-article__block__inner">
                    <figure class="c-article__thumb"><?php the_post_thumbnail('large'); ?></figure>
                    <div class="c-article__detail">
                      <h3 class="c-article__heading"><?php the_title(); ?></h3>
                      <p class="c-article__date"><?php the_time('Y年m月d日'); ?></p>
                      <p class="c-article__desc"><?php the_field('Overview', false); ?></p>
                      <a class="c-primaryBtn" href="<?php the_permalink(); ?>"><?php echo __('archive__read_more', 'lawyer_naota') ?></a>
                    </div>
                  </div>
                </article>
                <?php else: ?>
                <article class="c-article__block">
                  <a class="c-article__block__inner" href="<?php the_permalink(); ?>">
                    <figure class="c-article__thumb"><?php the_post_thumbnail( 'medium' ); ?></figure>
                    <div class="c-article__detail">
                      <h3 class="c-article__heading"><?php the_title(); ?></h3>
                      <p class="c-article__date"><?php the_time('Y年m月d日'); ?></p>
                    </div>
                  </a>
                </article>
                <?php endif ?>
                <?php $i += 1 ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
            <div class="u-text-center">
              <a class="c-primaryBtn" href="<?php echo get_permalink( 52 ); ?>"><?php echo __('archive__see_more', 'lawyer_naota') ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="c-sectBlock c-sectBlock--bgGray">
      <?php get_template_part('contact_section_inner')?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
