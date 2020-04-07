<div class="an-radio-star" data-radio-star>
    <?php for ($i=0; $i < 5; $i++): ?>
    <input type="radio" name="<?= $name ?>" value="<?= $i ;?>" <?php if($i == 0) echo 'required';?>>
    <?php endfor ;?>
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