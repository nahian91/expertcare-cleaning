<?php
/**
 * Footer template for Expertcare Cleaning
 *
 * @package Expertcare_Cleaning
 */
?>
    <!-- FOOTER -->
    <footer>
        <div class="ifs-excl-footer-grid">
            <div class="ifs-excl-footer-box">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ifs-excl-logo" style="color: var(--ifs-excl-white); margin-bottom: 15px; display: inline-flex; align-items: center; gap: 12px;">
                    <div class="ifs-excl-logo-img-wrap" style="border-color: var(--ifs-excl-accent);">
                        <?php if ( has_custom_logo() ) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        <?php endif; ?>
                    </div>
                </a>
                <p>Clean Spaces. Better Places. Providing elite domestic, commercial, and Airbnb cleaning solutions throughout London & Essex with absolute security standards.</p>
                
                <div class="ifs-excl-footer-qr-container">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://expertcarecleaning.co.uk" alt="Review and Visiting Card QR Code">
                    <a href="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=https://expertcarecleaning.co.uk" target="_blank" rel="noopener noreferrer">Download QR PDF / Card</a>
                </div>
            </div>
            
            <div class="ifs-excl-footer-box">
                <h4>Navigation</h4>
                <ul>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg> 
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg> 
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg> 
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/quote/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg> 
                            Get Quote
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg> 
                            Testimonials
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> 
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg> 
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/expertcarecleaning" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.5-10 10 0 5 3.66 9.13 8.44 9.88v-6.99h-2.54v-2.89h2.54v-2.2c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.89h-2.33v6.99c4.78-.75 8.44-4.88 8.44-9.88 0-5.5-4.5-10-10-10z"/></svg> 
                            Facebook Page
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ifs-excl-footer-box">
                <h4>Services</h4>
                <ul>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/end-of-tenancy-clean/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"/></svg> 
                            End of Tenancy
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/regular-clean/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg> 
                            Regular Cleaning
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/deep-clean/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M19.36 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.64-4.96z"/></svg> 
                            Deep Clean
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/commercial-cleaning/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg> 
                            Commercial Cleaning
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/airbnb-cleaning/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3z"/></svg> 
                            Airbnb Cleaning
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/oven-cleaning/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M18 6V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v2H2v16h20V6h-4zm-8-2h4v2h-4V4zm10 16H4V8h16v12z"/></svg> 
                            Oven Cleaning
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/inside-window-cleaning/' ) ); ?>">
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 8h-6V5h6v6zm-8-6v6H5V5h6zm-6 8h6v6H5v-6zm8 6v-6h6v6h-6z"/></svg> 
                            Inside Windows
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ifs-excl-footer-box">
                <h4>Head Office UK</h4>
                <div class="ifs-excl-footer-contact-info">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    07405 111878
                </div>
                <div class="ifs-excl-footer-contact-info">
                    <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    contact@expertcarecleaning.co.uk
                </div>
                <div class="ifs-excl-footer-contact-info">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    London & Essex, United Kingdom (Open Sat & Sun)
                </div>
            </div>
        </div>
        <div class="ifs-excl-footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Expertcare Cleaning Ltd. All rights reserved.</p>
            <p>Privacy Policy | Terms & Conditions</p>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>