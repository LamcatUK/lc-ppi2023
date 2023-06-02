<?php
$bg = get_field('theme') == 'dark' ? 'bg--primary' : '';
?>
<section class="spinner py-5 <?=$bg?>">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="spinner__container">
            <?php
        while (have_rows('stats')) {
            the_row();

            $endval = get_sub_field('stat');
            $endval = preg_replace('/,/', '.', $endval);
            $decimals = strlen(substr(strrchr($endval, "."), 1));
            $prefix = get_sub_field('prefix');
            $suffix = get_sub_field('suffix');

            /*
            <?=get_sub_field('prefix')?><?=number_format(get_sub_field('stat'))?><?=get_sub_field('suffix')?>
            */

            ?>
            <div class="spinner__card">
                <div class="spinner__stat">
                    <?=$prefix?><?=do_shortcode("[countup start='0' end='{$endval}' decimals='{$decimals}' duration='3' scroll='true']")?><?=$suffix?>
                </div>
                <div class="spinner__desc">
                    <?=get_sub_field('description')?>
                </div>
            </div>
            <?php
        }
?>
        </div>
    </div>
</section>