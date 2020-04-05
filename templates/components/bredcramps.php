<?php 
$terms = get_the_terms( $post->ID, 'anbieter_type' );
?>

<ul class="an-bredcramps">
    <li class="an-bredcramps__item">
        <a href="<?= get_post_type_archive_link('anbieter') ?>" class="an-bredcramps__link">
            <?= __('Anbieter', 'rating-post') ?>
        </a>
    </li>
    <li class="an-bredcramps__item">
        <a href="<?= get_term_link($terms[0]->term_id) ?>" class="an-bredcramps__link">
            <?= $terms[0]->name ?>
        </a>
    </li>
    <?php if($_GET['tab'] == 'bewerten'): ?>
    <li class="an-bredcramps__item">
        <a href="./?tab=erfahrungen" class="an-bredcramps__link">
            <?= $post->post_title ?> <?= __('Erfahrungen', 'rating-post') ?>
        </a>
    </li>
    <li class="an-bredcramps__item">
        <?= $post->post_title ?> <?= __('Anbieter bewerten', 'rating-post') ?>
    </li>
    <?php else:?>
    <li class="an-bredcramps__item">
        <?= $post->post_title ?> <?= __('Erfahrungen', 'rating-post') ?>
    </li>
    <?php endif ;?>
</ul>