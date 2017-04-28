<?php get_header(); ?>
<main class="mdl-layout__content">
    <div class="page-content">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
				endwhile; endif; 
			?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>