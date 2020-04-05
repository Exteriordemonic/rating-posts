<?php 

$cur = $_GET['tab'];
function isSingleTabActive($name, $cur) {
    if ($name == $cur) {
        echo '-is-active';
    }
}

if(!$cur) $cur = 'erfahrungen';

?>



<ul class="an-single-tabs">
    <li class="an-single-tabs__item">
        <a class="an-single-tabs__link <?php isSingleTabActive('erfahrungen', $cur) ;?>" href="./?tab=erfahrungen"
            data-an-single-tab="erfahrungen">
            <?= __('Erfahrungen', 'rating-post') ?>
        </a>
    </li>
    <li class="an-single-tabs__item">
        <a class="an-single-tabs__link <?php isSingleTabActive('kundigen', $cur) ;?>" href="./?tab=kundigen"
            data-an-single-tab="kundigen">
            <?= __('Kündigen', 'rating-post') ?>
        </a>
    </li>
</ul>