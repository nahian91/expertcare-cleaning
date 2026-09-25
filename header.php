<?php
/**
 * Header template for Expertcare Cleaning
 *
 * @package Expertcare_Cleaning
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/447405111878" target="_blank" class="ifs-excl-whatsapp-float" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        Chat on WhatsApp
    </a>

    <!-- Top Announcement Strip -->
    <div class="ifs-excl-top-announcement">
        <div>
            <span>
                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Serving London & Essex
            </span>
            <span>
                <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                7 Days a Week: 7:00 AM - 9:00 PM
            </span>
        </div>
        <div>
            <span>
                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                Freephone UK: 07405 111878
            </span>
        </div>
    </div>

    <!-- Sticky Header -->
    <header id="ifs-excl-siteHeader">
        <div class="ifs-excl-navbar">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ifs-excl-logo">
                <div class="ifs-excl-logo-img-wrap">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    <?php endif; ?>
                </div>
            </a>
            <ul class="ifs-excl-nav-links" id="ifs-excl-navLinks">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'ifs-excl-active' : ''; ?>">Home</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="<?php echo is_page( 'about' ) ? 'ifs-excl-active' : ''; ?>">About Us</a></li>
    
    <li class="ifs-excl-has-dropdown" id="ifs-excl-dropdownToggle">
        <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="<?php echo is_page( 'services' ) ? 'ifs-excl-active' : ''; ?>">Services 
            <svg class="ifs-excl-dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
        </a>
        <div class="ifs-excl-dropdown">
            <a href="<?php echo esc_url( home_url( '/services/end-of-tenancy-clean/' ) ); ?>">End of Tenancy</a>
            <a href="<?php echo esc_url( home_url( '/services/regular-clean/' ) ); ?>">Regular Cleaning</a>
            <a href="<?php echo esc_url( home_url( '/services/deep-clean/' ) ); ?>">Deep Clean</a>
            <a href="<?php echo esc_url( home_url( '/services/commercial-cleaning/' ) ); ?>">Commercial Cleaning</a>
            <a href="<?php echo esc_url( home_url( '/services/airbnb-cleaning/' ) ); ?>">Airbnb Cleaning</a>
            <a href="<?php echo esc_url( home_url( '/services/oven-cleaning/' ) ); ?>">Oven Cleaning</a>
            <a href="<?php echo esc_url( home_url( '/services/inside-window-cleaning/' ) ); ?>">Inside Windows</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">All Services</a>
        </div>
    </li>

    <li><a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="<?php echo is_page( 'get-quote' ) ? 'ifs-excl-active' : ''; ?>">Get Quote</a></li>
    <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" class="<?php echo is_page( 'testimonials' ) ? 'ifs-excl-active' : ''; ?>">Testimonials</a></li>
    <li><a href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>" class="<?php echo is_page( 'faqs' ) ? 'ifs-excl-active' : ''; ?>">FAQ</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="<?php echo is_page( 'contact-us' ) ? 'ifs-excl-active' : ''; ?>">Contact Us</a></li>
</ul>
            <a href="#quote-section" class="ifs-excl-btn-primary">
                Book a Clean 
                <svg viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.42 12l-7.57-7.85-1.42 1.42L16.86 11H5v2z"/></svg>
            </a>
            <div class="ifs-excl-menu-toggle" id="ifs-excl-menuToggle">
                <svg viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
            </div>
        </div>
    </header>