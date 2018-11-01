<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_v4.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_v4.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<meta name="author" content="falsy">
<meta property="og:site_name" content="폴시랩">
<meta property="og:url" content="https://lab.falsy.me">
<meta property="og:type" content="website">
<meta property="og:title" content="폴시랩">
<meta property="og:description" content="자바스트립트, PHP, 워드프레스, HTML, CSS, 팁, 가이드, 일상이야기.">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo1200x630.png">
<meta name="twitter:title" content="폴시랩">
<meta name="twitter:description" content="자바스트립트, PHP, 워드프레스, HTML, CSS, 팁, 가이드, 일상이야기.">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/logo1200x630.png">

<?php wp_head(); ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8365775889087902",
          enable_page_level_ads: true
     });
</script>
</head>

<body <?php body_class(); ?>>

<header id="page_header">
  <div class="container">
    <!-- <p>Cheol’s Laboratory</p> -->
    <h1><a href="<?php echo home_url(); ?>"><img src="https://lab.falsy.me/wp-content/uploads/2018/11/logo.png" alt="falsy logo" width="160"/></a></h1>
    <nav>
      <a href="<?php echo home_url(); ?>/about">ABOUT</a>
      <a href="<?php echo home_url(); ?>">PROGRAMMING</a>
    </nav>
  </div>
</header>

<!-- <header id="page_header">
	<div class="container">
		<p>Cheol’s Laboratory</p>
		<h1><a href="<?php echo home_url(); ?>">CHEOL<span class="highlight_color">’</span>GUSO</a></h1>
		<nav>
			<a href="/lab1">LAB1</a>
			<a href="/lab2">LAB2</a>
		</nav>
  </div>
</header> -->
