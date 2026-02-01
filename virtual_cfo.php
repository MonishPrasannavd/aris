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
                Virtual CFO</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                   <a href="advisory_consulting.php" class="text-blue-600">Advisory / Consulting</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="business_consulting.php">Business Consulting</a></span>
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
            <!-- Section Header -->
            <!-- <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Advisory / Consulting
                </h2>

                Responsive Tabs
                <div class="grid grid-cols-1 md:flex md:flex-wrap justify-center gap-3 mb-8">
                    <button
                        class="tab-button bg-blue-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="erp">
                        Financial Reporting Advisory
                    </button>
                    <button
                        class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="hrms">
                        Virtual CFO
                    </button>
                    <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="crm">
                        Business Consulting
                    </button>
                    <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="yapp">
                        YAPP – Your Automation Pain Point
                    </button>
                </div>
                <hr class="max-w-full lg:max-w-[84.375rem] mx-auto">
            </div> -->

            <!-- Tab Content -->
            <div class="mb-16">
                <!-- ERP Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 lg:px-8">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Strategic Financial Leadership — On Demand
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                               Need high-level financial guidance without the cost of a full-time CFO? At <b>[Your Company Name], our Virtual CFO services</b> give you expert financial leadership, strategic insights, and decision-making support — all tailored to your business needs and budget.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                              Whether you're a startup preparing for growth, a scaling business managing complexity, or an established company seeking sharper financial control, our Virtual CFOs act as a true partner in your success.
                            </p>
                            
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                What Is a Virtual CFO?
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                               A <b>Virtual CFO (Chief Financial Officer)</b> is a senior finance expert who works with your business remotely or part-time to provide the strategic financial oversight of a traditional CFO — without the full-time cost or commitment. From financial planning to cash flow management, we help you understand your numbers and use them to drive growth.
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
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Virtual CFO Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Strategy & Planning
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        Develop long-term financial strategies aligned with your business goals, including budgeting, forecasting,
                                        and scenario planning.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Cash Flow & Working Capital Management
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        Gain full visibility into your cash flow and improve liquidity management to support day-to-day operations
                                        and sustainable growth.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        KPI Development & Performance Reporting
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        We define, track, and monitor key performance indicators to enable informed, data-driven decision-making.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Investor & Stakeholder Reporting
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        Prepare clear, professional financial reports for investors, lenders, and board members that tell your
                                        financial story with confidence.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Fundraising & Capital Advisory
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        From seed funding to Series A/B and debt financing, we help you become financially investor-ready.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Risk Management & Compliance
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        Strengthen financial controls, governance, and compliance with tax, regulatory, and audit requirements.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Profitability & Cost Optimization
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        We analyze cost structures, margins, and pricing strategies to improve profitability and financial efficiency.
                                    </p>

                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Finance Team Mentorship
                                    </li>
                                    <p class="text-gray-600 text-medium">
                                        We mentor and support your internal finance team to build a strong, scalable, and sustainable finance function.
                                    </p>
                                </ol>

                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                               Who Needs a Virtual CFO?
                            </h3>
                                                        <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Startups</b> needing strategic financial guidance for fundraising or rapid growth</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>SMBs</b> that have outgrown their bookkeeper or accountant
                                        </span>
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Founders & CEOs</b> who want to focus on business, not the books</span>
                                </div>
                               
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Organizations</b> preparing for M&A, investment, or expansion</span>
                                </div>
                               
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Companies</b> without the budget for a full-time CFO but need high-level financial expertise</span>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            CFO Expertise Without the Overhead
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            Access decades of CFO-level experience at a fraction of the cost of building a full in-house finance leadership team.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Scalable & Flexible Engagements
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            Choose the level of support that fits your needs — monthly oversight, weekly strategy calls, or project-based services.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Industry Insight + Practical Advice
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We combine strategic financial leadership with actionable, real-world recommendations tailored to your industry and growth stage.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            100% Confidential, Independent & Objective
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We act solely in your best interest, delivering independent advice backed by data, experience, and complete confidentiality.
                                        </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                            Let’s Power Your Growth with Financial Clarity

                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Ready to take control of your finances and drive better decisions? Let’s talk about how a Virtual CFO can support your goals and give you a strategic edge.
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


    <!-- Navigation Section -->
    <!-- <section class="mb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-200 rounded-2xl p-8 relative overflow-hidden">
               
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0"
                        style="background: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(0,0,0,0.1) 10px, rgba(0,0,0,0.1) 20px);">
                    </div>
                </div>

               
                <div class="relative flex items-center justify-between">
                   
                    <div class="flex items-center gap-6">
                       
                        <a href="managed_services.php"
                            class="flex items-center justify-center w-16 h-16 bg-white rounded-full border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition-colors duration-200">
                            <span class="flex items-center gap-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                Prev
                            </span>
                        </a>

                       
                        <div class="text-left">
                            <p class="text-md font-bold text-gray-800 leading-tight">
                                Managed services
                            </p>
                        </div>
                    </div>

                   
                    <div class="w-px h-16 bg-purple-300"></div>

                   
                    <div class="flex items-center gap-6">
                       
                        <div class="text-right">
                            <p class="text-md font-bold text-gray-800 leading-tight">
                               Automation Services
                            </p>
                        </div>

                       
                        <a href="automation_services.php"
                            class="flex items-center justify-center w-16 h-16 bg-white rounded-full border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition-colors duration-200">
                            <span class="flex items-center gap-0">
                                Next
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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