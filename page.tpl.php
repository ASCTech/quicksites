<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"/>
<meta name="author" content="Arts and Sciences Technology Services Web and Data Solutions"/>
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"/>

<?php

global $base_path;
global $theme_path;
$quickSites_layout = theme_get_setting('quickSites_layout');
$quickSites_asc_branding = theme_get_setting('quickSites_asc_branding');
$quickSites_theme = theme_get_setting('quickSites_theme');
$quickSites_theme_header = theme_get_setting('quickSites_theme_header');
$quickSites_theme_footer = theme_get_setting('quickSites_theme_footer');
$quickSites_header_left_color = theme_get_setting('quickSites_header_left_color');
$quickSites_header_right_color = theme_get_setting('quickSites_header_right_color');
if($quickSites_theme_header === '') $quickSites_theme_header = $quickSites_theme;
if($quickSites_theme_footer === '') $quickSites_theme_footer = $quickSites_theme;
if($quickSites_theme === '0'){
  $quickSites_features_color = theme_get_setting('quickSites_features_color');
  $quickSites_front_header_left_color = theme_get_setting('quickSites_front_header_left_color');
  $quickSites_front_header_right_color = theme_get_setting('quickSites_front_header_right_color');
  $quickSites_footer_center_color = theme_get_setting('quickSites_footer_center_color');
  $quickSites_footer_outside_color = theme_get_setting('quickSites_footer_outside_color');
}else{
  $quickSites_features_color = '';
  $quickSites_front_header_left_color = '';
  $quickSites_front_header_right_color = '';
  $quickSites_footer_center_color = '';
  $quickSites_footer_outside_color = '';
}

$body_classes .= ' theme-'.$quickSites_theme;
$body_classes .= ' layout-'.$quickSites_layout;

// These content types will not display a title in inner.tpl.php
$no_title_node_types = array("qs_events", "qs_people");

?>

<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<!-- <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'> -->
<link href='//www.osu.edu/assets/fonts/webfonts.css' rel='stylesheet' type='text/css'>

<?php

    print '
      <style type="text/css">
      .block-poll h3 {
        background-color:' . $quickSites_features_color . ';
        color:' . $quickSites_features_color . ';
      }
      #features .block h3 {
        background-color:' . $quickSites_features_color . ';
        border-color:' . $quickSites_features_color . ';
      }
      .block-poll {
        border-color:' . $quickSites_features_color . ';
      }
      #front-header-tile {
        background-color:' . $quickSites_front_header_right_color . ';
        background-image:-webkit-gradient(linear, 200 center, 475 center, from(' . $quickSites_front_header_left_color . '), to(' . $quickSites_front_header_right_color . '));
        background-image:-moz-linear-gradient(left,' . $quickSites_front_header_left_color . ' 200px,' . $quickSites_front_header_right_color . ' 475px);
        -ms-filter:progid:DXImageTransform.Microsoft.gradient(gradientType=1,startColorStr=' . $quickSites_front_header_left_color . ',endColorStr=' . $quickSites_front_header_right_color . ');
        filter:progid:DXImageTransform.Microsoft.gradient(gradientType=1,startColorStr=' . $quickSites_front_header_left_color . ',endColorStr=' . $quickSites_front_header_right_color . ');
      }
      #front-header > .container {
        background:' . $quickSites_front_header_left_color . ';
      }

    ';

      print '
        #footer {
          background-color:' . $quickSites_footer_outside_color . ';
          background-image:-webkit-gradient(radial,50% center,0,center center,750,from(' . $quickSites_footer_center_color . '),to(' . $quickSites_footer_outside_color . '));
          background-image:-moz-radial-gradient(50% center, circle farthest-corner,' . $quickSites_footer_center_color . ',' . $quickSites_footer_outside_color . ');
          -ms-filter:progid:DXImageTransform.Microsoft.gradient(gradientType=0,startColorStr=' . $quickSites_footer_center_color . ',endColorStr=' . $quickSites_footer_outside_color . ');
          filter:progid:DXImageTransform.Microsoft.gradient(gradientType=0,startColorStr=' . $quickSites_footer_center_color . ',endColorStr=' . $quickSites_footer_outside_color . ');
        }
      ';

    print '</style>';


?>

<?php print $scripts ?>

</head>

<body class="<?php print $body_classes; ?>">

  <div id="osu_navbar" role="navigation">
      <div class="container">
        <h2 class="osu-semantic">Ohio State nav bar</h2>
      <a href="#page-content" id="skip" class="osu-semantic">Skip to main content</a>
        <div class="univ_info">
          <p class="univ_name"><a href="http://osu.edu" title="The Ohio State University">The Ohio State University</a></p>
        </div><!-- /univ_info -->
        <div class="univ_links">
          <div class="links">
            <ul>
              <li><a href="http://www.osu.edu/help.php" class="help">Help</a></li>
              <li><a href="http://buckeyelink.osu.edu/" class="buckeyelink" >BuckeyeLink</a></li>
              <li><a href="http://www.osu.edu/map/" class="map">Map</a></li>
              <li><a href="http://www.osu.edu/findpeople.php" class="findpeople">Find People</a></li>
              <li><a href="https://email.osu.edu/" class="webmail">Webmail</a></li> 
              <li><a href="http://www.osu.edu/search/" class="search">Search Ohio State</a></li>
            </ul>
          </div><!-- /links -->
        </div><!-- /univ_links -->
      </div><!-- /container -->
  </div><!-- /osu_navbar -->

  <div id="header" style="background-color: <?php print $quickSites_header_left_color; ?>;">
    <div class="container">
      <div id="header-container" class="span-24">
        <div id="logo"<?php if($logo) print ' style="background-image: url(' . $logo . '); background-repeat: no-repeat;"'; ?>>
          <a href="<?php global $base_url; print $base_url; ?>" title="<?php print $site_name; ?> home page"><?php if(!$logo) print $site_name; else print "&nbsp;"; ?></a>
        </div><!-- .logo -->
        <a href="http://www.osu.edu/" id="osulogo" title="Ohio State University homepage">&nbsp;</a>
        <div id="navigation">
          <?php print $MainNav; ?>
        </div><!-- #navigation -->
      </div>
    </div> <!-- .container -->
    <div id="header-tile" style="background: <?php print $quickSites_header_right_color; if($logo) print ' url('.$logo.') no-repeat -575px 0px'; ?>;">&nbsp;</div>
  </div> <!-- #header -->
  <div id="headerbar">&nbsp;</div>

  <?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

  <hr id="footer-border"/>
  <div id="footer">
    <div class="container">
      <?php if (!(isset($quickSites_asc_branding)) || ($quickSites_asc_branding == 1)){ ?>
        <a href="http://artsandsciences.osu.edu/" id="small-banner-2" title="Arts and Sciences homepage">&nbsp;</a>
      <?php } ?>
      <div id="contact" class="span-7 append-1">
        <img src="/<?php echo $theme_path ?>/images/d6-footer-wordmark-260px.png" width="260" height="23" alt="The Ohio State University">
        <?php print $contact_region; ?>
      </div><!-- .contact -->
      <div id="footer-right" class="span-16 last">
        <div id="footer-top" class="span-16 last">
          <?php print $footer; ?>
        </div>
        <div id="footer-bottom" class="span-16 last">
          <?php print $footer_menu; ?>
        </div>
      </div>
    </div><!-- .container -->
  </div><!-- #footer -->

  <div id="footer_copyright" class="clearfix">
    <div class="small">
      <p>&copy; <?php print date("Y"); ?>, The Ohio State University, Designed by <a href="http://asccomm.osu.edu" title="ASC Communications website">Arts and Sciences Communications Services</a></p>
      <?php include("icons/uicons_basic.php"); ?>
    </div>
  </div>


<?php print $closure;?>

</body>

</html>


