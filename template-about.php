<?php
/**
 * Template Name: About Us Page
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
            <h1>Built on Integrity, <span>Pristine Standards</span></h1>
            <p>Providing professional, fully-vetted domestic, tenancy, and corporate cleaning solutions throughout London and Essex.</p>
        </div>
    </section>

    <!-- STORY & FOUNDATION SECTION -->
    <section class="ifs-excl-story-section ifs-excl-reveal-section">
        <div class="ifs-excl-story-grid">
            <div class="ifs-excl-story-content">
                <span>Our Heritage</span>
                <h2>Clean Spaces. Better Places.</h2>
                <p>Founded on the belief that a well-cared-for environment creates peace of mind, Expertcare Cleaning has grown from a local domestic housekeeping provider to one of London & Essex's most trusted professional cleaning contractors.</p>
                <p>Whether servicing luxury private residences in Kensington, commercial offices in the City, or fast Airbnb changeovers across Docklands, our approach remains unchanged: thorough background vetting, eco-friendly non-toxic supplies, and reliable punctuality backed by an unconditional satisfaction guarantee.</p>
                
                <div style="display: flex; gap: 20px; margin-top: 30px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/quote' ) ); ?>" class="ifs-excl-btn-primary">Request an Estimate</a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ifs-excl-btn-primary" style="background: var(--ifs-excl-secondary);">Contact Dispatch</a>
                </div>
            </div>

            <div class="ifs-excl-story-img-wrap">
                <img class="ifs-excl-story-main-img" src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=800&q=80" alt="Spotless lounge interior">
                <div class="ifs-excl-story-badge">
                    <strong>20,000+</strong>
                    <span>Spaces Sanitised in London & Essex</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES & METHODOLOGY -->
    <section class="ifs-excl-values-section ifs-excl-reveal-section">
        <div class="ifs-excl-section-title">
            <span>Our Guiding Principles</span>
            <h2>Why Our Standards Never Slip</h2>
        </div>

        <div class="ifs-excl-values-grid">
            <div class="ifs-excl-value-card">
                <div class="ifs-excl-value-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                </div>
                <h3>DBS Verified Professionals</h3>
                <p>We believe trust is earned at the front door. Every operative undergoes full identity validation, address cross-checks, and enhanced criminal record disclosures before entering your property.</p>
            </div>

            <div class="ifs-excl-value-card">
                <div class="ifs-excl-value-icon">
                    <svg viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.5.3 4.41 0 8-3.59 8-8 0-.49-.05-.98-.14-1.46L17 8z"/></svg>
                </div>
                <h3>100% Eco-Safe Formulas</h3>
                <p>Clean spaces shouldn't compromise health. Our equipment and cleaning products are biodegradable, cruelty-free, and safe for young children and household pets, leaving zero harsh chemical odours.</p>
            </div>

            <div class="ifs-excl-value-card">
                <div class="ifs-excl-value-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <h3>100% Pass Guarantee</h3>
                <p>If you or your letting agent are not completely satisfied with any area covered in your agreed task list, notify our dispatch desk within 24–48 hours and we will re-clean it free of charge.</p>
            </div>
        </div>
    </section>

    <!-- METRICS COUNTER -->
    <div class="ifs-excl-counter-section">
        <div class="ifs-excl-counter-grid">
            <div class="ifs-excl-counter-box">
                <div class="ifs-excl-counter-icon-circle">
                    <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg>
                </div>
                <h2>20,000+</h2>
                <p>Properties Cleaned</p>
            </div>
            <div class="ifs-excl-counter-box">
                <div class="ifs-excl-counter-icon-circle">
                    <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                </div>
                <h2>100%</h2>
                <p>Checked & Insured</p>
            </div>
            <div class="ifs-excl-counter-box">
                <div class="ifs-excl-counter-icon-circle">
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </div>
                <h2>4.9 / 5</h2>
                <p>Client Satisfaction</p>
            </div>
            <div class="ifs-excl-counter-box">
                <div class="ifs-excl-counter-icon-circle">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                </div>
                <h2>£5M</h2>
                <p>Insurance Cover</p>
            </div>
        </div>
    </div>

    <!-- 4-STEP RECRUITMENT PROTOCOL -->
    <section class="ifs-excl-protocol-section ifs-excl-reveal-section">
        <div class="ifs-excl-section-title">
            <span>Rigorous Onboarding</span>
            <h2>Our 4-Stage Cleaner Verification Protocol</h2>
        </div>

        <div class="ifs-excl-protocol-grid">
            <div class="ifs-excl-protocol-card">
                <div class="ifs-excl-protocol-num">Step 01</div>
                <h4>Right-to-Work Check</h4>
                <p>Comprehensive identity, document, and home address verification compliant with UK legal employment guidelines.</p>
            </div>
            <div class="ifs-excl-protocol-card">
                <div class="ifs-excl-protocol-num">Step 02</div>
                <h4>Enhanced DBS Check</h4>
                <p>Full criminal background checks and reference confirmations from previous cleaning and hospitality employers.</p>
            </div>
            <div class="ifs-excl-protocol-card">
                <div class="ifs-excl-protocol-num">Step 03</div>
                <h4>Practical Assessment</h4>
                <p>Hands-on practical assessments covering descaling, appliance degreasing, cross-contamination prevention, and floor care.</p>
            </div>
            <div class="ifs-excl-protocol-card">
                <div class="ifs-excl-protocol-num">Step 04</div>
                <h4>Insurance & Oversight</h4>
                <p>Immediate onboarding onto our £5M public liability insurance with ongoing quality audits and spot inspections.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>