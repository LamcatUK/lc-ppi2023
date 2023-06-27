<section class="lii_tabs py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            ?>
        <h2 class="mb-2 mb-lg-5"><?=get_field('title')?></h2>
        <?php
        }
        ?>
        <?php

        ?>
        <ul class="nav nav-tabs" id="liiTab" role="tablist">
            <li class="" role="presentation">
                <h4 class="lii_tab active" id="landlords-tab" data-bs-toggle="tab" data-bs-target="#landlords"
                    type="button" role="tab" aria-controls="landlords" aria-selected="true">Landlords</h4>
            </li>
            <li class="" role="presentation">
                <h4 class="lii_tab" id="investors-tab" data-bs-toggle="tab" data-bs-target="#investors"
                    type="button" role="tab" aria-controls="investors" aria-selected="false">Investors</h4>
            </li>
            <li class="" role="presentation">
                <h4 class="lii_tab" id="individuals-tab" data-bs-toggle="tab" data-bs-target="#individuals"
                    type="button" role="tab" aria-controls="individuals" aria-selected="false">Individuals</h4>
            </li>
        </ul>
        <div class="tab-content accordion py-lg-5 pb-5" id="liiTabContent">
            <div class="tab-pane fade show active accordion-item" id="landlords" role="tabpanel" aria-labelledby="landlords-tab">

                <h2 class="accordion-header d-lg-none" id="headingLandlords">
                    <button class="lii_button" id="headingLandlordsBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLandlords" aria-expanded="true" aria-controls="collapseLandlords">Landlords</button>
                </h2>

                <div class="lii_tabs__grid accordion-collapse collapse show d-lg-grid" aria-labelledby="headingLandlords" data-bs-parent="#liiTabContent" id="collapseLandlords">
                    <img src="<?=wp_get_attachment_image_url(get_field('landlords_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('landlords_title')?></h3>
                        <div><?=get_field('landlords_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('landlords_cta_1')) {
                            $link = get_field('landlords_cta_1');
                            if (get_field('is_calendly_landlords')) {
                                ?>
                                <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal" data-bs-target="#valuationModal"><?=$link['title']?></button>
                                <?php            
                            }
                            else {
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                            }
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

            <div class="tab-pane fade accordion-item" id="investors" role="tabpanel" aria-labelledby="investors-tab">
                        
                <h2 class="accordion-header d-lg-none" id="headingInvestors">
                    <button class="lii_button" id="headingInvestorsBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInvestors" aria-expanded="false" aria-controls="collapseInvestors">Investors</button>
                </h2>

                <div class="lii_tabs__grid accordion-collapse collapse d-lg-grid" aria-labelledby="headingInvestors" data-bs-parent="#liiTabContent" id="collapseInvestors">
                    <img src="<?=wp_get_attachment_image_url(get_field('investors_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('investors_title')?></h3>
                        <div><?=get_field('investors_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('investors_cta_1')) {
                            $link = get_field('investors_cta_1');
                            if (get_field('is_calendly_investors')) {
                                ?>
                                <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal" data-bs-target="#valuationModal"><?=$link['title']?></button>
                                <?php            
                            }
                            else {
                                ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                            }
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

            <div class="tab-pane fade accordion-item" id="individuals" role="tabpanel" aria-labelledby="individuals-tab">

                <h2 class="accordion-header d-lg-none" id="headingIndividuals">
                    <button class="lii_button" id="headingIndividualsBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndividuals" aria-expanded="false" aria-controls="collapseIndividuals">Individuals</button>
                </h2>

                <div class="lii_tabs__grid accordion-collapse collapse d-lg-grid" aria-labelledby="headingIndividuals" data-bs-parent="#liiTabContent" id="collapseIndividuals">
                    <img src="<?=wp_get_attachment_image_url(get_field('individuals_image'),'large')?>" alt="" class="lii_tabs__image">
                    <div class="lii_tabs__content">
                        <h3><?=get_field('individuals_title')?></h3>
                        <div><?=get_field('individuals_content')?></div>
                        <div class="lii_tabs__buttons">
                        <?php
                        if (get_field('individuals_cta_1')) {
                            $link = get_field('individuals_cta_1');
                            if (get_field('is_calendly_individuals')) {
                                ?>
                                <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal" data-bs-target="#valuationModal"><?=$link['title']?></button>
                                <?php            
                            }
                            else {
                            ?>
                            <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-secondary"><?=$link['title']?></a>
                            <?
                                }
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
<?php
add_action('wp_footer',function(){
    ?>
<script>
(function($){
$('.collapse').on('shown.bs.collapse', function(e) {
  var $card = $(this).closest('.accordion-item');
  var $open = $($(this).data('parent')).find('.collapse.show');
  
  var additionalOffset = 0;
  if($card.prevAll().filter($open.closest('.accordion-item')).length !== 0)
  {
        additionalOffset =  $open.height();
  }
  $('html,body').animate({
    scrollTop: $card.offset().top - additionalOffset - 100
  }, 0);
});
})(jQuery);
</script>
    <?php
});