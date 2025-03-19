<style>
    /*--------------------------------------------------------------
# Stats Section
--------------------------------------------------------------*/
    :root {
        /* --alt-background-color: #076cdd80; */
        --alt-background-color: #8a6d7078;
    }

    .stats {
        --default-color: #ffffff;
        --background-color: var(--alt-background-color);
        position: relative;
        padding: 120px 0;
    }

    .stats img {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .stats:before {
        content: "";
        background: #8a6d7078;
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .stats .container {
        position: relative;
        z-index: 3;
    }

    .stats .stats-item {
        padding: 30px;
        width: 100%;
    }

    .stats .stats-item span {
        font-size: 48px;
        display: block;
        color: var(--default-color);
        font-weight: 700;
    }

    .stats .stats-item p {
        padding: 0;
        margin: 0;
        font-family: var(--heading-font);
        font-size: 16px;
        font-weight: 700;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }
</style>

<!-- Stats Section -->


<section id="stats" class="stats section">

    <img src="<?php echo get_template_directory_uri() . '/assets/img/stats-bg.jpg' ?>" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0"
                        class="purecounter">3.5</span>
                    <p>Ans d'experience</p>
                </div>
            </div><!-- End Stats Item -->

            <!-- <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <a href="https://github.com/eduardevs?tab=repositories" class="nav-link"><span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                        class="purecounter">3</span></a>
                    <p>Diplômes et Certifications </p>
                    <p>(dont 1 en cours)</p>
                </div>
            </div> -->
            <!-- End Stats Item -->


            <div class="col-lg-6 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0"
                        class="purecounter">1</span>
                    <p>Awards</p>
                    <p class="" style="font-weight:350; font-size:0.85rem;">2ème place - ESGI HACKATHON - Projet IOT</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- /Stats Section -->