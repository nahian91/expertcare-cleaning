<?php
/**
 * Template Name: Reviews & Testimonials Page
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
            <h1>What UK Property Owners <span>Say About Us</span></h1>
            <p>Read real, verified experiences from residential homeowners, tenants, letting agents, and commercial facility managers across London & Essex.</p>
        </div>
    </section>

    <!-- REVIEWS STATS SCORECARD -->
    <section class="ifs-excl-reviews-stats-section">
        <div class="ifs-excl-reviews-stats-container">
            <div class="ifs-excl-score-overall">
                <h2>4.9</h2>
                <div class="ifs-excl-stars">
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </div>
                <p>Based on 2,400+ Verified Client Reviews</p>
            </div>

            <div class="ifs-excl-score-bars">
                <div class="ifs-excl-bar-row">
                    <span>5 Stars</span>
                    <div class="ifs-excl-bar-track"><div class="ifs-excl-bar-fill" style="width: 92%;"></div></div>
                    <span>92%</span>
                </div>
                <div class="ifs-excl-bar-row">
                    <span>4 Stars</span>
                    <div class="ifs-excl-bar-track"><div class="ifs-excl-bar-fill" style="width: 7%;"></div></div>
                    <span>7%</span>
                </div>
                <div class="ifs-excl-bar-row">
                    <span>3 Stars</span>
                    <div class="ifs-excl-bar-track"><div class="ifs-excl-bar-fill" style="width: 1%;"></div></div>
                    <span>1%</span>
                </div>
                <div class="ifs-excl-bar-row">
                    <span>2 Stars</span>
                    <div class="ifs-excl-bar-track"><div class="ifs-excl-bar-fill" style="width: 0%;"></div></div>
                    <span>0%</span>
                </div>
            </div>

            <div class="ifs-excl-stats-cta">
                <h4>Experience the Standard</h4>
                <p>Book online in under 2 minutes. Free re-clean guarantee backing every service.</p>
                <a href="<?php echo esc_url( home_url( '/quote/' ) ); ?>" class="ifs-excl-btn-primary" style="padding: 10px 22px; font-size: 13.5px;">Book a Clean</a>
            </div>
        </div>
    </section>

    <!-- REVIEWS GRID -->
    <main class="ifs-excl-reviews-grid-section ifs-excl-reveal-section">
        <div class="ifs-excl-reviews-grid">

            <!-- Review 1: Domestic -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Regular Domestic</span>
                    </div>
                    <p>"An exceptional experience! Our cleaner arrives on time every Tuesday morning and leaves our Chelsea apartment impeccably spotless. Honest, punctual, and very meticulous with hardwood floors."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">CE</div>
                    <div>
                        <h5>Charlotte Evans</h5>
                        <span>Chelsea, London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 2: Tenancy -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">End of Tenancy</span>
                    </div>
                    <p>"Used their move-out package in Essex. The landlord signed off our full £1,800 deposit with zero deductions. The oven was transformed back to brand new condition, and they sent photos right after."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">LG</div>
                    <div>
                        <h5>Liam Gallagher</h5>
                        <span>Romford, Essex</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 3: Deep Clean -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Deep Clean</span>
                    </div>
                    <p>"Booked a full spring deep clean following house renovations. Dust was eliminated from every surface, skirting, and light fixture. The bathroom tile descaling was unbelievable. Worth every penny."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">SP</div>
                    <div>
                        <h5>Sophia Patel</h5>
                        <span>Islington, London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 4: Airbnb Turnover -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Airbnb Turnover</span>
                    </div>
                    <p>"As an Airbnb Superhost managing 3 apartments near Canary Wharf, tight turnarounds between 10am and 3pm are critical. Expertcare has never missed a window, and guest cleanliness scores have remained a solid 5.0."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">MK</div>
                    <div>
                        <h5>Marcus King</h5>
                        <span>Canary Wharf, London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Host</div>
                    </div>
                </div>
            </article>

            <!-- Review 5: Commercial Office -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Commercial Office</span>
                    </div>
                    <p>"We contracted Expertcare for our financial consultancy in the City. Transparent monthly invoicing, eco-safe cleaning solutions, and spotless meeting rooms every single morning before our team arrives."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">JH</div>
                    <div>
                        <h5>Jonathan Hughes</h5>
                        <span>City of London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Business</div>
                    </div>
                </div>
            </article>

            <!-- Review 6: Tenancy Guarantee -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">End of Tenancy</span>
                    </div>
                    <p>"The letting agency was notoriously strict about limescale and internal window tracks. The team arrived on time, worked relentlessly, and the official checkout report passed with flying colours."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">ET</div>
                    <div>
                        <h5>Emily Taylor</h5>
                        <span>Brentwood, Essex</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 7: Oven Cleaning -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Oven Valet</span>
                    </div>
                    <p>"I honestly thought our double oven would need replacement due to burnt-on grease. The specialist disassembled the door glass and used a dip tank. It looks as spotless as the day it was installed."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">RA</div>
                    <div>
                        <h5>Robert Atkinson</h5>
                        <span>Stratford, London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 8: Domestic Weekly -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Regular Domestic</span>
                    </div>
                    <p>"Having the same cleaner visit every Friday gives me absolute peace of mind. Key holding has been completely secure, and coming home after a long week to a pristine house is priceless."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">NW</div>
                    <div>
                        <h5>Nicola Walker</h5>
                        <span>Hampstead, London</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

            <!-- Review 9: Move In Clean -->
            <article class="ifs-excl-review-card">
                <div>
                    <div class="ifs-excl-review-header">
                        <div class="ifs-excl-rating-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <span class="ifs-excl-review-badge">Deep Clean</span>
                    </div>
                    <p>"Booked a pre-move-in clean for our new home in Chelmsford. The team sanitised every kitchen cupboard inside and out, wiped every door frame, and left the bathrooms gleaming. Outstanding work."</p>
                </div>
                <div class="ifs-excl-client-meta">
                    <div class="ifs-excl-avatar-circle">MS</div>
                    <div>
                        <h5>Mark Stephens</h5>
                        <span>Chelmsford, Essex</span>
                        <div class="ifs-excl-verified-badge"><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Verified Client</div>
                    </div>
                </div>
            </article>

        </div>
    </main>

    <!-- CTA BANNER -->
    <section class="ifs-excl-cta-banner">
        <div class="ifs-excl-cta-banner-content">
            <h2>Join Thousands of Satisfied Homeowners</h2>
            <p>Schedule your professional clean in under 2 minutes. Transparent rates and weekend availability.</p>
            <a href="<?php echo esc_url( home_url( '/quote/' ) ); ?>" class="ifs-excl-btn-white">
                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                Get an Instant Quote Now
            </a>
        </div>
    </section>

<?php get_footer(); ?>