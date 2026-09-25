/* ==========================================================================
   THEME / PROJECT: EXPERTCARE CLEANING
   MASTER CONSOLIDATED PRODUCTION SCRIPT
   Prefix: ifs-excl-
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

    /* ----------------------------------------------------------------------
       1. STICKY HEADER SCROLL LISTENER
       ---------------------------------------------------------------------- */
    const siteHeader = document.getElementById('ifs-excl-siteHeader');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                siteHeader.classList.add('ifs-excl-scrolled');
            } else {
                siteHeader.classList.remove('ifs-excl-scrolled');
            }
        }, { passive: true });
    }

    /* ----------------------------------------------------------------------
       2. MOBILE DRAWER NAVIGATION & ACCORDION DROPDOWN
       ---------------------------------------------------------------------- */
    const menuToggle = document.getElementById('ifs-excl-menuToggle');
    const navLinks = document.getElementById('ifs-excl-navLinks');
    const dropdownToggle = document.getElementById('ifs-excl-dropdownToggle');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            navLinks.classList.toggle('ifs-excl-active');
        });

        // Close mobile drawer when clicking outside
        document.addEventListener('click', (e) => {
            if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
                navLinks.classList.remove('ifs-excl-active');
            }
        });
    }

    if (dropdownToggle) {
        dropdownToggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 968) {
                // Prevent navigating to #services if expanding submenu on mobile
                const targetTag = e.target.tagName.toLowerCase();
                if (targetTag === 'a' && e.target.getAttribute('href') === 'services.html') {
                    e.preventDefault();
                }
                dropdownToggle.classList.toggle('ifs-excl-mobile-open');
            }
        });
    }

    /* ----------------------------------------------------------------------
       3. GLOBAL FAQ ACCORDIONS (HOME, SINGLE SERVICE, & FAQ PAGES)
       ---------------------------------------------------------------------- */
    const faqItems = document.querySelectorAll('.ifs-excl-faq-item');
    if (faqItems.length > 0) {
        faqItems.forEach(item => {
            const questionBtn = item.querySelector('.ifs-excl-faq-question');
            if (questionBtn) {
                questionBtn.addEventListener('click', () => {
                    const isActive = item.classList.contains('ifs-excl-active');
                    // Collapse sibling items in the same container
                    const parentContainer = item.closest('.ifs-excl-faq-grid') || document;
                    parentContainer.querySelectorAll('.ifs-excl-faq-item').forEach(sibling => {
                        sibling.classList.remove('ifs-excl-active');
                    });
                    if (!isActive) {
                        item.classList.add('ifs-excl-active');
                    }
                });
            }
        });
    }

    /* ----------------------------------------------------------------------
       4. TESTIMONIAL CAROUSEL (HOME PAGE)
       ---------------------------------------------------------------------- */
    const track = document.getElementById('ifs-excl-carouselTrack');
    const prevBtn = document.getElementById('ifs-excl-prevBtn');
    const nextBtn = document.getElementById('ifs-excl-nextBtn');
    let currentIndex = 0;

    function getItemsPerView() {
        return window.innerWidth <= 768 ? 1 : 2;
    }

    function updateCarousel() {
        if (!track || !track.children.length) return;
        const items = track.children;
        const totalItems = items.length;
        const perView = getItemsPerView();
        const maxIndex = Math.max(0, totalItems - perView);

        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 0) currentIndex = 0;

        const itemWidth = items[0].getBoundingClientRect().width + 30; // 30px gap
        track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    if (nextBtn && track) {
        nextBtn.addEventListener('click', () => {
            const perView = getItemsPerView();
            const maxIndex = Math.max(0, track.children.length - perView);
            currentIndex = (currentIndex < maxIndex) ? currentIndex + 1 : 0;
            updateCarousel();
        });
    }

    if (prevBtn && track) {
        prevBtn.addEventListener('click', () => {
            const perView = getItemsPerView();
            const maxIndex = Math.max(0, track.children.length - perView);
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : maxIndex;
            updateCarousel();
        });
    }

    if (track) {
        window.addEventListener('resize', updateCarousel, { passive: true });
        updateCarousel();
    }

    /* ----------------------------------------------------------------------
       5. INTERACTIVE BEFORE & AFTER SLIDER
       ---------------------------------------------------------------------- */
    const baSliders = document.querySelectorAll('.ifs-excl-ba-wrapper');
    baSliders.forEach(wrapper => {
        const sliderInput = wrapper.querySelector('.ifs-excl-ba-range-input');
        const overlay = wrapper.querySelector('.ifs-excl-ba-overlay');
        const sliderLine = wrapper.querySelector('.ifs-excl-ba-slider-line');

        if (sliderInput && overlay && sliderLine) {
            sliderInput.addEventListener('input', (e) => {
                const val = e.target.value;
                overlay.style.width = `${val}%`;
                sliderLine.style.left = `${val}%`;
            });
        }
    });

    /* ----------------------------------------------------------------------
       6. FAQ LIVE SEARCH & CATEGORY FILTERING (FAQ.HTML)
       ---------------------------------------------------------------------- */
    const faqSearchInput = document.getElementById('ifs-excl-faqSearch');
    const faqFilterBtns = document.querySelectorAll('.ifs-excl-category-filter .ifs-excl-filter-btn');
    const faqGroups = document.querySelectorAll('.ifs-excl-faq-group');

    if (faqFilterBtns.length > 0 && faqGroups.length > 0) {
        faqFilterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                faqFilterBtns.forEach(b => b.classList.remove('ifs-excl-active'));
                btn.classList.add('ifs-excl-active');

                const selectedCat = btn.getAttribute('data-category');
                faqGroups.forEach(group => {
                    const groupCat = group.getAttribute('data-group');
                    if (selectedCat === 'all' || selectedCat === groupCat) {
                        group.style.display = 'block';
                    } else {
                        group.style.display = 'none';
                    }
                });
            });
        });
    }

    if (faqSearchInput) {
        faqSearchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            const allItems = document.querySelectorAll('.ifs-excl-faq-item');

            allItems.forEach(item => {
                const questionText = item.querySelector('.ifs-excl-faq-question')?.innerText.toLowerCase() || '';
                const answerText = item.querySelector('.ifs-excl-faq-answer')?.innerText.toLowerCase() || '';

                if (questionText.includes(query) || answerText.includes(query)) {
                    item.classList.remove('ifs-excl-hidden');
                } else {
                    item.classList.add('ifs-excl-hidden');
                }
            });

            // Toggle category titles if all questions under them are hidden
            faqGroups.forEach(group => {
                const visibleInGroup = group.querySelectorAll('.ifs-excl-faq-item:not(.ifs-excl-hidden)');
                group.style.display = (visibleInGroup.length === 0 && query !== '') ? 'none' : 'block';
            });
        });
    }

    /* ----------------------------------------------------------------------
       7. REVIEWS CATEGORY FILTERING (REVIEWS.HTML)
       ---------------------------------------------------------------------- */
    const reviewFilterBtns = document.querySelectorAll('.ifs-excl-reviews-filter-section .ifs-excl-filter-btn');
    const reviewCards = document.querySelectorAll('.ifs-excl-review-card');

    if (reviewFilterBtns.length > 0 && reviewCards.length > 0) {
        reviewFilterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                reviewFilterBtns.forEach(b => b.classList.remove('ifs-excl-active'));
                btn.classList.add('ifs-excl-active');

                const filter = btn.getAttribute('data-filter');
                reviewCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    card.style.display = (filter === 'all' || filter === category) ? 'flex' : 'none';
                });
            });
        });
    }

    /* ----------------------------------------------------------------------
       8. FILE UPLOAD FEEDBACK (QUOTE & CONTACT FORMS)
       ---------------------------------------------------------------------- */
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
        input.addEventListener('change', () => {
            const labelSpan = input.parentElement.querySelector('span');
            if (labelSpan && input.files.length > 0) {
                labelSpan.innerText = `${input.files.length} file(s) selected: ${Array.from(input.files).map(f => f.name).join(', ')}`;
                labelSpan.style.color = 'var(--ifs-excl-success)';
                labelSpan.style.fontWeight = '600';
            }
        });
    });

    // Run initial quote calculator on load if elements are present
    if (document.getElementById('quoteServiceType')) {
        calculateLiveEstimate();
    }
});

/* ==========================================================================
   GLOBAL SCOPE FUNCTIONS (Called directly via inline onclick / onsubmit attributes)
   ========================================================================== */

/* --------------------------------------------------------------------------
   A. MULTI-STEP QUOTE CALCULATOR (HOMEPAGE)
   -------------------------------------------------------------------------- */
let currentStep = 1;

function nextStep(step) {
    if (step === 1) {
        const fname = document.getElementById('ifs-excl-firstName');
        const pcode = document.getElementById('ifs-excl-postCode');
        const phone = document.getElementById('ifs-excl-phoneNumber');
        
        if (!fname || !pcode || !phone || !fname.value.trim() || !pcode.value.trim() || !phone.value.trim()) {
            alert("Please complete your name, postcode, and phone number before proceeding.");
            return;
        }
    }
    
    const curStepEl = document.getElementById(`ifs-excl-step${currentStep}`);
    const curDotEl = document.getElementById(`ifs-excl-dot${currentStep}`);
    if (curStepEl) curStepEl.classList.remove('ifs-excl-active-step');
    if (curDotEl) curDotEl.classList.remove('ifs-excl-active');
    
    currentStep++;
    
    const nextStepEl = document.getElementById(`ifs-excl-step${currentStep}`);
    const nextDotEl = document.getElementById(`ifs-excl-dot${currentStep}`);
    if (nextStepEl) nextStepEl.classList.add('ifs-excl-active-step');
    if (nextDotEl) nextDotEl.classList.add('ifs-excl-active');
}

function prevStep(step) {
    const curStepEl = document.getElementById(`ifs-excl-step${currentStep}`);
    const curDotEl = document.getElementById(`ifs-excl-dot${currentStep}`);
    if (curStepEl) curStepEl.classList.remove('ifs-excl-active-step');
    if (curDotEl) curDotEl.classList.remove('ifs-excl-active');
    
    currentStep--;
    
    const prevStepEl = document.getElementById(`ifs-excl-step${currentStep}`);
    const prevDotEl = document.getElementById(`ifs-excl-dot${currentStep}`);
    if (prevStepEl) prevStepEl.classList.add('ifs-excl-active-step');
    if (prevDotEl) prevDotEl.classList.add('ifs-excl-active');
}

function handleFinalQuoteSubmit(event) {
    event.preventDefault();
    alert("Thank you! Your quote request has been sent successfully. Our team will review your home details and reply within minutes.");
    event.target.reset();
    
    const curStepEl = document.getElementById(`ifs-excl-step${currentStep}`);
    const curDotEl = document.getElementById(`ifs-excl-dot${currentStep}`);
    if (curStepEl) curStepEl.classList.remove('ifs-excl-active-step');
    if (curDotEl) curDotEl.classList.remove('ifs-excl-active');
    
    currentStep = 1;
    
    const firstStepEl = document.getElementById('ifs-excl-step1');
    const firstDotEl = document.getElementById('ifs-excl-dot1');
    if (firstStepEl) firstStepEl.classList.add('ifs-excl-active-step');
    if (firstDotEl) firstDotEl.classList.add('ifs-excl-active');
}

/* --------------------------------------------------------------------------
   B. DEDICATED QUOTE CALCULATOR PAGE (QUOTE.HTML)
   -------------------------------------------------------------------------- */
let currentAddonTotal = 0;
let selectedAddonsList = [];

function toggleAddon(checkbox, boxId, price) {
    const box = document.getElementById(boxId);
    if (!box) return;
    const addonLabel = checkbox.parentElement.innerText.trim();

    if (checkbox.checked) {
        box.classList.add('ifs-excl-selected');
        currentAddonTotal += price;
        selectedAddonsList.push(addonLabel);
    } else {
        box.classList.remove('ifs-excl-selected');
        currentAddonTotal -= price;
        selectedAddonsList = selectedAddonsList.filter(item => item !== addonLabel);
    }
    calculateLiveEstimate();
}

function calculateLiveEstimate() {
    const serviceEl = document.getElementById('quoteServiceType');
    const bedsEl = document.getElementById('quoteBedrooms');
    const bathsEl = document.getElementById('quoteBathrooms');
    if (!serviceEl || !bedsEl || !bathsEl) return;

    const service = serviceEl.value;
    const beds = parseInt(bedsEl.value) || 1;
    const baths = parseInt(bathsEl.value) || 1;

    let basePrice = 0;
    const summaryServiceEl = document.getElementById('summaryService');

    if (service === 'tenancy') {
        basePrice = 190 + (beds - 1) * 50 + (baths - 1) * 35;
        if (summaryServiceEl) summaryServiceEl.innerText = 'End of Tenancy';
    } else if (service === 'deep') {
        basePrice = 160 + (beds - 1) * 40 + (baths - 1) * 30;
        if (summaryServiceEl) summaryServiceEl.innerText = 'Deep Spring Clean';
    } else if (service === 'domestic') {
        basePrice = 54 + (beds - 1) * 18 + (baths - 1) * 18; // 3 hours base rate
        if (summaryServiceEl) summaryServiceEl.innerText = 'Domestic (3h Base)';
    } else if (service === 'airbnb') {
        basePrice = 85 + (beds - 1) * 30 + (baths - 1) * 20;
        if (summaryServiceEl) summaryServiceEl.innerText = 'Airbnb Turnover';
    } else {
        basePrice = 220;
        if (summaryServiceEl) summaryServiceEl.innerText = 'Commercial Estimate';
    }

    const grandTotal = basePrice + currentAddonTotal;
    const displayEl = document.getElementById('livePriceDisplay');
    const roomsEl = document.getElementById('summaryRooms');
    const addonsEl = document.getElementById('summaryAddons');

    if (displayEl) displayEl.innerText = `£${grandTotal.toFixed(2)}`;
    if (roomsEl) roomsEl.innerText = `${beds} Bed, ${baths} Bath`;
    if (addonsEl) addonsEl.innerText = selectedAddonsList.length > 0 ? selectedAddonsList.join(', ') : 'None';
}

function goToQuoteStep(step) {
    if (step === 2) {
        const postcode = document.getElementById('quotePostcode');
        if (!postcode || !postcode.value.trim()) {
            alert("Please enter your property postcode before proceeding.");
            return;
        }
    }

    document.querySelectorAll('.ifs-excl-form-step').forEach(s => s.classList.remove('ifs-excl-active-step'));
    document.querySelectorAll('.ifs-excl-step-dot').forEach(d => d.classList.remove('ifs-excl-active'));

    const stepEl = document.getElementById(`ifs-excl-step${step}`);
    if (stepEl) stepEl.classList.add('ifs-excl-active-step');

    for (let i = 1; i <= step; i++) {
        const dot = document.getElementById(`ifs-excl-dot${i}`);
        if (dot) dot.classList.add('ifs-excl-active');
    }
}

function handleQuoteSubmission(event) {
    event.preventDefault();
    const nameEl = document.getElementById('quoteFullName');
    const name = nameEl ? nameEl.value.trim() : 'Customer';
    const totalEl = document.getElementById('livePriceDisplay');
    const total = totalEl ? totalEl.innerText : '£190.00';

    alert(`Thank you, ${name}! Your booking request for ${total} has been confirmed. A member of our operations team will call you within 15 minutes.`);
    event.target.reset();
    currentAddonTotal = 0;
    selectedAddonsList = [];
    document.querySelectorAll('.ifs-excl-addon-box').forEach(b => b.classList.remove('ifs-excl-selected'));
    calculateLiveEstimate();
    goToQuoteStep(1);
}

function sendQuoteToWhatsApp() {
    const name = document.getElementById('quoteFullName')?.value.trim() || '';
    const phone = document.getElementById('quotePhone')?.value.trim() || '';
    const postcode = document.getElementById('quotePostcode')?.value.trim() || '';
    const service = document.getElementById('summaryService')?.innerText || 'Cleaning Service';
    const rooms = document.getElementById('summaryRooms')?.innerText || 'Not Specified';
    const addons = document.getElementById('summaryAddons')?.innerText || 'None';
    const price = document.getElementById('livePriceDisplay')?.innerText || 'Quote on Request';
    const date = document.getElementById('quoteDate')?.value || 'Flexible';

    if (!name || !phone || !postcode) {
        alert("Please provide your Name, Phone Number, and Postcode before booking via WhatsApp.");
        return;
    }

    const textPayload = `Hello Expertcare Cleaning, I would like to book a clean:%0A%0A` +
        `*Name:* ${encodeURIComponent(name)}%0A` +
        `*Phone:* ${encodeURIComponent(phone)}%0A` +
        `*Postcode:* ${encodeURIComponent(postcode)}%0A` +
        `*Service:* ${encodeURIComponent(service)}%0A` +
        `*Rooms:* ${encodeURIComponent(rooms)}%0A` +
        `*Add-ons:* ${encodeURIComponent(addons)}%0A` +
        `*Estimated Total:* ${encodeURIComponent(price)}%0A` +
        `*Preferred Date:* ${encodeURIComponent(date)}`;

    window.open(`https://wa.me/447405111878?text=${textPayload}`, '_blank');
}

/* --------------------------------------------------------------------------
   C. CONTACT US FORM DISPATCH (CONTACT.HTML)
   -------------------------------------------------------------------------- */
function handleContactSubmit(event) {
    event.preventDefault();
    const nameEl = document.getElementById('contactName');
    const name = nameEl ? nameEl.value.trim() : 'Customer';
    alert(`Thank you, ${name}! Your enquiry has been received. Our dispatch team will follow up via your preferred contact method shortly.`);
    event.target.reset();
}

function sendViaWhatsApp() {
    const name = document.getElementById('contactName')?.value.trim() || '';
    const phone = document.getElementById('contactPhone')?.value.trim() || '';
    const postcode = document.getElementById('contactPostcode')?.value.trim() || '';
    const service = document.getElementById('contactService')?.value || 'General Cleaning';
    const msg = document.getElementById('contactMessage')?.value.trim() || '';

    if (!name || !phone || !postcode) {
        alert("Please fill in your Name, Phone Number, and Postcode before sending via WhatsApp.");
        return;
    }

    const textPayload = `Hello Expertcare Cleaning, I have an enquiry:%0A%0A` +
        `*Name:* ${encodeURIComponent(name)}%0A` +
        `*Phone:* ${encodeURIComponent(phone)}%0A` +
        `*Postcode:* ${encodeURIComponent(postcode)}%0A` +
        `*Service:* ${encodeURIComponent(service)}%0A` +
        `*Details:* ${encodeURIComponent(msg || 'None provided')}`;

    window.open(`https://wa.me/447405111878?text=${textPayload}`, '_blank');
}

/* --------------------------------------------------------------------------
   D. SINGLE SERVICE DETAIL PAGE SUBMISSION (SERVICE-SINGLE.HTML)
   -------------------------------------------------------------------------- */
function handleSingleServiceSubmit(event) {
    event.preventDefault();
    const size = document.getElementById('srvPropertySize')?.value || 'Property';
    const pcode = document.getElementById('srvPostcode')?.value || '';
    alert(`Thank you! Your End of Tenancy cleaning booking for ${size} in ${pcode} has been received. Our team will confirm your date window shortly.`);
    event.target.reset();
}