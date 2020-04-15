<?php 
    global $posts;
    
    
    if($_GET['s']) {
        $posts = get_posts([
            'post_type' => 'anbieter',
            'post_status' => 'publish',
            'numberposts' => -1,
            "s" =>$_GET['s']
            // 'order' => 'ASC'
        ]);
    }

    $post_ids = array();
    foreach($posts as $post) $post_ids[] = $post->ID;
    ?>

<?php if($post_ids) : ?>

<svg class="an-single__hide">
    <defs>
        <linearGradient id="MyGradient">
            <stop offset="0%" stop-color="#F1BD48" />
            <stop offset="50%" stop-color="#F1BD48" />
            <stop offset="51%" stop-color="#C6C8EA" />
            <stop offset="100%" stop-color="#C6C8EA" />
        </linearGradient>
    </defs>
</svg>

<ul class="an-posts" id="an-posts">
    <?php foreach ($posts as $item) : ?>
    <?php 
        the_post();
        $terms = get_the_terms( $item->ID, 'anbieter_type' );
    ?>
    <li class="an-posts__item">
        <!-- image -->
        <a href="<?= get_permalink($item->id) ?>">
            <figure class="an-posts__image-wrapper">
                <?= get_the_post_thumbnail($item->id) ;?>
            </figure>
        </a>
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
        <?php /* <p class="an-posts__excerpt">
            <?= get_the_excerpt($item->id) ?>
        </p> */?>
        <?php
        $rateOveral = get_rates($item->id);
        if($rateOveral) {
            include RP_PATH.'templates/components/votes-template/summary.php'; 
        }
        ?>
        <!-- button -->
        <a href="<?= get_permalink($item->id) ?>" class="an-posts__link">
            <?= __('Bewertungen lesen','rating-post'); ?>
        </a>
        <!-- button -->
        <a href="<?= get_permalink($item->id) ?>/?tab=bewerten" class="an-posts__link -is-active">
            <?= __('Bewertung schreiben','rating-post'); ?>
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