<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-ppi2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl" id="footer-content">
        <div class="row pb-4">
            <div class="col-md-6 col-lg-4 mb-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/ppi-logo--wo.svg"
                    alt="">
                <p class="fs-200" style="max-width:44ch">With years of experience in the property industry, we are
                    dedicated to providing
                    exceptional service
                    to our clients in their property selling and finance journey.</p>
                <strong>Keep in Touch</strong>
                <div class="social-icons">
                    <?=do_shortcode('[social_icons]')?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <strong>Contact Us</strong>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone2]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-2 mb-2">
                <strong>Useful Links</strong>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>
            </div>
            <div class="col-sm-6 col-lg-2 mb-2">
                <strong>Information</strong>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu2')); ?>
                <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal"
                    data-bs-target="#valuationModal">Book Valuation</button>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container-xl py-2">
        <div class="row">
            <div class="col-md-6 mb-2 mb-md-0">
                &copy; <?=date('Y')?> Property
                Portfolio Investors Ltd. Registered in England No. 14841867
            </div>
            <div class="col-md-6 text-md-end">
                <a href="/privacy-policy/">Privacy Policy</a> | <a href="/cookie-policy/">Cookie Policy</a>
                | Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener" target="_blank" class="lc"
                    title="Site by Lamcat">Lamcat</a>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<!-- modal -->
<div class="modal fade" id="valuationModal" tabindex="-1" aria-labelledby="valuationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="valuationModalLabel">Book a Valuation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="calendly-inline-widget" data-url="https://calendly.com/book-instant-valuation"
                    style="min-width:320px;height:700px;"></div>
            </div>
        </div>
    </div>
</div>

<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<?php
});

wp_footer();


if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>