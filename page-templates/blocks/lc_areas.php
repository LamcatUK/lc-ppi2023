<section class="areas py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="areas__grid">
            <div class="areas__content">
                <div class="mb-4">
                    <?=get_field('content')?>
                </div>
                <ul class="areas__areas">
                    <?php
                    $list = explode("<br />",get_field('areas','options'));
                    foreach ($list as $a) {
                        echo '<li>' . $a . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="areas__map">
                <img src="<?=get_stylesheet_directory_uri()?>/img/area-map.png"
                    alt="Areas Served">
            </div>
        </div>
    </div>
</section>