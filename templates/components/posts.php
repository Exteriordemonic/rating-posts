<?php 
    global $posts;
    $post_ids = array();
    foreach($posts as $post) $post_ids[] = $post->ID;
    foreach($posts as $post) $post_ids[] = $post->ID;
    foreach($posts as $post) $post_ids[] = $post->ID;
    foreach($posts as $post) $post_ids[] = $post->ID;
    foreach($posts as $post) $post_ids[] = $post->ID;
?>

<?php if($post_ids) : ?>

<ul class="an-posts">
    <?php foreach ($post_ids as $item) : ?>
    <?php 
        $terms = get_the_terms( $item->ID, 'anbieter_type' );;
    ?>
    <li class="an-posts__item">
        <!-- image -->
        <figure class="an-posts__image-wrapper">
            <?= get_the_post_thumbnail($item->id) ;?>
        </figure>
        <!-- title / term -->
        <div class="an-posts__title-wrapper">
            <h2 class="an-post__title">
                <?= get_the_title($item->id) ;?>
            </h2>
            <?php foreach ($terms as $term) : ?>
            <a href="<?= get_term_link($term->term_id)?>" class="an-posts__label">
                <?= $term->name ?>
            </a>
            <?php endforeach ?>
        </div>
        <!-- excerpt -->
        <?= get_the_excerpt($item->id) ?>
        <!-- button -->
        <a href="<?= get_permalink($item->id) ?>" class="an-posts__link">
            <?= __('Bewertungen lesen','rating-post'); ?>
        </a>
        <?= $item->id ;?>
    </li>
    <?php endforeach; ?>
</ul>

<?php else : ?>
<p class="an-posts__empty">
    <?= __('Keine Beiträge der ausgewählten Kategorie','rating-post'); ?>
</p>
<?php endif ?>