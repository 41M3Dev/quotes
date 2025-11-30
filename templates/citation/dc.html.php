<div class="wrapper">
    <div class="container">
        <div class="header">Citations DC Comics</div>

        <div class="category-intro">
            <p>Plongez dans l'univers sombre et épique de DC Comics. Des héros légendaires de Gotham à Metropolis et au-delà.</p>
        </div>

        <div class="cards_wrap">
            <?php foreach ($citation as $index => $citations) : ?>
                <div class="card_item">
                    <div class="card_inner">
                        <span class="data-line"></span>
                        <span class="data-line"></span>

                        <div class="card_header">
                            <img src="images/<?= $citations['name_photo'] ?>.jpg" alt="<?= $citations['auteur'] ?>">
                            <div class="card_character_info">
                                <div class="role_name"><?= $citations['auteur'] ?></div>
                                <div class="film_name"><?= $citations['title'] ?></div>
                            </div>
                        </div>

                        <div class="card_quote_section">
                            <div class="quote"><?= $citations['citation'] ?></div>
                        </div>

                        <div class="card_footer">
                            <div class="card_stats"><?= str_pad($index + 1, 4, '0', STR_PAD_LEFT) ?></div>
                            <button class="button-85" role="button">
                                <i class="fa-solid fa-heart"></i> 15
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="back-to-categories">
            <a href="index.php?controller=citation&task=index" class="btn-primary">
                <i class="fa-solid fa-arrow-left"></i> Retour aux catégories
            </a>
        </div>
    </div>
</div>

<div class="btn_top">
    <img src="svg/arrow-up-solid.svg" class="icone" alt="Retour en haut">
</div>
