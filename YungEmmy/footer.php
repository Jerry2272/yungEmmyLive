<?php
/**
 * Contains footer
 */
?>

      <!-- footer section  -->
      <div class="footer w-full p-5 lg:p-28 text-white" style="background: #09171D; height: auto;">
      <div class="container">
        <div class="get-in-touch">
          <h2 class="font-bold text-3xl" style="color:#D2C9C9">Get In Touch</h2>
          <p class="text-white font-normal py-6" style="font-size: 20px;">
            Contact us to find out how we can help you. If it’s easier you can email <br>
us at hello@emmyyung.com
          </p>
        </div>
        <div class="policy-section lg:flex items-center lg:justify-between lg:flex-row flex-col">
          <div>
            <p class="font-regular py-4" style="font-size: 18px;">@ <?php $currentDate = date('Y');echo " " . $currentDate;?>   YSL Etertainment. <br> ALL Right Reserved.</p>
          <a href="#">Privacy Policy  |</a>
          <a href="#">Terms of Service</a>
          </div>
          <div class="social-icons flex content-center items-center my-6">
            <a href="#">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/instagram.svg" alt="">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/facebook.svg" alt="">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/spotify.svg" alt="">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/twitter.svg" alt="">
            </a>
        </div>
        </div>
      </div>
    </div>
    <!-- footer section ending -->

  <?php wp_footer(); ?>
</body>

</html>