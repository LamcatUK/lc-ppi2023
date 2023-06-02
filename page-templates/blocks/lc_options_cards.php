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
                <h3><?=get_sub_field('card_title')?>
                </h3>
                <div class="options_cards__intro">
                    <?=get_sub_field('card_intro')?>
                </div>
                <a class="btn btn-primary"
                    href="<?=$link['url']?>"><?=$link['title']?></a>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>