<?php 

$tabs = get_terms( 'anbieter_type', array(
    'hide_empty' => false,
) );

if(is_post_type_archive('anbieter')) $cur = 'Alle';
 
if(is_tax('anbieter_type')) $cur = get_queried_object()->slug;

function isTabActive($name, $cur) {
    if ($name == $cur) {
        echo '-is-active';
    }
}

?>



<ul class="an-tabs">
    <li class="an-tabs__item">
        <a class="an-tabs__link <?php isTabActive('Alle', $cur) ;?>"
            href="<?= get_post_type_archive_link('anbieter') ?>" data-an-tab>
            <?= __('Alle', 'rating-post') ?>
        </a>
    </li>
    <?php foreach ($tabs as $item) : ?>
    <li class="an-tabs__item">
        <a class="an-tabs__link <?php isTabActive($item->slug, $cur) ;?>" href="<?= get_term_link($item->term_id) ?>"
            data-an-tab>
            <?= $item->name ?>
        </a>
    </li>
    <?php endforeach; ?>
    <li class="an-tabs__item an-tabs__item--search">
        <?php include RP_PATH.'templates/components/search-form.php'; ?>
    </li>
</ul>