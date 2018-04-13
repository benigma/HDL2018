<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51725690-1', 'hogarthdavieslloyd.com');
  ga('send', 'pageview');

</script> -->

</head>
<body <?php body_class(); ?>>
<header class="nav">
    <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl_logo.png" alt="Hogarth Davis Lloyd" /></a></div>
    <div class="mobile-menu-icon"></div>
</header>
<div id="mobile-primary-menu">
    <div class="close-btn"></div>
        <?php 
            $defaults = array(	
            'container' => false,
            'menu_id' => '',
            'menu_class' => 'mobile-menu-test',
            'depth' => 1
            );
                                
            wp_nav_menu( $defaults );
        ?>
</div>
<header>
    <nav>
        <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl_logo.png" alt="Hogarth Davis Lloyd" /></a></div>
        <div class="menu">
            <ul>
            <li><a href="#">Practices</a>
                    <ul class="children">
                        <li><a href="<?php echo site_url(); ?>/board-level">Board Level</a></li>
                        <li><a href="<?php echo site_url(); ?>/global-markets">Global Markets</a></li>
                        <li><a href="<?php echo site_url(); ?>/investment-banking">Investment Banking</a></li>
                        <li><a href="<?php echo site_url(); ?>/investment-management">Investment Management</a></li>
                        <li><a href="<?php echo site_url(); ?>/commodities">Commodities</a></li>
                        <li><a href="<?php echo site_url(); ?>/legal-compliance-regulatory">Legal, Compliance &amp; Regulatory</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>/consultants">The Team</a></li>
                <li><a href="<?php echo site_url(); ?>/diversity">Diversity</a></li>
                <li><a href="<?php echo site_url(); ?>/offices">Contact</a></li>
                <li><a href="#">
                    <svg height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="m23.7256721 23.3940843-4.4363273-4.4539869c1.1409919-1.3100891 1.7661034-2.9578707 1.7661034-4.6731908 0-4.0068899-3.3767471-7.2669066-7.5287469-7.2669066-4.14995423 0-7.5267013 3.2600167-7.5267013 7.2669066 0 4.0080747 3.37674707 7.2680914 7.5267013 7.2680914 1.5582784 0 3.0445544-.4534164 4.3131869-1.3160135l4.4715102 4.4895335c.1869607.1883969.4377416.291482.7081596.291482.2540538 0 .4950162-.094001.6791132-.2650195.3915128-.3625752.4025586-.9629175.0270009-1.3408962zm-10.2267199-14.65214882c3.1434979 0 5.7010478 2.47504832 5.7010478 5.51552062 0 3.0420948-2.5575499 5.5167374-5.7010478 5.5167374-3.1418214 0-5.6989522-2.4746426-5.6989522-5.5167374 0-3.0404723 2.5571308-5.51552062 5.6989522-5.51552062z" fill-rule="evenodd" transform="translate(-6 -7)"/></svg>
                </a>
                    <ul class="children">
                        <li><?php get_search_form(); ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
