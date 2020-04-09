<form class="an-bewerten-form" data-an-form action="./?tab=erfahrungen" method="POST">
    <!-- Title -->
    <h2 class="an-bewerten-form__title">
        <?= $post->post_title;?> <?= __('bewerten','rating-post'); ?>
    </h2>
    <!-- Rating radio list -->
    <ul class="an-bewerten-form__list">
        <li class="an-bewerten-form__item">
            <?php $name="Deine Bewertung" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
        <li class="an-bewerten-form__item">
            <?php $name="Kundenservice" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
        <li class="an-bewerten-form__item">
            <?php $name="Erreichbarkeit" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
        <li class="an-bewerten-form__item">
            <?php $name="Preis-Leistungs-Verhältnis" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
        <li class="an-bewerten-form__item">
            <?php $name="Sicherheit & Zuverlä" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
        <li class="an-bewerten-form__item">
            <?php $name="Bank weiterempfehlen" ;?>
            <?php include RP_PATH.'templates/components/votes-template/radio-star.php'; ?>
        </li>
    </ul>
    <div class="an-bewerten-form__wrapper">

        <div class="an-bewerten-form__wrapper-input">
            <label for="" class="an-bewerten-form__label an-bewerten-form__label--small">
                <?= __('Mit welchem Produkt hast Du Erfahrungen','rating-post'); ?>
            </label>
            <div class="an-bewerten-form__input an-select-search" data-an-dropdown>
                <!-- Search input -->
                <div class="an-dropdown">
                    <input class="an-dropdown__input" type="text" placeholder="<?= __('Suchen','rating-post'); ?>..."
                        id="myInput" autocomplete="off" data-an-dropdown-input>
                    <ul class="an-dropdown__list">
                        <li class="an-dropdown__item" data-an-dropdown-item>About</li>
                        <li class="an-dropdown__item" data-an-dropdown-item>Base</li>
                        <li class="an-dropdown__item" data-an-dropdown-item>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="an-bewerten-form__wrapper-input">
            <label for="message" class="an-bewerten-form__label an-bewerten-form__label--big">
                <?= __('Dein Erfahrungsbericht (Mind. 50 Wörter)','rating-post'); ?>
            </label>
            <textarea class="an-bewerten-form__input an-bewerten-form__input--p an-bewerten-form__input--textarea"
                name="message" id="message" cols="30" rows="6" required
                placeholder="<?= __('Erzähle uns mehr von deiner Erfahrung...','rating-post'); ?>"></textarea>
        </div>
        <div class="an-bewerten-form__wrapper-input">
            <label for="mail" class="an-bewerten-form__label an-bewerten-form__label--small">
                <?= __('E-Mail-Adresse (optional; wird nicht angezeigt online)','rating-post'); ?>
            </label>
            <input class="an-bewerten-form__input" name="mail" id="mail" type="mail">
        </div>
        <div class="an-bewerten-form__wrapper-input">
            <label for="name" class="an-bewerten-form__label an-bewerten-form__label--small">
                <?= __('Benutzername (optional; frei wählbar)','rating-post'); ?>
            </label>
            <input class="an-bewerten-form__input" name="name" id="name" type="name">
        </div>
        <input type="hidden" name="produkt" data-an-dropdown-produkt>
        <input type="hidden" name="date" value="<?= date('m.d.Y') ;?>">
        <button class="an-bewerten-form__button">
            <?= __('Erfahrungsbericht senden','rating-post'); ?>
        </button>
    </div>
    <!-- E-mail Adresse -->
    <!-- Name -->
</form>