<?php
/**
 * Contains the header.
 */
?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo ( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- navbar section  -->
    <header class="container-fluid fixed right-0 left-0" style="z-index: 999;">
        <nav class="p-4 lg:px-28 container-fluid">
            <div class="container mx-auto flex nav-brand">
              <!-- Logo -->
              <a href="#" class="text-white text-xl font-bold"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/logo.png" alt=""></a>
              <!-- Mobile Menu Button -->
              <button class="menu-bar text-white block lg:hidden md:hidden ml-auto" onclick="menuChange(this)">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
              </button>
              <!-- Navigation Links (Hidden on Mobile) -->
              <!-- <div class="navbar-ul space-x-28 mr-auto content-center items-center"> -->
                
              <?php
                if (has_nav_menu('primary')) :
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<div id="%1$s" class="navbar-ul space-x-28 ml-auto content-center items-center %2$s">%3$s</div>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'emmy')
                    );
                endif;
                ?>
              <!-- </div> -->
            </div>
          </nav>         
    </header>