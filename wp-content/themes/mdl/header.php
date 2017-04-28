<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css" />
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
		<?php wp_head();?>
    </head>
		<body>
			<div class="demo-layout-waterfall mdl-layout mdl-js-layout mdl-layout--no-desktop-drawer-button mdl-layout--fixed-header">
				<header class="mdl-layout__header mdl-layout__header--waterfall">
					<!-- Top row, always visible -->
					<div class="mdl-layout__header-row">
						<!-- Title -->
						<a class="mdl-navigation__link" href="<?php echo get_bloginfo( 'wpurl' );?>">
							<span class="mdl-layout-title mdl-layout--large-screen-only">
								<h3><?php echo get_bloginfo( 'name' ); ?></h3>
							</span>
						</a>
						<div class="mdl-layout-spacer"></div>
                      <?php
                        if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
                          <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                            <?php dynamic_sidebar( 'custom-header-widget' ); ?>
                          </div>
                         <?php endif; ?>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
							  mdl-textfield--floating-label mdl-textfield--align-right">
							<label class="mdl-button mdl-js-button mdl-button--icon"
								   for="waterfall-exp">
								<i class="material-icons">search</i>
							</label>
							<div class="mdl-textfield__expandable-holder">
								<input class="mdl-textfield__input" type="text" name="sample"
									   id="waterfall-exp">
							</div>
						</div>
					</div>
					<!-- Bottom row, not visible on scroll -->
					<div class="mdl-layout__header-row mdl-layout--large-screen-only">
						<div class="mdl-layout-spacer"></div>
						<span class="mdl-layout-text"><em><?php echo get_bloginfo( 'description' ); ?></em></span>
						<div class="mdl-layout-spacer"></div>
						<!-- Navigation -->
						<nav class="mdl-navigation">
							<!--a class="mdl-navigation__link active" href="/">Home</a-->
							<?php wp_list_pages( '&title_li=' ); ?>
							<a class="mdl-navigation__link" href="/">Hardcoded</a>
						</nav>
					</div>
				</header>
				<div class="mdl-layout__drawer">
					<span class="mdl-layout-title">Home</span>
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="">Link</a>
						<a class="mdl-navigation__link" href="">Link</a>
						<a class="mdl-navigation__link" href="">Link</a>
						<a class="mdl-navigation__link" href="">Link</a>
					</nav>
				</div>