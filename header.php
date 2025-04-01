<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <? $primary_header = get_field("primary_header", "option");  ?>
    <header class="flex justify-between items-center lg:px-10 md:px-8 px-5 py-3">
        <a class="block" href="<?= esc_url(home_url('/')); ?>">
            <figure class="2xl:h-14 md:h-10 sm:h-8 h-7 !m-0">
                <?= wp_get_attachment_image($primary_header["main_logo"], "medium", false, [
                    "loading" => "eager",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?= wp_get_attachment_caption($primary_header["main_logo"]); ?></figcaption>
            </figure>
        </a>
        <a class="block" href="<?= esc_url(home_url('/')); ?>">
            <figure class="2xl:h-16 md:h-14 sm:h-10 h-9 !m-0">
                <?= wp_get_attachment_image($primary_header["secondary_logo"], "medium", false, [
                    "loading" => "eager",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?= wp_get_attachment_caption($primary_header["secondary_logo"]); ?></figcaption>
            </figure>
        </a>
    </header>
    <div class="bg-primary text-white lg:px-10 md:px-8 px-5 py-2">
        <h3 class="2xl:text-3xl xl:text-2xl text-xl text-center mb-0 font-medium"><?= $primary_header["title"] ?></h3>
    </div>
    <main>