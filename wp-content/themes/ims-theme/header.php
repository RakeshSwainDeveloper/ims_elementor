<?php
$current_url = $_SERVER['REQUEST_URI'];

// All pages that belong to Services dropdown
$service_pages = [
  '/events_page',
  '/exhibitions_page',
  '/branding_page',
  '/rental-sales',
  '/event-website-development',
  '/event-app-development',
  '/graphic-design-services',
  '/social-media',
  '/ai-powered-event-chatbot',
  '/registration-ticketing-software',
  '/audience-engagement-solutions',
  '/smart-networking-and-matchmaking-page',
  '/photo-gallery'
];

// Check if current URL starts with one of these
$services_active = '';
foreach ($service_pages as $page) {
  if (strpos($current_url, $page) !== false) {
    $services_active = ' active';
    break;
  }
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>IMS Website</title>
  <!-- <title><?php wp_title(); ?></title> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



  <!-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IMS Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
  </head> -->


  <header class="site-header">
    <div class="container header-container">
      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" aria-label="Toggle navigation">
        ☰
      </button>

      <!-- Logo -->
      <a href="/" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="IMS Intelligent Marketing Solutions Logo" />
      </a>

      <!-- Navigation -->
      <div class="nav-wrapper">
        <nav class="nav" aria-label="Primary Navigation">
          <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about-page">About Us</a></li>

            <!-- Services Dropdown -->
            <li class="dropdown">
              <a href="#">Services <span aria-hidden="true">▾</span></a>
              <ul class="dropdown-menu">
                <!-- Events -->
                <li class="has-submenu">
                  <a href="/events_page">Events</a>
                  <ul class="submenu">
                    <li><a href="/events_page#event-management">Event Management</a></li>
                    <li><a href="/events_page#corporate-events">Corporate Events</a></li>
                    <li><a href="/events_page#private-events">Private Events</a></li>
                    <li><a href="/events_page#sports-events">Sports Events</a></li>
                    <li><a href="/events_page#wedding-production">Wedding Production</a></li>
                    <li><a href="/events_page#theming-decor">Theming And Decor</a></li>
                    <li><a href="/events_page#mall-activations">Mall Activations</a></li>
                    <li><a href="/events_page#light-sound">Light And Sound</a></li>
                  </ul>
                </li>

                <!-- Exhibitions -->
                <li class="has-submenu">
                  <a href="/exhibitions_page">Exhibitions</a>
                  <ul class="submenu">
                    <li><a href="/exhibitions_page#exhibition-stands">Exhibition Stands</a></li>
                    <li><a href="/exhibitions_page#exhibition-event">Exhibition Event Services</a></li>
                    <li><a href="/exhibitions_page#art-galleries">Art Galleries & Shows</a></li>
                    <li><a href="/exhibitions_page#shell-scheme">Shell Scheme</a></li>
                    <li><a href="/exhibitions_page#custom-stands">Custom Stands</a></li>
                    <li><a href="/exhibitions_page#event-staffing">Event Staffing</a></li>
                  </ul>
                </li>

                <!-- Branding -->
                <li class="has-submenu">
                  <a href="/branding_page">Branding</a>
                  <ul class="submenu">
                    <li><a href="/branding_page#signage-bill">Signage / Bill Boards</a></li>
                    <li><a href="/branding_page#brand-activations">Brand Activations</a></li>
                    <li><a href="/branding_page#roadshows">Roadshows</a></li>
                    <li><a href="/branding_page#corporate-gifts">Corporate Gifts</a></li>
                  </ul>
                </li>

                <!-- Rental & Sales -->
                <li class="has-submenu">
                  <a href="/rental-sales">Rental & Sales</a>
                  <ul class="submenu">
                    <li><a href="/rental-sales#event-furniture">Event Furniture</a></li>
                    <li><a href="/rental-sales#av">AV</a></li>
                    <li><a href="/rental-sales#light-sound">Light And Sound</a></li>
                    <li><a href="/rental-sales#branding-display">Branding / Display Rentals</a></li>
                  </ul>
                </li>

                <!-- Single links -->
                <li><a href="/event-website-development">Event Website Development</a></li>
                <li><a href="/event-app-development">Event App Development</a></li>
                <li><a href="/graphic-design-services">Graphic Design Services</a></li>
                <li><a href="/social-media">Social Media Marketing</a></li>
                <li><a href="/ai-powered-event-chatbot">AI-Powered Event Chatbot</a></li>
                <li><a href="/registration-ticketing-software">Registration & Ticketing Software</a></li>
                <li><a href="/audience-engagement-solutions">Audience Engagement Solutions</a></li>
                <li><a href="/smart-networking-and-matchmaking-page">Smart Networking & Matchmaking</a></li>
                <li><a href="/photo-gallery">Photo Gallery & Cloud Sharing</a></li>
              </ul>
            </li>

            <li><a href="/blog-main-page">Blog</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
          </ul>
        </nav>
      </div>

      <!-- Call to Action -->
      <div class="cta-wrapper">
        <!-- <a href="/contact" class="btn-cta" role="button">
        Get In Touch <span aria-hidden="true">↗</span>
      </a> -->
        <a href="/contact" class="header-btn-cta" role="button">
          <span class="header-btn-text">Get In Touch</span>
          <span class="header-btn-icon"><i class="fas fa-arrow-right" style="display:inline-block; color:#7f1416; transform:rotate(315deg);"></i></span>
        </a>

      </div>
    </div>
  </header>