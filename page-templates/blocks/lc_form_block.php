<section class="form_block py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="intro mb-4">
                    <?=get_field('intro')?>
                </div>
            </div>
            <div class="col-md-6">
                <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '"]')?>
            </div>
        </div>
    </div>
</section>