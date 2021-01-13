    <?php get_header(); ?>
    <main class="l-main">
      <div class="l-main__inner">
        <section class="c-hero c-hero--top js-hero">
          <div class="c-hero__inner">
            <div class="c-hero__detail js-fadeInAnimate">
              <h2 class="c-hero__title">
                <?php echo __('top__main_copy', 'lawyer_naota') ?>
              </h2>
              <p class="c-hero__read">
                 <?php echo __('top__sub_copy', 'lawyer_naota') ?>
              </p>
              <a class="c-primaryBtn" href="#contact"><?php echo __('top__contact_here', 'lawyer_naota') ?></a>
            </div>
          </div>
        </section>
        <section class="c-sectBlock">
          <div class="c-sectBlock__inner">
            <h2 class="c-primaryHeading">
              <span class="c-primaryHeading__ruby">FEATURES</span><span class="c-primaryHeading__main"><?php echo __('top__office_strength', 'lawyer_naota') ?></span>
            </h2>
            <div class="c-feature">
              <div class="c-feature__inner">
                <div class="c-feature__unit c-feature__unit--col3">
                  <article class="c-feature__block">
                    <div class="c-feature__block__inner">
                      <figure class="c-feature__icon">
                        <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/icon_firm.svg" />
                      </figure>
                      <figcaption class="c-feature__caption"><?php echo __('top__multilingual_support', 'lawyer_naota') ?></figcaption>
                      <p class="c-feature__desc">
                        <?php echo __('top__multilingual_support_body', 'lawyer_naota') ?>
                      </p>
                      <a class="c-feature__more" href="<?php echo get_permalink( 62 ); ?>#history"><?php echo __('top__check_career', 'lawyer_naota') ?></a>
                    </div>
                  </article>
                  <article class="c-feature__block">
                    <div class="c-feature__block__inner">
                      <figure class="c-feature__icon">
                        <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/icon_price.svg" />
                      </figure>
                      <figcaption class="c-feature__caption"><?php echo __('top__reasonable_price', 'lawyer_naota') ?></figcaption>
                      <p class="c-feature__desc">
                        <?php echo __('top__reasonable_price_body', 'lawyer_naota') ?>
                      </p>
                      <a class="c-feature__more" href="<?php echo get_permalink( 62 ); ?>#compensation"><?php echo __('top__check_pricing', 'lawyer_naota') ?></a>
                    </div>
                  </article>
                  <article class="c-feature__block">
                    <div class="c-feature__block__inner">
                      <figure class="c-feature__icon">
                        <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/icon_reward.svg" />
                      </figure>
                      <figcaption class="c-feature__caption"><?php echo __('top__records_and_experience', 'lawyer_naota') ?></figcaption>
                      <p class="c-feature__desc">
                        <?php echo __('top__records_and_experience_body', 'lawyer_naota') ?>
                      </p>
                      <a class="c-feature__more" href="<?php echo get_permalink( 62 ); ?>#business"><?php echo __('top__check_topics_handled', 'lawyer_naota') ?></a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="c-sectBlock c-sectBlock--bgGray">
          <div class="c-sectBlock__inner u-pb0">
            <h2 class="c-primaryHeading">
              <span class="c-primaryHeading__ruby">ABOUT US</span><span class="c-primaryHeading__main"><?php echo __('top__introduce_lawyer', 'lawyer_naota') ?></span>
            </h2>
            <article class="c-lawyerIntro">
              <div class="c-lawyerIntro__inner">
                <div class="c-lawyerIntro__detail">
                  <p class="c-lawyerIntro__read">
                    <?php echo __('top__introduce_lawyer_body', 'lawyer_naota') ?>
                  </p>
                  <a class="c-primaryBtn" href="<?php echo get_permalink( 62 ); ?>"><?php echo __('top__detail_here', 'lawyer_naota') ?></a>
                </div>
              </div>
            </article>
          </div>
        </section>
        <section class="c-sectBlock">
          <div class="c-sectBlock__inner">
            <h2 class="c-primaryHeading">
              <span class="c-primaryHeading__ruby">WHAT WE DO</span><span class="c-primaryHeading__main"><?php echo __('top__main_topics_handled', 'lawyer_naota') ?></span>
            </h2>
            <div class="c-works">
            <div class="c-works__inner">
              <article class="c-works__block">
                <div class="c-works__block__inner">
                  <figure class="c-works__thumb">
                    <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/works_img01.png" />
                  </figure>
                  <div class="c-works__detail">
                    <h3 class="c-works__heading">
                      <span class="c-works__heading__ruby">VENTURE LEGAL AFFAIRS</span><span class="c-works__heading__main"><?php echo __('top__vb_corporate_law', 'lawyer_naota') ?></span>
                    </h3>
                    <p class="c-works__desc">
                      <?php echo __('top__vb_corporate_law_body', 'lawyer_naota') ?>
                    </p>
                  </div>
                </div>
              </article>
              <article class="c-works__block">
                <div class="c-works__block__inner">
                  <figure class="c-works__thumb">
                    <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/works_img02.png" />
                  </figure>
                  <div class="c-works__detail">
                    <h3 class="c-works__heading">
                      <span class="c-works__heading__ruby">DEBT COLLECTION</span><span class="c-works__heading__main"><?php echo __('top__collection_of_claim', 'lawyer_naota') ?></span>
                    </h3>
                    <p class="c-works__desc">
                      <?php echo __('top__collection_of_claim_body', 'lawyer_naota') ?>
                    </p>
                  </div>
                </div>
              </article>
              <article class="c-works__block">
                <div class="c-works__block__inner">
                  <figure class="c-works__thumb">
                    <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/works_img03.png" />
                  </figure>
                  <div class="c-works__detail">
                    <h3 class="c-works__heading">
                      <span class="c-works__heading__ruby">TRAFFIC ACCIDENT</span><span class="c-works__heading__main"><?php echo __('top__traffic_accident', 'lawyer_naota') ?></span>
                    </h3>
                    <p class="c-works__desc">
                      <?php echo __('top__traffic_accident_body', 'lawyer_naota') ?>
                    </p>
                  </div>
                </div>
              </article>
              <article class="c-works__block">
                <div class="c-works__block__inner">
                  <figure class="c-works__thumb">
                    <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/works_img04.png" />
                  </figure>
                  <div class="c-works__detail">
                    <h3 class="c-works__heading">
                      <span class="c-works__heading__ruby">SPANISH CASE</span><span class="c-works__heading__main"><?php echo __('top__spanish_topics', 'lawyer_naota') ?></span>
                    </h3>
                    <p class="c-works__desc">
                      <?php echo __('top__spanish_topics_body', 'lawyer_naota') ?>
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
          </div>
        </section>
        <section class="c-sectBlock c-sectBlock--wMin c-sectBlock--bgGray">
          <?php get_template_part('news_section_inner')?>
        </section>
        <section class="c-sectBlock">
          <?php get_template_part('access_section_inner')?>
        </section>
        <section class="c-sectBlock c-sectBlock--bgGray" id="contact">
          <?php get_template_part('contact_section_inner')?>
        </section>
      </div>
    </main>
    <?php get_footer(); ?>
