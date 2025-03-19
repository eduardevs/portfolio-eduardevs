<style>
    .row {
        display: flex;
    }

    .wpforms-container input.wpforms-field-medium,
    .wpforms-container select.wpforms-field-medium,
    .wpforms-container .wpforms-field-row.wpforms-field-medium,
    .wp-core-ui div.wpforms-container input.wpforms-field-medium,
    .wp-core-ui div.wpforms-container select.wpforms-field-medium,
    .wp-core-ui div.wpforms-container .wpforms-field-row.wpforms-field-medium {
        max-width: 100% !important;
    }

    div.wpforms-container-full input[type=submit]:not(:hover):not(:active),
    div.wpforms-container-full button[type=submit]:not(:hover):not(:active),
    div.wpforms-container-full .wpforms-page-button:not(:hover):not(:active),
    .wp-core-ui div.wpforms-container-full input[type=submit]:not(:hover):not(:active),
    .wp-core-ui div.wpforms-container-full button[type=submit]:not(:hover):not(:active),
    .wp-core-ui div.wpforms-container-full .wpforms-page-button:not(:hover):not(:active) {
        background-color: #bf3b43 !important;
    }

    .wpforms-submit-container {
        text-align: center;
    }
</style>
<section id="contact" class="contact section bg-white py-5">

    <div class="container section-title w-50" data-aos="fade-up">
        <h3>Contact</h3>
        <p></p>

        <?php echo do_shortcode('[wpforms id="54"]') ?>
    </div>


    <!-- Section Title -->

    <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-5">

                <div class="col-lg-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email<br></h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            <div class="row gy-4">

                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                </div>

            </div>
        </form>

    </div> -->

</section><!-- /Contact Section -->