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
                Business Consulting</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="advisory_consulting.php" class="text-blue-600">Advisory / Consulting</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="erp.php">ERP Implementation</a></span>
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
                    <div class="grid grid-cols-1 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                               Insight. Strategy. Execution.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                               In today’s fast-moving and competitive environment, every business needs more than just good ideas — it needs a clear strategy, expert guidance, and an actionable roadmap to thrive. At <b>ARSI, our Business Consulting services</b> help you unlock your organization’s full potential through data-driven insights, industry expertise, and hands-on support.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                               Whether you're a startup building your foundation or an established company facing new challenges, we provide the clarity and direction you need to move forward with confidence.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                               What We Do
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                We partner with businesses to solve critical challenges, improve performance, and achieve sustainable growth. Our consulting services are tailored to your needs — whether it's strategy, operations, finance, or digital transformation.

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
                    <div class="grid grid-cols-1">
                        <!-- Left Section: ERP Services Description -->

                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Core Business Consulting Services
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Business Strategy Development</li>
                                    <p class="text-gray-600 text-medium">
                                        Define your vision, goals, and competitive edge. We help you create a focused
                                        strategy that drives long-term success.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Operational Efficiency & Process Improvement</li>
                                    <p class="text-gray-600 text-medium">
                                        Streamline your operations, eliminate inefficiencies, and improve productivity
                                        across your organization.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Planning & Analysis</li>
                                    <p class="text-gray-600 text-medium">
                                        Gain control over your finances. We provide forecasting, budgeting, cost
                                        optimization, and financial modeling support.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Digital Transformation</li>
                                    <p class="text-gray-600 text-medium">
                                        Leverage technology to modernize your business. We guide you through
                                        automation, system integration, and digital adoption.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Market Entry & Growth Strategy</li>
                                    <p class="text-gray-600 text-medium">
                                        Entering a new market or launching a new product? We deliver the market
                                        research and strategy to make your move successful.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Change Management</li>
                                    <p class="text-gray-600 text-medium">
                                        We help your team adapt to change with structured communication, training, and
                                        implementation planning.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Risk & Compliance Advisory</li>
                                    <p class="text-gray-600 text-medium">
                                        Identify risks and ensure regulatory compliance to protect your business and
                                        reputation.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            

                            <div class="space-y-4 mb-5">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?

                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2                                     mb-2">
                                            Customized Solutions
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We don’t offer cookie-cutter advice. Every solution is built around your unique                                     goals, challenges, and industry dynamics.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2                                     mb-2">
                                            Results-Driven Approach
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We focus on measurable outcomes — whether it’s cost savings, revenue growth, or                                     operational improvement.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2                                     mb-2">
                                            Cross-Industry Expertise
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            From manufacturing and retail to SaaS, healthcare, and finance, we bring broad                                  industry knowledge to every engagement.
                                        </p>

                                        <li class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2                                     mb-2">
                                            Collaborative Partnership
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We work with your leadership and teams — not just for you — to ensure alignment,                                    ownership, and long-term success.
                                        </p>
                                    </ul>
                                </div>
                            </div>

                           
                            <div class="space-y-4">
                                 <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Who We Help
                                </h3>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Startups needing strategic direction and growth plans</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">
                                        Small to medium-sized businesses seeking operational efficiency
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">
                                        Enterprises navigating digital transformation or restructuring
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">
                                        Business owners preparing for expansion, funding, or succession

                                    </span>
                                </div>
                                 <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">
                                       Organizations facing specific challenges like low profitability or market decline
                                    </span>
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
                           Let’s Build a Better Business — Together

                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                               You don’t have to face business challenges alone. With ARSI by your side, you gain a trusted advisor dedicated to your success. Let's work together to turn ideas into action and strategy into results.
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
                showTab('crm');
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