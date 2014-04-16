<link href='http://fonts.googleapis.com/css?family=Cabin|Merriweather+Sans|Belleza' rel='stylesheet' type='text/css'>
<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 */
?>
<div id="page-wrapper front">
  <div id="page" class="<?php print $classes; ?>">

    <div id="header-wrapper">
      <div class="container clearfix">

        

        <header<?php print $header_attributes; ?>>
			<?php if($page['leaderboard']): print render($page['leaderboard']); endif; ?>
        <?php // print render($page['header']); ?>

          <div class="top-logos"></div>

          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <!-- start: Branding -->
            <div<?php print $branding_attributes; ?>>

              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
                <div id="logo1">
                <?php global $base_url; ?>
                	<a href="<?php echo $base_url; ?>"><img src="<?php  echo $base_url."/sites/all/themes/alertajoven_modern/logo_s.png"; ?>" /></a>
                </div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <!-- start: Site name and Slogan hgroup -->
                <div<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </div><!-- /end #name-and-slogan -->
              <?php endif; ?>


            </div><!-- /end #branding -->
          <?php endif; ?>
		  <div class="smallmode"> <?php global $base_url; ?><a href="<?php echo $base_url; ?>"><img src="<?php global $base_url; echo $base_url."/sites/all/themes/alertajoven_modern/logo-tiny.png"; ?>" /></a></div>
          <?php if ($page['menu_bar']): print render($page['menu_bar']); endif; ?>

        </header>
      </div>
    </div>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['secondary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper">
	<?php if ($page['jovens_of_the_month']): ?>
	  <div class="jovens_of_the_month">
		<?php print render($page['jovens_of_the_month']); ?>
	  </div> <!-- /.jovens_of_the_month -->
	<?php endif; ?>
	<div class="container">
      <div id="columns"><div class="columns-inner clearfix">
        <div id="content-column"><div class="content-inner">

          <?php print render($page['highlighted']); ?>

          <<?php print $tag; ?> id="main-content">

            <?php if ($messages || $page['help']): ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>
            <?php endif; ?>

            <?php if ($breadcrumb): print $breadcrumb; endif; ?>

            <?php print render($title_prefix); ?>

            <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
              <header<?php print $content_header_attributes; ?>>

                <?php if ($title): ?>
                  <h1 id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>

                <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                  <div id="tasks">

                    <?php if ($primary_local_tasks): ?>
                      <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($secondary_local_tasks): ?>
                      <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($action_links = render($action_links)): ?>
                      <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>

              </header>
            <?php endif; ?>

            <?php if ($content = render($page['content'])): ?>
              <div id="content">
                <?php print $content; ?>
              </div>
            <?php endif; ?>

            <?php print render($title_suffix); // Prints page level contextual links ?>

          </<?php print $tag; ?>>

          <?php print render($page['content_aside']); ?>

        </div></div>

        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>

      </div></div>
    </div></div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
        <div class="lip"></div>
      </div>
    <?php endif; ?>

    <div id="footer-wrapper">
      <div class="container clearfix">

        <?php if ($page['footer']): ?>
          <footer<?php print $footer_attributes; ?>>
            <?php print render($page['footer']); ?>
          </footer>
        <?php endif; ?>

        <?php if ($page['footer_bottom']): print render($page['footer_bottom']); endif; ?>

      </div>
    </div>

  </div>
</div>
