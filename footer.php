</main>
<footer class="section-padding bg-primary text-white flex flex-wrap gap-5">
    <div class="flex flex-wrap justify-between lg:gap-10 gap-5">
        <div class="shrink-0 md:w-auto w-full">
            <figure class="md:w-24 w-20">
                <?php $image_id = get_field("footer_logo", "option") ?>
                <?php echo wp_get_attachment_image($image_id, "medium", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption><?php echo wp_get_attachment_caption(
                                $image_id
                            ); ?></figcaption>
            </figure>

            <ul class="list-none pl-0 mt-10 space-y-2 text-lg">
                <?php
                $contacts = get_field("contacts", "option");
                if (count($contacts)) :
                    foreach ($contacts as $item) :
                ?>
                        <li>
                            <a href="<?php echo $item["link"]["url"] ?>" class="text-white text-base hover:text-white/90 flex items-center gap-3">
                                <figure class="w-6 m-0!">
                                    <?php echo wp_get_attachment_image($item["icon"], "thumbnail", false, [
                                        "loading" => "lazy",
                                        "class" => "image-contain",
                                    ]); ?>
                                    <figcaption><?php echo wp_get_attachment_caption(
                                                    $item["icon"]
                                                ); ?></figcaption>
                                </figure>
                                <?php echo $item["link"]["title"] ?>
                            </a>
                        </li>
                <?php endforeach;
                endif;
                ?>
            </ul>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-5 gap-y-3 flex-1">
            <?php
            $addresses = get_field("addresses", "option");
            if ($addresses && count($addresses)) :
                foreach ($addresses as $item) :
            ?>
                    <div class="flex items-start gap-2">
                        <figure class="md:w-7 w-6 shrink-0 m-0!">
                            <?php echo wp_get_attachment_image($item["icon"], "thumbnail", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption><?php echo wp_get_attachment_caption(
                                            $item["icon"]
                                        ); ?></figcaption>
                        </figure>
                        <div>
                            <h3 class="mb-1"><?php echo wp_kses_post($item["title"]) ?></h3>
                            <?php echo wp_kses_post($item["address"]) ?>
                        </div>
                    </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script>
    $('.slick-slider-testimonials').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        autoplay: false,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1124,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.custom-slick-prev').click(function() {
        $('.slick-slider-testimonials').slick('slickPrev');
    });

    $('.custom-slick-next').click(function() {
        $('.slick-slider-testimonials').slick('slickNext');
    });
</script>

<?php wp_footer() ?>

</body>

</html>