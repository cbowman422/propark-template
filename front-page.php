<?php
  get_header();
?>

<main>

  <div class="header-hero-background" id="scrollHome">
    <div class="header-hero max-width">
      <div class="header-hero-text">
        <h1>
          <?php 
            the_field('header_hero_h1'); 
          ?>
          <span class="header-h1-span"> 
            <?php 
            the_field('header_hero_span'); 
            ?> 
          </span>
        </h1>
      </div>
      <?php
        $header_hero_img_id = get_field('header_hero_img');
      ?>
      <img class="header-hero-image" 
      src="<?php echo esc_url($header_hero_img_id['url']); ?>" 
      alt="<?php echo esc_attr($header_hero_img_id['alt']); ?>" />
    </div>
  </div>

  <div class="main-acquisition max-width">
    <div class="main-acquisition-logo-pair">
    <?php
      $main_acquisition_logo_id = get_field('main_acquisition_logo');
      $propark_logo_id = get_field('propark_logo');
    ?>
      <img src="<?php echo esc_url($main_acquisition_logo_id['url']); ?>" 
      alt="<?php echo esc_attr($main_acquisition_logo_id['alt']); ?>" />
      <h3> + </h3>
      <img src="<?php echo esc_url($propark_logo_id['url']); ?>" 
      alt="<?php echo esc_attr($propark_logo_id['alt']); ?>" />
    </div>
    <div class="main-acquisition-text">
      <h3>
        <?php 
            the_field('main_acquisition_text_h3'); 
        ?>
      </h3>
      <p> 
        <?php 
            the_field('main_acquisition_text_p'); 
        ?>
      </p>
    </div>
  </div>

  <div class="main-testimonial">
    <div class="main-testimonial-stars">
      <?php
        $testimonial_star_id = get_field('testimonial_star');
        $main_testimonial_background_img_id = get_field('main_testimonial_background_img');
      ?>
      <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
      alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
      <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
      alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
      <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
      alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
      <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
      alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
      <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
      alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
    </div>
    <div class="main-testimonial-quote">
      <h3>
        <?php 
          the_field('main_testimonial_quote'); 
        ?>
      </h3>
    </div>
    <div class="main-testimonial-quote-reference">
      <p> 
        <?php 
          the_field('main_testimonial_reference'); 
        ?>
      </p>
      <p>
        <?php 
          the_field('main_testimonial_reference_location'); 
        ?>
      </p>
    </div>
  </div>
  <style>
    .main-testimonial{
    background-image: linear-gradient(var(--blueTransparent),var(--blueTransparent)), url("<?php echo esc_url($main_testimonial_background_img_id['url']); ?>");
    background-size: cover;
    background-position: center;
    padding: 60px 0;
    }
  </style>

  <div class="main-about-background" id="scrollAbout">
    <div class="main-about max-width">
      <div class="main-about-text">
        <h2>
          <?php 
            the_field('main_about_text_h2'); 
          ?>
        </h2>
        <div class="main-about-underline"> </div>
        <p> 
          <?php 
            the_field('main_about_text_p1'); 
          ?>
        </p> 
        <p>
          <?php 
            the_field('main_about_text_p2'); 
          ?>
        </p>
      </div>
      <div class="main-about-image">
      <?php
        $main_about_img_id = get_field('main_about_img');
      ?>
        <img src="<?php echo esc_url($main_about_img_id['url']); ?>" 
      alt="<?php echo esc_attr($main_about_img_id['alt']); ?>"/>
      </div>
    </div>
  </div>

  <?php
      $main_services_button_1_h3_id = get_field('main_services_button_1_h3');
      $main_services_button_2_h3_id = get_field('main_services_button_2_h3');
      $main_services_button_3_h3_id = get_field('main_services_button_3_h3');
      $main_services_button_4_h3_id = get_field('main_services_button_4_h3');
      $main_services_button_5_h3_id = get_field('main_services_button_5_h3');

      $main_services_button_1_img_id = get_field('main_services_button_1_img');
      $main_services_button_2_img_id = get_field('main_services_button_2_img');
      $main_services_button_3_img_id = get_field('main_services_button_3_img');
      $main_services_button_4_img_id = get_field('main_services_button_4_img');
      $main_services_button_5_img_id = get_field('main_services_button_5_img');
  ?>

  <div class="main-services max-width" id="scrollServices">
    <div class="main-services-title">
      <h2>
        <?php 
            the_field('main_services_title_h2'); 
        ?> 
      </h2>
    </div>
    <div class="main-services-content">
      <div class="main-services-button-container">
        <?php if($main_services_button_1_h3_id):?>
          <div>
            <a class="main-services-button" id="mainServicesButton1">
              <img src="<?php echo esc_url($main_services_button_1_img_id['url']); ?>" 
                  alt="<?php echo esc_attr($main_services_button_1_img_id['alt']); ?>" />
              <h3>
                <?php 
                  echo $main_services_button_1_h3_id;
                ?> 
              </h3>
            </a>
          </div>
        <?php endif;?>
        <?php if($main_services_button_2_h3_id):?>
          <div>
            <a class="main-services-button" id="mainServicesButton2">
              <img src="<?php echo esc_url($main_services_button_2_img_id['url']); ?>" 
                  alt="<?php echo esc_attr($main_services_button_2_img_id['alt']); ?>" />
              <h3>
                <?php 
                  echo $main_services_button_2_h3_id;
                ?> 
              </h3>
            </a>
          </div>
        <?php endif;?>
        <?php if($main_services_button_3_h3_id):?>
          <div>
            <a class="main-services-button" id="mainServicesButton3">
              <img src="<?php echo esc_url($main_services_button_3_img_id['url']); ?>" 
                  alt="<?php echo esc_attr($main_services_button_3_img_id['alt']); ?>" />
              <h3>
                <?php 
                  echo $main_services_button_3_h3_id;
                ?> 
              </h3>
            </a>
          </div>
        <?php endif;?>
        <?php if($main_services_button_4_h3_id):?>
          <div>
            <a class="main-services-button" id="mainServicesButton4">
              <img src="<?php echo esc_url($main_services_button_4_img_id['url']); ?>" 
                  alt="<?php echo esc_attr($main_services_button_4_img_id['alt']); ?>" />
              <h3>
                <?php 
                  echo $main_services_button_4_h3_id;
                ?> 
              </h3>
            </a>
          </div>
        <?php endif;?>
        <?php if($main_services_button_5_h3_id):?>
          <div>
            <a class="main-services-button" id="mainServicesButton5">
              <img src="<?php echo esc_url($main_services_button_5_img_id['url']); ?>" 
                  alt="<?php echo esc_attr($main_services_button_5_img_id['alt']); ?>" />
              <h3>
                <?php 
                  echo $main_services_button_5_h3_id; 
                ?> 
              </h3>
            </a>
          </div>
        <?php endif;?>
      </div>
      <div class="main-services-description-container">
        <div class="main-services-description">
          <img id="main-services-img" alt="Services Icon" src="">
          <h2 id="main-services-h3"> </h2>
          <p id="main-services-p">  </p>
        </div>
        <div class="main-services-connect"> 
          <h3> For More Information: </h3>
          <a id="nav-contact-services"> Connect With Us </a>
        </div>
      </div>
    </div>
  </div>

    <!-- <div class="main-locations">
      <div>
        <h3> Empire Transportation Parking Locations </h3>
      </div>
      <div>
        <a>All Locations</a>
        <a>Region</a>
        <a>Region</a>
        <a>Region</a>
      </div>
      <div>
        <a>location</a>
        <a>location</a>
        <a>location</a>
        <a>location</a>
        <a>location</a>
        <a>location</a>
        <a>location</a>
        <a>location</a>
      </div>
    </div> -->

    <div class="second-testimonial">
      <?php
        $second_testimonial_background_img_id = get_field('second_testimonial_background_img');
      ?>
      <div class="second-testimonial-stars">
        <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
        alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
        <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
        alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
        <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
        alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
        <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
        alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
        <img src="<?php echo esc_url($testimonial_star_id['url']); ?>" 
        alt="<?php echo esc_attr($testimonial_star_id['alt']); ?>" >
      </div>
      <div class="second-testimonial-quote">
        <h3>
          <?php 
            the_field('second_testimonial_quote'); 
          ?>
        </h3>
      </div>
      <div class="second-testimonial-quote-reference">
        <p> 
          <?php 
            the_field('second_testimonial_reference'); 
          ?>
        </p>
        <p>
          <?php 
            the_field('second_testimonial_reference_location'); 
          ?>
        </p>
      </div>
    </div>
    <style>
      .second-testimonial{
      background-image: linear-gradient(var(--blueTransparent),var(--blueTransparent)), url("<?php echo esc_url($second_testimonial_background_img_id['url']); ?>");
      background-size: cover;
      background-position: center;
      padding: 60px 0;
      }
    </style>

    <div class="main-blog max-width">
        <div class="main-blog-title">
          <h2>
            <?php 
              the_field('main_blog_title_h2'); 
            ?>
          </h2>
        </div>
        <?php
        $rss_feed = fetch_feed('https://www.propark.com/feed/');
        if (!is_wp_error($rss_feed)) {
        echo '<div class="main-all-blog-container" >';
        foreach ($rss_feed->get_items(0, 10) as $item) {
            $enclosure = $item->get_enclosure();
            $enc_url = $enclosure ? $enclosure->get_link() : 'No enclosure found';
            $title = $item->get_title();
            $title_link = $item->get_link();
            
            echo '<div class="main-blog-container"><a href="' . esc_url($title_link) . '">';
            echo '<img src="' . esc_url($enc_url) . '" alt="Enclosure Image" />';
            echo '<p>' . esc_html($title) . '</p></a></div>';
        }
        echo '</div>';
        }
        ?>
    </div>

    <div class="main-contact" id="scrollContact">
      <h2> 
        <?php 
          the_field('main_contact_h2'); 
        ?>
      </h2>
    </div>

</main>

<script>
  let active = false;
  let mainServicesButton1 = document.getElementById('mainServicesButton1');
  let mainServicesButton2 = document.getElementById('mainServicesButton2');
  let mainServicesButton3 = document.getElementById('mainServicesButton3');
  let mainServicesButton4 = document.getElementById('mainServicesButton4');
  let mainServicesButton5 = document.getElementById('mainServicesButton5');

  <?php if($main_services_button_1_h3_id):?>
  mainServicesButton1.addEventListener('click', updateServices1);
  <?php endif; ?>
  <?php if($main_services_button_2_h3_id):?>
  mainServicesButton2.addEventListener('click', updateServices2);
  <?php endif; ?>
  <?php if($main_services_button_3_h3_id):?>
  mainServicesButton3.addEventListener('click', updateServices3);
  <?php endif; ?>
  <?php if($main_services_button_4_h3_id):?>
  mainServicesButton4.addEventListener('click', updateServices4);
  <?php endif; ?>
  <?php if($main_services_button_5_h3_id):?>
  mainServicesButton5.addEventListener('click', updateServices5);
  <?php endif; ?>

  function updateServices1(){
    <?php if($main_services_button_1_h3_id):?>
      servicesInfo("<?php echo esc_url($main_services_button_1_img_id['url']); ?>", "<?php echo esc_attr($main_services_button_1_img_id['alt']); ?>", " <?php echo $main_services_button_1_h3_id; ?> "," <?php the_field('main_services_button_1_description'); ?> ");

      document.getElementById("mainServicesButton1").style.boxShadow = "1px 2px 4px 1px var(--gray)";
    <?php endif; ?>
    <?php if($main_services_button_2_h3_id):?>
      document.getElementById("mainServicesButton2").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_3_h3_id):?>
      document.getElementById("mainServicesButton3").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_4_h3_id):?>
      document.getElementById("mainServicesButton4").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_5_h3_id):?>
      document.getElementById("mainServicesButton5").style.boxShadow = "none";
    <?php endif; ?>
  }

  function updateServices2(){
    <?php if($main_services_button_2_h3_id):?>
      servicesInfo("<?php echo esc_url($main_services_button_2_img_id['url']); ?>", "<?php echo esc_attr($main_services_button_2_img_id['alt']); ?>", " <?php echo $main_services_button_2_h3_id; ?> "," <?php the_field('main_services_button_2_description'); ?> ");
      
      document.getElementById("mainServicesButton2").style.boxShadow = "1px 2px 4px 1px var(--gray)";
    <?php endif; ?>
    <?php if($main_services_button_1_h3_id):?>
      document.getElementById("mainServicesButton1").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_3_h3_id):?>
      document.getElementById("mainServicesButton3").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_4_h3_id):?>
      document.getElementById("mainServicesButton4").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_5_h3_id):?>
      document.getElementById("mainServicesButton5").style.boxShadow = "none";
    <?php endif; ?>
  }

  function updateServices3(){
    <?php if($main_services_button_3_h3_id):?>
      servicesInfo("<?php echo esc_url($main_services_button_3_img_id['url']); ?>", "<?php echo esc_attr($main_services_button_3_img_id['alt']); ?>", " <?php echo $main_services_button_3_h3_id; ?> "," <?php the_field('main_services_button_3_description'); ?> ");
    
      document.getElementById("mainServicesButton3").style.boxShadow = "1px 2px 4px 1px var(--gray)";
    <?php endif; ?>
    <?php if($main_services_button_1_h3_id):?>
      document.getElementById("mainServicesButton1").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_2_h3_id):?>
      document.getElementById("mainServicesButton2").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_4_h3_id):?>
      document.getElementById("mainServicesButton4").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_5_h3_id):?>
      document.getElementById("mainServicesButton5").style.boxShadow = "none";
    <?php endif; ?>
  }

  function updateServices4(){
    <?php if($main_services_button_4_h3_id):?>
      servicesInfo("<?php echo esc_url($main_services_button_4_img_id['url']); ?>", "<?php echo esc_attr($main_services_button_4_img_id['alt']); ?>", " <?php echo $main_services_button_4_h3_id; ?> "," <?php the_field('main_services_button_4_description'); ?> ");
    
      document.getElementById("mainServicesButton4").style.boxShadow = "1px 2px 4px 1px var(--gray)";
    <?php endif; ?>
    <?php if($main_services_button_1_h3_id):?>
      document.getElementById("mainServicesButton1").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_2_h3_id):?>
      document.getElementById("mainServicesButton2").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_3_h3_id):?>
      document.getElementById("mainServicesButton3").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_5_h3_id):?>
      document.getElementById("mainServicesButton5").style.boxShadow = "none";
    <?php endif; ?>
  }

  function updateServices5(){
    <?php if($main_services_button_5_h3_id):?>
      servicesInfo("<?php echo esc_url($main_services_button_5_img_id['url']); ?>", "<?php echo esc_attr($main_services_button_5_img_id['alt']); ?>", " <?php echo $main_services_button_5_h3_id; ?> "," <?php the_field('main_services_button_5_description'); ?> ");
   
      document.getElementById("mainServicesButton1").style.boxShadow = "1px 2px 4px 1px var(--gray)";
    <?php endif; ?>
    <?php if($main_services_button_1_h3_id):?>
      document.getElementById("mainServicesButton1").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_2_h3_id):?>
      document.getElementById("mainServicesButton2").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_3_h3_id):?>
      document.getElementById("mainServicesButton3").style.boxShadow = "none";
    <?php endif; ?>
    <?php if($main_services_button_4_h3_id):?>
      document.getElementById("mainServicesButton4").style.boxShadow = "none";
    <?php endif; ?>
  }

  // Call first update services function on page load
  updateServices1();

  function servicesInfo(servicesImage, servicesImageAlt, servicesName, servicesText){
    document.getElementById("main-services-img").style.opacity = 0;
    document.getElementById("main-services-h3").style.opacity = 0;
    document.getElementById("main-services-p").style.opacity = 0;
    setTimeout(function(){
      document.getElementById("main-services-img").src = servicesImage;
      document.getElementById("main-services-img").alt = servicesImageAlt;
      document.getElementById("main-services-h3").innerHTML = servicesName;
      document.getElementById("main-services-p").innerHTML = servicesText;
      document.getElementById("main-services-img").style.opacity = 1;
      document.getElementById("main-services-h3").style.opacity = 1;
      document.getElementById("main-services-p").style.opacity = 1;
  }, 300);
  }
</script>


<?php
  get_footer();
?>