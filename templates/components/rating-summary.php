<div class="an-rating-summary">
    <!-- summary votes -->
    <?php if($rateOveral) : ?>
    <div class="an-rating-summary__votes">
        <?php include RP_PATH.'templates/components/votes-template/summary.php'; ?>
        <?php include RP_PATH.'templates/components/votes-template/summary-list.php'; ?>
    </div>
    <?php endif ;?>
    <!-- DSC -->
    <p class="an-rating-summary__dsc">
        <?= get_field('dsc') ;?>
    </p>
    <!-- LINK -->
    <a href="./?tab=bewerten" class="an-rating-summary__link">
        <?= __('Anbieter bewerten','rating-post'); ?>
    </a>
</div>