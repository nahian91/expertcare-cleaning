<?php
/**
 * Template Name: FAQ Page
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
            <h1>Frequently Asked <span>Questions</span></h1>
            <p>Everything you need to know about our vetted operatives, booking procedure, deposit guarantees, pricing, and eco-friendly standards.</p>
        </div>
    </section>

    <!-- FAQ ACCORDION CONTENT -->
    <main class="ifs-excl-faq-main-wrapper ifs-excl-reveal-section">

        <!-- GROUP 1: BOOKING & SCHEDULING -->
        <div class="ifs-excl-faq-group">
            <h2 class="ifs-excl-faq-group-title">
                <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                Booking & Scheduling
            </h2>
            <div class="ifs-excl-faq-grid">
                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Can I book cleaning services on Saturdays and Sundays?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes, absolutely! We operate 7 days a week from 7:00 AM to 9:00 PM across London and Essex. Weekend appointments carry zero penalty surcharges or hidden weekend rates.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Do I need to be present at the property during the clean?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>No, you do not need to stay on site. You can let the cleaners in and leave, arrange key pickup with your building concierge, or leave keys in a secure lockbox. Our operatives are DBS-checked, fully insured, and routinely trusted with secure key holding.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Will I have the same cleaner each time for regular domestic service?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. For weekly and fortnightly domestic cleaning, we assign the same dedicated professional to your home so they learn your specific preferences. If your regular cleaner is on holiday or unwell, we provide a pre-vetted replacement upon request.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        How far in advance do I need to book?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>We typically recommend booking 24 to 48 hours in advance. However, because our mobile squads are distributed across London boroughs and Essex, same-day dispatch and emergency appointments can frequently be arranged via our WhatsApp team.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        What is your cancellation and rescheduling policy?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>We understand plans change. You can reschedule or cancel any scheduled visit free of charge with at least 24 hours notice. Cancellations made under 24 hours may incur a standard call-out fee to cover our operatives' allocated schedule.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- GROUP 2: PRICING & PAYMENTS -->
        <div class="ifs-excl-faq-group">
            <h2 class="ifs-excl-faq-group-title">
                <svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
                Pricing & Payments
            </h2>
            <div class="ifs-excl-faq-grid">
                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        How does your pricing structure work?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Regular domestic housekeeping is billed at a transparent hourly rate starting from £18/hour. One-off deep cleans and end-of-tenancy cleans are fixed-rate packages calculated by bedroom and bathroom count, ensuring you pay the agreed rate with zero surprise overruns.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        When do I pay for my cleaning service?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>We do not take full payments upfront. Payment is settled securely online via card or bank transfer only after the service is completed and meets your approval.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Are parking, congestion, and ULEZ fees included?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>If free parking or visitor permits are unavailable, any necessary parking meter fees or central London Congestion Zone charges will be clearly itemized and approved in your initial estimate before confirmation.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Do you provide invoices for tax or letting purposes?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. Upon job sign-off and payment, an itemized digital receipt and VAT-compliant invoice are automatically emailed to you for your records, landlord submission, or business expenses.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- GROUP 3: END OF TENANCY & GUARANTEES -->
        <div class="ifs-excl-faq-group">
            <h2 class="ifs-excl-faq-group-title">
                <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                End of Tenancy & Guarantees
            </h2>
            <div class="ifs-excl-faq-grid">
                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        What is your End of Tenancy 100% Deposit Pass Guarantee?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Our work matches approved UK estate agency and inventory clerk checklists. If your landlord or inventory clerk points out any missed item covered in the task agreement within 48 hours of clean completion, our team returns and re-cleans that area free of charge.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Is oven cleaning included in the End of Tenancy package?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes! While many companies treat oven cleaning as a separate £50–£90 add-on, our standard End of Tenancy quote automatically includes a full professional oven, hob, and extractor degrease.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Does the property need to be empty before the team arrives?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. For a tenancy checkout clean, all personal possessions and rubbish must be removed beforehand so our operatives can access and clean inside cupboards, wardrobes, drawers, and under beds.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Do I need to defrost the fridge and freezer beforehand?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. Please switch off and defrost the freezer at least 24 hours prior to our arrival. This allows our cleaners to sanitise shelves, seals, and compartments without ice build-up hindering the work.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        What happens if I'm not satisfied with a standard domestic clean?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Your satisfaction is backed by our guarantee. Contact our office within 24 hours of your clean with photos or details, and we will send our supervisor or cleaner back to rectify the problem promptly.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- GROUP 4: STAFF, SAFETY & ECO-PRODUCTS -->
        <div class="ifs-excl-faq-group">
            <h2 class="ifs-excl-faq-group-title">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                Staff, Safety & Eco-Products
            </h2>
            <div class="ifs-excl-faq-grid">
                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Are your cleaners fully vetted and background checked?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. Every single operative undergoes right-to-work validation, proof of address confirmation, DBS criminal background clearance, previous employer reference checks, and in-person practical assessments.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Are your cleaning products safe for pets and children?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>Yes. We use commercial-grade biodegradable, non-toxic, and non-caustic formulations. They deliver thorough sanitisation without harsh petrochemical residues or choking bleach fumes.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        Do I need to supply any cleaning equipment or liquids?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>For one-off Deep Cleans, End of Tenancy, Oven Valets, and Airbnb services, our operatives arrive with all professional tools, HEPA vacuums, mops, and supplies. For ongoing regular domestic visits, we can either bring our supplies or use your preferred household brands.</p>
                    </div>
                </div>

                <div class="ifs-excl-faq-item">
                    <button class="ifs-excl-faq-question">
                        What level of insurance cover do you carry?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="ifs-excl-faq-answer">
                        <p>We are protected by a comprehensive £5,000,000 public liability insurance policy underwritten by leading UK insurers, ensuring complete peace of mind for both residential and commercial properties.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- STILL HAVE QUESTIONS CTA CARD -->
        <div class="ifs-excl-support-card">
            <span>Direct Help Desk</span>
            <h3>Still Have Questions?</h3>
            <p>Our friendly UK operations team is ready to answer questions regarding bespoke floorplans, access notes, or special requirements.</p>
            <div class="ifs-excl-support-buttons">
                <a href="tel:07405111878" class="ifs-excl-btn-primary">
                    Call 07405 111878
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                </a>
                <a href="https://wa.me/447405111878" target="_blank" class="ifs-excl-btn-primary" style="background: var(--ifs-excl-whatsapp);" rel="noopener noreferrer">
                    Ask on WhatsApp
                    <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </a>
            </div>
        </div>

    </main>

<?php get_footer(); ?>