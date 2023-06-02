<section class="lii_tabs py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            ?>
        <h2 class="mb-5"><?=get_field('title')?></h2>
        <?php
        }
        ?>
        <?php

        ?>
        <ul class="nav nav-tabs" id="liiTab" role="tablist">
            <li class="" role="presentation">
                <button class="lii_tab active" id="landlords-tab" data-bs-toggle="tab" data-bs-target="#landlords"
                    type="button" role="tab" aria-controls="landlords" aria-selected="true">Landlords</button>
            </li>
            <li class="" role="presentation">
                <button class="lii_tab" id="investors-tab" data-bs-toggle="tab" data-bs-target="#investors"
                    type="button" role="tab" aria-controls="investors" aria-selected="false">Investors</button>
            </li>
            <li class="" role="presentation">
                <button class="lii_tab" id="individuals-tab" data-bs-toggle="tab" data-bs-target="#individuals"
                    type="button" role="tab" aria-controls="individuals" aria-selected="false">Individuals</button>
            </li>
        </ul>
        <div class="tab-content py-5" id="liiTabContent">
            <div class="tab-pane fade show active" id="landlords" role="tabpanel" aria-labelledby="landlords-tab">
                <div class="lii_tabs__grid">
                    <img src="<?=wp_get_attachment_image_url(get_field('landlords_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('landlords_title')?></h3>
                        <div><?=get_field('landlords_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('landlords_cta_1')) {
                            $link = get_field('landlords_cta_1');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('landlords_cta_2')) {
                            $link = get_field('landlords_cta_2');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('landlords_cta_3')) {
                            $link = get_field('landlords_cta_3');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="investors" role="tabpanel" aria-labelledby="investors-tab">
            <div class="lii_tabs__grid">
                    <img src="<?=wp_get_attachment_image_url(get_field('investors_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('investors_title')?></h3>
                        <div><?=get_field('investors_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('investors_cta_1')) {
                            $link = get_field('investors_cta_1');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('investors_cta_2')) {
                            $link = get_field('investors_cta_2');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('investors_cta_3')) {
                            $link = get_field('investors_cta_3');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="individuals" role="tabpanel" aria-labelledby="individuals-tab">
                <div class="lii_tabs__grid">
                    <img src="<?=wp_get_attachment_image_url(get_field('individuals_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('individuals_title')?></h3>
                        <div><?=get_field('individuals_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('individuals_cta_1')) {
                            $link = get_field('individuals_cta_1');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('individuals_cta_2')) {
                            $link = get_field('individuals_cta_2');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        if (get_field('individuals_cta_3')) {
                            $link = get_field('individuals_cta_3');
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                            <?
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>