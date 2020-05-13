<?php 
$orderbyValue = '';

if($_GET["orderby"]) {
    $orderbyValue = $_GET["orderby"];
}

$orderByArray = [
    'beliebteste-anbieter'=>'Beliebteste Anbieter',
    'ASC'=>'A-Z',
    'DESC'=>'Z-A',
    'beste-bewertung'=>'Beste Bewertung',
];
?>

<form class="an-search" action="<?= get_post_type_archive_link('anbieter') ?>" method="GET" id="orderbylist">
    <!-- Search input -->
    <div class="an-dropdown an-dropdown--search">
        <input class="an-dropdown__input" readonly required name="orderby" type="text"
            value="<?= $orderByArray[$orderbyValue] ;?>" placeholder="<?= __('Sortierung', 'rating-post')?>" id="search"
            autocomplete="off" data-an-dropdown-input>
        <ul class="an-dropdown__list">
            <?php foreach ($orderByArray as $value => $item) : ?>
            <li class="an-dropdown__item" data-an-dropdown-item>
                <a href="?orderby=<?= $value;?>">
                    <?= $item ;?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</form>