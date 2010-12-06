<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $site_name . " | " . $site_slogan ?></title>
<?php
drupal_add_css(path_to_theme() . '/styles/galleria.css', 'theme');
drupal_add_css(path_to_theme() . '/styles/slideshow.css', 'theme');
$styles = $variables['styles'] = drupal_get_css();
drupal_add_js(path_to_theme() . '/scripts/jquery.galleria.js', 'theme');
drupal_add_js(path_to_theme() . '/scripts/slideshow.js', 'theme');
$scripts = $variables['script'] = drupal_get_js();
print $styles;
print $scripts;
?>
</head>
<body>
<div id="frontpage">
	<div id="container">
		<div id="header">
			<div id="language-switcher">
				<?php print $languageswitcher; ?>
			</div>
			<h1>
				<a href="<?php print $base_path; ?>"><?php print $site_name; ?></a>
			</h1>
			<div class="navigation">
				<?php if (isset($primary_links)): print theme('links', $primary_links, array('class' => 'primary-links')); endif; ?>
			</div>		
		</div>
		<div id="content" class="clearfix">
			<div id="media">
				<!-- Wrapper where the main image is displayed. Can be used to style a border etc. -->
				<div class="slideshow-big">
					<!-- Fallback for disabled javascript -->
					<noscript>
						<img src="http://farm6.static.flickr.com/5246/5222963943_100be0fce5.jpg" />
					</noscript>
				</div>
				<div class="slideshow-controls">
					<!-- List of thumbnail IMGs with Anchors to the big images. -->
					<a href="#" class="slideshow-back" title="<?php print t('Back'); ?>"><?php print t('Back'); ?></a>
					<ul class="slideshow-list"></ul>
					<a href="#" class="slideshow-forward" title="<?php print t('Forward'); ?>"><?php print t('Forward'); ?></a>
					<!-- Buttons to open the corresponding full screen Flickr slideshow and main gallery. -->
					<a class="slideshow-fullscreen" target="_blank" href="http://www.flickr.com/photos/bythuongtran/sets/72157623394214280/show/" title="<?php print t('Full screen'); ?>"><?php print t('Full screen'); ?></a>
					<a class="slideshow-more" href="/photos" title="<?php print t('More photos'); ?>"><?php print t('More photos'); ?></a>
				</div>
			</div>
			<div id="introduction">
				<?php
				print $main_content_above;
				if ($mission): print '<div id="mission">'. $mission .'</div>'; endif;
				if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif;
				//if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif;
				if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif;
				if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif;
				if ($show_messages && $messages): print $messages; endif;
				if ($help): print $help; endif;
				print $content;
				print $main_content_below;
				?>
			</div>
		</div>
		<div id="footer">
			<div id="sharing">
				<a class="a2a_dd addtoany" href="http://www.addtoany.com/share_save?linkname=Kymterra&amp;linkurl=kymterra.com" title="<?php print t('Add to any'); ?>"><?php print t('Add to any'); ?></a>
				<script type="text/javascript">a2a_linkname="Kymterra";a2a_linkurl="kymterra.com";</script>
				<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
				<p class="share"><?php print t('Share this website'); ?></p>
				<p class="social"><?php print t('Follow us at'); ?>:</p>
				<a href="http://www.facebook.com/kymterra" class="facebook" title="Facebook">Facebook</a>
				<a href="http://twitter.com/kymterra" class="twitter" title="Twitter">Twitter</a>
				<a href="http://blog.kymterra.com/" class="blogger" title="Blogger">Blogger</a>
				<a href="http://www.flickr.com/photos/kymterra" class="flickr" title="Flickr">Flickr</a>
			</div>
			<div id="notice">
				<?php if (isset($secondary_links)): print theme('links', $secondary_links, array('class' => 'secondary-links')); endif; ?>
				<p class="copyright">&copy; <span class="btt">kym</span>terra <?php print date("Y"); ?>. <?php print t('All rights reserved.'); ?></p>
			</div>
		</div> 
	</div>
</div>
<?php print $closure; ?>
</body>
</html>
