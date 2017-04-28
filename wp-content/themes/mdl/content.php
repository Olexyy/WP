
<!-- Wide card with share menu button -->
<style>
    .demo-card-wide.mdl-card {
        width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
        height: 176px;
        /*background: url('../assets/demos/welcome_card.jpg') center / cover;*/
    }
    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></h2>
    </div>
    <div class="mdl-card__supporting-text">
        <?php the_excerpt(); ?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php comments_link(); ?>">
          <?php
          printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
        </a>

        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Some action
        </a>
    </div>
    <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
            <i class="material-icons">share</i>
        </button>
    </div>
</div>
