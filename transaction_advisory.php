<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARSI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="dist/style.css" rel="stylesheet" />
</head>

<body>

    <!-- Responsive Navbar Start -->
     <?php include 'includes/header.php'; ?>

    <!-- team Hero Section -->
    <section class="bg-white">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 text-center tracking-tight leading-snug">
                Transaction advisory</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="tax.php" class="text-blue-600">Tax (Tax Compliance and Tax Planning)</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="digitsation.php">Digitsation - E Records</a></span>
                </div>
            </div>
            <div class="mt-4 flex item-center justify-center">
                <img src="Images/automation_services/herosection.webp" alt="" class="w-full h-full">
            </div>
        </div>
    </section>

    <!-- Automation Services Section -->
    <section class="bg-white py-2 lg:py-2">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Left side navigation -->
                <div class="lg:col-span-1 order-last lg:order-first">
                    <?php include 'includes/servicenav.php'; ?>
                </div>
            <div class="lg:col-span-3 order-first lg:order-last">

            <!-- Tab Content -->
            <div class="mb-16">
                <!-- ERP Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="px-8 lg:px-8">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            Navigate Deals with Confidence. Maximize Value.
                        </h3>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                           Whether you're buying, selling, investing, or restructuring, every business transaction involves risk — and opportunity. At <b>ARSI, our Transaction Advisory Services</b> provide the insight, analysis, and strategic guidance you need to make informed decisions and execute deals with confidence.

                        </p>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                            We partner with investors, founders, CFOs, and corporate development teams to evaluate opportunities, uncover risks, and drive successful transactions from start to finish.

                        </p>
                    </div>
                    <div class="grid grid-cols-1 gap-8 lg:gap-2">
                        <div class="px-8 mb-5">

                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">What We Offer</h3>
                            
                            <p class="text-md text-gray-700 leading-relaxed">
                                Our end-to-end transaction support ensures that your deals are not only compliant — but also aligned with your strategic, financial, and operational goals.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="col-span-1 rounded lg:ps-8 py-4 lg:ps-12">
                            <img src="Images/automation_services/erp_left.webp" alt=""
                                class="rounded-2xl w-full h-auto">
                        </div>
                        <div class="col-span-2 rounded py-4 lg:px-12">
                            <img src="Images/automation_services/erp_right.webp" alt=""
                                class="rounded-2xl w-full h-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 lg:gap-5">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 mb-5">

                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Our Transaction Advisory Services Include:

                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Financial Due Diligence
    </li>
    <p class="text-gray-600 text-medium">
        We perform detailed assessments of target companies’ financial health, quality of earnings, working capital,
        debt, and cash flow — giving you clarity before the deal closes.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Buy-Side Advisory
    </li>
    <p class="text-gray-600 text-medium">
        From target screening to valuation analysis and negotiation support, we help buyers identify the right
        opportunity and pay the right price.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Sell-Side Advisory & Readiness
    </li>
    <p class="text-gray-600 text-medium">
        Planning to sell or raise capital? We prepare you with clean financials, proper documentation, and optimized
        valuations to attract investors.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Business Valuation Services
    </li>
    <p class="text-gray-600 text-medium">
        Independent, defensible valuation reports for mergers & acquisitions, fundraising, internal restructuring,
        or dispute resolution.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Tax Structuring & Advisory
    </li>
    <p class="text-gray-600 text-medium">
        We optimize the tax impact of your transaction by considering both immediate obligations and long-term
        financial implications.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Post-Transaction Integration Support
    </li>
    <p class="text-gray-600 text-medium">
        Ensure a smooth transition after deal closure with integration planning, process alignment, and financial
        systems support.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Transaction Structuring & Negotiation Support
    </li>
    <p class="text-gray-600 text-medium">
        We help design optimal deal structures that align legal, financial, and strategic objectives while minimizing
        risk.
    </p>
</ul>

                                </div>
                            </div>
                        </div>
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                When You Need Us
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Buying or investing in a company</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Selling your business or divesting a unit
                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Raising private equity or venture capital</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Merging with or acquiring a competitor</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Conducting internal reorganization</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Preparing for IPO or SPAC deals</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Seeking valuation or fairness opinions</span>
                                </div>
                            </div>
                        </div>

                        <div class="px-8 mb-5">

                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose [Your Company Name]?

                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Cross-Functional Expertise
    </li>
    <p class="text-gray-600 text-medium">
        Our team brings deep experience across finance, accounting, tax, operations, and legal to deliver
        comprehensive, 360° transaction support.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Industry-Focused Insights
    </li>
    <p class="text-gray-600 text-medium">
        We understand the nuances of your sector — from technology and SaaS to manufacturing, healthcare, retail,
        and beyond.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Risk Mitigation & Value Creation
    </li>
    <p class="text-gray-600 text-medium">
        We don’t just identify risks — we help structure transactions to unlock value and avoid costly surprises.
    </p>

    <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
        Agile, Confidential & Trusted
    </li>
    <p class="text-gray-600 text-medium">
        We work with speed and discretion, protecting your interests while staying closely aligned with your
        leadership team throughout the deal lifecycle.
    </p>
</ul>

                                </div>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        



                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="col-span-1 rounded lg:ps-8 py-4 lg:ps-12">
                            <img src="Images/automation_services/erp_left_end.webp" alt=""
                                class="rounded-2xl w-full h-auto">
                        </div>
                        <div class="col-span-2 rounded py-4 lg:px-12">
                            <img src="Images/automation_services/erp_right_end.webp" alt=""
                                class="rounded-2xl w-full h-full">
                        </div>
                    </div>

                    <div class="px-8 py-4 lg:px-12 mb-5 text-center">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Make Better Decisions. Close Stronger Deals.
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Every transaction is a critical moment for your business. With our Transaction Advisory team by your side, you gain the insight and execution support you need to maximize value and minimize risk.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            </div>

            <!-- Services Grid -->
        </div>
    </section>



    <!-- Newsletter CTA + Scrolling Contact Band End -->
    <!-- <section aria-label="Scrolling contact band" class="">
        <div class="relative bg-[#5956E9] text-white">
            <div class="absolute inset-0 opacity-20 pointer-events-none" style="
          background: radial-gradient(
              60% 120% at 100% 0%,
              rgba(255, 255, 255, 0.25),
              transparent 60%
            ),
            radial-gradient(
              60% 120% at 0% 100%,
              rgba(0, 0, 0, 0.25),
              transparent 60%
            );
        "></div>
            <div class="ticker ticker-mask py-6 md:py-8">
                <div class="ticker__inner">
                    <div class="ticker__track">
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                        <p class="inline-flex items-center gap-3 text-2xl md:text-3xl font-extrabold whitespace-nowrap">
                            Contact
                            <span class="ml-1"><img src="./Images/logo/arrow.svg" alt="" /></span>
                        </p>
                        <span class="text-3xl md:text-4xl"><img src="./Images/logo/star.svg" alt="" /></span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Footer Start -->
    <?php include 'includes/footer.php'; ?>
    <!-- Footer End -->

    <!-- JavaScript for Tabs -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanels = document.querySelectorAll('.tab-panel');

            // Function to show tab content
            function showTab(tabId) {
                // Hide all tab panels
                tabPanels.forEach(panel => {
                    panel.classList.add('hidden');
                });

                // Remove active class from all buttons
                tabButtons.forEach(button => {
                    button.classList.remove('active', 'bg-blue-600', 'text-white');
                    button.classList.add('bg-gray-100', 'text-gray-700');
                });

                // Show selected tab panel
                const selectedPanel = document.getElementById(tabId);
                if (selectedPanel) {
                    selectedPanel.classList.remove('hidden');
                }

                // Add active class to clicked button
                const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
                if (activeButton) {
                    activeButton.classList.add('active', 'bg-blue-600', 'text-white');
                    activeButton.classList.remove('bg-gray-100', 'text-gray-700');
                }
            }

            // Add click event listeners to all tab buttons
            tabButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const tabId = this.getAttribute('data-tab');
                    showTab(tabId);
                });
            });

            // Show first tab by default
            if (tabButtons.length > 0) {
                showTab('hrms');
            }
        });

        // Offcanvas menu functionality
        const menuBtn = document.getElementById("menu-btn");
        const offcanvas = document.getElementById("offcanvas");
        const offcanvasMenu = document.getElementById("offcanvas-menu");
        const closeBtn = document.getElementById("close-btn");

        if (menuBtn && offcanvas && offcanvasMenu && closeBtn) {
            menuBtn.addEventListener("click", () => {
                offcanvas.classList.remove("hidden");
                setTimeout(() => {
                    offcanvasMenu.classList.remove("-translate-x-full");
                }, 10);
            });

            closeBtn.addEventListener("click", () => {
                offcanvasMenu.classList.add("-translate-x-full");
                setTimeout(() => {
                    offcanvas.classList.add("hidden");
                }, 300);
            });

            // Close offcanvas when clicking outside the menu
            offcanvas.addEventListener("click", (e) => {
                if (e.target === offcanvas) {
                    offcanvasMenu.classList.add("-translate-x-full");
                    setTimeout(() => {
                        offcanvas.classList.add("hidden");
                    }, 300);
                }
            });
        }
    </script>

    <script>
        // Mobile services dropdown toggle (offcanvas)
        (function () {
            const mobileServicesBtn = document.getElementById("mobile-services-btn");
            const mobileServicesDropdown = document.getElementById("mobile-services-dropdown");
            if (mobileServicesBtn && mobileServicesDropdown) {
                mobileServicesBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    mobileServicesDropdown.classList.toggle("hidden");
                });
            }

            const nestedDropdownBtns = document.querySelectorAll(".mobile-nested-dropdown-btn");
            nestedDropdownBtns.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const dropdown = btn.nextElementSibling;
                    dropdown.classList.toggle("hidden");
                });
            });
        })();
    </script>
</body>

</html>