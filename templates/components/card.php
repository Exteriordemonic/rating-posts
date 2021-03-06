<div class="an-card">
    <!-- image -->
    <figure class="an-card__image-wrapper">
        <?= get_the_post_thumbnail($item->id) ;?>
    </figure>
    <!-- title / term -->
    <div class="an-card__title-wrapper">
        <h1 class="an-card__title">
            <?=  $post->post_title ;?>
        </h1>
        <?php foreach ($terms as $term) : ?>
        <a href="<?= get_term_link($term->term_id)?>" class="an-card__label">
            <?= $term->name ?>
        </a>
        <?php endforeach ?>
    </div>
    <!-- excerpt -->
    <p class="an-card__excerpt">
        <?= get_the_excerpt($item->id) ?>
    </p>

    <?php if($_GET['tab'] == 'bewerten'): ?>
    <!-- button -->
    <a href="./?tab=erfahrungen" class="an-card__link">
        <?php include RP_PATH.'templates/svg/arrow-left.php'; ?> <?= __('Zu Erfahrungen','rating-post'); ?>
    </a>
    <?php else: ?>
    <!-- button -->
    <a href="<?= get_field('ZumAngebot', $item->id) ?>" class="an-card__link">
        <?= __('Zum Angebot','rating-post'); ?>
    </a>
    <?php endif; ?>
</div>