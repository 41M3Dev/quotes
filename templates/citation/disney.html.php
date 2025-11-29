<div class="wrapper">
    <div class="header">Citaion de Disney</div>

    <div class="cards_wrap">

        <?php foreach ($citation as $citations) : ?>
            <div class="card_item">
                <div class="card_inner">
                    <div class="pro_like">
                        <img src="images/<?= $citations['name_photo'] ?>.jpg">
                        <div class="btn_like"><button class="button-85" role="button"><i class="fa-solid fa-heart"></i>(15)</button></div>
                    </div>
                    <div class="role_name"><?= $citations['auteur'] ?></div>
                    <div class="film_name"><?= $citations['title'] ?></div>
                    <div class="quote"><?= $citations['citation'] ?></div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="btn_top">
    <!-- <i class="fa-solid fa-arrow-up icone"></i> -->
    <img src="svg/arrow-up-solid.svg" class="icone" alt="">
</div>