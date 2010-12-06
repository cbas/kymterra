<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php
print $styles;
print $scripts;
?>
</head>
<body>
<div id="page">
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
			<div id="sidebar-left">
				<?php print $sidebar_left; ?>
			</div>
			<div id="body">
				<?php
				print $main_content_above;
				if ($mission): print '<div id="mission">'. $mission .'</div>'; endif;
				if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif;
				if ($breadcrumb): print $breadcrumb; endif;
				if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif;
				if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif;
				if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif;
				if ($show_messages && $messages): print $messages; endif;
				if ($help): print $help; endif;
				print $content;
				print $main_content_below;
				?>
			</div>
			<div id="sidebar-right">
				<?php print $sidebar_right; ?>
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
