<?php get_header(); ?>

<main>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    // Static content fallback from your index.html
    ?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-left">
        <h1>
          Intelligent <br />
          <span class="marketing-line">
            <img src="<?php echo get_template_directory_uri(); ?>/images/content-logo.png" alt="Icon" class="logo-icon" />
            <span class="highlight">Marketing</span>
          </span>
          <br /> Solutions
        </h1>
      </div>
      <div class="hero-right">
        <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition.jpg" alt="Exhibition" class="hero-img" />
        <p>
          <strong>IMS</strong> connects, engages, and delivers with
          innovation, expertise, and unwavering customer commitment.
        </p>
        <a href="#" class="btn">
          Explore More <span class="arrow">↗</span>
        </a>
      </div>
    </section>

    <!-- Image Banner Section -->
    <section class="banner">
      <img src="<?php echo get_template_directory_uri(); ?>/images/waiters.jpg" alt="Team at work" class="banner-img" />
    </section>

    <div class="section-heading">
      <span class="dot"></span>
      <span class="label">About</span>
    </div>
    <hr />

    <!-- About Section -->
    <section class="about">
      <div class="about-left">
        <h2><span class="highlight">About Our</span> <br />Company</h2>
        <a href="#" class="btn">
          Read More <span class="arrow">↗</span>
        </a>
      </div>
      <div class="about-right">
        <p>
          IMS is a decade-strong company committed to delivering high-impact solutions through
          innovation, expertise, and a customer-first mindset. We connect, engage, and inspire by turning
          client needs into real-world results — before, during, and after every project. Our team’s deep
          industry knowledge is the foundation of our success.
        </p>
        <div class="stats">
          <div>
            <strong>215K+</strong>
            <p>Satisfied Clients</p>
          </div>
          <div>
            <strong>12Y+</strong>
            <p>Years of Experience</p>
          </div>
          <div>
            <strong>215K+</strong>
            <p>Projects Completed</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Highlight Message Section -->
    <section class="highlight-message">
      <h2>
        Make <img src="<?php echo get_template_directory_uri(); ?>/images/content-logo.png" alt="icon" class="inline-icon" />
        your brand <img src="<?php echo get_template_directory_uri(); ?>/images/event1.jpg" alt="icon" class="inline-icon" />
        <span class="highlight">unforgettable</span><br />
        by curating immersive
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-about2.jpg" alt="icon" class="inline-icon" />
        <span class="highlight">experiences</span> through our<br />
        event & exhibition
        <img src="<?php echo get_template_directory_uri(); ?>/images/event3.png" alt="icon" class="inline-icon" />
      </h2>
    </section>

    <!-- Events Section -->
    <div class="section-heading">
      <span class="dot"></span>
      <span class="label">Events</span>
    </div>
    <hr />

    <section class="events-section">
      <div class="events-header">
        <div class="events-heading">
          <h2>
            <span class="highlight">Crafted Experiences,</span><br />
            Lasting Impact
          </h2>
        </div>
        <div class="events-description">
          <p>
            We craft immersive event and exhibition experiences with precision and creativity — helping brands
            connect, engage, and leave a lasting impact through every stage of execution.
          </p>
        </div>
      </div>

      <div class="event-cards">
        <div class="event-card">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-1.jpg" alt="TechX 2024 – Product Launch Pavilion" />
          <h3>TechX 2024 – Product Launch Pavilion</h3>
          <a href="#">View More ↗</a>
        </div>
        <div class="event-card">
          <span class="dot-center"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-2.jpg" alt="Global Sustainability Forum – Experience Zone" />
          <h3>Global Sustainability Forum – Experience Zone</h3>
          <a href="#">View More ↗</a>
        </div>
        <div class="event-card">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-3.jpg" alt="Luxury Living Expo – Exhibition Booth" />
          <h3>Luxury Living Expo – Exhibition Booth</h3>
          <a href="#">View More ↗</a>
        </div>
      </div>
    </section>

    <!-- Services -->
    <div class="section-heading">
      <span class="dot"></span>
      <span class="label">Services</span>
    </div>
    <hr />
    <section class="solutions-section">
      <div class="solutions-container">
        <div class="solutions-left">
          <h2>
            <span class="highlight">Comprehensive Solutions</span><br />
            That Deliver
          </h2>
          <a href="#" class="btn-view-more">View More ↗</a>
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-6.jpg" alt="Gallery Image" class="solutions-image" />
        </div>

        <div class="solutions-right">
          <p class="solutions-description">
            From concept to completion, we offer tailored event and exhibition services designed to meet your goals. Our
            end-to-end solutions ensure impactful, seamless execution every time.
          </p>

          <div class="solutions-block">
            <h3>Events</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
              galley.</p>
          </div>

          <div class="solutions-block with-icon">
            <h3>Exhibitions</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
              galley.</p>
            <div class="red-arrow-icon">↗</div>
          </div>

          <div class="solutions-block">
            <h3>Upcoming Events</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
              galley.</p>
          </div>

          <div class="solutions-block">
            <h3>Rental and Sales</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
              galley.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <div class="section-heading">
      <span class="dot"></span>
      <span class="label">Partners</span>
    </div>
    <hr />

    <section class="partners">
      <div class="partners-container">
        <div class="partners-header">
          <div class="partners-title">
            <h2><span>Trusted by</span><br>Industry Leaders</h2>
          </div>
          <div class="partners-text">
            <p>
              We’re proud to collaborate with leading brands and organizations that share our passion for excellence.
              Together, we create impactful experiences that drive success.
            </p>
          </div>
        </div>
        <div class="partners-logos">
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/car-rental.png" alt="Car Rental" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/real-estate.png" alt="Real Estate" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/envato.png" alt="Envato" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/green-world.png" alt="Green World Technology" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/mountaintrip.png" alt="Mountaintrip" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/partners/law-bureau.png" alt="Law Bureau" />
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
      <div class="testimonials-header">
        <div class="testimonials-title">
          <h2><span>What Our Clients Say</span><br>About Us</h2>
        </div>
        <div class="testimonials-description">
          <p>
            Our clients are at the heart of everything we do. Hear how our event and exhibition solutions
            have helped brands create unforgettable experiences and lasting impressions.
          </p>
        </div>
      </div>

      <div class="testimonials-cards">
        <div class="testimonial-card">
          <p>
            We’ve worked with many vendors, but Root360 stood out with their creative approach and smooth
            coordination. Our trade show booth turned heads all weekend.
          </p>
          <div class="testimonial-user">
            <img src="<?php echo get_template_directory_uri(); ?>/images/event1.jpg" alt="Anita Deshmukh" />
            <div class="testimonial-user-info">
              <div class="stars">★★★★★</div>
              <strong>Anita Deshmukh</strong>
              <p>Marketing Head</p>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <p>
            Their attention to detail, timely delivery, and collaborative spirit made our corporate
            showcase a huge success. Highly recommend them for any type of event!
          </p>
          <div class="testimonial-user">
            <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-5.jpg" alt="Mohammed Al Zayani" />
            <div class="testimonial-user-info">
              <div class="stars">★★★★★</div>
              <strong>Mohammed Al Zayani</strong>
              <p>Director of Sales</p>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <p>
            From concept to execution, everything was seamless. Our brand launch event looked incredible
            and was managed with absolute professionalism.
          </p>
          <div class="testimonial-user">
            <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-3.jpg" alt="Lisa Dsouza" />
            <div class="testimonial-user-info">
              <div class="stars">★★★★★</div>
              <strong>Lisa Dsouza</strong>
              <p>Brand Manager</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <div class="section-heading">
      <span class="dot"></span>
      <span class="label">Blog</span>
    </div>
    <hr />

    <section class="blog-section">
      <div class="blog-header">
        <div class="blog-title">
          <h2><span>Shaping Memorable</span><br>Experiences</h2>
        </div>
        <div class="blog-description">
          <p>
            Stay ahead in the events and exhibition industry with expert tips, creative ideas, and
            proven strategies to elevate every brand experience.
          </p>
        </div>
      </div>

      <div class="blog-cards">
        <div class="blog-card">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event1.jpg" alt="Event Room" />
          <h3>How to Make Your Event More Engaging and Memorable</h3>
          <a href="#" class="read-more">Read More <span>↗</span></a>
        </div>

        <div class="blog-card">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-5.jpg" alt="Trade Show" />
          <h3>Simple Ways to Get Better Results from Trade Shows</h3>
          <a href="#" class="read-more">Read More <span>↗</span></a>
        </div>

        <div class="blog-card">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-3.jpg" alt="Booth Design" />
          <h3>Top Booth Design Ideas to Attract More Visitors in 2025</h3>
          <a href="#" class="read-more">Read More <span>↗</span></a>
        </div>
      </div>
    </section>

    <?php
endif;
?>
</main>

<?php get_footer(); ?>
