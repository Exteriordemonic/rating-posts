<?php 
    $kun_content = get_field('kundigen_content');
?>

<?php if($kun_content) : ?>
<ul class="an-kundigen-content">
    <?php foreach ($kun_content as $item) :?>
    <?php $content = $item['content'];?>
    <li class="an-kundigen-content__item">
        <h2 class="an-kundigen-content__title">
            <?= $content['title'] ;?>
        </h2>
        <div class="an-kundigen-content__content">
            <?= $content['content'] ;?>
        </div>
    </li>
    <?php endforeach ?>
</ul>
<?php endif ?>