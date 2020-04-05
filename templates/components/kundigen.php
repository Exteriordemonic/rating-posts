<div class="an-kundigen-summary">
    <div class="an-kundigen-summary__wrapper">
        <div class="an-kundigen-summary__dsc">
            <?= get_field('kundigen_dsc') ;?>
        </div>
        <!-- LINK -->
        <a href="<?= get_field('kundigen_link') ;?>" class="an-kundigen-summary__link">
            <?= __('Jetzt kündigen','rating-post'); ?>
        </a>
    </div>
</div>