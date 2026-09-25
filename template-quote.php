<?php
/**
 * Template Name: Get Quote Page (Expanded)
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
            <h1>Instant Cleaning <span>Quote & Calculator</span></h1>
            <p>Customise your clean down to the finest detail. Transparent fixed pricing, zero upfront charges, and an agency-approved 48-hour free re-clean guarantee.</p>
        </div>
    </section>

    <!-- TRUST STRIP -->
    <section class="ifs-excl-trust-strip">
        <div class="ifs-excl-trust-container">
            <div class="ifs-excl-trust-item">
                <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                <div>
                    <h4>DBS Vetted & Certified</h4>
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
                    <h4>100% Eco & Pet-Safe</h4>
                    <p>Biodegradable, non-caustic liquids</p>
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

    <!-- EXPANDED CALCULATOR & FORM INTERFACE -->
    <main class="ifs-excl-quote-page-wrapper ifs-excl-reveal-section">
        <div class="ifs-excl-quote-page-grid">
            <!-- Left: Multi-Step Interactive Form -->
            <div class="ifs-excl-quote-form-card">
                <div class="ifs-excl-step-indicator">
                    <div class="ifs-excl-step-dot ifs-excl-active" id="ifs-excl-dot1"></div>
                    <div class="ifs-excl-step-dot" id="ifs-excl-dot2"></div>
                    <div class="ifs-excl-step-dot" id="ifs-excl-dot3"></div>
                </div>

                <form id="ifs-excl-quoteForm" onsubmit="handleQuoteSubmission(event)">
                    
                    <!-- STEP 1: SERVICE, PROPERTY TYPE & ROOM CONFIG -->
                    <div class="ifs-excl-form-step ifs-excl-active-step" id="ifs-excl-step1">
                        <h3>1. Property Scope & Cleaning Type</h3>
                        <p>Tell us about the property layout and required service category.</p>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteServiceType">Service Required *</label>
                                <select id="quoteServiceType" onchange="calculateLiveEstimate()">
                                    <option value="tenancy">End of Tenancy (100% Deposit Pass)</option>
                                    <option value="deep">Intensive Deep Spring Clean</option>
                                    <option value="domestic">Regular Domestic Housekeeping</option>
                                    <option value="airbnb">Airbnb / Short-Term Rental Turnover</option>
                                    <option value="commercial">Commercial Office & Workplace</option>
                                </select>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteFrequency">Cleaning Frequency</label>
                                <select id="quoteFrequency" onchange="calculateLiveEstimate()">
                                    <option value="1">One-Off Service (Standard Rate)</option>
                                    <option value="0.85">Weekly (-15% Discount)</option>
                                    <option value="0.90">Fortnightly (-10% Discount)</option>
                                    <option value="0.95">Monthly (-5% Discount)</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quotePropertyType">Property Style</label>
                                <select id="quotePropertyType" onchange="calculateLiveEstimate()">
                                    <option value="flat">Apartment / Flat</option>
                                    <option value="terraced">Terraced House</option>
                                    <option value="semi">Semi-Detached House</option>
                                    <option value="detached">Detached House</option>
                                    <option value="office">Commercial Office Unit</option>
                                </select>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteFurnished">Furnishing State</label>
                                <select id="quoteFurnished">
                                    <option value="furnished">Furnished</option>
                                    <option value="unfurnished">Unfurnished / Empty</option>
                                    <option value="part">Part-Furnished</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteBedrooms">Bedrooms *</label>
                                <select id="quoteBedrooms" onchange="calculateLiveEstimate()">
                                    <option value="1">Studio / 1 Bedroom</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                    <option value="4">4 Bedrooms</option>
                                    <option value="5">5+ Bedrooms</option>
                                </select>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteBathrooms">Bathrooms / Toilets *</label>
                                <select id="quoteBathrooms" onchange="calculateLiveEstimate()">
                                    <option value="1">1 Bathroom</option>
                                    <option value="2">2 Bathrooms</option>
                                    <option value="3">3 Bathrooms</option>
                                    <option value="4">4+ Bathrooms</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteCondition">Overall Property Condition</label>
                                <select id="quoteCondition" onchange="calculateLiveEstimate()">
                                    <option value="normal">Normal / Well-Maintained</option>
                                    <option value="heavy">Heavily Soiled / Post-Renovation (+£40)</option>
                                    <option value="light">Light Touch-Up</option>
                                </select>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quotePostcode">Property Postcode in London / Essex *</label>
                                <input type="text" id="quotePostcode" placeholder="e.g. SW1A 1AA or RM1 2BB" required>
                            </div>
                        </div>

                        <div class="ifs-excl-step-btn-group">
                            <div></div>
                            <button type="button" class="ifs-excl-btn-primary" onclick="goToQuoteStep(2)">Choose Add-ons & Date →</button>
                        </div>
                    </div>

                    <!-- STEP 2: EXPANDED ADD-ONS, DATE & ACCESS -->
                    <div class="ifs-excl-form-step" id="ifs-excl-step2">
                        <h3>2. Specialist Add-ons & Scheduling</h3>
                        <p>Select any additional appliances or deep extraction treatments required.</p>

                        <div class="ifs-excl-addons-grid">
                            <label class="ifs-excl-addon-box" id="addon-oven-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-oven" onchange="toggleAddon(this, 'addon-oven-box', 45)">
                                    Double Oven Dip-Tank Valet
                                </span>
                                <span class="ifs-excl-addon-price">+£45</span>
                            </label>

                            <label class="ifs-excl-addon-box" id="addon-fridge-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-fridge" onchange="toggleAddon(this, 'addon-fridge-box', 25)">
                                    Defrosted Fridge/Freezer Interior
                                </span>
                                <span class="ifs-excl-addon-price">+£25</span>
                            </label>

                            <label class="ifs-excl-addon-box" id="addon-windows-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-windows" onchange="toggleAddon(this, 'addon-windows-box', 30)">
                                    Internal Window Glass & Sills
                                </span>
                                <span class="ifs-excl-addon-price">+£30</span>
                            </label>

                            <label class="ifs-excl-addon-box" id="addon-carpet-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-carpet" onchange="toggleAddon(this, 'addon-carpet-box', 50)">
                                    Carpet Hot Water Steam Extraction
                                </span>
                                <span class="ifs-excl-addon-price">+£50</span>
                            </label>

                            <label class="ifs-excl-addon-box" id="addon-mattress-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-mattress" onchange="toggleAddon(this, 'addon-mattress-box', 35)">
                                    Mattress UV & Steam Sanitisation
                                </span>
                                <span class="ifs-excl-addon-price">+£35</span>
                            </label>

                            <label class="ifs-excl-addon-box" id="addon-balcony-box">
                                <span class="ifs-excl-addon-label">
                                    <input type="checkbox" id="addon-balcony" onchange="toggleAddon(this, 'addon-balcony-box', 40)">
                                    Balcony / Terrace Jet Scrub
                                </span>
                                <span class="ifs-excl-addon-price">+£40</span>
                            </label>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteDate">Preferred Cleaning Date *</label>
                                <input type="date" id="quoteDate" required>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteTimeSlot">Preferred Arrival Window</label>
                                <select id="quoteTimeSlot">
                                    <option value="Morning">Morning (8:00 AM – 11:00 AM)</option>
                                    <option value="Afternoon">Afternoon (12:00 PM – 3:00 PM)</option>
                                    <option value="Evening">Evening (4:00 PM onwards)</option>
                                    <option value="Flexible">Flexible / Anytime 7 Days</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteAccess">Key Collection & Property Access</label>
                                <select id="quoteAccess">
                                    <option value="in_person">I will be at the property to grant access</option>
                                    <option value="lockbox">Keys in secure Lockbox / KeySafe</option>
                                    <option value="concierge">Keys with Concierge / Reception</option>
                                    <option value="agent">Collect keys from nearby Letting Agent</option>
                                </select>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteParking">Parking Availability</label>
                                <select id="quoteParking">
                                    <option value="free">Free driveway / private bay on site</option>
                                    <option value="permit">Visitor parking permit provided</option>
                                    <option value="meter">Paid on-street meter required</option>
                                    <option value="none">No parking available nearby</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-group-item">
                            <label>Property Photos for Expedited Assessment (Optional)</label>
                            <div class="ifs-excl-file-upload-box">
                                <label class="ifs-excl-file-upload-btn" for="quotePhotos">Browse...</label>
                                <input type="file" id="quotePhotos" multiple accept="image/*">
                                <span id="quotePhotosLabel" style="font-size: 13px; color: var(--ifs-excl-text-muted);">Select pictures of kitchen, bathrooms, or carpet stains</span>
                            </div>
                        </div>

                        <div class="ifs-excl-step-btn-group">
                            <button type="button" class="ifs-excl-btn-secondary-step" onclick="goToQuoteStep(1)">← Back</button>
                            <button type="button" class="ifs-excl-btn-primary" onclick="goToQuoteStep(3)">Client Details →</button>
                        </div>
                    </div>

                    <!-- STEP 3: CONTACT & DISPATCH METHOD -->
                    <div class="ifs-excl-form-step" id="ifs-excl-step3">
                        <h3>3. Client Information & Verification</h3>
                        <p>Where should our operations team dispatch your formal booking itinerary?</p>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteFullName">Full Name *</label>
                                <input type="text" id="quoteFullName" placeholder="e.g. David Morrison" required>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quoteEmail">Email Address *</label>
                                <input type="email" id="quoteEmail" placeholder="e.g. david@example.co.uk" required>
                            </div>
                        </div>

                        <div class="ifs-excl-form-grid-2">
                            <div class="ifs-excl-form-group-item">
                                <label for="quotePhone">Mobile / WhatsApp Number *</label>
                                <input type="tel" id="quotePhone" placeholder="e.g. 07405 111878" required>
                            </div>
                            <div class="ifs-excl-form-group-item">
                                <label for="quotePreferredContact">Preferred Confirmation Method</label>
                                <select id="quotePreferredContact">
                                    <option value="whatsapp">WhatsApp (Fastest dispatch & photo share)</option>
                                    <option value="phone">Telephone Call</option>
                                    <option value="email">Email Confirmation Only</option>
                                </select>
                            </div>
                        </div>

                        <div class="ifs-excl-form-group-item">
                            <label for="quoteNotes">Special Instructions & Specific Focus Areas</label>
                            <textarea id="quoteNotes" rows="3" placeholder="Tell us if you have pets, delicate flooring, key holding directions, or specific limescale/lounge focus points..."></textarea>
                        </div>

                        <label class="ifs-excl-checkbox-item">
                            <input type="checkbox" required>
                            <span>I confirm that water and electricity will be turned on at the property for the cleaning team.</span>
                        </label>

                        <div class="ifs-excl-step-btn-group">
                            <button type="button" class="ifs-excl-btn-secondary-step" onclick="goToQuoteStep(2)">← Back</button>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <button type="button" class="ifs-excl-btn-primary" style="background: var(--ifs-excl-whatsapp);" onclick="sendQuoteToWhatsApp()">
                                    Book via WhatsApp
                                </button>
                                <button type="submit" class="ifs-excl-btn-primary">
                                    Confirm Quote
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right: Real-time Live Price Summary & Itemised Breakdown -->
            <div class="ifs-excl-quote-summary-sidebar">
                <div class="ifs-excl-summary-card">
                    <h3>Booking Summary</h3>
                    <p>Live calculated cost compliant with standard UK inventory check requirements.</p>

                    <div class="ifs-excl-price-callout">
                        <span>Total Estimated Cost</span>
                        <strong id="livePriceDisplay">£190.00</strong>
                        <small>No advance deposit required. Pay upon completion.</small>
                    </div>

                    <ul class="ifs-excl-summary-breakdown">
                        <li>
                            <span>Service Package:</span>
                            <strong id="summaryService">End of Tenancy</strong>
                        </li>
                        <li>
                            <span>Property Layout:</span>
                            <strong id="summaryRooms">1 Bed, 1 Bath</strong>
                        </li>
                        <li>
                            <span>Selected Add-ons:</span>
                            <strong id="summaryAddons">None</strong>
                        </li>
                        <li>
                            <span>Frequency Saving:</span>
                            <strong id="summaryDiscount" style="color: #10B981;">Standard Rate</strong>
                        </li>
                        <li>
                            <span>Satisfaction Cover:</span>
                            <strong style="color: #10B981;">48h Free Re-clean Pass</strong>
                        </li>
                    </ul>

                    <div class="ifs-excl-direct-contact-box">
                        <h4>Need A Commercial Quote?</h4>
                        <p>Speak directly with our local operations dispatcher for multi-site discounts.</p>
                        <a href="tel:07405111878" class="ifs-excl-btn-primary" style="width: 100%; justify-content: center; font-size: 13.5px;">
                            Call Desk: 07405 111878
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- WHAT HAPPENS NEXT SECTION -->
    <section class="ifs-excl-process-section ifs-excl-reveal-section">
        <div class="ifs-excl-process-container">
            <div class="ifs-excl-section-title">
                <span>Transparent Journey</span>
                <h2>What Happens After You Request A Quote?</h2>
            </div>
            <div class="ifs-excl-process-grid">
                <div class="ifs-excl-process-card">
                    <div class="ifs-excl-process-number">1</div>
                    <h4>Instant Price Verification</h4>
                    <p>Our dispatch desk reviews your room count, post-code route, and add-on selections to confirm availability within 15 minutes.</p>
                </div>
                <div class="ifs-excl-process-card">
                    <div class="ifs-excl-process-number">2</div>
                    <h4>Vetted Crew Arrival</h4>
                    <p>Our insured, DBS-cleared operatives arrive punctually with commercial-grade eco products, HEPA vacuums, and dip-tank valeting equipment.</p>
                </div>
                <div class="ifs-excl-process-card">
                    <div class="ifs-excl-process-number">3</div>
                    <h4>Inspection & Guarantee</h4>
                    <p>Inspect the spotless results. Payment is only settled once satisfied, and your clean is protected by our 48-hour re-clean guarantee.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRE-BOOKING FAQ ACCORDION -->
    <section class="ifs-excl-section-wrapper ifs-excl-reveal-section" style="padding-top: 60px;">
        <div class="ifs-excl-section-title">
            <span>Pre-Booking Help</span>
            <h2>Common Questions Before Requesting A Quote</h2>
        </div>
        <div class="ifs-excl-faq-grid">
            <div class="ifs-excl-faq-item">
                <button class="ifs-excl-faq-question">
                    Do I need to pay upfront when submitting this form?
                    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                </button>
                <div class="ifs-excl-faq-answer">
                    <p>No. Submitting this form carries zero upfront obligation or payment. Once our team confirms your arrival time and tasks, payment is settled securely after the clean is completed to your satisfaction.</p>
                </div>
            </div>

            <div class="ifs-excl-faq-item">
                <button class="ifs-excl-faq-question">
                    How accurate is this online quote calculator?
                    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                </button>
                <div class="ifs-excl-faq-answer">
                    <p>Our online calculation engine reflects fixed UK industry pricing based on typical room sizes and condition. As long as the property dimensions match your selections, the estimated total is the final price you pay.</p>
                </div>
            </div>

            <div class="ifs-excl-faq-item">
                <button class="ifs-excl-faq-question">
                    Can I make changes to my date or add-ons after booking?
                    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                </button>
                <div class="ifs-excl-faq-answer">
                    <p>Yes. You can amend your booking, add carpet steam cleaning, or change the arrival date free of charge up to 24 hours prior to our scheduled arrival via phone or WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>