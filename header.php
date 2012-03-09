<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Stopsley Village Pre-School - A small friendly pre-school situated in Luton, Bedfordshire, UK">
    <meta name="keywords" content="pre-school, child-care, nursery, luton, uk, bedfordshire" />
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    
    <?php wp_head(); ?>
    
    <script src="<?php bloginfo('template_directory'); ?>/javascript/cufon-yui.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php bloginfo('template_directory'); ?>/javascript/Mechanical_Pencil_400.font.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      Cufon.replace('#content h2, #content h3');
      Cufon.replace('.navigation li a, #sidebar h2');
    </script>
  </head>
  <body>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-317752-7']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
      })();

    </script>

    <div id="header">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </div>

    <div id="wrapper" class="container_12">
      