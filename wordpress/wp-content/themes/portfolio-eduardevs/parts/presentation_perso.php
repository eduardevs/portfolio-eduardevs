<?php $image_url = get_template_directory_uri() . '/assets/images/myself.png'; ?>
<div id="particles-js" style="height: 665px; width: 100%;" class="position-absolute">
</div>
<section class="banner-presentation">
    <div class="container">
        <div class="row">
            <!-- Left Column with two blocks -->
            <div class="col-md-6">
                <!-- Upper Block -->
                <div class="row mb-4">
                    <div class="col-12 dynamic-container offset-2">
                        <h1 class="display-1">Eduardo Pina</h1>
                        <h1 class="display-2">Je suis</h1>
                    </div>
                </div>
                <!-- Lower Block -->
                <div class="row">
                    <div class="col-12 offset-2">
                        <h1 id="typeDynamicArea">
                            <span class="display-3" style="font-size:2.7rem; font-weight:700;"> </span>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- Right Column covering the height of the two blocks on the left -->
            <div class="col-md-6 d-flex align-items-center" style="height:500px;">
                <img src="<?php echo $image_url; ?>" alt="myself" class="img-fluid profile-image z-2">
            </div>
        </div>
    </div>
</section>