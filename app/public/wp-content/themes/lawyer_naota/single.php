<?php get_header(); ?>
<main class="l-main">
  <div class="l-main__inner">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section class="c-hero js-hero" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/about_hero.png);">
      <div class="c-hero__inner">
        <div class="c-hero__detail js-fadeInAnimate">
          <h1 class="c-hero__title"><?php the_title(); ?></h1>
          <p class="c-hero__read"><?php the_time('Y年m月d日'); ?></p>
        </div>
      </div>
    </section>
    <ol class="p-breadcrumbs">
      <li class="p-breadcrumbs__item">
        <a href="/">HOME</a>
      </li>
      <li class="p-breadcrumbs__item">
        <?php the_title(); ?>
      </li>
    </ol>
    <section class="c-sectBlock c-sectBlock--write">
      <div class="c-sectBlock__inner">
        <article class="c-writeBlock">
          <div class="c-writeBlock__inner">
            <?php the_content(); ?>
          </div>
        </article>
      </div>
    </section>
    <?php endwhile; endif; ?>
    <section class="c-sectBlock c-sectBlock--wMin">
      <?php get_template_part('news_section_inner')?>
    </section>
    <section class="c-sectBlock c-sectBlock--bgGray">
      <?php get_template_part('contact_section_inner')?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
