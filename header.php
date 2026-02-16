<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="body-wrapper">
    <header class="header">
      <div class="container">
        <div class="header-wrapper">
          <?php
            $logo = get_field('header-logo');
            if($logo): ?>
            <div class="header-logo">
              <a href="/">
                <img src="<?php echo esc_url($logo['url']);?>" alt="<?php echo esc_attr($logo['alt']);?>">
              </a>
            </div>
          <?php endif; 
            if( have_rows('header-menu') ): ?>
              <nav class="header-menu">
                <ul>
                  <?php
                  while( have_rows('header-menu') ) : the_row();
                    $header_link = get_sub_field('header-menu-link');
                    $header_text = get_sub_field('header-menu-text');
                  ?>
                  <li>
                    <a href="<?php echo esc_url($header_link);?>" class="header-link"><?php echo esc_html($header_text);?></a>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </nav>
            <?php endif; ?>
  
          <div class="header-lang">
            <ul class="header-lang-wrap">
              <?php pll_the_languages(array('display_names_as' => 'slug', 'show_names' => 0)); ?>
            </ul>
          </div> 


          <div class="header-mobil-menu">
            <span class="header-mobil-close"></span>
            <?php
              $logo_menu = get_field('header-menu-logo-mobil');
              if($logo_menu): ?>
              <div class="header-mobil-logo">
                <a href="/">
                  <img src="<?php echo esc_url($logo_menu['url']);?>" alt="<?php echo esc_attr($logo_menu['alt']);?>">
                </a>
              </div>
            <?php endif; ?>
            <nav class="header-mobil-nav">
              <?php if( have_rows('header-menu') ): ?>
                <ul>
                  <?php
                  while( have_rows('header-menu') ) : the_row();
                    $header_link = get_sub_field('header-menu-link');
                    $header_text = get_sub_field('header-menu-text');
                  ?>
                  <li>
                    <a href="<?php echo esc_url($header_link);?>" class="header-link"><?php echo esc_html($header_text);?></a>
                  </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </nav>
            <div class="header-mobil-social">
              <?php if( have_rows('main-group',2) ): while( have_rows('main-group',2) ): the_row(); 
                $facebook = get_sub_field('icon-link-facebook');
                $iks = get_sub_field('icon-link-iks');
                $whatsapp = get_sub_field('icon-link-whatsapp');
                $telega = get_sub_field('icon-link-telega');
                $insta = get_sub_field('icon-link-insta');
                $linked = get_sub_field('icon-link-linked');
              ?>
              <a href="<?php echo esc_url($facebook);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-facebook"></use>
                </svg>
              </a>
              <a href="<?php echo esc_url($iks);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-iks"></use>
                </svg>
              </a>
              <a href="<?php echo esc_url($whatsapp);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-whatsapp"></use>
                </svg>
              </a>
              <a href="<?php echo esc_url($telega);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-telega"></use>
                </svg>
              </a>
              <a href="<?php echo esc_url($insta);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-insta"></use>
                </svg>
              </a>
              <a href="<?php echo esc_url($linked);?>">
                <svg class="header-menu-icon" aria-hidden="true">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-linked"></use>
                </svg>
              </a>
              <?php endwhile;
              endif;
              ?>
            </div>
          </div>

          <a href="" class="header-menu-toggle">
            <span></span>
          </a>
        </div>
      </div>
    </header>
