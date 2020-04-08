<?php
    if($_GET[sanitize_title($name)]) $radioVal = $_GET[sanitize_title($name)];
?>

<div class="an-radio-star" data-radio-star>
    <?php for ($i=1; $i < 6; $i++): ?>
    <input type="radio" name="<?= sanitize_title($name) ?>" value="<?= $i ;?>" <?php if($i == 1) echo 'required';?>
        <?php if($radioVal == $i) echo 'checked';?>>
    <?php endfor ;?>
    <?php 
        if($_GET[sanitize_title($name)]) $starsCount = $_GET[sanitize_title($name)];
        else $starsCount = 0;
     ?>
    <?php include RP_PATH.'templates/components/votes-template/stars.php'; ?>
</div>
<span class="an-bewerten-form__info an-bewerten-form__info--left">
    <?= __('schlecht', 'rating-post') ?>
</span>
<span class="an-bewerten-form__info an-bewerten-form__info--right">
    <?= __('GUT', 'rating-post') ?>
</span>
<span class="an-bewerten-form__label">
    <?= $name ?>
</span>