<?php
/**
 * Template Name: Contact Us Page
 *
 * @package Expertcare_Cleaning
 */

get_header(); ?>

    <!-- BREADCRUMB HERO -->
    <section class="ifs-excl-breadcrumb-hero">
        <div class="ifs-excl-breadcrumb-container">
            <nav class="ifs-excl-breadcrumb-nav" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <svg viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span class="ifs-excl-current"><?php the_title(); ?></span>
            </nav>
            <h1>Get in Touch with <span>Expertcare</span></h1>
            <p>Direct communication, immediate dispatch availability, and tailored quotes for London & Essex properties.</p>
        </div>
    </section>

    <!-- QUICK CHANNELS -->
    <section class="ifs-excl-channels-section">
        <div class="ifs-excl-channels-container">
            <a href="tel:07405111878" class="ifs-excl-channel-card">
                <div class="ifs-excl-channel-icon">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                </div>
                <span class="ifs-excl-channel-label">Telephone</span>
                <h3>07405 111878</h3>
                <p>7 Days: 7:00 AM – 9:00 PM. Instant customer help.</p>
            </a>

            <a href="https://wa.me/447405111878" target="_blank" class="ifs-excl-channel-card ifs-excl-wa-card" rel="noopener noreferrer">
                <div class="ifs-excl-channel-icon">
                    <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </div>
                <span class="ifs-excl-channel-label">Instant Chat</span>
                <h3>WhatsApp Direct</h3>
                <p>Send photos, keys info, or floorplans immediately.</p>
            </a>

            <a href="mailto:contact@expertcarecleaning.co.uk" class="ifs-excl-channel-card">
                <div class="ifs-excl-channel-icon">
                    <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                </div>
                <span class="ifs-excl-channel-label">Email Enquiries</span>
                <h3>Email Dispatch</h3>
                <p>contact@expertcarecleaning.co.uk. Rapid replies.</p>
            </a>

            <div class="ifs-excl-channel-card">
                <div class="ifs-excl-channel-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </div>
                <span class="ifs-excl-channel-label">UK Operations</span>
                <h3>London & Essex</h3>
                <p>Mobile squads serving all 32 boroughs & Essex.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM & LIVE MAP -->
    <main class="ifs-excl-contact-main-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-contact-grid">
            <div class="ifs-excl-contact-form-card">
                <div class="ifs-excl-form-title">
                    <span>Send An Enquiry</span>
                    <h2>How can we assist your home or office?</h2>
                </div>

                <form id="ifs-excl-contactForm" onsubmit="handleContactSubmit(event)">
                    <div class="ifs-excl-form-row">
                        <div class="ifs-excl-form-item">
                            <label for="contactName">Your Name *</label>
                            <input type="text" id="contactName" placeholder="e.g. Rachel Adams" required>
                        </div>
                        <div class="ifs-excl-form-item">
                            <label for="contactEmail">Email Address *</label>
                            <input type="email" id="contactEmail" placeholder="e.g. rachel@example.co.uk" required>
                        </div>
                    </div>

                    <div class="ifs-excl-form-row">
                        <div class="ifs-excl-form-item">
                            <label for="contactPhone">Phone / WhatsApp *</label>
                            <input type="tel" id="contactPhone" placeholder="e.g. 07405 111878" required>
                        </div>
                        <div class="ifs-excl-form-item">
                            <label for="contactPostcode">Property Postcode *</label>
                            <input type="text" id="contactPostcode" placeholder="e.g. N1 7AA or RM1 2BB" required>
                        </div>
                    </div>

                    <div class="ifs-excl-form-item">
                        <label for="contactMessage">Message / Specific Requirements</label>
                        <textarea id="contactMessage" rows="4" placeholder="Let us know your preferred dates, key access details, property size, or any special requests..."></textarea>
                    </div>

                    <div style="display: flex; gap: 14px; align-items: center; flex-wrap: wrap;">
                        <button type="submit" class="ifs-excl-btn-primary">Send Enquiry</button>
                        <button type="button" class="ifs-excl-btn-primary" style="background: var(--ifs-excl-whatsapp);" onclick="sendViaWhatsApp()">Send via WhatsApp</button>
                    </div>
                </form>
            </div>

            <!-- Sidebar Info & Map -->
            <div class="ifs-excl-contact-sidebar">
                <div class="ifs-excl-sidebar-card">
                    <h3>Service Hours & Availability</h3>
                    <p>Cleaners are operational 7 days a week across London and Essex, including Saturday & Sunday morning slots.</p>

                    <div style="margin-bottom: 22px;">
                        <div class="ifs-excl-hours-row">
                            <span>Monday – Sunday:</span>
                            <span>7:00 AM – 9:00 PM</span>
                        </div>
                        <div class="ifs-excl-hours-row">
                            <span>Emergency Re-cleans:</span>
                            <span style="color: #10B981;">Dispatched in 24h</span>
                        </div>
                    </div>

                    <a href="tel:07405111878" class="ifs-excl-btn-primary" style="width: 100%; justify-content: center;">
                        Call Desk: 07405 111878
                    </a>
                </div>

                <div class="ifs-excl-map-box">
                    <iframe 
                        title="Expertcare Cleaning London & Essex Coverage Area"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47340058448!2d-0.2416815344319695!3d51.5285582417743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2suk!4v1680000000000!5m2!1sen!2suk" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>