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
                Service Details</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <p class="text-gray-900">Payroll Outsourcing</p>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="financial_reporting.php">Financial Reporting Advisory</a></span>
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
            <!-- Section Header -->
            <div class="text-center mb-16">
                <!-- <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Managed Services
                </h2> -->

                <!-- Responsive Tabs -->
                <div class="grid grid-cols-1 md:flex md:flex-wrap justify-center gap-3 mb-8">
                    <!-- <button
                        class="tab-button bg-blue-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="erp">
                        Payroll Outsourcing
                    </button> -->

                </div>
                <!-- <hr class="max-w-full lg:max-w-[84.375rem] mx-auto"> -->
            </div>

            <!-- Tab Content -->
            <div class="mb-16">
                <!-- Accounting Outsourcing Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="grid grid-cols-1 lg:grid-cols-1">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Don't let payroll headaches hold your business back. Partner with ARSI and experience
                                the convenience and reliability of our payroll services
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Managing payroll is a complex and time-consuming task for businesses of all sizes.
                                That's why we offer a range of efficient and reliable solutions to help you streamline
                                your payroll processes and focus on what matters most – growing your business. We offer
                                flexible and comprehensive payroll services using our years of experience, which may
                                curtail significant administrative burden for you.
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

                    <div class="grid grid-col-1 md:grid-cols-2 gap-0">

                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Payroll services includes
                            </h3>
                            <div class="space-y-4">
                                <ol class="list-decimal ps-8">
                                    <li class="font-bold text-md mb-2 mt-2">Payroll Processing: </li>
                                    <p class="text-gray-600 text-medium">
                                        Our expert team will handle all aspects of payroll processing, from calculating
                                        salaries and deductions to generating payslips and reports. With our automated
                                        systems and meticulous attention to detail, you can be rest assured that your
                                        employees will be paid accurately and on time, every time.
                                    </p>
                                    <li class="font-bold text-md mb-2 mt-2">Compliance Management: </li>
                                    <p class="text-gray-600 text-medium">
                                        Staying compliant with the latest tax regulations and labor laws is crucial for
                                        any business. Our dedicated compliance team will ensure that your payroll
                                        practices adhere to all relevant statutes and requirements, minimizing the risk
                                        of penalties and legal issues.
                                    </p>
                                    <li class="font-bold text-md mb-2 mt-2">Statutory Compliance:</li>
                                    <p class="text-gray-600 text-medium">
                                        We'll take care of statutory compliance matters such as PF, ESI, PT, and TDS,
                                        ensuring that your business remains fully compliant with all government
                                        regulations. Our in-depth knowledge of Indian labor laws enables us to provide
                                        tailored solutions that meet your specific needs.
                                    </p>
                                    <li class="font-bold text-md mb-2 mt-2">Employee Self-Service Portal:</li>
                                    <p class="text-gray-600 text-medium">
                                        Empower your employees with our user-friendly self-service portal, where they
                                        can access their pay stubs, tax documents, and other important information
                                        anytime, anywhere. This not only enhances transparency but also reduces
                                        administrative burden on your HR team.
                                    </p>
                                    <li class="font-bold text-md mb-2 mt-2">Customized Reporting:</li>
                                    <p class="text-gray-600 text-medium">
                                        Gain valuable insights into your payroll data with our customized reporting
                                        solutions. Whether you need detailed analyses of payroll expenses, employee
                                        attendance, or tax liabilities, our reports will provide you with the
                                        information you need to make informed decisions
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Why Choose Us
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Expertise:</span>
                                </div>
                                <p class="text-gray-600 font-medium">With years of experience in the industry, we have
                                    the knowledge and expertise to handle even the most complex payroll challenges.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Accuracy: </span>
                                </div>
                                <p class="text-gray-600 font-medium">We prioritize accuracy in everything we do,
                                    ensuring that your payroll is processed with precision and attention to detail.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Security:</span>
                                </div>
                                <p class="text-gray-600 font-medium">Protecting your sensitive payroll data is our top
                                    priority. Our robust security measures safeguard your information against
                                    unauthorized access or breaches.</p>
                                <div class="flex items-center gap-4">
                                    <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Scalability:</span>
                                </div>
                                <p class="text-gray-600 font-medium">Whether you're a small startup or a large
                                    enterprise, our scalable solutions can accommodate your growing business needs.</p>
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
                                <spam><a href="contact.php" class="text-blue-600 font-bold">Contact us</a></spam> to
                                learn more and request a personalized quote
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Payroll Implementation Tab -->
                <!-- <div id="hrms" class="tab-panel hidden">
                    
                </div> -->


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
    <section aria-label="Scrolling contact band" class="">
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
    </section>
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