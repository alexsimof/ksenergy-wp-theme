

  <?php get_header(); ?>

  <div class="popup-bg"></div>

  <!-- popUp 1-->
  <?php
    if( have_rows('popup_1') ): 
      while( have_rows('popup_1') ): the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $description = get_sub_field('description');
      $btn_url = get_sub_field('btn-url');
      $btn_text = get_sub_field('btn-text');
  ?>
    <div id="popup_1" class="popup">
      <span data-popup-close="popup_1" class="popup-close1 popup-close">
        <h2 class="popup-title-mob"><?php echo esc_html($title); ?></h2>
      </span>
      <div class="popup-wrapper">
        <div class="popup-info">
          <div class="popup-image">
            <img class="popup-img1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          
          <div class="popup-text">
              <?php echo ($description); ?>
          </div>
        </div>
        <div class="popup-description">
          <div class="popup-details">
            <h2 class="popup-title"><?php echo esc_html($title); ?></h2>
            <h3 class="popup-subtitle"><?php echo esc_html($subtitle); ?></h3>
            <div class="popup-tabl">
              <?php if( have_rows('details') ): while( have_rows('details') ): the_row();
                $name = get_sub_field('name');
                $info = get_sub_field('info');
              ?>
                <p>
                  <span><?php echo esc_html($name); ?></span><span><?php echo esc_html($info); ?></span>
                </p>
              <?php endwhile; 
                endif; ?>
            </div>
          </div>
          <div class="popup-button">
            <a data-popup-close="popup_1" href="<?php echo esc_html($btn_url); ?>" class="popup-btn"><?php echo esc_html($btn_text); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
    endif; ?>

  <!-- popUp 2-->
  <?php
    if( have_rows('popup_2') ): 
      while( have_rows('popup_2') ): the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $description = get_sub_field('description');
      $btn_url = get_sub_field('btn-url');
      $btn_text = get_sub_field('btn-text');
  ?>
    <div id="popup_2" class="popup">
      <span data-popup-close="popup_2" class="popup-close2 popup-close">
        <h2 class="popup-title-mob"><?php echo esc_html($title); ?></h2>
      </span>
      <div class="popup-wrapper">
        <div class="popup-info">
          <div class="popup-image">
            <img class="popup-img2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="popup-text">
              <?php echo ($description); ?>
          </div>
        </div>

        <div class="popup-description">
          <div class="popup-details">
            <h2 class="popup-title"><?php echo esc_html($title); ?></h2>
            <h3 class="popup-subtitle"><?php echo esc_html($subtitle); ?></h3>
            <div class="popup-tabl">
              <?php if( have_rows('details') ): while( have_rows('details') ): the_row();
                $name = get_sub_field('name');
                $info = get_sub_field('info');
              ?>
                <p>
                  <span><?php echo esc_html($name); ?></span><span><?php echo esc_html($info); ?></span>
                </p>
              <?php endwhile; 
                endif; ?>
            </div>
          </div>
          <div class="popup-button">
            <a data-popup-close="popup_2" href="<?php echo esc_html($btn_url); ?>" class="popup-btn"><?php echo esc_html($btn_text); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
    endif; ?>

  <!-- popUp 3-->
  <?php
    if( have_rows('popup_3') ): 
      while( have_rows('popup_3') ): the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $description = get_sub_field('description');
      $btn_url = get_sub_field('btn-url');
      $btn_text = get_sub_field('btn-text');
  ?>
    <div id="popup_3" class="popup">
      <span data-popup-close="popup_3" class="popup-close3 popup-close">
        <h2 class="popup-title-mob"><?php echo esc_html($title); ?></h2>
      </span>
      <div class="popup-wrapper">
        <div class="popup-info">
          <div class="popup-image">
            <img class="popup-img3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="popup-text">
              <?php echo ($description); ?>
          </div>
        </div>
        <div class="popup-description">
          <div class="popup-details">
            <h2 class="popup-title"><?php echo esc_html($title); ?></h2>
            <h3 class="popup-subtitle"><?php echo esc_html($subtitle); ?></h3>
            <div class="popup-tabl">
              <?php if( have_rows('details') ): while( have_rows('details') ): the_row();
                $name = get_sub_field('name');
                $info = get_sub_field('info');
              ?>
                <p>
                  <span><?php echo esc_html($name); ?></span><span><?php echo esc_html($info); ?></span>
                </p>
              <?php endwhile; 
                endif; ?>
            </div>
          </div>
          <div class="popup-button">
            <a data-popup-close="popup_3" href="<?php echo esc_html($btn_url); ?>" class="popup-btn"><?php echo esc_html($btn_text); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
    endif; ?>

  <!-- popUp 4-->
  <?php
    if( have_rows('popup_4') ): 
      while( have_rows('popup_4') ): the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $description = get_sub_field('description');
      $btn_url = get_sub_field('btn-url');
      $btn_text = get_sub_field('btn-text');
  ?>
    <div id="popup_4" class="popup">
      <span data-popup-close="popup_4" class="popup-close4 popup-close">
        <h2 class="popup-title-mob"><?php echo esc_html($title); ?></h2>
      </span>
      <div class="popup-wrapper">
        <div class="popup-info">
          <div class="popup-image">
            <img class="popup-img4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="popup-text">
              <?php echo ($description); ?>
          </div>
        </div>
        <div class="popup-description">
          <div class="popup-details">
            <h2 class="popup-title"><?php echo esc_html($title); ?></h2>
            <h3 class="popup-subtitle"><?php echo esc_html($subtitle); ?></h3>
            <div class="popup-tabl">
              <?php if( have_rows('details') ): while( have_rows('details') ): the_row();
                $name = get_sub_field('name');
                $info = get_sub_field('info');
              ?>
                <p>
                  <span><?php echo esc_html($name); ?></span><span><?php echo esc_html($info); ?></span>
                </p>
              <?php endwhile; 
                endif; ?>
            </div>
          </div>
          <div class="popup-button">
            <a data-popup-close="popup_4" href="<?php echo esc_html($btn_url); ?>" class="popup-btn"><?php echo esc_html($btn_text); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
    endif; ?>


  <!-- popUp 5 last-->
  <?php
    if( have_rows('popup_5') ): 
      while( have_rows('popup_5') ): the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $description = get_sub_field('description');
      $btn_url = get_sub_field('btn-url');
      $btn_text = get_sub_field('btn-text');
  ?>
    <div id="popup_last" class="popup">
      <span data-popup-close="popup_last" class="popup-close-last popup-close">
        <h2 class="popup-title-mob popup-title-mob-last last"><?php echo esc_html($title); ?></h2>
      </span>
      <div class="popup-wrapper">
        <div class="popup-info">
          <div class="popup-image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="popup-text">
              <?php echo ($description); ?>
          </div>
        </div>
        <div class="popup-description">
          <div class="popup-details">
            <h2 class="popup-title last"><?php echo esc_html($title); ?></h2>
            <h3 class="popup-subtitle"><?php echo esc_html($subtitle); ?></h3>
            <div class="popup-tabl">
              <?php if( have_rows('details') ): while( have_rows('details') ): the_row();
                $name = get_sub_field('name');
                $info = get_sub_field('info');
              ?>
                <p class="popup-row">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/check.svg" alt="check">
                  <span><?php echo esc_html($name); ?></span>
                </p>
              <?php endwhile; 
                endif; ?>
            </div>
          </div>
          <div class="popup-button">
            <a data-popup-close="popup_last" href="<?php echo esc_html($btn_url); ?>" class="popup-btn"><?php echo esc_html($btn_text); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
    endif; ?>


  <!-- form-popup -->
  <div id="popup_form" class="form-popup">
    <span class="form-popup-header">
      <p>Reason for Inquiry:</p>
      <span data-popup-close="popup_form" class="form-popup-close"></span>
    </span>

    <div class="form-group form-radio-popup">
      <div class="radio-group form-radio-group">
        <label><input type="radio" name="reason" value="Project" checked> Discuss a fully managed project</label>
        <label><input type="radio" name="reason" value="Collaboration"> Collaboration / Partnership</label>
        <label><input type="radio" name="reason" value="Support"> Technical Support</label>
        <label><input type="radio" name="reason" value="Other"> Other</label>
      </div>
    </div>

  </div>


  <!-- main -->

  <main class="main">
    <div class="main-intro">
      <?php 
      if( have_rows('main-group') ): 
        while( have_rows('main-group') ): the_row(); 
          $video = get_sub_field('main-bg');
          $title = get_sub_field('main-title');
          $subtitle = get_sub_field('main-subtitle');
          $btn_link = get_sub_field('main-btn-link');
          $btn_text = get_sub_field('main-btn-text');
          $facebook = get_sub_field('icon-link-facebook');
          $iks = get_sub_field('icon-link-iks');
          $whatsapp = get_sub_field('icon-link-whatsapp');
          $telega = get_sub_field('icon-link-telega');
          $insta = get_sub_field('icon-link-insta');
          $linked = get_sub_field('icon-link-linked');
      ?>

      <div class="main-media">
        <video class="main-video" src="<?php echo esc_url($video['url']); ?>" autoplay muted ></video>
      </div>
      <div class="container">
        <div class="main-wrap">
          <div class="main-content">
            <h1 class="main-title"><?php echo ($title); ?></h1>
            <p class="main-subtitle"><?php echo esc_html($subtitle); ?></p>
            <div class="main-btn">
              <a href="<?php echo esc_url($btn_link); ?>" class="main-button"><?php echo esc_html($btn_text); ?></a>
            </div>
          </div>
          
          <div class="main-social">
            <a href="<?php echo esc_url($facebook);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#facebook"></use>
              </svg>
            </a>
            <a href="<?php echo esc_url($iks);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#iks"></use>
              </svg>
            </a>
            <a href="<?php echo esc_url($whatsapp);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#whatsapp"></use>
              </svg>
            </a>
            <a href="<?php echo esc_url($telega);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#telega"></use>
              </svg>
            </a>
            <a href="<?php echo esc_url($insta);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#insta"></use>
              </svg>
            </a>
            <a href="<?php echo esc_url($linked);?>">
              <svg class="main-icon" aria-hidden="true">
                <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-sprite.svg#linked"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile;
      endif;
      ?>
    </div>
  </main>

  <!-- about -->
  <?php 
    if( have_rows('about') ): 
      while( have_rows('about') ): the_row(); 
        $name = get_sub_field('name'); 
        $image = get_sub_field('image'); 
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $logo = get_sub_field('logo');
  ?>
    <section id="about" class="about">
      <div class="container">
        <p class="about-name"><?php echo esc_html($name); ?></p>
        <div class="about-wrap">
          <div class="about-img">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <div class="about-content">
            
            <h2 class="about-title"><?php echo ($title); ?></h2>
            <p class="about-text"><?php echo esc_html($text); ?></p>
            <div class="about-image-wrap">
              <img class="about-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; 
    endif; ?>


  <!-- products -->
  <?php 
    if( have_rows('products') ): 
      while( have_rows('products') ): the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $ps_text = get_sub_field('p-text');
        $last_cart = get_sub_field('last-cart');
        $cart1_img = get_sub_field('product-cart1-img');
        $cart2_img = get_sub_field('product-cart2-img');
        $cart3_img = get_sub_field('product-cart3-img');
        $cart4_img = get_sub_field('product-cart4-img');
        $cart1_title = get_sub_field('product-cart1-title');
        $cart2_title = get_sub_field('product-cart2-title');
        $cart3_title = get_sub_field('product-cart3-title');
        $cart4_title = get_sub_field('product-cart4-title');
        $cart1_text = get_sub_field('product-cart1-text');
        $cart2_text = get_sub_field('product-cart2-text');
        $cart3_text = get_sub_field('product-cart3-text');
        $cart4_text = get_sub_field('product-cart4-text');
  ?>
    <section id="products" class="products">
      <div class="container">
        <div class="products-wrap">
          <div class="products-header">
            <p class="products-title"><?php echo esc_html($title);?></p>
            <div class="products-text">
              <?php echo ($text);?>
            </div>
          </div>
          <div class="product-grid">

            <div class="product-card1">
              <div class="product-card1-image">
                <img src="<?php echo esc_url($cart1_img['url']); ?>" alt="<?php echo esc_attr($cart1_img['alt']); ?>">
              </div>
              <h2><?php echo esc_html($cart1_title); ?></h2>
              <p><?php echo esc_html($cart1_text); ?></p>
              <span data-popup-open="popup_1" class="product-cart1-btn"></span>
            </div>
            <div class="product-card2">
              <div class="product-card2-image">
                <img src="<?php echo esc_url($cart2_img['url']); ?>" alt="<?php echo esc_attr($cart2_img['alt']); ?>">
              </div>
              <h2><?php echo esc_html($cart2_title); ?></h2>
              <p><?php echo esc_html($cart2_text); ?></p>
              <span data-popup-open="popup_2" class="product-cart2-btn"></span>
            </div>
            <div class="product-card3">
              <div class="product-card3-image">
                <img src="<?php echo esc_url($cart3_img['url']); ?>" alt="<?php echo esc_attr($cart3_img['alt']); ?>">
              </div>
              <h2><?php echo esc_html($cart3_title); ?></h2>
              <p><?php echo esc_html($cart3_text); ?></p>
              <span data-popup-open="popup_3" class="product-cart3-btn"></span>
            </div>
            <div class="product-card4">
              <div class="prodyct-card4-image">
                <img src="<?php echo esc_url($cart4_img['url']); ?>" alt="<?php echo esc_attr($cart4_img['alt']); ?>">
              </div>
              <h2><?php echo esc_html($cart4_title); ?></h2>
              <p><?php echo esc_html($cart4_text); ?></p>
              <span data-popup-open="popup_4" class="product-cart4-btn"></span>
            </div>
          </div>
          <div class="product-last-cart">
            <h2><?php echo esc_html($last_cart);?></h2>
            <span data-popup-open="popup_last" class="product-last-btn"></span>
          </div>
          <p class="products-ps-text"><?php echo esc_html($ps_text);?></p>
        </div>
      </div>
    </section>

  <?php endwhile; 
    endif; ?>

    <!-- Wind Section -->
  <?php 
    if( have_rows('wind') ): 
      while( have_rows('wind') ): the_row();
        $image_bg = get_sub_field('image-bg');
        $text = get_sub_field('text');
        $title = get_sub_field('title');
        $text_energy = get_sub_field('text-energy');
        $title_back = get_sub_field('title-back');
        $text_back = get_sub_field('text-back');
  ?>
    <section id="wind" class="wind">
      <div class="wind-bg" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 52.88%, #000 79.33%), linear-gradient(180deg, #FFF 12.36%, rgba(255, 255, 255, 0.00) 46.56%), url(<?php echo esc_url($image_bg['url']); ?>) no-repeat center;"></div>
      <div class="container">
        <div class="wind-wrap">
          <div class="wind-header">
            <p class="wind-name"><?php echo esc_html($text); ?></p>
            <h2 class="wind-title"><?php echo esc_html($title); ?></h2>
            <p class="wind-energy"><?php echo ($text_energy); ?></p>
          </div>
          
          <div class="wind-footer">
            <h2 class="wind-title-back"><?php echo esc_html($title_back); ?></h2>
            <p class="wind-text-back"><?php echo esc_html($text_back); ?></p>

            <div class="wind-adv-wrap">
              <?php
              if( have_rows('advantage') ):
                while( have_rows('advantage') ): the_row();
                  $icon = get_sub_field('icon');
                  $adv_title = get_sub_field('adv-title');
                  $adv_text = get_sub_field('adv-text');
                ?>

                <div class="wind-adv-item">
                  <img src="<?php echo esc_url($icon['url']);?>" alt="<?php echo esc_attr($icon['alt']);?>">
                  <p class="wind-adv-title"><?php echo esc_html($adv_title);?></p>
                  <p class="wind-adv-text"><?php echo esc_html($adv_text);?></p>
                </div>
              <?php endwhile;
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; 
    endif; ?>


    <!-- Steps Section -->
  <?php 
    if( have_rows('steps') ): 
      while( have_rows('steps') ): the_row();
        $title = get_sub_field('title');
        $name = get_sub_field('name');
  ?>
    <section id="steps" class="steps">
      <div class="container">
        <p class="steps-name steps-name-mobil"><?php echo esc_html($name);?></p>
        <div class="steps-wrap">
          <h2><?php echo esc_html($title);?></h2>
          <p class="steps-name"><?php echo esc_html($name);?></p>
        </div>
        <div class="steps-grid">
          <?php 
            if( have_rows('step-process') ): 
              while( have_rows('step-process') ): the_row();
                $step_number = get_sub_field('step-number');
                $step_title = get_sub_field('step-title');
                $step_text = get_sub_field('step-text');
          ?>
          <div class="step-item">
              <p class="step-circle"><?php echo esc_html($step_number);?></p>
              <div class="step-item-cont">
                <p class="step-title"><?php echo esc_html($step_title);?></p>
                <p class="step-text"><?php echo esc_html($step_text);?></p>
              </div>
          </div>
          <?php endwhile; 
          endif; ?>
        </div>
      </div>
    </section>

  <?php endwhile; 
    endif; ?>


  <div id="contact" class="energy">
    <div class="container">
      <form id="energy-form" class="energy-form">
        <h2><?php the_field('form-title'); ?></h2>

        <div class="form-row">
          <div class="form-group">
            <label><?php echo esc_html(get_field('f-name')); ?></label>
            <input type="text" name="name" placeholder="<?php echo esc_html(get_field('f-name-placeholder')); ?>" required>
          </div>
          <div class="form-group">
            <label><?php echo esc_html(get_field('f-email')); ?></label>
            <input type="email" name="email" placeholder="<?php echo esc_html(get_field('f-email-plaseholder')); ?>" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label><?php echo esc_html(get_field('f-phone')); ?></label>
            <input type="tel" name="phone" placeholder="<?php echo esc_html(get_field('f-phone-plaseholder')); ?>" required>
          </div>
          <div class="form-group">
            <label><?php echo esc_html(get_field('f-city')); ?></label>
            <input type="text" name="city" placeholder="<?php echo esc_html(get_field('f-city-plaseholder')); ?>" required>
          </div>
        </div>

        <div class="form-group form-radio-block-mobil">
          <label><?php echo esc_html(get_field('radio-title')); ?></label>
          <p data-popup-open="popup_form" class="form-btn-mobil">Select Reason for Inquiry</p>
        </div>

        <div class="form-group form-radio-block">
          <label class="form-label"><?php echo esc_html(get_field('radio-title')); ?></label>
          <div class="radio-group">
            <label><input type="radio" name="reason" value="Project" checked><?php echo esc_html(get_field('radio-1')); ?></label>
            <label><input type="radio" name="reason" value="Collaboration"><?php echo esc_html(get_field('radio-2')); ?></label>
            <label><input type="radio" name="reason" value="Support"><?php echo esc_html(get_field('radio-3')); ?></label>
            <label><input type="radio" name="reason" value="Other"> <?php echo esc_html(get_field('radio-4')); ?></label>
          </div>
        </div>

        <div class="form-group">
          <label><?php echo esc_html(get_field('f-text')); ?></label>
          <textarea name="message" placeholder="<?php echo esc_html(get_field('f-text-placeholder')); ?>" required></textarea>
        </div>

        <div class="checkbox-group">
          <label><input type="checkbox" name="privacy" required><?php echo esc_html(get_field('check-1')); ?></label>
          <label><input type="checkbox" name="terms" required><?php echo esc_html(get_field('check-2')); ?></label>
        </div>

        <button type="submit" class="btn-submit"><?php echo esc_html(get_field('f-submit-name')); ?></button>
        <div class="form-result"></div>
      </form>
    </div>
  </div>


  <?php get_footer();?>

</div>