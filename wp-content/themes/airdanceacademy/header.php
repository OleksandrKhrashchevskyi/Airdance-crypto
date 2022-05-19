<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package airdanceacademy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/plugins/swiper-v5.4.5/css/swiper.min.css">
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/plugins/bootstrap-v5.1.3/css/bootstrap.min.css">
  <script src="<?php bloginfo("template_directory"); ?>/assets/plugins/bootstrap-v5.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/plugins/aos-master-v2.3.4/css/aos.css">
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>
	<div class="container">
		<img class="logo" src="<?php bloginfo("template_directory"); ?>/assets/images/header/logo.png" alt="Logo" >
       	<div class="nav">
            <ul class="top-left-menu">
            	<li><a href="#">Home</a></li> 
                <li><a href="#">About</a></li> 
                <li><a href="#">Services</a></li> 
                <li><a href="#">Portfolio</a></li> 
                <li><a href="#">Contact</a></li> 
            </ul>
            <ul class="bottom-left-menu">
            	<li><a href="#">PL</a></li> 
            	<li><a href="#">RU</a></li> 
            	<li><a href="#">EN</a></li> 
            </ul>
            <ul class="toggle">
                 <li></li>
                 <li></li>
                 <li></li>
            </ul>
       	</div>
      	<div class="section"></div>
      	<div class="section"></div>
      	<div class="section"></div>
      	<div class="section"></div>
    </div>
</header>
