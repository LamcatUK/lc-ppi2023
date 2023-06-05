<section class="options_cards py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="options_cards__intro">
            <?=get_field('intro')?>
        </div>
        <div class="options_cards__grid">
            <?php
        while (have_rows('cards')) {
            the_row();
            $link = get_sub_field('card_link');
            ?>

            <div class="options_cards__card">
                <div class="options_cards__inner">
                    <div class="options_cards__front">
                        <div>
                            <?=get_sub_field('card_title')?>
                        </div>
                    </div>
                    <div class="options_cards__back">
                        <h3><?=get_sub_field('card_title')?>
                        </h3>
                        <div class="options_cards__intro">
                            <?=get_sub_field('card_intro')?>
                        </div>
                        <a class="btn btn-secondary"
                            href="<?=$link['url']?>"><?=$link['title']?></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>