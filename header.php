<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package product_listing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <title>Product Listing</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" id="" type="image/x-icon">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/assets/effect.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/assets/flashy.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/coreNavigation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="hdr">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-12 text-center">
                <a href="javascript:void(0)" class="logo_wrpr"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" style="width: 100%;"></a>
            </div> -->
            <div class="col-12">
                <nav hidden>
                    <div class="nav-header">
                        <a href="<?php echo get_home_url(); ?>" class="brand">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
                        </a>
                        <button class="toggle-bar">
                            <span class="fa fa-bars"></span>
                        </button>	
                    </div>								
                    <ul class="menu">
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><a href="#">Varanasi & Banarasi Saree</a></li>
                        <li class="dropdown">
                            <a href="#">Our Offerings <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-content">
                                <li><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                      Launch demo modal
                                    </button>
                                    <a href="#">Level 1</a></li>
                                <li><a href="#">Level 1</a></li>
                                <li class="dropdown">
                                    <a href="#">Dropdown 2</a>
                                    <ul class="dropdown-content">
                                        <li><a href="#">Level 2</a></li>
                                        <li><a href="#">Level 2</a></li>
                                        <li class="dropdown">
                                            <a href="#">Dropdown 3</a>
                                            <ul class="dropdown-content">
                                                <li><a href="#">Level 3</a></li>                                    
                                                <li><a href="#">Level 3</a></li>                                    
                                                <li><a href="#">Level 3</a></li>                                    
                                                <li><a href="#">Level 3</a></li>   
                                            </ul>                                 
                                        </li>
                                        <li><a href="#">Level 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1</a></li>
                                <li><a href="#">Level 1</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Shop Now <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-content">
                                <li><a href="#">Level 1</a></li>
                                <li><a href="#">Level 1</a></li>
                                <li class="dropdown">
                                    <a href="#">Dropdown 2</a>
                                    <ul class="dropdown-content">
                                        <li><a href="#">Level 2</a></li>
                                        <li><a href="#">Level 2</a></li>
                                        <li><a href="#">Level 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1</a></li>
                                <li><a href="#">Level 1</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>