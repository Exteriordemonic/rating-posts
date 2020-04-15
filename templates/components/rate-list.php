<?php 
$rates = array_reverse(get_field('rates'));
?>
<?php if($rates) : ?>
<ul class="an-rate-list">
    <?php foreach ($rates as $index => $rate) : ?>
    <?php 
    $rateOveral = $rate['content'];
    ?>
    <li class="an-rate-list__item">
        <!-- info RATE -->
        <div class="an-rate-list__wrapper">
            <h3 class="an-rate-list__title an-rate-list__title--info">
                <?= $post->post_title ?> <?= __('Erfahrung','rating-post'); ?> #<?= count($rates) - $index ?>
            </h3>
            <!-- rate summary -->
            <?php 
                    $rs_single = true;
                    include RP_PATH.'templates/components/votes-template/summary.php'; 
                    $rs_single = false;
                ?>

            <!-- more info -->
            <button class="an-rate-list__more" data-rate-list-more>
                <?= __('Mehr Infos','rating-post'); ?>
                <?php //include RP_PATH.'templates/svg/arrow-down.php'; ?>
            </button>
            <!-- rate list -->

            <?php 
                    $rs_single = true;
                    include RP_PATH.'templates/components/votes-template/summary-list.php'; 
                    $rs_single = false;
                ?>
        </div>
        <!-- DESCRIPTION -->
        <div class="an-rate-list__wrapper">
            <div class="an-rate-list__header">
                <h3 class="an-rate-list__title">
                    <?= $rateOveral['name'] ?>
                </h3>
                <span class="an-rate-list__date">
                    <?= $rateOveral['date'] ?>
                </span>
            </div>
            <?php 
            if($rateOveral['produkt']) :
            $produkts = explode(',',$rateOveral['produkt']);
            ?>
            <ul class="an-rate-list__tags">
                <?php foreach($produkts as $produkt) :?>
                <?php if(strlen($produkt) > 2) :?>
                <li class="an-rate-list__tag">
                    <span class=" an-select-search__item"><?= $produkt ;?></span>
                </li>
                <?php endif; ?>
                <?php endforeach ?>
            </ul>
            <?php endif ?>
            <p class="an-rate-list__dsc">
                <?= $rateOveral['message'] ?>
            </p>

            <?php if(strlen($rateOveral['message']) > 266) : ?>
            <!-- more info -->
            <button class="an-rate-list__more an-rate-list__more--in-dsc" data-rate-list-more>
                <?= __('Mehr Lesen','rating-post'); ?>
            </button>
            <?php endif ;?>
        </div>
    </li>
    <?php endforeach ?>
</ul>
<?php endif; ?>