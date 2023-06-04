<section class="areas py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="areas__content">
            <?=get_field('content')?></div>
        <div class="areas__grid">
            <ul class="areas__areas">
                <?=lc_list(get_field('areas'))?>
            </ul>
            <div class="areas__map">
                MAP
            </div>
        </div>
    </div>
</section>