<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta content="ie=edge" http-equiv="x-ua-compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no,viewport-fit=cover" name="viewport" />
    <meta content="<?php echo __('meta__title', 'lawyer_naota') ?>" name="subject" />
    <meta content="index,follow,noodp" name="robots" />
    <meta content="index,follow" name="googlebot" />
    <title><?php wp_title( '|', true, 'right' );bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( $class ); ?> <?php echo esc_attr( $post->post_name ); ?>>
    <header class="l-header js-header">
      <div class="l-header__inner">
        <nav class="c-navigation js-navigation">
          <div class="c-navigation__inner">
            <?php if(is_home()) {
              echo '<h1 class="c-navigation__logo"><a href="' . esc_url(home_url()) . '">';
              echo bloginfo("name");
              echo '</a></h1>';
            } else {
              echo '<p class="c-navigation__logo"><a href="' . esc_url(home_url()) . '">';
              echo bloginfo("name");
              echo '</a></p>';
            } ?>

            <button class="c-navigation__btn js-navBtn" type="button"><span></span></button>
            <ul class="c-navigation__list">
              <li class="c-navigation__item">
                <a class="c-navigation__link" href="<?php echo get_permalink( 62 ); ?>"><?php echo __('header__introduce_lawyer', 'lawyer_naota') ?></a>
              </li>
              <li class="c-navigation__item">
                <a class="c-navigation__link" href="<?php echo get_permalink( 62 ); ?>#business"><?php echo __('header__topics_handled', 'lawyer_naota') ?></a>
              </li>
              <li class="c-navigation__item">
                <a class="c-navigation__link" href="#contact"><?php echo __('header__contact', 'lawyer_naota') ?></a>
              </li>
              <li class="c-navigation__item">
                <?php echo getChangeLocaleLink(); ?>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
