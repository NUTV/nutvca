<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nutv2014
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php if (is_front_page()): ?>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-ec86d19d-80cf-b941-a3eb-c412bde63c31", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
<?php endif; ?>
</head>

<body <?php body_class(); ?>>

	<section class="main-navigation">
        <nav class="contain">
            <ul>
                <li><a href="/">home</a></li>
                <li><a href="/shows">shows</a></li>
                <li><a href="/events">events</a></li>
                <li><a href="/wanna-make-tv">join</a></li>
                <li><a href="/contact">contact</a></li>
                <li><a href="/members">member area</a></li>
            </ul>
        </nav>
    </section>

	<section id="content" class="main-page-content contain">

        <aside class="right">
            <a href="/">
                <section class="nutv-color-bar-chart">
                    <div class="light-purple"></div>
                    <div class="purple"></div>
                    <div class="light-blue"></div>
                    <div class="blue"></div>
                    <span class="clear block"></span>
                    <div class="logo">
                        <h2>nutv.ca</h2>
                    </div>
                    <div class="green"></div>
                    <div class="light-green"></div>
                    <div class="yellow"></div>
                    <div class="orange"></div>
                    <span class="clear block"></span>
                </section>
            </a>
        </aside>
