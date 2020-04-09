<?php 
$s_posts = get_posts([
  'post_type' => 'anbieter',
  'post_status' => 'publish',
  'numberposts' => -1
  // 'order'    => 'ASC'
]);
?>

<form class="an-search" action="<?= get_post_type_archive_link('anbieter') ?>" method="GET">
    <!-- Search input -->
    <div class="an-dropdown an-dropdown--search">
        <input class="an-dropdown__input" required name="s" type="text" value="<?= $_GET['s'] ;?>"
            placeholder="<?= __('Suchen', 'rating-post')?>" id="search" autocomplete="off" data-an-dropdown-input>
        <ul class="an-dropdown__list">
            <?php foreach ($s_posts as $item) : ?>
            <li class="an-dropdown__item" data-an-dropdown-item>
                <a href="<?= get_permalink($item->ID) ?>">
                    <?= $item->post_title ;?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <button class="an-search__button">
        <?php include RP_PATH.'templates/svg/search.php'; ?>
    </button>
</form>