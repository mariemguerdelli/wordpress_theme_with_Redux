<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package redux
 */

?>

 <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2><?php the_field('features_title'); ?></h2>
              <?php if (the_field('features_title_description')) { ?>
              <p><?php the_field('features_title_description'); ?></p>
            <?php } ?>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon'); ?>"></span>
                    <h4><?php the_field('features_header'); ?></h4>
                    <p><?php the_field('features_text'); ?></p>
                    <a href="<?php the_field('features_button_link'); ?>">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon_2'); ?>"></span>
                    <h4><?php the_field('features_header_2'); ?></h4>
                    <p><?php the_field('features_text_2'); ?></p>
                    <a href="<?php the_field('features_button_link_2'); ?>">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon_3'); ?>"></span>
                    <h4><?php the_field('features_header_3'); ?></h4>
                    <p><?php the_field('features_text_3'); ?></p>
                    <a href="<?php the_field('features_button_link_3'); ?>">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon_4'); ?>"></span>
                    <h4><?php the_field('features_header_4'); ?></h4>
                    <p><?php the_field('features_text_4'); ?></p>
                    <a href="<?php the_field('features_button_link_4'); ?>">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon_5'); ?>"></span>
                    <h4><?php the_field('features_header_5'); ?></h4>
                    <p><?php the_field('features_text_5'); ?></p>
                    <a href="<?php the_field('features_button_link_5'); ?>">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?php the_field('features_icon_6'); ?>"></span>
                    <h4><?php the_field('features_header_6'); ?></h4>
                    <p><?php the_field('features_text_5'); ?></p>
                    <a href="<?php the_field('features_button_link_6'); ?>">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

