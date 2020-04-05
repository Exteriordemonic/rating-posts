<?php 
    global $posts;
    $post_ids = array();
    foreach($posts as $post) $post_ids[] = $post->ID;
?>

<?php if($post_ids) : ?>

<ul class="an-posts" id="an-posts">
    <?php foreach ($posts as $item) : ?>
    <?php 
        the_post();
        $terms = get_the_terms( $item->ID, 'anbieter_type' );
    ?>
    <li class="an-posts__item">
        <!-- image -->
        <figure class="an-posts__image-wrapper">
            <?= get_the_post_thumbnail($item->id) ;?>
        </figure>
        <!-- title / term -->
        <div class="an-posts__title-wrapper">
            <h2 class="an-posts__title">
                <?=  $item->post_title ;?>
            </h2>
            <?php foreach ($terms as $term) : ?>
            <a href="<?= get_term_link($term->term_id)?>" class="an-posts__label">
                <?= $term->name ?>
            </a>
            <?php endforeach ?>
        </div>
        <!-- excerpt -->
        <p class="an-posts__excerpt">
            <?= get_the_excerpt($item->id) ?>
        </p>
        <!-- button -->
        <a href="<?= get_permalink($item->id) ?>" class="an-posts__link">
            <?= __('Bewertungen lesen','rating-post'); ?>
        </a>
        <?= $item->id ;?>
    </li>
    <?php endforeach; ?>
</ul>

<?php else : ?>
<ul class="an-posts" id="an-posts">
    <li class="an-posts__item an-posts__item--empty">
        <p class="an-posts__empty">
            <?= __('Keine Beiträge der ausgewählten Kategorie','rating-post'); ?>
        </p>
    </li>
</ul>

<?php endif ?>