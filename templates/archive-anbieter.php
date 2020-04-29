<?php get_header(); ?>

<section class="anbieters">
    <div class="an-container an-container--center">
        <h1 class="anbieters__title">
            <?= __('Bewerte deinen Anbieter', 'rating-post') ?>
        </h1>
        <?php include RP_PATH.'templates/components/tabs.php'; ?>
        <?php include RP_PATH.'templates/components/posts.php'; ?>
    </div>
</section>

<script>
    function testinput(re, str) {

    if (str.startsWith(re)) {
    midstring = " zawiera ";
    return true;
    } else {
    midstring = " nie zawiera ";
    return false;
    }
    console.log(str + midstring + myReg.source);
    };
</script>

<?php get_footer(); ?>