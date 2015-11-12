<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body data-nicescroll="1" class="loading <?php body_class(); ?>">
    <!-- <div class="globalpreloader"></div> -->
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php if ( is_single() || is_home() ) { ?> 

        <div class="nav-container fixednonstop">
            <div class="wrapper">
                <a href="" target="_blank" class="logo top"><img src="<?php if ( get_field('logo', 'option') != '' ) { the_field('logo', 'option'); } ?>" height="47" width="145" alt=""></a>
                <?php  $args = array(
                        'theme_location'  => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'mainnav',
                        'container_id'    => 'mainnav',

                ); ?>

                 <?php wp_nav_menu( $args ); ?> 

            </div>
        </div>

    <?php } else { ?>

        <div class="nav-container">
            <div class="wrapper">
                <a href="" class="logo top"><img src="<?php if ( get_field('logo', 'option') != '' ) { the_field('logo', 'option'); } ?>" height="47" width="145" alt=""></a>


                  <?php  $args = array(
                        'theme_location'  => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'mainnav',
                        'container_id'    => 'mainnav',

                ); ?>

                 <?php wp_nav_menu( $args ); ?> 

            </div>
        </div>

    <?php }; ?>




