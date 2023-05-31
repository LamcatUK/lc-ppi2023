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
            <div class="col-sm-6 col-lg-6 mb-2">
                <strong>Quick Links</strong>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1', 'menu_class' => 'cols-lg-2')); ?>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container-xl py-2">
        <div class="row">
            <div class="col-md-6 mb-2 mb-md-0">
                &copy; <?=date('Y')?> Property
                Portfolio Investors Ltd. Registered in England No. XXXXXXX
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
<?php wp_footer();
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