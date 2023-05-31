<div class="front-hero"
    style="background-image:url('<?=get_field('background')?>')">
    <div class="container-xl py-4 text-white d-flex h-100">
        <div class="row hero-container my-auto">
            <div class="col-12 col-lg-8 text-center text-lg-start mb-4">
                <h1 class="hero-title" data-aos="fade-right">
                    <?=get_field('title')?>
                </h1>
                <?php
        if (get_field('subtitle') ?? null) {
            ?>
                <div class="hero-subtitle" data-aos="fade-right" data-aos-delay="250">
                    <?=get_field('subtitle')?>
                </div>
                <?php
        }
    ?>
            </div>
            <div class="col-12 col-lg-4 my-auto text-center">
                <?php
    if (get_field('hero_cta_enabled')[0] == 'Yes') {
        echo '<a class="btn d-block btn-gold btn--has-arrow pb-2" data-aos="fade" data-aos-delay="500" href="' . get_the_permalink(get_field('cta_link')) . '">' . get_field('cta_text') . '</a>';
    }
    ?>
            </div>
        </div>
    </div>
</div>