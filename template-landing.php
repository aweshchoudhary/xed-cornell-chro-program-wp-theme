<?
// Template Name: Landing

get_header(); ?>


<article>
    <section class="flex md:flex-row flex-col no-spacing">
        <div class="bg-gray-300 flex-1">
            <? $image_id = 362 ?>
            <?= wp_get_attachment_image($image_id, "large", false, [
                "loading" => "eager",
                "class" => "image-cover",
            ]); ?>
        </div>
        <div class="flex-1 section-padding">
            <h2>Get Your Brochure</h2>
            <?= do_shortcode('[wpforms id="19"]'); ?>
        </div>
    </section>
    <section class="bg-[#f7f7f7]">
        <div class="content-wrapper space-y-6">
            <div class="xl:gap-14 lg:gap-10 gap-5 flex lg:flex-row flex-col items-stretch justify-between">
                <div class="flex-1">
                    <h2>Program Overview</h2>
                    <p> To shape the future of work and the organization of the future, today’s HR leaders and CHRO’s need to reimagine the basic tenets of Human Resource Management. To thrive in this ever-changing and complex ecosystem, HR leaders need a new set of skills and expertise. Cornell’s CHRO Leadership Program is designed to empower senior HR professionals to tackle the challenges of the new normal. </p>
                </div>
                <div class="lg:w-0.5 w-full md:h-auto h-0.5 bg-gray-300"></div>
                <div class="xl:space-y-6 space-y-3">
                    <div class="flex gap-3">
                        <svg class="text-primary md:size-10 size-8" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="currentColor">
                            <path d="M444.62-396.92v-70.77h70.76v70.77h-70.76Zm-160 0v-70.77h70.76v70.77h-70.76Zm320 0v-70.77h70.76v70.77h-70.76ZM444.62-240v-70.77h70.76V-240h-70.76Zm-160 0v-70.77h70.76V-240h-70.76Zm320 0v-70.77h70.76V-240h-70.76ZM140-100v-689.74h130.26v-74.87h54.1v74.87h312.82v-74.87H690v74.87h130V-100H140Zm50.26-50.26h579.48v-402.3H190.26v402.3Zm0-452.56h579.48v-136.67H190.26v136.67Zm0 0v-136.67 136.67Z" />
                        </svg>
                        <!-- <svg class="text-primary mt-1 md:size-7 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11.23 14.154v-1.538h1.54v1.538zm-4 0v-1.538h1.54v1.538zm8 0v-1.538h1.54v1.538zm-4 3.846v-1.538h1.54V18zm-4 0v-1.538h1.54V18zm8 0v-1.538h1.54V18zM4 21V5h3.385V2.77h1.077V5h7.154V2.77h1V5H20v16zm1-1h14v-9.384H5zM5 9.615h14V6H5zm0 0V6z" />
                        </svg> -->
                        <div>
                            <p class="text-lg mb-0">Starts On</p>
                            <h4 class="lg:text-2xl mb-0">8 April 2025</h4>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <svg class="text-primary md:size-10 size-8" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="currentColor">
                            <path d="M367.69-859.74V-910h224.62v50.26H367.69Zm87.18 445.69h50.26v-219.74h-50.26v219.74ZM480-100.41q-70.15 0-132-26.9-61.85-26.9-108.15-73.08-46.31-46.17-73.08-108.15-26.77-61.97-26.77-132 0-70.02 26.77-131.87 26.77-61.85 73.08-108.15 46.3-46.31 108.15-73.08 61.85-26.77 132-26.77 62.64 0 119.24 21.54 56.61 21.54 102.4 60.62l47.28-47.54 35.39 35.38-47.54 47.54q37.18 42.56 60.2 98.22Q820-509 820-440.41q0 69.9-26.77 131.87-26.77 61.98-73.08 108.15-46.3 46.18-108.15 73.08-61.85 26.9-132 26.9Zm-.04-50.26q120.5 0 205.14-84.6 84.64-84.61 84.64-205.1 0-120.5-84.6-205.14-84.61-84.64-205.1-84.64-120.5 0-205.14 84.6-84.64 84.61-84.64 205.1 0 120.5 84.6 205.14 84.61 84.64 205.1 84.64ZM480-440Z" />
                        </svg>

                        <div>
                            <p class="text-lg mb-0">Duration</p>
                            <h4 class="lg:text-2xl mb-0">6 Months</h4>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <svg class="text-primary md:size-10 size-8" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="currentColor">
                            <path d="M461.8-215.41h50.25v-40h84.87v-175.13H427.18v-74.61h169.74v-50.26h-84.87v-40H461.8v40h-84.88v175.13h169.75v74.61H376.92v50.26h84.88v40ZM180-100v-760h405.28L780-665.28V-100H180Zm50.26-50.26h499.48v-491.38h-168.1v-168.1H230.26v659.48Zm0-659.48v168.1-168.1 659.48-659.48Z" />
                        </svg>
                        <div>
                            <p class="text-lg mb-0">Program Fee</p>
                            <h4 class="lg:text-2xl mb-0">USD 4,500</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-b">
        <div>
            <h2 class="text-center heading">Program Benefits</h2>
            <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-2 md:gap-x-5 md:gap-y-10 gap-x-4 gap-y-6 ">
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M116.107 277.643c-5.186 0-10.235.59-15.083 1.704V146.473c0-15.612 12.773-28.385 28.385-28.385h168.874v14.843c0 3.07.393 6.05 1.13 8.893H128.697a3.949 3.949 0 0 0-3.937 3.937v132.437a67.486 67.486 0 0 0-8.653-.555zm0 118.181c28.216 0 51.091-22.875 51.091-51.091 0-28.217-22.875-51.091-51.091-51.091-28.217 0-51.091 22.875-51.091 51.091s22.875 51.091 51.091 51.091zM217.475 292.23c-.298 1.518.063 2.944 1.046 4.139s2.313 1.823 3.861 1.823H348.9c1.547 0 2.878-.629 3.861-1.823.982-1.194 1.344-2.621 1.046-4.139-6.26-31.935-34.398-56.031-68.167-56.031-33.768 0-61.907 24.096-68.165 56.031zm68.166-136.278c-19.398 0-35.123 15.726-35.123 35.124s15.725 35.123 35.123 35.123 35.124-15.726 35.124-35.123c0-19.398-15.725-35.124-35.124-35.124zm160.88 166.369H179.356a66.945 66.945 0 0 1 3.841 22.412c0 8.99-1.773 17.566-4.983 25.402h49.404v45.098h-38.712c13.082 10.389 23.932 23.545 31.616 38.682h190.554v-19.341c0-10.637-10.893-19.341-24.207-19.341h-43.207v-45.098h98.209c15.612 0 28.385-12.773 28.385-28.385V168.38H446.52v153.941zM495.64 35.45v97.481c0 10.713-8.737 19.45-19.45 19.45h-87.938l-29.455 30.662c-1.443 1.502-3.541 1.952-5.473 1.175-1.933-.778-3.133-2.555-3.133-4.638v-27.198h-16.458c-10.713 0-19.45-8.737-19.45-19.45V35.451c0-10.713 8.737-19.45 19.45-19.45H476.19c10.712-.001 19.45 8.736 19.45 19.449zm-31.636 79.939a8 8 0 0 0-8-8H352.183a8 8 0 0 0 0 16h103.822a8 8 0 0 0 7.999-8zm0-30.865a8 8 0 0 0-8-8H352.183a8 8 0 0 0 0 16h103.822a8 8 0 0 0 7.999-8zm0-30.864a8 8 0 0 0-8-8H352.183a8 8 0 0 0 0 16h103.822a8 8 0 0 0 7.999-8zM116.107 405.824c-50.122 0-91.715 36.492-99.673 84.356-.25 1.5.134 2.891 1.118 4.052S19.845 496 21.367 496l189.479-.001c1.521 0 2.831-.606 3.814-1.767s1.368-2.552 1.118-4.053c-7.957-47.863-49.551-84.355-99.671-84.355z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">6 Months, 16 LIVE Interactive Sessions</h4>
                </div>
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path fill-rule="evenodd" d="M113.968 185.179c27.515 0 49.82 22.305 49.82 49.82 0 27.514-22.305 49.82-49.82 49.82s-49.82-22.305-49.82-49.82 22.305-49.82 49.82-49.82zM438.649 496H114.976c-22.892 0-41.625-18.73-41.625-41.625s18.732-41.625 41.625-41.625h323.673c-7.833 9.364-13.096 20.943-14.669 33.625H142.262a8 8 0 0 0 0 16h281.717c1.574 12.682 6.836 24.261 14.67 33.625zM341 131.992V40.616c0-10.042-8.19-18.232-18.232-18.232H189.232c-10.042 0-18.232 8.19-18.232 18.232v91.376c0 10.042 8.19 18.232 18.232 18.232h41.717L256 198.696l25.051-48.473h41.717c10.042.001 18.232-8.189 18.232-18.231zm-38.961-86.525a8 8 0 0 1 0 16h-92.078a8 8 0 0 1 0-16zm0 65.674a8 8 0 0 1 0 16h-92.077a8 8 0 0 1 0-16zm0-32.837a8 8 0 0 1 0 16h-92.077a8 8 0 0 1 0-16zM16 125.608V34.232C16 24.19 24.19 16 34.232 16h131.241c-6.452 6.229-10.472 14.962-10.472 24.616v5.687a8 8 0 0 0-7.962-7.22H54.961a8 8 0 0 0 0 16h92.078a8 8 0 0 0 7.962-7.22v31.281a8 8 0 0 0-7.962-7.223H54.961a8 8 0 0 0 0 16h92.078a8.001 8.001 0 0 0 7.962-7.223v31.284a8 8 0 0 0-7.962-7.223H54.961a8 8 0 0 0 0 16h92.078a8.001 8.001 0 0 0 7.962-7.223v18.458c0 4.163.748 8.154 2.116 11.848h-4.776v37.139l-35.677-37.139H34.232C24.19 143.84 16 135.65 16 125.608zm480 0V34.232C496 24.19 487.81 16 477.768 16H346.527c6.452 6.229 10.472 14.962 10.472 24.616v5.693a8 8 0 0 1 7.962-7.226h92.078a8 8 0 0 1 0 16h-92.078a8 8 0 0 1-7.962-7.226v31.291a8 8 0 0 1 7.962-7.226h92.078a8 8 0 0 1 0 16h-92.078a8 8 0 0 1-7.962-7.226v31.29a8 8 0 0 1 7.962-7.226h92.078a8 8 0 0 1 0 16h-92.078a8 8 0 0 1-7.962-7.226v18.461c0 4.163-.748 8.154-2.116 11.848h4.777v37.139l35.677-37.139h82.431C487.81 143.84 496 135.65 496 125.608zM255.999 215.18c-27.514 0-49.82 22.305-49.82 49.82 0 27.514 22.305 49.819 49.82 49.819 27.514 0 49.819-22.305 49.819-49.819.001-27.515-22.304-49.82-49.819-49.82zm-94.894 181.572C172.714 355.257 210.8 324.82 256 324.82c45.201 0 83.287 30.437 94.895 71.932zm236.929-211.573c27.514 0 49.82 22.305 49.82 49.82 0 27.514-22.305 49.82-49.82 49.82-27.514 0-49.82-22.305-49.82-49.82s22.305-49.82 49.82-49.82zM363.13 382.75h121.025c6.494 0 11.234-6 9.728-12.318-10.332-43.364-49.323-75.614-95.85-75.614-30.34 0-57.473 13.716-75.547 35.282 18.224 13.001 32.534 31.235 40.644 52.65zm-335.286.001H148.87c8.109-21.415 22.42-39.649 40.643-52.65-18.074-21.566-45.207-35.282-75.546-35.282-46.528 0-85.52 32.25-95.851 75.615a9.967 9.967 0 0 0 9.728 12.317z" clip-rule="evenodd" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">Small cohort for impactful learning</h4>
                </div>
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 66 66" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M63.41 55.97H60.9V21.75c0-1.54-1.24-2.78-2.78-2.78H44.99c.62-1.52.96-3.17.96-4.9 0-7.14-5.81-12.95-12.95-12.95S20.05 6.93 20.05 14.07c0 1.73.34 3.38.96 4.9H7.88a2.78 2.78 0 0 0-2.78 2.78v34.22H2.59c-.42 0-.75.33-.75.75v5.22c0 1.61 1.31 2.93 2.93 2.93h56.46c1.62 0 2.93-1.32 2.93-2.93v-5.22c0-.41-.33-.75-.75-.75zM39.27 18.34c.19-1.11.31-2.29.34-3.52h4.69c-.49 1.36-2.3 2.69-5.03 3.52zm4.57-.59c-1.15 3.37-3.8 6.03-7.17 7.17.96-1.23 1.73-2.92 2.25-4.92 2-.52 3.7-1.3 4.92-2.25zm-4.23-4.43c-.03-1.23-.15-2.41-.34-3.52 2.73.83 4.54 2.16 5.03 3.52zm4.23-2.92c-1.22-.96-2.92-1.73-4.92-2.25-.52-2-1.29-3.7-2.25-4.92 3.37 1.16 6.02 3.8 7.17 7.17zM33.75 2.78c1.36.49 2.69 2.3 3.52 5.03-1.11-.19-2.29-.31-3.52-.34zm0 6.19c1.42.04 2.74.19 3.93.43.24 1.19.39 2.51.43 3.93h-4.36zm0 5.85h4.36c-.04 1.42-.19 2.74-.43 3.93-1.19.24-2.51.39-3.93.43zm0 5.86c1.23-.03 2.41-.15 3.52-.34-.83 2.73-2.16 4.54-3.52 5.03zm-1.5-17.9v4.69c-1.23.03-2.41.15-3.52.34.83-2.74 2.16-4.54 3.52-5.03zm-3.52 17.56c1.11.19 2.29.31 3.52.34v4.69c-1.36-.48-2.69-2.29-3.52-5.03zm.6 4.58c-3.37-1.14-6.02-3.8-7.17-7.17 1.22.96 2.92 1.73 4.92 2.25.52 2 1.29 3.69 2.25 4.92zm-1.01-6.17c-.24-1.19-.39-2.51-.43-3.93h4.36v4.36c-1.42-.03-2.74-.18-3.93-.43zm-.43-5.43c.04-1.42.19-2.74.43-3.93 1.19-.24 2.51-.39 3.93-.43v4.36zm1.44-10.09c-.96 1.22-1.73 2.92-2.25 4.92-2 .52-3.7 1.29-4.92 2.25 1.15-3.37 3.8-6.01 7.17-7.17zm-2.6 6.58c-.19 1.11-.31 2.29-.34 3.52H21.7c.49-1.36 2.3-2.69 5.03-3.52zm-.34 5.01c.03 1.23.15 2.41.34 3.52-2.73-.83-4.54-2.16-5.03-3.52zm-15.81 9.63h14.7c2.16 1.61 4.82 2.57 7.72 2.57s5.56-.96 7.72-2.57h14.7v27.54H10.58zm29.55 33.02-1.64 2.36H27.51l-1.64-2.36zm22.53 4.47c0 .79-.64 1.43-1.43 1.43H4.77c-.79 0-1.43-.64-1.43-1.43v-4.47h20.71L26.5 61c.14.21.38.33.62.33h11.76c.25 0 .48-.12.62-.33l2.45-3.53h20.71z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                                <path d="M29.71 29.18v4.49c0 .41-.34.75-.75.75H15.51c-.42 0-.75-.34-.75-.75v-4.49c0-.42.33-.75.75-.75h13.45c.41 0 .75.33.75.75zM29.71 36.85v4.48c0 .42-.34.75-.75.75H15.51c-.42 0-.75-.33-.75-.75v-4.48c0-.42.33-.75.75-.75h13.45c.41 0 .75.32.75.75zM29.71 44.49v4.49c0 .42-.34.75-.75.75H15.51c-.42 0-.75-.33-.75-.75v-4.49c0-.41.33-.75.75-.75h13.45c.41 0 .75.34.75.75zM42.35 30.73h7.86c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.86a.749.749 0 1 0 0 1.5zM42.35 39.84h7.86c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.86a.749.749 0 1 0 0 1.5zM42.35 48.94h7.86c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.86c-.41 0-.75.34-.75.75 0 .42.33.75.75.75zM37.05 30.73h1.57c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-1.57c-.41 0-.75.34-.75.75s.34.75.75.75zM42.35 35.28h7.86c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.86c-.41 0-.75.34-.75.75 0 .42.33.75.75.75zM37.05 35.28h1.57c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-1.57a.749.749 0 1 0 0 1.5zM37.05 39.84h1.57c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-1.57c-.41 0-.75.34-.75.75s.34.75.75.75zM42.35 44.39h7.86c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-7.86a.749.749 0 1 0 0 1.5zM37.05 44.39h1.57c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-1.57c-.41 0-.75.34-.75.75s.34.75.75.75zM37.05 48.94h1.57c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-1.57a.749.749 0 1 0 0 1.5z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">Year long access to 2000+ courses</h4>
                </div>
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class="">
                            <g>
                                <path d="M110.909 478.168H15c5.575-51.913 49.511-92.345 102.887-92.345 11.589 0 22.732 1.904 33.133 5.417-21.877 22.571-36.478 52.24-40.02 85.219-.061.57-.091 1.141-.091 1.709zm248.094-86.931c10.396-3.511 21.531-5.414 33.11-5.414 53.403 0 97.34 40.432 102.887 92.345h-95.909c0-.566-.03-1.133-.09-1.701-3.525-32.983-18.119-62.657-39.998-85.23zm-241.116-15.414c-28.813 0-52.299-23.513-52.299-52.326s23.486-52.327 52.299-52.327c28.84 0 52.326 23.514 52.326 52.327s-23.486 52.326-52.326 52.326zm274.226 0c-28.812 0-52.299-23.513-52.299-52.326s23.487-52.327 52.299-52.327c28.841 0 52.327 23.514 52.327 52.327s-23.486 52.326-52.327 52.326zM126.909 478.168c6.94-64.63 61.64-114.966 128.091-114.966 66.485 0 121.185 50.336 128.091 114.966zM255 353.202c-35.871 0-65.111-29.275-65.111-65.146s29.24-65.145 65.111-65.145c35.905 0 65.145 29.274 65.145 65.145s-29.24 65.146-65.145 65.146zm64.114-285.294h67.975c11.161 0 20.269 9.107 20.269 20.269v101.528c0 11.162-9.108 20.239-20.269 20.239h-17.142v28.851a5 5 0 0 1-8.605 3.464l-31.043-32.315h-91.563c-11.107 0-20.18-8.989-20.268-20.076h64.377c19.979 0 36.269-16.259 36.269-36.238zm-16 85.722c0 11.162-9.107 20.238-20.269 20.238h-91.563l-31.042 32.315a5 5 0 0 1-8.606-3.463v-28.852h-17.141c-11.162 0-20.269-9.076-20.269-20.238V52.101c0-11.161 9.107-20.269 20.269-20.269h148.352c11.162 0 20.269 9.108 20.269 20.269zm-149.395-42.412H261.84c4.416 0 8-3.584 8-8 0-4.415-3.584-8-8-8H153.719c-4.415 0-8 3.585-8 8 0 4.416 3.585 8 8 8zm0-32.166H261.84c4.416 0 8-3.585 8-8 0-4.416-3.584-8-8-8H153.719c-4.415 0-8 3.584-8 8 0 4.415 3.585 8 8 8zm0 64.302H261.84c4.416 0 8-3.584 8-8 0-4.415-3.584-8-8-8H153.719c-4.415 0-8 3.585-8 8 0 4.416 3.585 8 8 8z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">Peer coaching and feedback</h4>
                </div>
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <circle cx="45.5" cy="39.79" r="5.08" fill="currentColor" opacity="1" data-original="currentColor"></circle>
                                <path d="M45.5 29c-2.62 0-5.18.62-7.5 1.81a14.088 14.088 0 0 0-2 1.2 16.288 16.288 0 0 0-1.3 1.02c-.18.15-.35.3-.51.46-.19.18-.37.36-.54.54-.13.14-.26.28-.4.42-.05.05-.1.11-.14.16-.18.2-.35.4-.51.61-.11.14-.22.28-.32.42 0 .01-.01.01-.02.02-.3.4-.58.82-.83 1.24-.07.1-.13.2-.19.3-.1.18-.2.35-.29.53-.11.19-.21.38-.3.58-.02.05-.05.11-.07.16-.1.21-.19.41-.28.62-.15.35-.29.7-.4 1.06-.07.19-.13.38-.19.58-.01.02-.01.04-.02.06-.05.15-.09.31-.13.46-.07.25-.13.5-.18.75-.01 0-.01.01-.01.02-.06.27-.11.54-.15.81-.06.38-.11.77-.14 1.17-.03.24-.05.49-.06.74-.01.12-.02.25-.01.38-.01.13-.01.25-.01.38 0 .32.01.65.03.97.05.86.17 1.7.34 2.53.1.44.21.87.34 1.29.07.24.15.48.24.71 1 2.86 2.77 5.36 5.14 7.29.05.04.09.07.14.1C38.14 60.72 41.77 62 45.5 62s7.36-1.28 10.27-3.61c.05-.03.09-.06.14-.1C59.78 55.15 62 50.48 62 45.5 62 36.4 54.6 29 45.5 29zm10.55 26.44c-.05-.23-.11-.45-.17-.67a10.521 10.521 0 0 0-1.43-3.07c-.09-.15-.19-.29-.29-.42a11.716 11.716 0 0 0-1.02-1.18 10.757 10.757 0 0 0-9.52-2.98c-.15.02-.3.05-.45.09-.16.03-.3.07-.45.11-.15.04-.3.08-.44.13-.44.14-.87.31-1.28.5-.14.06-.27.13-.41.2l-.39.21c-.14.08-.26.16-.39.24s-.26.16-.38.25c-.13.08-.25.17-.38.27-.35.26-.7.55-1.02.87-.21.21-.42.42-.62.65-.2.22-.39.46-.57.7-.18.24-.35.49-.51.75-.16.25-.31.52-.44.79-.01.01-.02.03-.03.05-.12.23-.23.47-.32.71-.02.03-.03.06-.04.09-.12.28-.22.55-.3.84-.09.26-.16.53-.22.81-.01.03-.01.05-.02.08a14.51 14.51 0 0 1-3.34-5.76c-.41-1.33-.62-2.75-.62-4.2 0-.79.07-1.55.19-2.3.01-.01.01-.03.01-.04a14.46 14.46 0 0 1 6.35-9.78A14.42 14.42 0 0 1 45.5 31c8 0 14.5 6.5 14.5 14.5 0 3.74-1.42 7.26-3.95 9.94z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                <path d="M25.3 49H5c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h6v1c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V7h6c.55 0 1 .45 1 1v19.34c.08-.04.15-.08.23-.12.57-.29 1.16-.56 1.77-.79V8c0-1.65-1.35-3-3-3h-6V4c0-1.1-.9-2-2-2H13c-1.1 0-2 .9-2 2v1H5C3.35 5 2 6.35 2 8v40c0 1.65 1.35 3 3 3h20.76c-.11-.35-.2-.73-.29-1.12-.06-.3-.12-.59-.17-.88z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                <path d="M17 14c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2zm-2.79 2.71-2 2c-.2.19-.45.29-.71.29s-.51-.1-.71-.29l-1-1c-.39-.39-.39-1.03 0-1.42.39-.39 1.03-.39 1.42 0l.29.3 1.29-1.3c.39-.39 1.03-.39 1.42 0 .39.39.39 1.03 0 1.42zM21 16h7a1 1 0 1 0 0-2h-7a1 1 0 1 0 0 2zM33 19a1 1 0 0 0-1-1H21a1 1 0 1 0 0 2h11a1 1 0 0 0 1-1zM17 26c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2zm-2.79 2.71-2 2c-.2.19-.45.29-.71.29s-.51-.1-.71-.29l-1-1c-.39-.39-.39-1.03 0-1.42.39-.39 1.03-.39 1.42 0l.29.3 1.29-1.3c.39-.39 1.03-.39 1.42 0 .39.39.39 1.03 0 1.42zM28 28a1 1 0 1 0 0-2h-7a1 1 0 1 0 0 2zM21 32h9.08c.11-.13.22-.26.34-.38.1-.1.2-.21.3-.31.23-.24.45-.47.68-.69.22-.21.44-.41.68-.61-.03-.01-.05-.01-.08-.01H21c-.55 0-1 .45-1 1s.45 1 1 1zM15 36H9c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2v-6c0-1.1-.9-2-2-2zm-.79 4.71-2 2c-.2.19-.45.29-.71.29s-.51-.1-.71-.29l-1-1c-.39-.39-.39-1.03 0-1.42.39-.39 1.03-.39 1.42 0l.29.3 1.29-1.3c.39-.39 1.03-.39 1.42 0 .39.39.39 1.03 0 1.42zM20 39c0 .55.45 1 1 1h4.76c.04-.16.09-.32.13-.47l.01-.01c.06-.22.13-.44.21-.64.1-.32.21-.62.32-.88H21c-.55 0-1 .45-1 1zM25.05 44c.02-.13.03-.27.05-.4.04-.47.1-.94.17-1.39.01-.07.02-.14.04-.21H21c-.55 0-1 .45-1 1s.45 1 1 1z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">Regular assessments and leaderboard </h4>
                </div>
                <div class="flex flex-col items-center">
                    <div class="md:size-22 size-18 flex items-center border-gray-200 justify-center rounded-full md:border-2 border">
                        <svg class="md:size-12 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 66 66" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M34 46.1c-.7 2.5-.8 5.2 0 8h6.4c-.3-2.7-.3-5.3 0-8zM34.8 56c1.7 3.5 4.8 6.2 8.5 7.4-1.2-1.8-2.1-4.3-2.6-7.4zM34.8 44h5.9c.5-3.1 1.4-5.6 2.6-7.4-3.8 1.2-6.9 3.9-8.5 7.4zM42.7 56c.9 4.9 2.8 8 4.6 8s3.7-3.1 4.6-8zM52 44c-.9-4.9-2.8-8-4.6-8s-3.7 3.1-4.6 8zM42.4 54h9.9c.3-2.6.3-5.3 0-8h-9.9c-.3 2.6-.3 5.5 0 8zM51.4 63.4c3.8-1.1 6.9-3.8 8.5-7.4H54c-.5 3.1-1.4 5.6-2.6 7.4zM59.9 44c-1.7-3.5-4.8-6.2-8.5-7.4 1.2 1.7 2.1 4.3 2.6 7.4zM60.7 46.1h-6.4c.3 2.8.3 5.3 0 8h6.4c.7-2.6.8-5.4 0-8zM7.1 11.1l8.8 2.6.1 2.5c2.3-1.4 6.2-1.6 8-1.6 1.7 0 5.8.2 8.1 1.6l.1-2.5 3.8-1.2V15l-1.3 1.7c-.1.2-.2.4-.2.6v3.9c0 .6.4 1 1 1h3.1c.6 0 1-.4 1-1v-3.9c0-.2-.1-.4-.2-.6L38 15v-3l2.7-.8c.4-.1.7-.5.7-.9s-.2-.8-.6-1L24.3 2.1c-.3-.1-.6-.1-.8 0L7 9.2c-.4.2-.6.6-.6 1s.3.8.7.9z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                                <path d="M31.1 18.1c-2.9-2-12.5-1.8-14.5.2l-.2.2c0 .1-.1.1-.1.2-2.3 6.7 2.4 14 7.6 14 5.3 0 10-7.3 7.6-14.1 0-.2-.1-.4-.4-.5z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                                <path d="M40.7 35.6c-1.2-1.4-6.7-2.7-8.6-2.9-.3 0-.7.1-.9.3-.2.3-.3.6-.2.9.4 1.3.6 2.6.7 3.9.2 3.6-1.6 6.7-4.6 10l-.5-6.9h.4c.6 0 1-.4 1-1v-3.3c0-.6-.4-1-1-1h-5.9c-.6 0-1 .4-1 1v3.3c0 .6.4 1 1 1h.6l-.5 7c-4.3-5.1-5.6-9.6-4.2-14 .1-.3 0-.7-.2-.9-.2-.3-.5-.4-.9-.4-3.3.3-3.8.9-6.7 1.8-2.7.8-3 3-3.3 4.8L4.7 57.9c0 .3.1.5.3.8.2.2.4.3.7.3h28.4c-5-7.5-3.5-18.8 6.6-23.4z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <h4 class="mt-2 font-medium 2xl:text-xl mb-0 lg:text-lg text-base text-center">Learn from Cornell faculty and Industry Experts</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="border-b ">
        <div>
            <h2 class="heading text-center">Curriculum</h2>

            <div class="md:max-w-4xl mx-auto">
                <div id="accordion-flush" data-accordion="open" data-active-classes="bg-white text-primary" data-inactive-classes="text-black">
                    <h3 class="cursor-pointer mb-5" id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-3 font-medium rtl:text-right border-b border-gray-300 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                            <span>HR as a CXO</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-1" class="hidden mb-5 lg:p-8 p-5 bg-[#f7f7f7]" aria-labelledby="accordion-flush-heading-1">
                        <h4>1. Strategy and HR</h4>
                        This session will focus on advancing participants’ understanding of how organizations strategically position themselves for competitive advantage. It will emphasize the importance of aligning an organization’s customer value proposition to customers’ unmet needs and of investing in core competencies that enable the organization to deliver on this value proposition consistently and repeatedly. Participants will also consider how influences and trends in the external environment shape organizations’ strategic opportunities and threats over time.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Unpack the concept of differentiation and identify different approaches to offering a unique and effective customer value proposition.</li>
                            <li>Define core competencies and introduce the organizational competency map as a tool for identifying required activities and resources.</li>
                            <li>Discuss and apply frameworks for identifying opportunities and threats in the organization’s external environment.</li>
                        </ul>
                        <br>
                        <h4>2. HR as a Business Leader</h4>
                        This session will focus on the strategic role played by HR in defining and supporting the employee contributions required to sustain an organization’s core competencies and competitive advantage. It will emphasize the importance of the causal map linking HR investments to business requirements. Frameworks will be introduced to ensure the development of comprehensive HR interventions, discuss how to strategically target HR investments based on workforce partitioning, and consider the role of HR interventions in supporting organizations’ responses to external pressures.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Examine the use of a causal map in linking HR investments to financial performance, considering multiple applications of the causal map in supporting the development and refinement of an HR strategy.</li>
                            <li>Discuss the use of workforce partitioning to target HR investments toward employee groups to make the greatest strategic impact.</li>
                            <li>Consider the role of HR interventions in shaping and supporting organizations’ responses to pressures and trends in the external environment.</li>
                        </ul>
                        <br>
                        <h4>3. Leveraging Data and Analytics for HR Decision Making</h4>
                        The session will focus on how organizations are using analytics to guide HR decision-making. It will cover several examples of HR analytics in action, discuss common obstacles and how to address them, and review key frameworks. reasons to embrace digital transformation. Equipped with a foundational understanding of people analytics, participants will be positioned to rigorously examine common HR challenges related to hiring top talent, engaging the workforce, managing retention, and more.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Examine the role of analytics in HR today, in producing insights, solving problems, and evaluating solutions/progress.</li>
                            <li>Identify and address the common challenges that HR faces in being data-driven to build HR capabilities.</li>
                            <li>Decide where to focus personally and as an organization and how to move forward with the help of a framework.</li>
                        </ul>
                        <br>
                        <h4>4. HR Alignment</h4>
                        The session will discuss the value of (and how to assess) alignment of the broader HR function with the organization’s business strategy. It will cover the importance of (and challenges associated with) internal alignment with the HR function itself.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>External HR Alignment: Do our HR processes effectively support our customer value proposition (CVP)?</li>
                            <li>Internal HR Alignment: Are all of the different functional areas within HR moving in the same direction?</li>
                        </ul>
                        <br>
                        <h4>5. AI Strategy for HR</h4>
                        In this session, you will learn about the possibilities of and the future of AI and explore strategies to preserve human dignity and agency while embracing the benefits of the technology. You will then explore the key questions that boards of directors need to consider to govern the use of AI effectively within their organizations, and you will contemplate how AI will impact the role of HR leadership and affect the future of jobs.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>External HR Alignment: Do our HR processes effectively support our customer value proposition (CVP)?</li>
                            <li>Internal HR Alignment: Are all of the different functional areas within HR moving in the same direction?</li>
                        </ul>
                        <br>
                        <h4>6. Storytelling for HR Leaders</h4>
                        Effective communication is the cornerstone of leadership, and the art of storytelling is its most powerful tool. This session on Storytelling for HR leaders will help you communicate insights, reports, and patterns in a compelling and engaging way to influence decisions, persuade stakeholders, and inspire action.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Craft compelling narratives that resonate with diverse audiences and drive meaningful action.</li>
                            <li>Explore how to structure messages, choose impactful content, and develop a personal style that captivates and inspires.</li>
                            <li>Anticipate and manage questions from diverse audiences; Enhance decision-making by using appropriate cues and indicators for specific audiences.</li>
                        </ul>
                    </div>
                    <h3 class="cursor-pointer mb-5" id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-3 font-medium rtl:text-right border-b border-gray-300 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>HR as a Talent Leader</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-2" class="hidden mb-5 lg:p-8 p-5 bg-[#f7f7f7]" aria-labelledby="accordion-flush-heading-2">
                        <h4>1. HR and Talent Development</h4>
                        This session will examine current trends and challenges in the field of talent development. It will present a talent development framework and use several case studies to assess how the dimensions are currently being applied within organizations. The session will also present ideas to align future talent development initiatives.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Identify the key elements of designing and implementing effective talent development programs.</li>
                            <li>Assess the extent to which the key dimensions of effective talent development programs are currently reflected in practice.</li>
                            <li>Discuss ideas for aligning talent development programs with ongoing changes in the world of work.</li>
                        </ul>
                        <br>
                        <h4>2. HR’s Role in Driving Inclusivity</h4>
                        The session focuses on tackling the challenges of a diverse workforce. Moving beyond diversity towards equity and belongingness.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li><strong>Understanding:</strong> Have a clearer understanding of your organization’s vision, mission, goals, and strategic direction.</li>
                            <li><strong>Contribution:</strong> Understand how their individual work contributes directly to the execution of the organization’s strategy and success; more focused and eager to take up challenges.</li>
                            <li><strong>Alignment:</strong> Feel that their personal values align with the values and mission of the organization.</li>
                        </ul>
                        <br>
                        <h4>3. Evoking High Performance</h4>
                        The session will discuss research related to evoking high performance in organizations. At the end of the session, participants will know about research and theory on performance psychology, and will also learn concrete strategies that they can try in their own organization to evoke high performance.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>What leaders can do to maximize the performance of the members of the organization, including how to give feedback and how to effectively use goal setting.</li>
                            <li>How a leader can manage different personalities and get the most out of their employees.</li>
                            <li>How leaders can structure a group to facilitate good teamwork, with a particular focus on the pros and cons of the hierarchy.</li>
                        </ul>
                        <br>
                        <h4>4. Diagnosing Workplace Conflict</h4>
                        This session will focus on identifying and resolving conflicts within the workplace. Effectively managing any conflict starts with fully diagnosing it, and that’s where this session begins.
                        <br><br>
                        <strong>Takeaways:</strong>
                        <ul>
                            <li>Identify an issue in your workplace and confirm it is a conflict.</li>
                            <li>Recognize the effect of conflict styles.</li>
                            <li>Identify the conflict type and level.</li>
                            <li>Use questions to check your diagnosis.</li>
                        </ul>
                    </div>
                    <h3 class="cursor-pointer mb-5" id="accordion-flush-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-3 font-medium rtl:text-right border-b border-gray-300 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span>HR as a Change Driver</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-3" class="hidden mb-5 lg:p-8 p-5 bg-[#f7f7f7]" aria-labelledby="accordion-flush-heading-3">
                        <div>
                            <h4>1. Managing Complexity</h4>
                            In this session, participants will be guided by Dr. Edward Rogers (Ex-Chief Knowledge Officer at NASA and a leading thinker of our times) to gain insights into why we sometimes stumble in our judgments, especially when faced with multiple complex demands.
                            Dr. Rogers will illustrate leadership learnings from the NASA Apollo mission to the moon and the tragic loss of the Columbia space shuttle. The session will also help participants harness the power of both successes and failures as valuable learning opportunities, cultivating a growth mindset that propels them forward.
                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>Develop the mental models and conceptual thinking skills essential for navigating complexity with confidence and clarity.</li>
                                <li>Enhance your decision-making abilities, double your learning capacity, and ultimately become a more effective and impactful leader.</li>
                            </ul>
                            <br>
                            <h4>2. Future of Work</h4>
                            Too often, conversations around the Future of Work have too little to do with the future and even less to do with work. This session aims to re-center the conversation around work as opposed to technology and to underscore the ways in which C-suite leaders—not the technology itself—can determine the best outcomes for their organizations and for society at large.

                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>You are in the driver's seat: The future of work isn’t about technology, it's about the worker.</li>
                                <li>Thinking on Artificial Intelligence: Whether AI helps or hurts workers is upon us.</li>
                                <li>How we work: Cracks, Corona, and Careers - COVID catalyzed, but did not redirect workplace change. Managers will need to rethink what it means to manage.</li>
                            </ul>

                            <br>
                            <h4>3. HR as a Driver of Innovation</h4>
                            This session will examine key organizational structures and HR policies that facilitate knowledge generation and development. Core concepts and theories will be demonstrated using examples from prominent organizations.

                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>Articulate key advantages and disadvantages associated with centralization/decentralization, innovation pipelines, and the organization's decisions to internalize or externalize innovation work, among other key concepts.</li>
                                <li>Develop an understanding of effective HR practices and policies to motivate knowledge professionals engaging in innovation work, such as intrinsic rewards, flexible performance reviews, and unstructured time.</li>
                                <li>Apply key theories and concepts in real organizational settings.</li>
                            </ul>

                            <br>
                            <h4>4. Leading Change</h4>
                            This session will provide opportunities for self-reflection, practical application, and a forum for sharing experiences and feedback to foster learning while advancing oneself as a change leader.

                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>Increase understanding of what skills are necessary to effectively influence/change/enhance the way in which work is performed throughout the change.</li>
                                <li>Encourage participants to adapt how they approach their role as a strategic change leader.</li>
                                <li>Enable participants to position themselves as a change leader, elevate how they influence others, and how they impact the organization.</li>
                            </ul>

                            <br>
                            <h4>5. Influence and Persuasion</h4>
                            Navigate complex stakeholder relationships, build consensus, and drive positive change. By the end of this session, you will possess the tools and insights to navigate the power dynamics of leadership with confidence and integrity, achieving your objectives while fostering a collaborative and supportive environment.

                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>Learn about influence strategies and how to apply them effectively across contexts.</li>
                                <li>Leverage effective collaboration techniques with varied stakeholders; overcome resistance to change.</li>
                            </ul>

                            <br>
                            <h4>6. Creative Leadership in a Complex World</h4>
                            Modern leadership involves creativity and the ability to thrive in situations in which there are high levels of uncertainty and ambiguity, and to bring creative ideas to complex challenges. Some leaders thrive in complex operating environments because of an inherent curiosity and openness, but effective approaches to dealing with complexity can also be learned. This session will lay the foundation for the creativity and continuous improvement that is necessary to thrive in a complex world.
                            <br><br>
                            <strong>Takeaways:</strong>
                            <ul>
                                <li>Improve your ability to creatively deal with complex business challenges in which cause and effect are not always clear.</li>
                                <li>Become familiar with specific concepts and principles that will enhance your agile leadership effectiveness.</li>
                                <li>Reflect on your mental models to understand how your education and experience can be both an advantage and a disadvantage at times of non-linear change.</li>
                                <li>Understand how to help your organization to become more effective in dealing with complexity – to accelerate agile execution.</li>
                                <li>Understand the brain science of leadership, and acquire practical approaches for boosting your cognitive abilities.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <h3>Year long access to 2000+ courses</h3>
                    <p> Choose from over 2000+ courses that will enhance your knowledge and skills across business functions. With unlimited access to Cornell’s resource library, you will have the opportunity to learn something new, every day. Super-specialize in your area of interest from topics across domains like innovation, leadership, marketing, supply chain, finance, service excellence, operations, project management and more. </p>
                    <br>
                    <h3>Regular assessments and leaderboard</h3>
                    <p> Participants will be given an assessment to test their acquired knowledge towards the end of the LIVE session. This will help you understand the knowledge gap and further assist you in developing a learning path for yourself. Post-work assignments/tasks will be given after each session to enhance your skills on each topic taught during the LIVE session. The leaderboard scores you against your peers in the learning journey. </p>
                    <br>
                    <h3>Peer coaching and feedback</h3>
                    <p>Learn from high-achieving peers from around the globe and build your network. The cohort will be divided into triads. You will get a chance to interact, share and exchange ideas with your peers. You can discuss on-going scenarios, solve doubts, work on assignments and receive valuable feedback from like-minded senior leaders globally. </p>
                </div>
            </div>

        </div>
    </section>
    <section class="border-b ">
        <div class="max-w-4xl mx-auto">
            <h2 class="heading text-center">Cohort Statistics</h2>

            <div class="flex flex-wrap justify-between gap-x-5 lg:gap-y-14 gap-y-10">
                <div class="text-center md:w-1/3">
                    <h3 class="text-primary mb-5">Work Experience</h3>
                    <figure class="overflow-hidden w-full !m-0">
                        <? $image_id = 388 ?>
                        <?= wp_get_attachment_image($image_id, "large", false, [
                            "loading" => "lazy",
                            "class" => "image-contain",
                        ]); ?>
                        <figcaption class="sr-only">
                            <?= wp_get_attachment_caption($image_id); ?>
                        </figcaption>
                    </figure>
                    <p class="lg:mt-8 mt-5">Average Work Experience: 21 Years</p>
                </div>
                <div class="w-fit">
                    <h3 class="text-primary mb-5">Industries</h3>
                    <ul class="my-0 text-left">
                        <li>Consulting</li>
                        <li>Financial Services</li>
                        <li>Manufacturing</li>
                        <li>Information Technology</li>
                        <li>Real Estate</li>
                        <li>F&amp;B</li>
                        <li>Healthcare</li>
                        <li>Legal</li>
                        <li>Media &amp; Entertainment</li>
                        <li>Edtech</li>
                        <li>Hospitality</li>
                        <li>Telecommunication</li>
                        <li>E-Commerce</li>
                        <li>Logistics and Others</li>
                    </ul>
                </div>
                <div class="w-fit">
                    <h3 class="text-primary mb-5">Designations</h3>
                    <ul class="my-0 text-left">
                        <li>Chief Human Resources Officer</li>
                        <li>Chief People Officer</li>
                        <li>Country HR Business Partner</li>
                        <li>Director - Human Resource</li>
                        <li>SVG Global People Operations</li>
                        <li>President</li>
                        <li>Associate Vice President - Head L&amp;D</li>
                        <li>Vice President - HR Business Partner</li>
                        <li>Country Head - Talent Management</li>
                        <li>Deputy General Manager</li>
                        <li>Group Head HR</li>
                        <li>Regional HR Manager</li>
                        <li>Head - People &amp; Culture</li>
                        <li>Head - Leadership &amp; Talent Development</li>
                    </ul>
                </div>
                <div class="w-full">
                    <h3 class="text-primary mb-5 text-center">Companies</h3>
                    <figure class="overflow-hidden w-full !m-0">
                        <? $image_id = 132 ?>
                        <?= wp_get_attachment_image($image_id, "large", false, [
                            "loading" => "lazy",
                            "class" => "image-contain",
                        ]); ?>
                        <figcaption class="sr-only">
                            <?= wp_get_attachment_caption($image_id); ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="heading text-center">Faculty (Indicative)</h2>
            <div class="flex items-center justify-center gap-x-5">
                <div class="faculty-slider-btn-prev md:flex hidden swiper-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                    </svg>
                </div>
                <div class="swiper faculty-slider flex-1 shrink-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-8" data-modal-toggle="modal-8">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 124; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Rebecca Kehoe</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Associate Prof, Human Resource Studies</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-1" data-modal-toggle="modal-1">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 123; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Bradford Bell</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">William J. Conaty Professor of Strategic Human Resources</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-2" data-modal-toggle="modal-2">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 122; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">John Hausknecht</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Professor, Human Resource Studies</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-3" data-modal-toggle="modal-3">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 121; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">M. Diane Burton</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Joseph R. Rich ’80 Professor, Human Resource Studies and Academic Director, Institute for Compensation Studies </p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-4" data-modal-toggle="modal-4">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 117; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Tae Youn Park</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Associate Professor, Human Resource Studies</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-5" data-modal-toggle="modal-5">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 120; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Adam Seth Litwin</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Associate Professor</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-6" data-modal-toggle="modal-6">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 119; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Ben Rissing</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Associate Professor</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-9" data-modal-toggle="modal-9">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 118; ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Lisa Csencsits</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Associate Director</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cursor-pointer group" data-modal-target="modal-7" data-modal-toggle="modal-7">
                                <figure class="aspect-square size-full overflow-hidden select-none">
                                    <?php $image_id = 116 ?>
                                    <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover group-hover:scale-110 transition",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="text-primary md:text-xl text-lg font-semibold mt-3 mb-0">Alwin Smith</p>
                                <p class="mb-2 text-left text-sm line-clamp-2">Adjunct Instructor</p>
                                <p class="underline text-sm">More Info</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faculty-slider-btn-next md:flex hidden swiper-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                    </svg>
                </div>
            </div>
            <div class="flex items-center md:justify-center justify-between pt-5 mt-2 w-full md:border-t-0 border-t ">
                <div class="flex items-center md:hidden gap-2">
                    <div class="faculty-slider-btn-prev swiper-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                        </svg>
                    </div>
                    <div class="faculty-slider-btn-next swiper-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination static! md:text-center! text-right!"></div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const swiper = new Swiper('.faculty-slider', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        speed: 100,
                        lazy: true,
                        autoHeight: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                            dynamicBullets: true,
                        },
                        navigation: {
                            nextEl: '.faculty-slider-btn-next',
                            prevEl: '.faculty-slider-btn-prev',
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 10,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 15,
                            },
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 20,
                            },
                        },
                    });
                })
            </script>
        </div>
    </section>
    <section class="bg-[#f7f7f7]">
        <div class="content-wrapper">
            <h2 class="text-center heading">Hear from Adam Seth Litwin, Associate Professor</h2>

            <div class="md:w-[70%] mx-auto">
                <iframe class="w-full aspect-video" src="https://www.youtube-nocookie.com/embed/wDQ4fZh1AlI?si=6gpqbmZFdoIoFmnZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="border-b ">
        <div class="content-wrapper">
            <h2 class="heading text-center">Certificate</h2>
            <figure class="overflow-hidden md:w-[60%] mx-auto! w-full !m-0">
                <? $image_id = 395 ?>
                <?= wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only">
                    <?= wp_get_attachment_caption($image_id); ?>
                </figcaption>
            </figure>
            <p class="md:mt-10 mt-5">
                <em>Upon successful completion of the program, participants will be awarded a digitally verifiable certificate by Cornell University
                    <br><br>
                    Note: Certificate image is for illustrative purposes only and may be subject to change at the discretion of Cornell University.</em>
            </p>
        </div>
    </section>
    <section>
        <div>
            <h2 class="heading text-center">Testimonials</h2>
            <div class="flex items-center justify-center gap-x-5">
                <div class="testimonial-slider-btn-prev md:flex hidden swiper-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                    </svg>
                </div>
                <div class="testimonial-sliders swiper flex-1 shrink-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> The learning experience was enriching, with an inside out approach & the interactive sessions with the faculty & the fellow participants further enhanced the learning </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Savitha Krishnamoorthy</h4>
                                <p><strong class="font-medium">Deputy General Manager, The Great Eastern Shipping Co. Ltd</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> The faculty, and the program team was able to pull together a bunch of really great people to form the cohort. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Eshwari Shunmuganathan</h4>
                                <p><strong class="font-medium">Director, Business Operations and Strategy, Yahoo</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> Fantastic, took special care to ensure that the diverse group understood every concept. Its really tough to tech virtual classes yet make it interactive...the faculty did this with ease! </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Tiyash Mazumder Bagchi</h4>
                                <p><strong class="font-medium">Head-HR Global Corporate Functions &amp; HR Strategy, Dr Reddy's Laboratories Limited</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> Line up of faculties are great, with eye and mind opening content on the discussion. It made us engaged and not wanting to miss a session. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Marizca M. Tambunan</h4>
                                <p><strong class="font-medium">Director, SHL Indonesia</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em>The exchange of ideas, the professor's ability to connect with the audience inspite of it being an online session. The break out room discussions and the peer connect sessions. There were also theories re learning that happened and industry examples to connect with them, helped</em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Bindu Jacob</h4>
                                <p><strong class="font-medium">SVP-HR &amp; Administration, UFO Moviez</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em>The program gives a refreshing break from day-to-day HR activities to sharpen the axe. It helps in reflections over our actions of past and realize what could have been done differently</em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Mukund Madhav</h4>
                                <p><strong class="font-medium">Head HR BACL, Bajaj Auto Ltd</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> Quality of Instruction: Knowledgeable, engaging, and supportive Professors. Curriculum: Well-structured, comprehensive. Peer Interaction: Opportunities to collaborate and build relationships with fellow students. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Chanchal Chandiok</h4>
                                <p><strong class="font-medium">HR Director, NEC Software Solutions India</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> It's been a very insightful journey all through, varied dimensions covered brilliantly with relevant case studies and very interactive sessions with faculty and peers </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Manisha Sharma Prasad</h4>
                                <p><strong class="font-medium">SVP &amp; Head Human Resources, CRIF India &amp; South Asia</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> Excellent faculty! Their knowledge dissemination and connection with the whole cohort was fantastic. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Mainak Chaki</h4>
                                <p><strong class="font-medium">Group Head Human Resources, KK Birla Group</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> It was good to understand more evolved HR concepts and case studies prevalent across markets. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Shipra Gairola</h4>
                                <p><strong class="font-medium">SVP &amp; Head Human Resources, CRIF India &amp; South Asia</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group p-5 border ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-14 text-primary" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                                <blockquote class="xl:text-xl md:text-lg"><em> The most valuable aspect of the program was earning a certificate from Cornell University and learning from their professors. Additionally it has significantly enhanced my work experience. </em></blockquote>
                                <br>
                                <h4 class="text-primary mb-1">Mirna Mogharbel</h4>
                                <p><strong class="font-medium">Head of HR &amp; Admin, AL Zorah Development Company</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-btn-next md:flex hidden swiper-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                    </svg>
                </div>
            </div>
            <div class="flex items-center md:justify-center justify-between pt-5 mt-2 w-full ">
                <div class="flex items-center md:hidden gap-2">
                    <div class="testimonial-slider-btn-prev swiper-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                        </svg>
                    </div>
                    <div class="testimonial-slider-btn-next swiper-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5l-5-5" />
                        </svg>
                    </div>
                </div>
                <div class="testimonial-slider-pagination static! md:text-center! text-right!"></div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const swiper = new Swiper('.testimonial-sliders', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        speed: 100,
                        lazy: true,
                        autoHeight: true,
                        pagination: {
                            el: ".testimonial-slider-pagination",
                            clickable: true,
                            dynamicBullets: true,
                        },
                        navigation: {
                            nextEl: '.testimonial-slider-btn-next',
                            prevEl: '.testimonial-slider-btn-prev',
                        },
                        breakpoints: {
                            550: {
                                slidesPerView: 2,
                                spaceBetween: 10,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                        },
                    });
                })
            </script>
        </div>
    </section>
    <section class="bg-[#f7f7f7]">
        <div class="text-center content-wrapper">
            <h2>Who Should Apply?</h2>
            <p>Cornell CHRO Leadership Program is designed for emerging and current CHROs, senior leaders and HR professionals, across geographies and industries, who desire to be agile in thinking and strategic in their approach towards building innovative HR practices to steer business growth. </p>

            <ul class="text-left md:mt-8 mt-5">
                <li> 10+ years of work experience and proven success in leading high performing teams / impactful projects
                </li>

                <li> Have at least a Bachelor's degree</li>

                <li> Country of residence at the time of enrolling must be Latin America, South Asia, Middle East, Africa, Far East</li>

            </ul>

            <a href="/eligibility" class="btn-primary btn-lg mx-auto mt-5">Apply Now</a>

        </div>
    </section>

    <div id="floating-actions" class="hidden fixed bottom-0 w-full right-0 z-40 px-5 py-2 bg-white">
        <a href="#top" class="btn-outline mx-auto">Download Brochure</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const floatingActions = document.getElementById("floating-actions");
            document.addEventListener("scroll", () => {
                if (window.scrollY > 400) {
                    floatingActions.classList.remove("hidden");
                } else {
                    floatingActions.classList.add("hidden");
                }
            });

        })
    </script>


    <!-- Modals -->
    <div id="modal-1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square w-full overflow-hidden select-none">
                            <?php $image_id = 123; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Bradford Bell</p>
                        <p class="mb-2 text-left font-semibold ">William J. Conaty Professor of Strategic Human Resources</p>
                        <hr class="mt-3 mb-5 ">

                        <p>Bradford S. Bell is the William J. Conaty Professor in Strategic Human Resources and Director of the Center for Advanced Human Resource Studies. He received his B.A. in Psychology from the University of Maryland at College Park and his M.A. and Ph.D. in Industrial and Organizational Psychology from Michigan State University. He worked in the management and organization development department of First USA Bank/Banc One and has worked as an HR consultant for multiple private and public firms. Dr. Bell is a fellow of the Society for Industrial and Organizational Psychology and American Psychological Association.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-2" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 122; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">John Hausknecht</p>
                        <p class="mb-2 text-left font-semibold ">Professor, Human Resource Studies</p>
                        <hr class="mt-3 mb-5 ">

                        <p> John Hausknecht is professor of human resource studies at Cornell University’s ILR School. His teaching, research, and consulting focuses on HR analytics and staffing-related topics including employee selection and turnover. Professor Hausknecht recently served as the academic director for Cornell’s ILR Executive Education and currently leads the HR analytics working group series for Cornell’s Center for Advanced HR Studies. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-3" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-3">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 121; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">M. Diane Burton</p>
                        <p class="mb-2 text-left font-semibold ">Joseph R. Rich ’80 Professor, Human Resource Studies and Academic Director, Institute for Compensation Studies </p>
                        <hr class="mt-3 mb-5 ">

                        <p> M. Diane Burton is a professor in the ILR School at Cornell University. Her primary appointment is in human resource studies with courtesy appointments in organizational behavior and sociology. Prior to joining the Cornell faculty in 2009, she was a faculty member at the MIT Sloan School of Management. She earned her Ph.D. in sociology at Stanford University and served as a lecturer and researcher in organizational behavior and human resources management at the Stanford Graduate School of Business.
                            Hear from Adam Seth Litwin, Associate Professor
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-4" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-4">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 117; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Tae Youn Park</p>
                        <p class="mb-2 text-left font-semibold ">Associate Professor, Human Resource Studies </p>
                        <hr class="mt-3 mb-5 ">

                        <p>Tae-Youn Park (Ph.D., University of Minnesota) is the Associate Professor of Human Resource Studies in the ILR School, Cornell University. His work has been published in many influential journals across disciplines. He currently serves on the editorial board of Academy of Management Journal, Personnel Psychology, and Compensation and Benefit Review. Before joining the ILR School, Tae-Youn was a Brownlee O. Currey Jr. Dean’s Faculty Fellow, assistant professor of Management in the Owen Graduate School of Management.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-5" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-5">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 120; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Adam Seth Litwin</p>
                        <p class="mb-2 text-left font-semibold ">Associate Professor </p>
                        <hr class="mt-3 mb-5 ">

                        <p>Adam Seth Litwin is Associate Professor of Industrial and Labor Relations at Cornell’s ILR School and serves as an associate editor at its flagship journal, the ILR Review. Litwin has published a mix of empirical and conceptual studies intersecting the areas of labor relations and technological change, in both industrial relations and medical journals. Litwin joined Cornell’s ILR faculty in the fall of 2014 after serving as a standing faculty member at Johns Hopkins University, where he held appointments in the Carey Business School and the School of Medicine. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-6" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-6">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 119; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Ben Rissing</p>
                        <p class="mb-2 text-left font-semibold ">Associate Professor </p>
                        <hr class="mt-3 mb-5 ">

                        <p>Ben A. Rissing studies employment-relevant decisions in organizations, including businesses, government, and academic institutions. He earned his doctorate in management from the Massachusetts Institute of Technology (MIT) Sloan School of Management; master’s degrees in management science and engineering management from MIT and Duke University, respectively; and a bachelor’s degree in mechanical engineering from the University of Virginia. Before joining Cornell University, Ben was the Hugh W. Pearson Visiting Professor of Commerce, Organizations and Entrepreneurship at Brown University. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-9" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-9">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 118; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Lisa Csencsits</p>
                        <p class="mb-2 text-left font-semibold ">Associate Director</p>
                        <hr class="mt-3 mb-5 ">

                        <p>Lisa Csencsits, Associate Director for Executive Education at Cornell University, ILR, is responsible for the design, development and delivery of customized learning and capability development programs. Lisa holds a B.A. In Psychology from Adelphi University and a M.A. in Industrial/Organizational Psychology from Hofstra University. Ms. Csencsits, as an Organizational Development Practitioner, leverages her experience working with large privately and publicly held companies, as well as her research and educational expertise to provide programs grounded in theory with practical solutions to enhance participant learning and professional development. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-7" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-8">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 116; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Alwin Smith</p>
                        <p class="mb-2 text-left font-semibold ">Adjunct Instructor</p>
                        <hr class="mt-3 mb-5 ">

                        <p> Alvin specializes in Executive Development and Diversity Management. He is an Instructor at Cornell University, teaching Diversity & Inclusion. Alvin is a “storyteller” who provides a compelling first-hand account of the lessons he learned, and the experiences he endured during his career. He has a Bachelor of Science in Management from NYU Stern and a Marketing Management degree from Atlanta University Graduate School. He is also an American Management Association certified trainer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-8" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white shadow-sm">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="flex px-6 py-10 gap-6">
                    <div class="w-1/3">
                        <figure class="aspect-square size-full overflow-hidden select-none">
                            <?php $image_id = 124; ?>
                            <?php echo wp_get_attachment_image($image_id, "large", false, array(
                                "loading" => "lazy",
                                "class" => "image-cover group-hover:scale-110 transition",
                            )); ?>
                            <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                        </figure>
                    </div>
                    <div class="flex-1">
                        <p class="text-primary md:text-xl text-lg font-semibold mb-0">Rebecca Kehoe</p>
                        <p class="mb-2 text-left font-semibold ">Associate Prof, Human Resource Studies</p>
                        <hr class="mt-3 mb-5 ">

                        <p>Rebecca Kehoe is an Associate Professor of Human Resource Studies in the ILR School at Cornell University. She conducts research in the area of strategic human resource management, with an interest in better understanding how and when organizations achieve human resource-based competitive advantage. She holds a Ph.D., M.S., and B.S. from Cornell University. Prior to joining the faculty of the ILR School, she served on the faculty of Rutgers University. She has taught courses in Human Resource Management and Business Strategy. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<? get_footer(); ?>

<div class="mb-18">

</div>