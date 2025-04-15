<?php
// Template Name: Brochure Download Page

ob_start();
get_header();

$download_brochure_file = get_field("download_brochure_file");

if ($download_brochure_file && isset($download_brochure_file["brochure_file"])) {
    $brochure_url = esc_url($download_brochure_file["brochure_file"]);
    wp_redirect($brochure_url);
    exit;
}
?>
<article class="md:p-20 p-5 min-h-[80vh] flex items-center justify-center">
    <noscript>
        <meta http-equiv="refresh" content="0;url=<?php echo esc_url($brochure_url); ?>">
    </noscript>
    <script>
        window.location.href = "<?php echo esc_js($brochure_url); ?>";
    </script>
</article>

<?php get_footer(); ?>