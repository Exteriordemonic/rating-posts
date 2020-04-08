<form class="an-rate-now-cta" action="./?tab=bewerten" method="GET">
    <h3 class="an-rate-now-cta__title">
        <?= $post->post_title ;?> <?= __('bewerten','rating-post'); ?>
    </h3>
    <input type="hidden" name="tab" value="bewerten">
    <?php $name="Deine Bewertung" ;?>
    <?php if($_GET[sanitize_title($name)]) $starsCount = $_GET[sanitize_title($name)]; ;?>
    <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
    <button class="an-rate-now-cta__button"><?= __('Jetzt bewerten','rating-post'); ?></button>
    <a class="an-rate-now-cta__link" href="<?= get_post_type_archive_link('anbieter') ?>">
        <?= __('oder anderen <span>Anbieter bewerten</span>','rating-post'); ?>
    </a>
</form>