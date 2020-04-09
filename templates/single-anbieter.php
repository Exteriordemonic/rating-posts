<?php get_header(); ?>
<svg class="an-single__hide">
    <defs>
        <linearGradient id="MyGradient">
            <stop offset="0%" stop-color="#F1BD48" />
            <stop offset="50%" stop-color="#F1BD48" />
            <stop offset="51%" stop-color="#C6C8EA" />
            <stop offset="100%" stop-color="#C6C8EA" />
        </linearGradient>
    </defs>
</svg>

<?php 
    if($_POST['deine-bewertung']) {
        $formOutput = [
            'deineBewertung'=>$_POST['deine-bewertung'],
            'kundenservice'=>$_POST['kundenservice'],
            'erreichbarkeit'=>$_POST['erreichbarkeit'],
            'preisLeistungsVerhaeltnis'=>$_POST['preis-leistungs-verhaeltnis'],
            'sicherheitZuverlae'=>$_POST['sicherheit-zuverlae'],
            'bankWeiterempfehlen'=>$_POST['bank-weiterempfehlen'],
            'message' => $_POST['message'],
            'mail' => $_POST['mail'],
            'name' => $_POST['name'],
            'produkt' => $_POST['produkt'],
            'date' => $_POST['date'],
        ];

        $row = ['content'=>$formOutput];
        add_row('rates', $row);
    }

    $rateOveral = get_rates($id);
?>
<section class="an-single">
    <div class="an-container">
        <!-- Bredcramps -->
        <?php include RP_PATH.'templates/components/bredcramps.php'; ?>

        <?php if($_GET['tab'] == 'bewerten'): ?>
        <div class="an-single__wrapper data-single-wrapper">
            <div class=" an-single__row">
                <!-- card -->
                <?php include RP_PATH.'templates/components/card.php'; ?>
                <!-- bewerten -->
                <?php include RP_PATH.'templates/components/bewerten-dsc.php'; ?>
            </div>
        </div>
        <?php include RP_PATH.'templates/components/bewerten-form.php'; ?>
        <?php else :?>
        <!-- Single-tabs -->
        <?php include RP_PATH.'templates/components/single-tabs.php'; ?>
        <div class="an-single__wrapper <?php if($_GET['tab'] == 'kundigen') echo '-is-active';?>" data-single-wrapper>
            <div class="an-single__row an-single__row--erfahrungen">
                <!-- card -->
                <?php include RP_PATH.'templates/components/card.php'; ?>
                <!-- rating sumary -->
                <?php include RP_PATH.'templates/components/rating-summary.php'; ?>
                <!-- rate now -->
                <?php include RP_PATH.'templates/components/rate-now-cta.php'; ?>
                <!-- rate list -->
                <?php include RP_PATH.'templates/components/rate-list.php'; ?>
            </div>
            <div class="an-single__row an-single__row--kundigen">
                <!-- card -->
                <?php include RP_PATH.'templates/components/card.php'; ?>
                <!-- rating sumary -->
                <?php include RP_PATH.'templates/components/kundigen.php'; ?>
                <!-- dsc -->
                <?php include RP_PATH.'templates/components/kundigen-content.php'; ?>
                <!-- btn -->
            </div>
        </div>
        <!-- Rating list -->

        <?php endif ;?>
    </div>
</section>

<?php get_footer(); ?>