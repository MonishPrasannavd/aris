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
                Accounting Outsourcing</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="managed_services.php" class="text-blue-600">Managed Services</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="payroll_outsourcing.php">Payroll Outsourcing</a></span>
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
                <!-- Accounting Outsourcing Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="grid grid-cols-1 gap-8 lg:gap-12">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Focus on Growth. Leave the Numbers to Us.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Running a business comes with enough challenges — accounting doesn’t have to be one of
                                them. Our professional accounting outsourcing services give you access to a team of
                                expert accountants without the cost and complexity of managing an in-house department.
                            </p>
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Why Outsource Your Accounting?
                            </h3>
                            <!-- <p class="text-md text-gray-700 mb-8 leading-relaxed">
                                Unlock the Power of Innovation with the Top ERP Platforms We Proudly Support.
                            </p> -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium"><b>Cost-Effective:</b> Save up to
                                        50% compared to in-house accounting costs.</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium"> <b>Scalable:</b> Our services grow
                                        with your business — from startups to enterprise-level.</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium"><b>Expertise on Demand:</b> Access
                                        to certified accountants and the latest accounting tools.</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium"><b>Time-Saving:</b> Free up your
                                        internal team to focus on core operations and strategic goals.</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium"><b>Accuracy & Compliance:</b>
                                        Minimize errors and stay compliant with local and international
                                        regulations.</span>
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
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Services Include:
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Bookkeeping</span>
                                </div>
                                <p class="text-gray-600 font-medium">Day-to-day recording of financial transactions to
                                    keep
                                    your records organized and audit-ready.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Accounts Payable & Receivable</span>
                                </div>
                                <p class="text-gray-600 font-medium">Timely management of your cash flow with accurate
                                    tracking of invoices and payments</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Financial Reporting</span>
                                </div>
                                <p class="text-gray-600 font-medium">Monthly, quarterly, and annual financial statements
                                    to
                                    help you make informed decisions.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Tax Preparation & Filing</span>
                                </div>
                                <p class="text-gray-600 font-medium">Expert support for corporate and personal tax
                                    planning,
                                    preparation, and compliance.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">CFO Services</span>
                                </div>
                                <p class="text-gray-600 font-medium">Strategic financial guidance and forecasting to
                                    drive
                                    sustainable growth.</p>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Process
                            </h3>
                            <div class="space-y-4">
                                <ol class="list-decimal ps-8">
                                    <li class="font-bold text-md mt-2 mb-2">Discovery Call</li>
                                    <p class="text-gray-600 text-medium">
                                        We understand your current setup and specific needs
                                    </p>
                                    <li class="font-bold text-md mt-2 mb-2">Onboarding</li>
                                    <p class="text-gray-600 text-medium">
                                        Seamless integration with your systems and processes.
                                    </p>
                                    <li class="font-bold text-md mt-2 mb-2">Execution</li>
                                    <p class="text-gray-600 text-medium">
                                        Dedicated accountants manage your finances with precision.
                                    </p>
                                    <li class="font-bold text-md mt-2 mb-2">Reporting & Insights</li>
                                    <p class="text-gray-600 text-medium">
                                        Regular updates and financial dashboards.
                                    </p>
                                </ol>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            40+ man years of experience</li>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Certified Professionals (CA, CMA, CPA)</li>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Secure, Cloud-Based Systems</li>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Transparent Pricing with No Hidden Fees</li>
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            24/7 Support and Real-Time Communication</li>

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
                            Lets Talk
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Ready to streamline your accounting and boost your bottom line?
                                <span> <a href="contact.php" class="text-blue-600 font-bold">Contact us today</a>
                                </span> for a free consultation and discover how outsourcing can transform your
                                finance function

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
                        
                        <a href="tax_services.php"
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
                                Tax<br>(Tax compliance & Tax Planning)
                            </p>
                        </div>
                    </div>

                    
                    <div class="w-px h-16 bg-purple-300"></div>

                    
                    <div class="flex items-center gap-6">
                       
                        <div class="text-right">
                            <p class="text-md font-bold text-gray-800 leading-tight">
                                Advisory / Consulting
                            </p>
                        </div>

                       
                        <a href="advisory_services.php"
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