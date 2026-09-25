<?php
/**
 * Template Name: Airbnb Cleaning Service
 * Slug: services/airbnb-cleaning
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
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
                <svg viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span class="ifs-excl-current">Airbnb Cleaning</span>
            </nav>
            <h1>Airbnb & Short-Term <span>Rental Turnovers</span></h1>
            <p>Fast, reliable changeover cleaning between 10:00 AM checkout and 3:00 PM check-in to secure your 5-star cleanliness ratings.</p>
        </div>
    </section>

    <!-- SINGLE SERVICE DEEP DIVE -->
    <main class="ifs-excl-single-main-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-single-grid">
            <div class="ifs-excl-single-content">
                <div class="ifs-excl-single-overview">
                    <h2>Protect Your Superhost Status Every Turnaround</h2>
                    <p>Cleanliness is the single most common factor influencing Airbnb reviews and Superhost eligibility. Our specialized holiday let team delivers hotel-standard turnarounds within your critical 5-hour window, ensuring your space is staged, stocked, and spotless before every guest arrives.</p>
                    <p>We provide instant WhatsApp photo verification upon completion, notify you immediately of any guest damages, and handle linen staging effortlessly.</p>
                </div>

                <div class="ifs-excl-snapshot-grid">
                    <div class="ifs-excl-snapshot-card">
                        <strong>From £85</strong>
                        <span>Fixed Turnover</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>10am – 3pm</strong>
                        <span>Guaranteed Window</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>WhatsApp</strong>
                        <span>Photo Checklists</span>
                    </div>
                </div>

                <div class="ifs-excl-checklist-section">
                    <h3>Airbnb Hospitality Checklist</h3>
                    
                    <div class="ifs-excl-room-card">
                        <h4>
                            <svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3z"/></svg>
                            Staging & Hospitality Presentation
                        </h4>
                        <ul class="ifs-excl-task-list">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Crisp hospital-corner bed staging & linen swap</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Restocking toiletries, coffee pods & welcome packs</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Inspection for forgotten guest personal items</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Immediate damage / smoking reporting with photos</li>
                        </ul>
                    </div>

                    <div class="ifs-excl-room-card">
                        <h4>
                            <svg viewBox="0 0 24 24"><path d="M18 6V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v2H2v16h20V6h-4zm-8-2h4v2h-4V4zm10 16H4V8h16v12z"/></svg>
                            Turnaround Sanitisation
                        </h4>
                        <ul class="ifs-excl-task-list">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Fridge clearance & interior wipe-down</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Hair-free bathroom inspection & chrome polish</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> HEPA vacuuming rugs, under sofas & floor wash</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Key lockbox reset & security door check</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="ifs-excl-single-sidebar">
                <div class="ifs-excl-sidebar-booking-card">
                    <h3>Book Turnover</h3>
                    <p>Automated turnover schedules available for multi-property hosts.</p>
                    <div class="ifs-excl-price-banner">
                        <span>Turnaround Rate:</span>
                        <strong>From £85.00</strong>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/quote/' ) ); ?>" class="ifs-excl-btn-primary" style="width: 100%; justify-content: center;">
                        Configure Turnover →
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>