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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="header">
		<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/Ecom-Doc-Logo.png" class="logo" />
		<ul class="nav-list">
			<li class="nav-item">Home</li>
			<li class="nav-item">Services</li></li>
			<li class="nav-item">Blog</li>
			<li class="nav-item">Contact</li>
		</ul>
	</div>

	<div id="content" class="site-content">
