<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
  <meta property="og:image" content="https://falsy.me/wp-content/uploads/2020/07/falsylab.jpg">
  <meta property="og:site_name" content="폴시랩">
  <meta property="og:url" content="https://falsy.me">
  <meta property="og:type" content="website">
  <meta property="og:title" content="폴시랩">
  <meta property="og:description" content="자바스트립트, PHP, 워드프레스, HTML, CSS, 팁, 가이드, 일상이야기.">
  <meta name="twitter:image:src" content="https://falsy.me/wp-content/uploads/2020/07/falsylab.jpg">
  <meta name="twitter:title" content="폴시랩">
  <meta name="twitter:description" content="자바스트립트, PHP, 워드프레스, HTML, CSS, 팁, 가이드, 일상이야기.">

  <?php wp_head(); ?>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8365775889087902",
        enable_page_level_ads: true
      });
  </script>
</head>

<?php 
  $is_dark_mode = $_COOKIE['dark_mode'] == true ? 'dark-mode' : '';
?>

<body <?php body_class($_COOKIE['dark_mode'] == true ? 'dark-mode' : ''); ?>>

<header id="page_header">
  <div class="container">
    <h1><a href="<?php echo home_url(); ?>">
      <img src="https://lab.falsy.me/wp-content/uploads/2018/11/logo.png" alt="falsy logo" width="160"/></a>
    </h1>
    <nav>
      <a href="<?php echo home_url(); ?>/about/">About</a>
      <a href="<?php echo home_url(); ?>/programming/">Programming</a>
      <a href="<?php echo home_url(); ?>/project/">Project</a>
      <a href="<?php echo home_url(); ?>/blog/">Blog</a>
    </nav>
    <div class="sun">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
    </div>
    <div class="moon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
    </div>
  </div>
</header>

