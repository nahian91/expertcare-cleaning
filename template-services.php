<?php
/**
 * Template Name: Services Page
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
            <h1>Professional Cleaning <span>Services</span></h1>
            <p>From routine domestic housekeeping to agency-inspected tenancy turnarounds, specialist oven valeting, and commercial workspaces across London & Essex.</p>
        </div>
    </section>

    <!-- TRUST STRIP -->
    <section class="ifs-excl-trust-strip">
        <div class="ifs-excl-trust-container">
            <div class="ifs-excl-trust-item">
                <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                <div>
                    <h4>100% DBS Vetted</h4>
                    <p>Enhanced background clearance</p>
                </div>
            </div>
            <div class="ifs-excl-trust-item">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                <div>
                    <h4>£5M Public Liability</h4>
                    <p>Comprehensive property cover</p>
                </div>
            </div>
            <div class="ifs-excl-trust-item">
                <svg viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.5.3 4.41 0 8-3.59 8-8 0-.49-.05-.98-.14-1.46L17 8z"/></svg>
                <div>
                    <h4>Eco & Pet-Safe</h4>
                    <p>Non-caustic green formulations</p>
                </div>
            </div>
            <div class="ifs-excl-trust-item">
                <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14l-5-5 1.41-1.41L12 14.17l7.59-7.59L21 8l-9 9z"/></svg>
                <div>
                    <h4>48h Deposit Guarantee</h4>
                    <p>Free re-clean inspection pass</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED SERVICES LIST -->
    <main class="ifs-excl-section-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-section-title">
            <span>Specialist Solutions</span>
            <h2>Comprehensive Hygiene & Cleaning</h2>
        </div>

        <!-- 1. Regular Domestic -->
        <article class="ifs-excl-service-detail-row" id="regular-cleaning">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=700&q=80" alt="Domestic cleaning">
                <span class="ifs-excl-service-price-tag">From £18 / hr</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Weekly / Fortnightly</span>
                <h3>Regular Domestic Housekeeping</h3>
                <p>Enjoy continuous spotless living managed by the same dedicated, vetted cleaner every week. We tailor our routine to your household priorities, pet care notes, and personal lifestyle preferences.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Same trusted cleaner each visit</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Ironing & bed linen changes upon request</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Dusting, HEPA vacuuming & hard floor wash</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Secure key-holding & concierge coordination</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-primary">Book Housekeeping</a>
            </div>
        </article>

        <!-- 2. Deep Clean -->
        <article class="ifs-excl-service-detail-row ifs-excl-reversed" id="deep-clean">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=700&q=80" alt="Deep clean service">
                <span class="ifs-excl-service-price-tag">From £160 Fixed</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Seasonal Rejuvenation</span>
                <h3>Intensive Deep Spring Clean</h3>
                <p>A rigorous architectural overhaul designed to tackle accumulated mineral scale, hidden grime behind heavy furniture, skirting boards, door frames, and high-touch areas throughout the property.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Intensive bathroom tile & glass descaling</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Skirting boards, light switches & architraves</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Internal window glass and sills buffed</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Hospital-grade eco disinfection</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-primary">Schedule Deep Clean</a>
            </div>
        </article>

        <!-- 3. End of Tenancy -->
        <article class="ifs-excl-service-detail-row" id="end-of-tenancy">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1628177142898-93e36e4e3a50?auto=format&fit=crop&w=700&q=80" alt="End of tenancy cleaning">
                <span class="ifs-excl-service-price-tag">From £190 Guarantee</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Guaranteed Deposit Pass</span>
                <h3>End of Tenancy Move Out Clean</h3>
                <p>Designed strictly to satisfy landlord inventory checkouts and high-street letting agency standards. We work directly to approved UK checkout checklists to safeguard your full rental deposit.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> 48-Hour Deposit Back Guarantee</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Inside & out cupboards, drawers & storage</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Full professional oven degreasing included</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Free re-clean if an inventory clerk queries</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/services/end-of-tenancy-clean/' ) ); ?>" class="ifs-excl-btn-primary">View Tenancy Package</a>
            </div>
        </article>

        <!-- 4. Commercial Cleaning -->
        <article class="ifs-excl-service-detail-row ifs-excl-reversed" id="commercial-cleaning">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=700&q=80" alt="Commercial office cleaning">
                <span class="ifs-excl-service-price-tag">Bespoke Contract</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Corporate & Commercial</span>
                <h3>Commercial & Workspace Cleaning</h3>
                <p>Reliable commercial sanitisation for corporate offices, co-working studios, clinics, educational spaces, and retail sites. Scheduled outside operational hours to prevent staff disruption.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Flexible early morning or evening shifts</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> High-touch keyboard, desk & phone sanitisation</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Communal kitchen, rest area & washroom care</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Monthly consolidated invoicing & account manager</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ifs-excl-btn-primary">Commercial Quote</a>
            </div>
        </article>

        <!-- 5. Airbnb Turnover -->
        <article class="ifs-excl-service-detail-row" id="airbnb-cleaning">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=700&q=80" alt="Airbnb short let cleaning">
                <span class="ifs-excl-service-price-tag">From £85 Fixed</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Short-Term Rentals</span>
                <h3>Airbnb & Holiday Let Turnarounds</h3>
                <p>Fast, meticulous turnaround cleaning between guest check-out (10:00 AM) and check-in (3:00 PM). Designed to protect your Superhost status and 5-star cleanliness ratings.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Hotel-grade bed staging & linen changes</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Restocking toiletries & welcome hampers</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Real-time photo reports via WhatsApp</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Same-day turnaround dispatch 7 days a week</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-primary">Book Airbnb Clean</a>
            </div>
        </article>

        <!-- 6. Oven Cleaning -->
        <article class="ifs-excl-service-detail-row ifs-excl-reversed" id="oven-cleaning">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=700&q=80" alt="Oven and cooker cleaning">
                <span class="ifs-excl-service-price-tag">From £65 Fixed</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Appliance Valeting</span>
                <h3>Specialist Oven, Hob & Extractor Cleaning</h3>
                <p>Restore your cooker to pristine showroom standard without dangerous chemical odours. We use van-mounted heated dip-tanks and non-caustic treatments to strip burnt-on grease and carbon deposits.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Full door removal & internal glass split cleaning</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Racks, side panels & trays soaked in dip tanks</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Extractor fan mesh filters completely degreased</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> 100% fume-free & immediately safe to cook in</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-primary">Book Oven Valet</a>
            </div>
        </article>

        <!-- 7. Inside Windows -->
        <article class="ifs-excl-service-detail-row" id="inside-windows">
            <div class="ifs-excl-service-img-card">
                <img src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=700&q=80" alt="Window and sill cleaning">
                <span class="ifs-excl-service-price-tag">From £30 Add-on</span>
            </div>
            <div class="ifs-excl-service-info-wrap">
                <span class="ifs-excl-badge">Streak-Free Finish</span>
                <h3>Internal Window, Frame & Sill Track Cleaning</h3>
                <p>Crystal-clear natural light through streak-free glazing. We vacuum and scrub sliding door tracks, frame seams, and deep window sills to eliminate trapped dust, condensation mould, and grime.</p>
                <ul class="ifs-excl-feature-checklist">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Window frame, rubber seal & track cleaning</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Streak-free microfibre glass buffing</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Removal of condensation stains & fingerprints</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> French doors, skylights & patio sliding glass</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-primary">Add To Cleaning</a>
            </div>
        </article>
    </main>

    <!-- PRICING COMPARISON TABLE -->
    <section class="ifs-excl-section-wrapper" id="packages" style="background: var(--ifs-excl-bg-light); border-top: 1px solid var(--ifs-excl-border-color); border-bottom: 1px solid var(--ifs-excl-border-color);">
        <div class="ifs-excl-section-title">
            <span>Package Breakdown</span>
            <h2>Transparent Cleaning Scope Comparison</h2>
        </div>

        <div class="ifs-excl-table-responsive">
            <table class="ifs-excl-table">
                <thead>
                    <tr>
                        <th style="width: 37%;">Scope & Checklist Items</th>
                        <th>Regular Domestic<span class="ifs-excl-th-sub">From £18 / hour</span></th>
                        <th>Deep Clean<span class="ifs-excl-th-sub">From £160 fixed</span></th>
                        <th class="ifs-excl-highlight-col">End of Tenancy<span class="ifs-excl-th-sub">From £190 guarantee</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dusting all reachable surfaces, skirting boards & sills</td>
                        <td><span class="ifs-excl-check">✓</span></td>
                        <td><span class="ifs-excl-check">✓</span></td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span></td>
                    </tr>
                    <tr>
                        <td>HEPA vacuuming carpets, rugs & mopping hard floors</td>
                        <td><span class="ifs-excl-check">✓</span></td>
                        <td><span class="ifs-excl-check">✓</span></td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Full bathroom sanitisation & limescale scrub</td>
                        <td>Surface Maintenance</td>
                        <td>Intensive Descale</td>
                        <td class="ifs-excl-highlight-col">Full De-lime & Sanitise</td>
                    </tr>
                    <tr>
                        <td>Inside kitchen cupboards, shelves & drawer units</td>
                        <td><span class="ifs-excl-dash">—</span></td>
                        <td>Exterior Surfaces Only</td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span> Inside & Outside</td>
                    </tr>
                    <tr>
                        <td>Oven, hob, extractor filter & carbon degrease</td>
                        <td>Optional Add-on</td>
                        <td>Optional Add-on</td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span> Included Complete</td>
                    </tr>
                    <tr>
                        <td>Interior windows, sills, tracks & glass buffing</td>
                        <td><span class="ifs-excl-dash">—</span></td>
                        <td><span class="ifs-excl-check">✓</span> Included</td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span> Included</td>
                    </tr>
                    <tr>
                        <td>Wall spot-cleaning & light switch sanitising</td>
                        <td><span class="ifs-excl-dash">—</span></td>
                        <td><span class="ifs-excl-check">✓</span> Included</td>
                        <td class="ifs-excl-highlight-col"><span class="ifs-excl-check">✓</span> Included</td>
                    </tr>
                    <tr>
                        <td>Agency-approved deposit pass guarantee (Free re-clean)</td>
                        <td><span class="ifs-excl-dash">—</span></td>
                        <td>24h Quality Window</td>
                        <td class="ifs-excl-highlight-col"><strong>48h 100% Deposit Pass</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class="ifs-excl-cta-banner">
        <div class="ifs-excl-cta-banner-content">
            <h2>Ready for a Spotless Space?</h2>
            <p>Schedule your professional clean online in under 2 minutes. Open 7 days a week across London & Essex.</p>
            <a href="<?php echo esc_url( home_url( '/get-quote/' ) ); ?>" class="ifs-excl-btn-white">
                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                Get an Instant Quote
            </a>
        </div>
    </section>

<?php get_footer(); ?>