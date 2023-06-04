<section class="testimonials py-5">
    <div class="container-xl">
        <h2>Testimonials</h2>
        <div class="pb-5">Independent reviews from past property purchases</div>
        <div class="testimonials__slider">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => 9
            ));
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="testimonials__card">
                <div class="testimonials__inner">
                    <h4><?=get_field('title', get_the_ID())?>
                    </h4>
                    <p><?=get_the_content()?></p>
                    <div><strong><?=get_the_title()?></strong>,
                        <?=get_field('location', get_the_ID())?>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    (function($) {
        $('.testimonials__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    })(jQuery);
</script>
<?php
}, 9999);
            ?>