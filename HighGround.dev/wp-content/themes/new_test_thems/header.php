<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Freshpick</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS
   ================================================== -->
    <!-- <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/layout.css"> -->

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <?php wp_head();?>

</head>

<body>

    <div id="content-wrap">

        <!-- Header
      ================================================== -->
        <header class="container">

            <hgroup>
                <h1><a href="<?php echo home_url();?>">Freshpick</a></h1>
                <h3>Your Awesome Slogan Here</h3>
            </hgroup>
            <nav id="nav-wrap" class="cf">
               <?php wp_nav_menu( array(
	'theme_location'  => 'top',
	'container'       => false,
	'menu_class'      => '',
	'menu_id'         => 'menu',
	// 'echo'            => true,
	// 'fallback_cb'     => 'wp_page_menu',
) );?>
            </nav>

            <!-- <nav id="nav-wrap" class="cf">

            <ul id="menu">
	            <li class="current"><a href="index.htm">Home</a></li>
	            <li><a href="single-post.htm">Blog</a></li>
	            <li><a href="archives.htm">Archives</a></li>
            </ul> 

         </nav> -->

        </header>