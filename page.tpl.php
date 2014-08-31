<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
  <div class="page-wrapper container">
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php print $front_page; ?>"title="<?php print t('Home'); ?>" rel="home" id="logo">
              <?php if ($logo): ?>            
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />                
              <?php endif; ?>
            </a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                        
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php print $front_page; ?>">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recap <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/maker-fest-2014">Makerfest 2014</a></li>                  
                </ul>
              </li>
              <li class="apply-btn"><a href="/apply">Apply Now</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    
    
  <?php if(drupal_is_front_page()): ?>  
    <section class="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>                 
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="sites/all/themes/makerfest/images/red-bg.jpg" alt="Slide1" />
            <div class="carousel-caption">
              <h3>Who is Makerfest?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-video"> <span class="glyphicon glyphicon-play"></span> Watch Video</a>
            </div>
          </div>
          <div class="item">
            <img src="sites/all/themes/makerfest/images/yellow-bg.jpg" alt="Slide1" />
            <div class="carousel-caption">
              <h3>Makerfest 2015</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="/apply" class="btn btn-fest"> <span class="glyphicon glyphicon-ok"></span> Apply Now</a>
            </div>
          </div>
          
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </section>
    
    <section class="icons">
      <h1 class="hobo">What will you make?</h1>
      <div class="col-xs-6 col-sm-3">
        <img src="sites/all/themes/makerfest/images/technology.png">
        <ul>
          <li>Technology</li>
          <li>Science</li>
          <li>Engineering</li>
          <li>Applications</li>
        </ul>
      </div>
      
      <div class="col-xs-6 col-sm-3">
        <img src="sites/all/themes/makerfest/images/hacker.png">
        <ul>
          <li>Hacker</li>
          <li>Gaming</li>
          <li>Robotics</li>
          <li>DIY</li>
        </ul>
      </div>
      
      <div class="col-xs-6 col-sm-3">
        <img src="sites/all/themes/makerfest/images/design.png">
        <ul>
          <li>Design</li>
          <li>Music</li>
          <li>Craft</li>
          <li>Art</li>
        </ul>
      </div>
      
      <div class="col-xs-6 col-sm-3">
        <img src="sites/all/themes/makerfest/images/social.png">
        <ul>
          <li>Social</li>
          <li>Green &amp; Cleantech</li>
          <li>Recycling</li>
          <li>Agriculture</li>
        </ul>
      </div>
    </section>
    
    <section class="social"> 
      <div class="row">
        <div class="col-md-8">
          <?php print render($page['footer_first']); ?>
        </div>
        
        <div class="col-md-4">
          <h2 class="get-updated">Get Updated</h2>
          <hr>
          <div class="social-link">
            <a href="https://www.facebook.com/makerfest" target="_blank">
              <img src="sites/all/themes/makerfest/images/fb.png"> Facebook
            </a>
          </div>
          
          <div class="social-link">
            <a href="https://twitter.com/makerfestmjff" target="_blank">
              <img src="sites/all/themes/makerfest/images/twitter.png"> Twitter  
            </a>            
          </div>
          
          <div class="social-link">
            <a href="https://www.youtube.com/channel/UChb0vqIP7inaobXo3m2UMtA" target="_blank">
              <img src="sites/all/themes/makerfest/images/youtube.png"> Youtube
            </a>            
          </div>
        </div>
      </div>
    </section>
    
  <?php endif; ?>  
    <?php if(!drupal_is_front_page()): ?>
      <hr class="main-line">
      <div id="content" class="column"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->
    <?php endif; ?>

  </div>