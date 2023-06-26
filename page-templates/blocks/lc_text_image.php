<?php
$colour = get_field('theme');
$background = '';
switch ($colour) {
    case 'Dark':
        $background = 'bg--grey';
        break;
    case 'Light':
        $background = '';
        break;
}

$breakout = '';
if (get_field('breakout')[0] ?? null && get_field('breakout')[0] == 'Yes') {
    $breakout = $background;
    $background = '';
}

$splitText = 'col-lg-6';
$splitImage = 'col-lg-6';

if (get_field('split') == '6040') {
    $splitText = 'col-lg-8';
    $splitImage = 'col-lg-4';
}
if (get_field('split') == '7030') {
    $splitText = 'col-lg-10';
    $splitImage = 'col-lg-2';
}

$orderText = 'order-2 order-lg-1';
$orderImage = 'order-1 order-lg-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-lg-2';
    $orderImage = 'order-1 order-lg-1';
}
?>
<section class="text_image <?=$breakout?>">
    <div class="container-xl <?=$background?> py-5">
        <div class="d-lg-none">
            <h2><?=get_field('title')?></h2>
        </div>
        <div class="row align-items-center g-5">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <h2 class="d-none d-lg-block">
                    <?=get_field('title')?>
                </h2>
                <div class="mb-4">
                    <?=get_field('content')?>
                </div>
                <div class="text_image__buttons">
                    <?php
                if (get_field('cta')) {
                    $link = get_field('cta');
                    if (get_field('is_calendly')) {
                        ?>
                    <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal"
                        data-bs-target="#valuationModal"><?=$link['title']?></button>
                    <?php
                    } else {
                        ?>
                    <a href="<?=$link['url']?>"
                        class="btn btn-secondary"><?=$link['title']?></a>
                    <?php
                    }
                }
                if (get_field('cta_2')) {
                    $link = get_field('cta_2');
                    ?>
                    <a href="<?=$link['url']?>"
                        class="btn btn-outline"><?=$link['title']?></a>
                    <?php
                }
?>
                </div>
            </div>
            <div
                class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>