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
                ERP Implementation</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="automation.php" class="text-blue-600">Automation</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="hrms.php">HRMS Implementation</a></span>
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
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Streamline Operations. Drive Growth. Empower Your Business
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                At ARSI, we specialize in end-to-end ERP implementation services that help businesses
                                unify their processes, enhance productivity, and gain real-time insights. Whether you're
                                upgrading from legacy systems or adopting ERP for the first time, our experienced team
                                ensures a seamless transition tailored to your unique business needs.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Proven Expertise</li>
                                        <p class="text-gray-600 text-medium">
                                            With years of hands-on experience across industries, we deliver ERP
                                            solutions that work — on time and within budget.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Tailored Solutions</li>
                                        <p class="text-gray-600 text-medium">
                                            We don’t believe in one-size-fits-all. Our implementation process is fully
                                            customized to align with your workflows, goals, and business culture.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            End-to-End Support</li>
                                        <p class="text-gray-600 text-medium">
                                            From discovery and planning to training and post-launch support, we’re with
                                            you every step of the way.
                                        </p>
                                    </ul>
                                </div>
                            </div>
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
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-5">
                        <!-- Left Section: ERP Services Description -->

                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                Our ERP Implementation Process
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['1'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Discovery & Needs Assessment</li>
                                    <p class="text-gray-600 text-medium">
                                        We begin by understanding your business processes, pain points, and goals to
                                        define the right ERP strategy.

                                    </p>
                                    <li
                                        class="before:content-['2'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        System Selection</li>
                                    <p class="text-gray-600 text-medium">
                                        We help you choose the best ERP platform for your industry and scale — whether
                                        it’s SAP, Oracle, Microsoft Dynamics, NetSuite, or others.
                                    </p>
                                    <li
                                        class="before:content-['3'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Planning & Roadmap</li>
                                    <p class="text-gray-600 text-medium">
                                        Our team develops a detailed implementation plan, complete with timelines,
                                        milestones, and resource allocation.
                                    </p>
                                    <li
                                        class="before:content-['4'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Customization & Integration</li>
                                    <p class="text-gray-600 text-medium">
                                        We tailor the ERP system to your needs and integrate it with existing systems
                                        like CRM, HR, finance, or supply chain.
                                    </p>
                                    <li
                                        class="before:content-['5'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Data Migration</li>
                                    <p class="text-gray-600 text-medium">
                                        We ensure a secure, accurate transfer of your historical data into the new ERP
                                        system.
                                    </p>
                                    <li
                                        class="before:content-['6'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Testing & Quality Assurance</li>
                                    <p class="text-gray-600 text-medium">
                                        Rigorous testing is conducted to ensure every module functions flawlessly before
                                        going live.
                                    </p>
                                    <li
                                        class="before:content-['7'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Training & Change Management</li>
                                    <p class="text-gray-600 text-medium">
                                        We equip your team with the training and tools they need to adapt and thrive in
                                        the new ERP environment.
                                    </p>
                                    <li
                                        class="before:content-['8'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Go-Live & Ongoing Support</li>
                                    <p class="text-gray-600 text-medium">
                                        Once live, we continue to monitor performance, address issues, and provide
                                        updates as needed.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                ERP Platforms We Support
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Oracle ERP Cloud
                                    </span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">SAP S/4HANA
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Microsoft Dynamics 365</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">NetSuite</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">And more...</span>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Benefits of a Successful ERP Implementation
                                </h3>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Improved operational efficiency
                                    </span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Real-time business insights
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Reduced manual errors and redundancy</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Scalable processes for future growth</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Enhanced collaboration across departments</span>
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
                            Ready to Transform Your Business?
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Let us guide you through a successful ERP journey. Contact us today for a free
                                consultation and see how we can help your business scale smarter and faster.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
             </div>
            </div>
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
                showTab('erp');
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

    <!-- <script>
        
        (function () {
            const mobileServicesBtn = document.getElementById("mobile-services-btn");
            const mobileServicesDropdown = document.getElementById("mobile-services-dropdown");
            if (mobileServicesBtn && mobileServicesDropdown) {
                mobileServicesBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    mobileServicesDropdown.classList.toggle("hidden");
                });
            }
        })();
    </script> -->
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