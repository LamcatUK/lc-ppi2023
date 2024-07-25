<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-500.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
if (get_field('ga_property', 'options')) {
    if ( !is_user_logged_in() ) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
    }
}
if (get_field('gtm_property', 'options')) {
    if ( !is_user_logged_in() ) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
    }
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

if (is_front_page()) {
    ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Property Portfolio Investors",
            "legalName": "Property Portfolio Investors Ltd",
            "description": "Property Specialists for landlords, investors & individuals. Secure a guaranteed sale for single properties or entire portfolios with a cash offer today. We cover your legal fees and in-person valuations occur in less than 48 hours.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "3 Churchill Ct, Manor Royal",
                "addressLocality": "Crawley",
                "postalCode": "RH10 9LU"
            },
            "email": "hello@propertyportfolioinvestors.com",
            "telephone": ["01293 222300", "020 3828 8000"],
            "foundingDate": "2023-05-03",
            "founder": {
                "@type": "Person",
                "name": "Jay Limbachia"
            },
            "owns": {
                "@type": "Thing",
                "name": "Property Portfolio Investors"
            },
            "areaServed": [
                "Billingshurst",
                "Brighton & Hove",
                "Burgess Hill",
                "Copthorne",
                "Crawley",
                "Crowborough",
                "Croydon",
                "Cuckfield",
                "East Grinstead",
                "Hassocks",
                "Haywards Heath",
                "Horley",
                "Horsham",
                "Lewes",
                "London",
                "Steyning",
                "Storrington",
                "Uckfield"
            ],
            "sameAs": [
                "https://www.facebook.com/PropertyPortfolioInvestors",
                "https://www.linkedin.com/company/property-portfolio-investors/"
            ]
        }
    </script>
    <?php
}

wp_head();
?>

</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
    if (get_field('gtm_property', 'options')) {
        if ( !is_user_logged_in() ) {
        ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
        }
    }

do_action('wp_body_open');
?>
    <header id="wrapper-navbar" class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl py-2 nav-top align-items-end">
                <a href="/" class="text-lg-center logo-container" aria-label="PPI Homepage"></a>
                <div class="button-container d-lg-none">
                    <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <?php
                    wp_nav_menu(
                        array(
                                                                                        'theme_location'  => 'primary_nav',
                                                                                        'container_class' => 'w-100',
                                                                                        // 'container_id'    => 'primaryNav',
                                                                                        'menu_class'      => 'navbar-nav justify-content-start justify-content-lg-around w-100',
                                                                                        'fallback_cb'     => '',
                                                                                        'menu_id'         => 'navbarr',
                                                                                        'depth'           => 3,
                                                                                        'walker'          => new Understrap_WP_Bootstrap_Navwalker()
                                                                                        )
                    );
?>
                </div>
            </div>
        </nav>
    </header>