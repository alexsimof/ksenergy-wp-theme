

      <footer class="footer">
        <div class="container">
          <div class="footer-wrapper">
            <div class="footer-menu-wrap">
              <div class="footer-menu">
                <?php if( have_rows('header-menu') ): ?>
                  <nav class="footer-menu-nav">
                    <p class="footer-menu-title">PAGINAS:</p>
                    <ul>
                      <?php
                      while( have_rows('header-menu') ) : the_row();
                        $header_link = get_sub_field('header-menu-link');
                        $header_text = get_sub_field('header-menu-text');
                      ?>
                      <li>
                        <a href="<?php echo esc_url($header_link);?>" class="footer-link"><?php echo esc_html($header_text);?></a>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  </nav>
                <?php endif; ?>
              </div>
              <div class="footer-social">
                <a href="<?php echo esc_url(get_field('footer-facebook'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-facebook"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-iks'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-iks"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-whatsapp'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-whatsapp"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-telega'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-telega"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-insta'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-insta"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-linked'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-linked"></use>
                  </svg>
                </a>
              </div>
            </div>
            <?php
              if( have_rows('footer-info') ): while( have_rows('footer-info') ) : the_row();
                $footer_logo = get_sub_field('footer-logo');
                $footer_adress = get_sub_field('footer-adress');
                $footer_cif = get_sub_field('footer-cif');
                $footer_mail = get_sub_field('footer-mail');
                $footer_phone = get_sub_field('footer-phone');
                $footer_copy = get_sub_field('footer-copy');
                $footer_web = get_sub_field('footer-web');
                $footer_policy = get_sub_field('footer-policy');
                $footer_link = get_sub_field('policy-link');
                $footer_web_link = get_sub_field('footer-web-link');
                $footer_web_text = get_sub_field('footer-web-text');
            ?>
              <div class="footer-body-wrap">
                <p class="footer-contact-text">CONTACTO:</p>
                <div class="footer-logo">
                  <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>">
                </div>
                <div class="footer-info">
                  <p class="footer-adress"><?php echo esc_html($footer_adress); ?></p>
                  <p class="footer-cif"><?php echo esc_html($footer_cif); ?></p>
                  <div class="footer-contact">
                    <p class="footer-mail"><?php echo esc_html($footer_mail); ?></p>
                    <p class="footer-phone"><?php echo esc_html($footer_phone); ?></p>
                  </div>
                </div>
              </div>
              <div class="footer-social-mobil">
                <a href="<?php echo esc_url(get_field('footer-facebook'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-facebook"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-iks'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-iks"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-whatsapp'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-whatsapp"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-telega'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-telega"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-insta'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-insta"></use>
                  </svg>
                </a>
                <a href="<?php echo esc_url(get_field('footer-linked'));?>">
                  <svg class="footer-icon" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#footer-linked"></use>
                  </svg>
                </a>
              </div>
              <div class="footer-text-wrap">
                <p class="footer-copy"><?php echo esc_html($footer_copy); ?> &copy; <?php echo date(' Y '); ?></p>
                <p class="footer-website"><?php echo ($footer_web); ?>
                  <a href="<?php echo esc_url($footer_web_link); ?>"><?php echo esc_html($footer_web_text); ?></a>
                </p>
                <p class="footer-policy">
                  <a href="<?php echo esc_url($footer_link); ?>"><?php echo esc_html($footer_policy); ?></a>
                </p>
              </div>
            <?php endwhile; 
              endif;
            ?>
          </div>
        </div>
        <span class="back-to-top"></span>
      </footer>
    </div><!-- .body-wrapper -->
    <?php  wp_footer(); ?>
  </body>
</html>