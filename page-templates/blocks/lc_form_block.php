<section class="form_block py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="intro mb-4">
            <?=get_field('intro')?>
        </div>
        <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '"]')?>
    </div>
</section>