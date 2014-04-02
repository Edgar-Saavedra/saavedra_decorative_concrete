<header id="navbar" role="banner" class="navbar navbar-fixed-top">  <!-- navbar-fixed-top -->
  <?php// if (!empty($logo)): ?>
       <!-- <div class="row">
          <div class="container logo-container">
            <a class="logo pull-left" href="<?php// print $front_page; ?>" title="<?php// print t('Home'); ?>">
              <img src="<?php// print $logo; ?>" alt="<?php// print t('Home'); ?>" />
            </a>
          </div>
          <div class="social-icons">
             <ul>
              <li><a href="<?php// print $front_page; ?>/rss.xml"><img src="<?php// print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/yelp.png'; ?>" alt="RSS Feed"/></a></li>
              <li><a href="http://www.facebook.com/<?php// echo theme_get_setting('facebook_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php// print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/facebook.png'; ?>" alt="Facebook"/></a></li>
              <li><a href="http://www.twitter.com/<?php// echo theme_get_setting('twitter_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php// print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/twitter.png'; ?>" alt="Twitter"/></a></li>
             </ul>
          </div>          
       </div> -->
  <?php// endif; ?>
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
 <!--      <div class="row">
        <div class="container">
          <div class="social-icons">
             <ul>
              <li><a href="<?php print $front_page; ?>/rss.xml"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/yelp.png'; ?>" alt="RSS Feed"/></a></li>
              <li><a href="http://www.facebook.com/<?php echo theme_get_setting('facebook_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/facebook.png'; ?>" alt="Facebook"/></a></li>
              <li><a href="http://www.twitter.com/<?php echo theme_get_setting('twitter_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/twitter.png'; ?>" alt="Twitter"/></a></li>
             </ul>
          </div>   
        </div>
      </div> -->
      <?php if (!empty($logo)): ?>
         <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a> 
      <?php endif; ?>      
      <?php if (!empty($site_name)): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>
      <div class="social-icons">
             <ul>
              <li><a href="<?php print $front_page; ?>/rss.xml"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/yelp.png'; ?>" alt="RSS Feed"/></a></li>
              <li><a href="http://www.facebook.com/<?php echo theme_get_setting('facebook_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/facebook.png'; ?>" alt="Facebook"/></a></li>
              <li><a href="http://www.twitter.com/<?php echo theme_get_setting('twitter_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/twitter.png'; ?>" alt="Twitter"/></a></li>
             </ul>
          </div>   
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php //print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<?php if ($page['home_header']): ?>
  <div class="row main-content-row top-header">
    <div class="container">
      <?php print render($page['home_header']); ?>
    </div>
  </div>
<?php endif; ?>
 <?php if (!empty($page['highlighted'])): ?>
    <div class="row row-highlighted <?php if($page['home_header']){ echo ' with-home-header';} ?>">
      <div class="container">
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      </div>
    </div>
<?php endif; ?>
<div class="row main-row">
  <div class="main-container container">
    <div class="row main-content-padding">
      <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
          <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
      </header> <!-- /#header -->

      <div class="row-fluid">

        <?php if (!empty($page['sidebar_first'])): ?>
          <aside class="span3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>  

        <section class="<?php print _bootstrap_content_span($columns); ?>">  
          <?php //if (!empty($breadcrumb)): print $breadcrumb; endif;?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
          <aside class="span3" role="complementary">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>

      </div>    
    </div>
  </div>  
</div>
<?php if ($page['recent_first'] || $page['recent_second'] || $page['recent_third'] || $page['recent']): ?> 
<div class="recent row">
  <div class="container">
    <?php if ($page['recent']): ?>
      <div class="row">
      <?php print render($page['recent']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['recent_first'] || $page['recent_second'] || $page['recent_third']): ?> 
      <div class="row main-content-padding">
        <div class="row-fluid">
          <?php if ($page['recent_first']): ?>
            <div class="span4 pull-left">
              <?php print render($page['recent_first']); ?>
            </div>
            <?php endif; ?>
            <?php if ($page['recent_second']): ?>
            <div class="span4">
              <?php print render($page['recent_second']); ?>
            </div>
            <?php endif; ?>
            <?php if ($page['recent_third']): ?>
            <div class="span4 pull-left">
              <?php print render($page['recent_third']); ?>
            </div>
            <?php endif; ?>                
          </div>   
      </div>
    <?php endif; ?>      
  </div>
</div>
<?php endif; ?> 
<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer']): ?> 
<footer class="footer row">
  <div class="container">
    <?php if ($page['footer']): ?>
      <div class="row">
      <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?> 
      <div class="row">
        <?php if ($page['footer_first']): ?>
        <div class="col-md-4 pull-left">
          <?php print render($page['footer_first']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_second']): ?>
        <div class="col-md-4">
          <?php print render($page['footer_second']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_third']): ?>
        <div class="col-md-4 pull-right">
          <?php print render($page['footer_third']); ?>
        </div>
        <?php endif; ?>      
      </div>
    <?php endif; ?>      
  </div>
</footer>
<?php endif; ?> 
