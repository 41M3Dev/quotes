<div class="wrapper">
    <div class="container">
        <div class="header">Citations Disney</div>

        <div class="category-intro">
            <p>Laissez la magie opérer avec les citations emblématiques de Disney. Des moments qui réchauffent le cœur et inspirent.</p>
        </div>

        <div class="cards_wrap">
            <?php foreach ($citation as $citations) : ?>
                <div class="card_item">
                    <div class="card_inner">
                        <div class="pro_like">
                            <img src="images/<?= $citations['name_photo'] ?>.jpg" alt="<?= $citations['auteur'] ?>">
                            <div class="btn_like">
                                <button class="button-85" role="button">
                                    <i class="fa-solid fa-heart"></i> 15
                                </button>
                            </div>
                        </div>
                        <div class="role_name"><?= $citations['auteur'] ?></div>
                        <div class="film_name"><?= $citations['title'] ?></div>
                        <div class="quote">"<?= $citations['citation'] ?>"</div>
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
