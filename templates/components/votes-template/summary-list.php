<?php 
    $rating_list = [
        [
            'name'=>__('Kundenservice', 'rating-post'),
            'rate'=>'3.2',
        ],
        [
            'name'=>__('Erreichbarkeit', 'rating-post'),
            'rate'=>'4.0',
        ],
        [
            'name'=>__('Preis-Leistungs-Verhältnis', 'rating-post'),
            'rate'=>'5.0',
        ],
        [
            'name'=>__('Sicherheit & Zuverlässigkeit', 'rating-post'),
            'rate'=>'2.1',
        ],
        [
            'name'=>__('Bank weiterempfehlen', 'rating-post'),
            'rate'=>'4.9',
        ],
    ];
?>

<?php if($rating_list) :?>
<ul class="an-summary-list">
    <?php foreach ($rating_list as $item) : ?>
    <li class="an-summary-list__elem">
        <div class="an-summary-list__wrapper">
            <!-- NUM -->
            <span class="an-summary-list__rate">
                <?= $item['rate'] ?>
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