<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>IMS Website</title>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
</head>


<body>

  <?php get_header(); ?>

  <section class="hero">
    <div class="hero-left">
      <h1>
        Intelligent <br />
        <span class="marketing-line">
          <img src="<?php echo get_template_directory_uri(); ?>/images/content-logo.jpg" alt="Icon" class="logo-icon" />
          <span class="highlight">Marketing</span>
        </span>
        <br />
        Solutions
      </h1>
    </div>
    <div class="hero-right">
      <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition.jpg" alt="Exhibition" class="hero-img" />
      <p>
        Your Trusted Partner for Events, Exhibitions & Brand Experiences <br>
        We craft unforgettable moments and immersive experiences that captivate audiences and
        amplify your brand
      </p>
      <!-- <a href="#" class="btn">
        Let’s Create Together <span class="arrow">↗</span>
      </a> -->
      <a href="/contact-us" class="btn-cta" role="button">
        <span class="btn-text">Let’s Create Together</span>
        <span class="btn-icon">↗</span>
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
      <!-- <a href="#" class="btn">
        Read More <span class="arrow">↗</span>
      </a> -->
      <a href="/about-us" class="btn-cta" role="button">
        <span class="btn-text">Read More</span>
        <span class="btn-icon">↗</span>
      </a>
    </div>
    <div class="about-right">
      <p>
        Since 2008, IMS UAE has been bringing brands to life through unforgettable events and
        activations across the UAE. With a perfect blend of precision and creativity, we craft
        experiences that truly connect with audiences. Every detail is thoughtfully executed to
        transform concepts into lasting impressions
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
          <strong>500</strong>
          <p>Projects Completed</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Highlight Message Section -->
  <section class="highlight-message">
    <h2>
      Make <img src="<?php echo get_template_directory_uri(); ?>/images/content-logo.jpg" alt="icon" class="inline-icon" />
      your brand <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="icon" class="inline-icon" />
      <span class="highlight">unforgettable</span><br />
      by curating immersive<br>
      <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition-round.png" alt="icon" class="inline-icon" />
      <span class="highlight">experiences</span> through our<br />
      event & exhibition
      <img src="<?php echo get_template_directory_uri(); ?>/images/officers.png" alt="icon" class="inline-icon" />
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/manstepping.png" alt="TechX 2024 – Product Launch Pavilion" />
        <h3>TechX 2024 – Product Launch Pavilion</h3>
        <a href="/events">View More ↗</a>
      </div>
      <div class="event-card">
        <!-- <span class="dot-center"></span> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/flower.png" alt="Global Sustainability Forum – Experience Zone" />
        <h3>Global Sustainability Forum – Experience Zone</h3>
        <a href="/events">View More ↗</a>
      </div>
      <div class="event-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rooftop.png" alt="Luxury Living Expo – Exhibition Booth" />
        <h3>Luxury Living Expo – Exhibition Booth</h3>
        <a href="/events">View More ↗</a>
      </div>
    </div>
  </section>

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
        <!-- <a href="/events" class="btn-view-more">
          View More ↗
        </a> -->
        <a href="/events" class="btn-cta" role="button">
          <span class="btn-text">View More</span>
          <span class="btn-icon">↗</span>
        </a>
        <img src="<?php echo get_template_directory_uri(); ?>/images/event-latest-6.jpg" alt="Gallery Image" class="solutions-image" />
      </div>

      <div class="solutions-right">
        <p class="solutions-description">
          From concept to completion, we offer tailored event and exhibition services designed to meet your goals. Our
          end-to-end solutions ensure impactful, seamless execution every time.
        </p>

        <div class="solutions-block">
          <h3><a href="/events">Events</a></h3>
          <p>We go beyond event planning—we design moments that connect, inspire, and stay with
            your audience long after the lights go out</p>
        </div>

        <div class="solutions-block with-icon">
          <h3><a href="/exhibitions">Exhibitions</a></h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
            galley.</p>
          <!-- <div class="red-arrow-icon">↗</div> -->
        </div>

        <div class="solutions-block">
          <h3>Upcoming Events</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a
            galley.</p>
        </div>

        <div class="solutions-block">
          <h3><a href="/rental-sales">Rental and Sales</a></h3>
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/car-rental.jpg" alt="Car Rental" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/real-estate.jpg" alt="Real Estate" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/envato.jpg" alt="Envato" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/green-world.jpg" alt="Green World Technology" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/mountain.jpg" alt="Mountaintrip" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/law.jpg" alt="Law Bureau" />
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
      <!-- Card 1 -->
      <div class="testimonial-card">
        <p>
          We’ve worked with many vendors, but Root360 stood out with their creative approach and smooth
          coordination. Our trade show booth turned heads all weekend.
        </p>
        <div class="testimonial-user">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Anita Deshmukh" />
          <div class="testimonial-user-info">
            <div class="stars">★★★★★</div>
            <strong>Anita Deshmukh</strong>
            <p>Marketing Head</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="testimonial-card">
        <p>
          Their attention to detail, timely delivery, and collaborative spirit made our corporate
          showcase a huge success. Highly recommend them for any type of event!
        </p>
        <div class="testimonial-user">
          <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Mohammed Al Zayani" />
          <div class="testimonial-user-info">
            <div class="stars">★★★★★</div>
            <strong>Mohammed Al Zayani</strong>
            <p>Director of Sales</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="testimonial-card">
        <p>
          From concept to execution, everything was seamless. Our brand launch event looked incredible
          and was managed with absolute professionalism.
        </p>
        <div class="testimonial-user">
          <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition-round.png" alt="Lisa Dsouza" />
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
      <!-- Blog Card 1 -->
      <div class="blog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/event-table.png" alt="Event Room" />
        <h3>How to Make Your Event More Engaging and Memorable</h3>
        <!-- <a href="/blog" class="read-more">Read More <span>↗</span></a> -->
         <a href="/blog" class="btn-cta" role="button">
          <span class="btn-text">Read More</span>
          <span class="btn-icon">↗</span>
        </a>
      </div>

      <!-- Blog Card 2 -->
      <div class="blog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/crowded-complex.png" alt="Trade Show" />
        <h3>Simple Ways to Get Better Results from Trade Shows</h3>
        <!-- <a href="/blog" class="read-more">Read More <span>↗</span></a> -->
         <a href="/blog" class="btn-cta" role="button">
          <span class="btn-text">Read More</span>
          <span class="btn-icon">↗</span>
        </a>
      </div>

      <!-- Blog Card 3 -->
      <div class="blog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/officers.png" alt="Booth Design" />
        <h3>Top Booth Design Ideas to Attract More Visitors in 2025</h3>
        <!-- <a href="#" class="read-more">Read More <span>↗</span></a> -->
          <a href="/blog" class="btn-cta" role="button">
          <span class="btn-text">Read More</span>
          <span class="btn-icon">↗</span>
        </a>
      </div>
    </div>
  </section>



  <!-- Footer include -->
  <?php get_footer(); ?>
  <!-- JS loader -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/include.js"></script>

</body>

</html>