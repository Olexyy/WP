<?php get_header(); ?>
<main class="mdl-layout__content">
    <div class="page-content">
		<div class="mdl-grid">
            <div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'content', get_post_format() );
                endwhile; ?>
                    <nav>
                        <ul class="pager">
                            <li class="page_item"><?php next_posts_link( 'Previous' ); ?></li>
                            <li class="page_item"><?php previous_posts_link( 'Next' ); ?></li>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--4-col-phone">
                <?php get_sidebar(); ?>
            </div>
		</div>
	</div>
</main>
<?php get_footer(); ?>