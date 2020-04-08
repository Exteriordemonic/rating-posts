<div class="an-summary">
    <div class="an-summary__wrapper">
        <!-- STARTS -->
        <?php $starsCount = (floor($rateOveral['deineBewertung'] * 2) / 2)*10; ?>
        <?php include RP_PATH.'templates/components/votes-template/stars.php'; ?>
        <!-- NUM -->
        <span class="an-summary__rate">
            <?= $rateOveral['deineBewertung'] ?> von 5
        </span>
    </div>
    <!-- count votes -->
    <span class="an-summary__count">
        <?= $ratesCount ;?> <?= __('Kundenbewertungen von Benutzern', 'rating-post') ?>
    </span>
</div>