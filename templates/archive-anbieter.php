<?php get_header(); ?>

<section class="anbieters">
    <div class="an-container an-container--center">
        <h1 class="anbieters__title">
            <?= __('Bewerte deinen Anbieter', 'rating-post') ?>
        </h1>
        <?php include RP_PATH.'templates/components/tabs.php'; ?>
        <?php include RP_PATH.'templates/components/posts.php'; ?>
    </div>
</section>

<?php get_footer(); ?>