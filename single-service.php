<?php
/**
 * Template Name: Single Service Detail Page
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
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a>
                <svg viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span class="ifs-excl-current"><?php the_title(); ?></span>
            </nav>
            <h1>End of Tenancy <span>Cleaning London & Essex</span></h1>
            <p>Guaranteed full deposit returns backed by estate agency approved checklists and our 48-hour free re-clean promise.</p>
        </div>
    </section>

    <!-- SINGLE SERVICE LAYOUT -->
    <main class="ifs-excl-single-main-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-single-grid">
            <div class="ifs-excl-single-content">
                <div class="ifs-excl-single-overview">
                    <h2>Pass Your Inventory Check With Zero Hassle</h2>
                    <p>Moving home is notoriously stressful. Leaving your rental property in anything less than pristine condition puts your deposit at serious risk. Expertcare's End of Tenancy cleaning service is specifically tailored to meet the strict standards required by landlords, inventory clerks, and high-street letting agents across London and Essex.</p>
                    <p>Our vetted operatives arrive fully equipped with heavy-duty descalers, professional dip-tank degreasers, and HEPA-grade filtration vacuums. We clean inside kitchen cupboards, behind appliances, and inside the oven as part of our core standard package.</p>
                </div>

                <div class="ifs-excl-snapshot-grid">
                    <div class="ifs-excl-snapshot-card">
                        <strong>48 Hours</strong>
                        <span>Re-Clean Guarantee</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>Oven Valet</strong>
                        <span>Included Complete</span>
                    </div>
                    <div class="ifs-excl-snapshot-card">
                        <strong>100%</strong>
                        <span>DBS Checked Crews</span>
                    </div>
                </div>

                <!-- Room by Room Checklist -->
                <div class="ifs-excl-checklist-section">
                    <h3>What Is Included In This Clean</h3>

                    <div class="ifs-excl-room-card">
                        <h4>
                            <svg viewBox="0 0 24 24"><path d="M18 6V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v2H2v16h20V6h-4zm-8-2h4v2h-4V4zm10 16H4V8h16v12z"/></svg>
                            Kitchen & Cooking Appliances
                        </h4>
                        <ul class="ifs-excl-task-list">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Full professional oven degreasing</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Hob, burners & extractor filters</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Inside & outside all cupboards & drawers</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Defrosted fridge/freezer sanitisation</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Washing machine soap drawer & seal</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Dishwasher filter & interior deep scrub</li>
                        </ul>
                    </div>

                    <div class="ifs-excl-room-card">
                        <h4>
                            <svg viewBox="0 0 24 24"><path d="M21 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v3.5C2.45 10.5 2 10.95 2 11.5v1c0 .55.45 1 1 1V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5.5c.55 0 1-.45 1-1v-1c0-.55-.45-1-1-1zm-2 8.5H5v-4h14v4zm1-6.5H4v-1h16v1z"/></svg>
                            Bathrooms & En-Suites
                        </h4>
                        <ul class="ifs-excl-task-list">
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Intense limescale descaling on tiles & glass</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Toilet bowl, seat & cistern sanitisation</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Chrome taps, showerhead & valve buffing</li>
                            <li><svg viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Mirror and glass streak-free finish</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="ifs-excl-single-sidebar">
                <div class="ifs-excl-sidebar-booking-card">
                    <h3>Reserve This Clean</h3>
                    <p>Instant booking confirmation. No upfront charge.</p>

                    <div class="ifs-excl-price-banner">
                        <span>Starting Fixed Package:</span>
                        <strong>£190.00</strong>
                    </div>

                    <form onsubmit="event.preventDefault(); alert('Booking received! We will confirm your window shortly.'); this.reset();">
                        <div class="ifs-excl-form-group">
                            <label for="srvPropertySize">Property Size *</label>
                            <select id="srvPropertySize" required>
                                <option value="Studio / 1 Bed Flat">Studio / 1 Bed Flat (£190)</option>
                                <option value="2 Bedroom Property">2 Bedroom Property (£240)</option>
                                <option value="3 Bedroom Property">3 Bedroom Property (£290)</option>
                                <option value="4+ Bedroom Property">4+ Bedroom Property (£360+)</option>
                            </select>
                        </div>

                        <div class="ifs-excl-form-group">
                            <label for="srvBathCount">Bathrooms *</label>
                            <select id="srvBathCount">
                                <option value="1 Bathroom">1 Bathroom Included</option>
                                <option value="2 Bathrooms">2 Bathrooms (+£35)</option>
                                <option value="3+ Bathrooms">3+ Bathrooms (+£65)</option>
                            </select>
                        </div>

                        <div class="ifs-excl-form-group">
                            <label for="srvPostcode">Postcode in London/Essex *</label>
                            <input type="text" id="srvPostcode" placeholder="e.g. SW1A 1AA or RM1 2BB" required>
                        </div>

                        <div class="ifs-excl-form-group">
                            <label for="srvPhone">Phone / WhatsApp *</label>
                            <input type="tel" id="srvPhone" placeholder="07..." required>
                        </div>

                        <button type="submit" class="ifs-excl-btn-primary" style="width: 100%; justify-content: center; margin-top: 10px;">
                            Book My Tenancy Clean →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>