<?php

/**
 * Theme Functions
 * 
 * @package XED_Cornell_CHRO_Program
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Get theme version for cache busting
 */
function xed_get_theme_version()
{
    return wp_get_theme()->get('Version');
}

/**
 * Enqueue all theme styles and scripts
 */
function xed_enqueue_assets()
{
    $theme_version = xed_get_theme_version();

    // Enqueue theme styles
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    // Enqueue custom styles
    $global_css_path = get_template_directory() . '/styles/global.output.css';
    if (file_exists($global_css_path)) {
        wp_enqueue_style(
            'custom-style',
            get_template_directory_uri() . '/styles/global.output.css',
            array(),
            filemtime($global_css_path)
        );
    }

    // Preconnect to Google Fonts for performance optimization
    add_action('wp_head', function () {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    }, 1);

    // Enqueue Google Fonts with display swap
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&family=Roboto:ital,wdth,wght@0,75..100,100..900;1,75..100,100..900&display=swap',
        array(),
        null
    );

    // Enqueue consolidated JavaScript
    wp_enqueue_script(
        'xed-custom-scripts',
        get_template_directory_uri() . '/js/custom-scripts.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Enqueue Swiper carousel
    wp_enqueue_style(
        'swiper-style',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        $theme_version,
        null
    );

    wp_enqueue_script(
        'swiper-script',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array("jquery"),
        $theme_version,
        true
    );

    // Flowbite (only if not imported via CSS)
    if (!wp_style_is('flowbite', 'enqueued')) {
        $flowbite_version = '3.1.2';
        wp_enqueue_script(
            'flowbite-js',
            'https://cdn.jsdelivr.net/npm/flowbite@' . $flowbite_version . '/dist/flowbite.min.js',
            array(),
            $flowbite_version,
            true
        );
    }


    // Localize script for AJAX and translations
    wp_localize_script('xed-custom-scripts', 'xedData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('xed-nonce'),
        'i18n' => array(
            'readMore' => __('Read More', 'xed-cornell-chro'),
            'readLess' => __('Read Less', 'xed-cornell-chro')
        )
    ));
}
add_action('wp_enqueue_scripts', 'xed_enqueue_assets');

function xed_handle_download_brochure_form()
{
?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const countrySelect = document.querySelector('.country-select select');
            const msgContainer = document.querySelector('.countries-dissallowed-msg');
            const downloadBtn = document.querySelector('.wpforms-submit');

            if (countrySelect && msgContainer && downloadBtn) {
                const updateButtonState = () => {
                    // Delay check to allow DOM update
                    setTimeout(() => {
                        const isDisabled = msgContainer.offsetParent !== null;
                        downloadBtn.disabled = isDisabled;
                    }, 50); // Small delay ensures proper style update
                };

                countrySelect.addEventListener('change', updateButtonState);
                updateButtonState(); // Initial state check
            }
        });
    </script>
<?php
}
add_action('wp_footer', 'xed_handle_download_brochure_form');

/**
 * Restrict countries in Smart Phone form field
 */
function xed_restrict_phone_countries()
{
?>
    <script type="text/javascript">
        jQuery(document).on('wpformsReady', function() {
            jQuery('.wpforms-smart-phone-field').each(function() {
                const $el = jQuery(this);
                const iti = $el.data('plugin_intlTelInput');

                if (!iti) return;

                const options = Object.assign({}, iti.d || iti.options || {});
                if (!options) return;

                try {
                    $el.intlTelInput('destroy');
                    options.excludeCountries = ['us', 'vi'];
                    $el.intlTelInput(options);

                    // Restore hidden input name
                    $el.siblings('input[type="hidden"]').attr('name', 'wpforms[fields][' + options.hiddenInput + ']');
                } catch (e) {
                    console.error('Error initializing phone field:', e);
                }
            });
        });
    </script>
<?php
}
add_action('wpforms_wp_footer_end', 'xed_restrict_phone_countries', 30);
