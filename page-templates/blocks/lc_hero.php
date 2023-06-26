<section class="hero">
    <div class="container-xl">
        <div class="hero__grid">
            <div class="hero__left">
                <h1><?=get_field('title')?></h1>
                <div><?=get_field('intro')?>
                </div>
                <div class="hero__buttons">
                <?php
                if (get_field('cta')) {
                    $link = get_field('cta');
                    $style = get_field('cta_style');
                    if (get_field('is_calendly1')) {
                    ?>
                    <button type="button" class="btn btn-<?=$style?>" title="Book Valuation" data-bs-toggle="modal" data-bs-target="#valuationModal"><?=$link['title']?></button>
                    <?php
                    }
                    else {
                    ?>
                <a href="<?=$link['url']?>"
                    target="<?=$link['target']?>"
                    class="btn btn-<?=$style?>"><?=$link['title']?></a>
                    <?php
                    }
                }
                if (get_field('cta_2')) {
                    $link = get_field('cta_2');
                    ?>
                    <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-outline"><?=$link['title']?></a>
                    <?
                }
                ?>
                </div>
            </div>
            <div class="hero__right">
                <?php
                $img_src = wp_get_attachment_image_url(get_field('image_1'), 'medium');
                $img_srcset = wp_get_attachment_image_srcset(get_field('image_1'), 'medium');
                ?>
                <img src="<?php echo esc_url($img_src); ?>"
                    srcset="<?php echo esc_attr($img_srcset); ?>"
                    sizes="(max-width: 50em) 87vw, 680px" alt="">
                <?php
                $img_src = wp_get_attachment_image_url(get_field('image_2'), 'medium');
                $img_srcset = wp_get_attachment_image_srcset(get_field('image_2'), 'medium');
                ?>
                <img src="<?php echo esc_url($img_src); ?>"
                    srcset="<?php echo esc_attr($img_srcset); ?>"
                    sizes="(max-width: 50em) 87vw, 680px" alt="">
                <?php
                $img_src = wp_get_attachment_image_url(get_field('image_3'), 'medium');
                $img_srcset = wp_get_attachment_image_srcset(get_field('image_3'), 'medium');
                ?>
                <img src="<?php echo esc_url($img_src); ?>"
                    srcset="<?php echo esc_attr($img_srcset); ?>"
                    sizes="(max-width: 50em) 87vw, 680px" alt="">
            </div>
        </div>
    </div>
</section>