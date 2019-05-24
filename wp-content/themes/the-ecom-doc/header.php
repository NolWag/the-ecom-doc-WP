<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="header">
		<a href="/"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/Ecom-Doc-Logo.png" class="logo" /></a>
		<ul class="nav-list">
			<a href="/Home"><li class="nav-item">Home</li></a>
			<a href="/services"><li class="nav-item">Services</li></a>
			<a href="/blog"><li class="nav-item">Blog</li></a>
			<a href="/contact"><li class="nav-item">Contact</li></a>
		</ul>
	</div>

	<div id="content" class="site-content">
