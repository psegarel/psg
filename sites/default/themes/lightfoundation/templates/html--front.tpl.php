<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <?php print $head; ?>
  <meta name="author" content="Patrick Segarel" />
  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>  
  <!--Lightsoon Stylesheet-->
  <!--[if IE 7]>
  <link rel="stylesheet" href="sites/all/themes/lightfoundation/css/fontello-ie7.css">
	  <![endif]-->

  <link href="<?php print drupal_get_path('theme', 'lightfoundation').'/css/font.css';?>" rel="stylesheet" type="text/css">
  <link href="<?php print drupal_get_path('theme', 'lightfoundation').'/css/fontello.css';?>" rel="stylesheet" type="text/css">
  <link href="<?php print drupal_get_path('theme', 'lightfoundation').'/css/main.css';?>" rel="stylesheet" type="text/css">
  <link href="<?php print drupal_get_path('theme', 'lightfoundation').'/css/ui.totop.css';?>" rel="stylesheet" type="text/css">
  <link href="<?php print drupal_get_path('theme', 'lightfoundation').'/css/local.css';?>" rel="stylesheet" type="text/css">

  <!--[if lt IE 9]>
	  <link href="/css/ie.css" rel="stylesheet" type="text/css" />
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  <!--[if lt IE 8]>
  <style>
  /* For IE < 8 (trigger hasLayout) */
  .clearfix {
      zoom:1;
  }
  </style>
  <![endif]-->


	<?php print $scripts; ?>
  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <!--Lightsoon Javascript-->
  <!--<script // src="js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery-migrate-1.2.1.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.easing.1.3.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.scrollTo-min.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/slides.min.jquery.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/waypoints.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.parallax-1.1.3.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/Placeholders.min.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.ui.totop.min.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.countdown.min.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/jquery.validate.js';?> type="text/javascript"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/script.js';?> type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script src=<?php print drupal_get_path('theme', 'lightfoundation').'/js/gmaps.js';?> type="text/javascript"></script>
  <!--/ Lightsoon Javascript-->
  
  <!-- Google analytics -->


  <!-- End google analytics -->  
  
</body>
</html>
