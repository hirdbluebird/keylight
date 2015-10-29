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

<body data-nicescroll="1" class="loading" <?php body_class(); ?>>
    <!-- <div class="globalpreloader"></div> -->
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <div class="nav-container">
        <div class="wrapper">
            <a href="#" class="logo top"><img src="<?php if ( get_field('logo', get_the_ID()) != '' ) { the_field('logo', get_the_ID()); } ?>" height="47" width="145" alt=""></a>
            <nav id="mainnav" class="mainnav">
                <ul>
                    <li><a href="#start">Start</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#us">Us</a></li>
                    <li><a href="#products">Slider</a></li>
                    <li><a href="#pricing">Prices</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#video">Video</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="elements.html" class="external">Elements</a></li>
                    <li><a href="portfolio-single.html" class="external">Single</a></li>
                </ul>
            </nav>
        </div>
    </div>


