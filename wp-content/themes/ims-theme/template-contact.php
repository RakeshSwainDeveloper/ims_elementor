<?php
/*
Template Name: Contact Us Page
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IMS Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

    <?php get_header(); ?>
    <?php if (isset($_GET['status']) && $_GET['status'] === 'success') : ?>
        <div class="submit-success-message">
            <p><i class="fa fa-check-circle"></i> Submitted successfully!</p>
        </div>
    <?php endif; ?>
    <!-- Hero Section -->
    <section class="contact-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Contact Banner" class="hero-img" />
        <div class="hero-overlay">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- Get In Touch Section -->

    <div class="section-heading">
        <span class="dot"></span>
        <span class="label">Get In Touch</span>
    </div>
    <hr />

    <section class="get-in-touch">
    
        <div class="container contact-wrapper">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2><span class="red-text">Let’s Do Something</span><br> Great Together</h2>
                <div class="info-item">
                    <i class="fa fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@imsuae.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa fa-phone"></i>
                    <div>
                        <h4>Phone</h4>
                        <p>+971 4 5281489(UAE)<br>+966 56 7610717 (KSA)<br>+973 32210441 (Bahrain)</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa fa-location-dot"></i>
                    <div>
                        <h4>Location</h4>
                        <p>A Saqr Business Tower,Sheikh Zayed Road
                            Dubai, UAE</p>
                    </div>
                </div>

                <div class="social-links">
                    <span>Follow Us:</span>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i> </a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                    <input type="hidden" name="action" value="contact_form">
                    <?php wp_nonce_field('submit_contact_form', 'contact_form_nonce'); ?>

                    <input type="text" name="name" placeholder="Name" required />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="text" name="phone" placeholder="Phone" />
                    <input type="text" name="subject" placeholder="Subject" />
                    <textarea name="message" placeholder="Message" rows="6"></textarea>
                    <!-- <button type="submit">Submit</button> -->
                    <button type="submit" class="custom-submit-btn">
                        Submit <span class="btn-icon">↗</span>
                    </button>

                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4347.987236977613!2d77.37394267628459!3d28.681671875638166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb004e43710f%3A0x66c17d0dc37fc889!2sRakesh%20Jena%20House!5e1!3m2!1sen!2sin!4v1754824295252!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>



    <!-- Footer include -->
    <?php get_footer(); ?>
    <!-- JS loader -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>