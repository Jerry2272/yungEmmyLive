<?php
/* *
 * The main template file. */

get_header();
?>


    <!-- hero section  -->
    <div class="container-fluid hero-section h-screen flex items-center">
      <div class="hero-content lg:pl-28 lg:p-10 p-4">
        <h1 class="text-white font-semibold text-3xl">Welcome to Emmy Yung's Music <br class="lg:block hidden" /> World!</h1>
        <h5 class="text-2xl font-light text-white py-8">NEW ALBUM ALL THE TIME OUT NOW</h5>
        <div class="social-icons flex content-center items-center my-3">
            <a href="https://www.instagram.com/emmyyung991?igsh=MTBkNXEzbXJlMmoxMA==">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/instagram.svg" alt="">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100090894572843">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/facebook.svg" alt="">
            </a>
            <a href="https://audiomack.com/emmyyungYSL">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/audiomack.png"
                   style="width: 40px ; height: 40px;   color: white;"
                alt="">
            </a>
            <a href="https://www.tiktok.com/@ricchiemmy?_r=">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/tiktok.png"
                   style="width: 40px ; height: 40px;   color: white;"
                alt="">
            </a>
            <a href="@emmyyunnyYSL">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/x.png" 
                   style="width: 40px ; height: 40px;   color: white;"
                alt="">
            </a>
            <a href="https://www.youtube.com/@emmyyung" class="text-white">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/youtube.png"
                   style="width: 40px ; height: 40px;   color: white;"
                alt="">
            </a>
            <a href="emmyyung40@gmail.com"  class="bg-white p-1" style="border-radius: 50%">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/email.png" 
                style="width: 40px ; height: 40px;   color: white;"
                alt="">
            </a>
        </div>
      </div>
    </div>
    <!-- hero section ending -->
<?php

get_template_part( 'assets/template-parts/misc/content', 'about' );    
get_template_part( 'assets/template-parts/misc/content', 'subscribe' );    
get_template_part( 'assets/template-parts/misc/content', 'melody' )
?>








3

<?php get_footer(); ?>