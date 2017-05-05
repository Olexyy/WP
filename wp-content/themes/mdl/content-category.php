
<!-- Wide card with share menu button -->
<style>
    .demo-card-wide.mdl-card {
        width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
        height: 75px;
        background-color: #e2f3ff;
        /*background: url('../assets/demos/welcome_card.jpg') center / cover;*/
    .demo-card-wide > .mdl-card__menu {
        color: #8495ff;
    }
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
    </div>
    <div class="mdl-card__supporting-text">
        <?php the_excerpt(); ?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
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
