<?php
$title = get_field('title') ?: get_field('pushthrough_cta_title', 'options');
$content = get_field('content') ?: get_field('pushthrough_cta_content', 'options');
?>
<section class="pushthrough">
    <div class="pushthrough__intro">
        <div class="container-xl py-5">
            <h2><?=$title?></h2>
            <div><?=$content?></div>
        </div>
    </div>
    <div class="pushthrough__form">
        <div class="container-xl py-4 d-flex justify-content-center">
            <div class="row g-3 align-items-center">
                <div class="col-md-auto">
                    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Enter Postcode">
                </div>
                <div class="col-md-auto">
                    <button class="btn btn-secondary w-100 w-md-auto">Get Free Cash Offer</button>
                </div>
            </div>
        </div>
    </div>
</section>