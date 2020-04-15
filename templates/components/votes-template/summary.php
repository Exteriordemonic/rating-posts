<div class="an-summary">
    <div class="an-summary__wrapper <?php if($rs_single) { echo 'an-summary__wrapper--single'; } ;?>">
        <!-- STARTS -->
        <?php $starsCount = (floor($rateOveral['deineBewertung'] * 2) / 2)*10; ?>
        <?php include RP_PATH.'templates/components/votes-template/stars.php'; ?>
        <!-- NUM -->
        <span class="an-summary__rate">
            <?= $rateOveral['deineBewertung'] ?> <?= 'von 5';?>
        </span>
    </div>
    <!-- count votes -->
    <?php if(!$rs_single) :?>
    <span class="an-summary__count">
        <?= $ratesCount ;?> <?= __('Kundenbewertungen von Benutzern', 'rating-post') ?>
    </span>
    <?php endif; ?>
</div>