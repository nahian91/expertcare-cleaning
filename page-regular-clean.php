<?php
/**
 * Template Name: Regular Cleaning Service
 * Slug: services/regular-clean
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
                <span class="ifs-excl-current">Regular Cleaning</span>
            </nav>
            <h1>Regular Domestic <span>Housekeeping</span></h1>
            <p>Consistent weekly or bi-weekly maintenance tailored precisely to your household routine across London & Essex.</p>
        </div>
    </section>

    <!-- SINGLE SERVICE DEEP DIVE -->
    <main class="ifs-excl-single-main-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-single-grid">
            <div class="ifs-excl-single-content">
                <div class="ifs-excl-single-overview">
                    <h2>Consistent Care From Your Trusted Local Cleaner</h2>
                    <p>Maintaining a spotless home shouldn't be a second job. Our regular housekeeping service assigns a vetted, background-checked professional to your property weekly or fortnightly to keep surfaces gleaming, floors immaculate, and laundry organized.</p>
                </div>

                <div class="ifs-excl-snapshot-grid">
                    <div class="ifs-excl-snapshot-card">
                        <strong>£18 / hr</strong>
                        <span>Transparent Rate</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>Same Cleaner</strong>
                        <span>Every Visit</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>£5M</strong>
                        <span>Fully Insured Cover</span>
                    </div>
                </div>

                <div class="ifs-excl-checklist-section">
                    <h3>Regular Cleaning Checklist</h3>
                    <div class="ifs-excl-room-card">
                        <h4>
                            <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                            All Living Areas & Bedrooms
                        </h4>
                        <ul class="ifs-excl-task-list">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Dusting furniture, shelves & frames</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> HEPA vacuuming carpets & rugs</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Mopping hard floors and baseboards</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Emptying household bins & waste</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="ifs-excl-single-sidebar">
                <div class="ifs-excl-sidebar-booking-card">
                    <h3>Book Regular Clean</h3>
                    <p>Secure your preferred weekly or fortnightly time slot.</p>
                    <div class="ifs-excl-price-banner">
                        <span>Hourly Rate:</span>
                        <strong>£18.00 / hr</strong>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/quote/' ) ); ?>" class="ifs-excl-btn-primary" style="width: 100%; justify-content: center;">
                        Configure & Book Online →
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>