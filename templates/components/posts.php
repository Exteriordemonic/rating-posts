<?php 
    global $posts;
    
    $postPerPage = 45; 
    
    $orderby = 'title';
    $order = $_GET['orderby'];

    if($order=="beliebteste-anbieter") {
        $metaValue = 'visit';
        $orderby = 'meta_value';
	    $order	= 'ASC';
    }

    if($order=="beste-bewertung") {
        $metaValue = 'bewertung';
        $orderby = 'meta_value';
	    $order	= 'DSC';
    }
    
    $postArray = [
        'post_type' => 'anbieter',
        'post_status' => 'publish',
        'numberposts' => $postPerPage,
        'posts_per_page' => $postPerPage,
        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
        'meta_key' => $metaValue,
        'orderby' => $orderby,
        'order' => $order,
        'tax_query' => array(
            array(
            'taxonomy' => 'anbieter_type',
            'field' => 'slug',
            'terms' => get_queried_object()->slug,
            )
        )
        // 'order' => 'ASC'
    ];
    
    if($_GET['s']) {
        $posts = get_posts([
            'post_type' => 'anbieter',
            'post_status' => 'publish',
            'numberposts' => -1,
            "s" =>$_GET['s'],
            // 'order' => 'ASC'
        ]);
    }

    elseif (get_queried_object()->slug) {
        $posts = get_posts($postArray);
    }
    else {
        $postArray = [
           'post_type' => 'anbieter',
            'post_status' => 'publish',
            'numberposts' => $postPerPage,
            'posts_per_page' => $postPerPage,
            'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
            'meta_key' => $metaValue,
            'orderby' => $orderby,
            'order' => $order,
            
            // 'order' => 'ASC'
        ];
        $posts = get_posts($postArray);
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
    <li
        class="an-posts__item <?php if(strtolower(get_search_query()) == strtolower($item->post_title)) {echo 'an-posts__item--mach';} ;?>">
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
        //if($rateOveral) {
            include RP_PATH.'templates/components/votes-template/summary.php'; 
        //}
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

<?php $loop = new WP_Query($postArray); ?>

<div class="an-pagination">
    <?php
    
    $big = 999999999; // need an unlikely integer
     echo paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $loop->max_num_pages,
        'mid_size' => 10
    ) );
    ?>

</div>



<?php else : ?>
<ul class="an-posts" id="an-posts">
    <li class="an-posts__item an-posts__item--empty">
        <p class="an-posts__empty">
            <?= __('Keine Beiträge der ausgewählten Kategorie','rating-post'); ?>
        </p>
    </li>
</ul>

<?php endif ?>

<div class="hidden" hidden id="hidden-content"></div>