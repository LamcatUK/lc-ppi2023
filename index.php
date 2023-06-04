<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option('page_for_posts');

get_header();
?>
<main id="main">
    <!-- hero -->
    <section class="index_hero">
        <div class="container-xl">
            <h1><?=get_field('title', $page_for_posts)?>
            </h1>
            <div>
                <?=get_field('intro', $page_for_posts)?>
            </div>
        </div>
    </section>

    <div class="bg--grey py-5">
        <div class="container-xl">
            <h2>Latest News</h2>
            <div class="row w-100" id="grid">
                <?php
    while (have_posts()) {
        the_post();
        $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if (!$img) {
            $img = get_stylesheet_directory_uri() . '/img/default-blog.jpg';
        }
        $cats = get_the_category();
        $category = wp_list_pluck($cats, 'name');
        $flashcat = cbslugify($category[0]);
        $catclass = implode(' ', array_map('cbslugify', $category));
        $category = implode(', ', $category);

        if (has_category('event')) {
            $the_date = get_field('start_date', get_the_ID());
        } else {
            $the_date = get_the_date('jS F, Y');
        }

        ?>
                <div
                    class="grid_item col-lg-4 col-md-6 p-0 <?=$catclass?>">
                    <a href="<?=get_the_permalink(get_the_ID())?>">
                        <div class="card card--<?=$flashcat?>">
                            <div class="news__image_container">
                                <div
                                    class="news__flash news__flash--<?=$flashcat?>">
                                    <?=$category?>
                                </div>
                                <div class="news__image"
                                    style="background-image:url('<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>')">
                                </div>
                            </div>
                            <div class="news__inner">
                                <h3 class="news__title mb-0">
                                    <?=get_the_title()?>
                                </h3>
                                <div class="news__date">
                                    <?=$the_date?>
                                </div>
                                <div class="news__content">
                                    <div class="news__content__overlay"></div>
                                    <?=wp_trim_words(get_the_content(get_the_ID()), 20)?>
                                </div>
                            </div>
                            <!-- <div class="card__link">Read more</div> -->
                        </div>
                    </a>
                </div>
                <?php
    }
?>
            </div>
        </div>
    </div>
</main>
<?php

get_footer();
?>