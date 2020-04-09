<?php 
    $rating_list = [
        [
            'name'=>__('Kundenservice', 'rating-post'),
            'rate'=>$rateOveral['kundenservice'],
        ],
        [
            'name'=>__('Erreichbarkeit', 'rating-post'),
            'rate'=>$rateOveral['erreichbarkeit'],
        ],
        [
            'name'=>__('Preis-Leistungs-Verhältnis', 'rating-post'),
            'rate'=>$rateOveral['preisLeistungsVerhaeltnis'],
        ],
        [
            'name'=>__('Sicherheit & Zuverlässigkeit', 'rating-post'),
            'rate'=>$rateOveral['sicherheitZuverlae'],
        ],
        [
            'name'=>__('Bank weiterempfehlen', 'rating-post'),
            'rate'=>$rateOveral['bankWeiterempfehlen'],
        ],
    ];
?>

<?php if($rating_list) :?>
<ul class="an-summary-list <?php if($rs_single) { echo 'an-summary-list--single'; } ;?>">
    <?php foreach ($rating_list as $item) : ?>
    <li class="an-summary-list__elem">
        <div class="an-summary-list__wrapper">
            <!-- NUM -->
            <span class="an-summary-list__rate">
                <?= $item['rate'] ?> <?php if(!$rs_single) { echo '/5'; } ;?>
            </span>
            <!-- STARTS -->
            <?php include RP_PATH.'templates/svg/star.php'; ?>
        </div>
        <!-- count votes -->
        <span class="an-summary-list__name">
            <?= $item['name'] ?>
        </span>
    </li>
    <?php endforeach ?>
</ul>
<?php endif ;?>