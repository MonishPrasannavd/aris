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
                Automation</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="services.php" class="text-blue-600">Services</a>
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
            <!-- Section Header -->
            <div class="hidden text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Automation
                </h2>

                <!-- Responsive Tabs -->
                <div class="grid grid-cols-1 md:flex md:flex-wrap justify-center gap-3 mb-8">
                    <!-- <button
                        class="tab-button bg-blue-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="erp">
                        Financial Reporting Advisory
                    </button> -->
                    <!-- <button
                        class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="hrms">
                        Virtual CFO
                    </button>
                    <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="crm">
                        Business Consulting
                    </button> -->
                    <!-- <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="yapp">
                        YAPP – Your Automation Pain Point
                    </button> -->
                </div>
                <hr class="max-w-full lg:max-w-[84.375rem] mx-auto">
            </div>

            <!-- Tab Content -->
            <div class="mb-10">
                <!-- ERP Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-8">
                            
                            <p class="text-md text-gray-700 leading-relaxed">
                                Our Automation services help organizations transform their core business processes through the effective implementation of modern digital systems. We enable businesses to move away from manual, fragmented workflows and adopt integrated, technology-driven solutions that enhance efficiency, accuracy, and scalability
                            </p>

                        </div>
                        <div class="px-8 py-4 lg:px-8">  
                            <p class="text-md text-gray-700 leading-relaxed">
                                Our automation approach focuses on selecting the right tools, configuring them to fit your processes, and ensuring successful adoption through change management and ongoing support. The result is a connected, efficient, and scalable operating environment that supports growth and informed decision-making
                            </p>
                        </div>
                        <div class="px-8 py-4 lg:px-8">  
                            <p class="text-md text-gray-700 leading-relaxed">
                                We specialize in <b>ERP implementation for finance</b>, helping organizations streamline accounting, reporting, compliance, and financial controls through robust, system-driven processes. Our approach ensures seamless integration with existing operations while providing real-time visibility into financial performance. By leveraging smart automation and intelligent workflows, we help you reduce manual effort, minimize errors, and accelerate decision-making. From routine transactions to complex financial operations, we transform traditional finance functions into agile, data-driven systems.
                            </p>
                        </div>
                        <div class="px-8 py-4 lg:px-8">  
                            <p class="text-md text-gray-700 leading-relaxed mb-3">
                               In the <b>HR domain</b>, we implement HRMS solutions that simplify employee lifecycle management—from onboarding and payroll integration to attendance, performance, and compliance management. These systems empower HR teams with better data, automation, and improved employee experiences.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed">
                               We also deliver <b>CRM implementations</b> that help businesses strengthen customer engagement, improve sales effectiveness, and gain actionable insights across the customer lifecycle. By aligning technology with business objectives, we ensure that CRM systems drive measurable value rather than just data capture.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="col-span-1 rounded lg:ps-8 py-4 lg:ps-12">
                            <img src="Images/automation_services/erp_left.webp" alt=""
                                class="rounded-2xl w-full h-auto">
                        </div>
                        <div class="col-span-2 rounded py-4 lg:px-12">
                            <img src="Images/automation_services/erp_right.webp" alt=""
                                class="rounded-2xl w-full h-full">
                        </div>
                    </div> -->
                    <h4 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight ps-6">YAPP – Your Automation Pain Point</h4>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-5">
                        
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-8 mb-5 lg:mb-0">
                            
                            <p class="text-md text-gray-700 leading-relaxed mb-3">
                               Many organizations have processes that slow them down—manual tasks, disconnected systems, repetitive approvals, and data silos. <b>YAPP (Your Automation Pain Point)</b> is our focused automation offering designed to eliminate these inefficiencies and transform the way your business operates.
                               YAPP identifies high-impact automation opportunities across finance, HR, operations, and compliance, and converts them into smart, scalable digital workflows. Instead of forcing generic tools, we design solutions around your specific pain points—ensuring automation that actually works in your environment.
                            </p>
                        </div>
                        <div class="px-8 py-4 lg:px-8 mb-5 lg:mb-0">
                            
                            <p class="text-md text-gray-700 leading-relaxed mb-3">
                               Our solutions leverage a combination of <b>Robotic Process Automation (RPA), system integrations, workflow automation, and intelligent dashboards</b> to streamline processes end-to-end. From automating reconciliations, approvals, and reporting to integrating ERPs, HRMS, CRMs, and third-party applications, we help create a connected, efficient operating ecosystem.
                            </p>
                        </div>
                         <div class="px-8 py-4 lg:px-8 mb-5 lg:mb-0">
                            <h4 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">What YAPP delivers:</h4>
                            <ul class="list-disc list-inside text-md text-gray-700 leading-relaxed">
                                <li>Automation of repetitive, rule-based processes</li>
                                <li>Seamless integration between ERP, HRMS, CRM, and other systems</li>
                                <li>Reduction in manual effort, errors, and turnaround time</li>
                                <li>Improved visibility through real-time dashboards and alerts</li>
                                <li>Scalable solutions that grow with your business</li>
                            </ul>
                            <!-- <p class="text-md text-gray-700 leading-relaxed mb-3">
                              YAPP is technology-agnostic and outcome-driven. We focus on solving real operational challenges—whether it’s automating finance close processes, streamlining employee lifecycle workflows, or enabling data to flow seamlessly across systems.
                              With YAPP, automation is not just about efficiency—it’s about enabling smarter decisions, faster execution, and sustainable growth.
                            </p> -->
                        </div>
                        <div class="px-8 py-4 lg:px-8 mb-5 lg:mb-0 lg:mt-12">
                            <!-- <h4 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">What YAPP delivers:</h4>
                            <ul class="list-disc list-inside text-md text-gray-700 leading-relaxed">
                                <li>Automation of repetitive, rule-based processes</li>
                                <li>Seamless integration between ERP, HRMS, CRM, and other systems</li>
                                <li>Reduction in manual effort, errors, and turnaround time</li>
                                <li>Improved visibility through real-time dashboards and alerts</li>
                                <li>Scalable solutions that grow with your business</li>
                            </ul> -->
                            <p class="text-md text-gray-700 leading-relaxed mb-3">
                              YAPP is technology-agnostic and outcome-driven. We focus on solving real operational challenges—whether it’s automating finance close processes, streamlining employee lifecycle workflows, or enabling data to flow seamlessly across systems.
                              With YAPP, automation is not just about efficiency—it’s about enabling smarter decisions, faster execution, and sustainable growth.
                            </p>
                        </div>



                    </div>

                    <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="col-span-1 rounded lg:ps-8 py-4 lg:ps-12">
                            <img src="Images/automation_services/erp_left_end.webp" alt=""
                                class="rounded-2xl w-full h-auto">
                        </div>
                        <div class="col-span-2 rounded py-4 lg:px-12">
                            <img src="Images/automation_services/erp_right_end.webp" alt=""
                                class="rounded-2xl w-full h-full">
                        </div>
                    </div> -->

                    <!-- <div class="px-8 py-4 lg:px-12 mb-5 text-center">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Let’s Strengthen Your Financial Reporting
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                With our <b class="text-blue-700">Financial Reporting Advisory services</b>, you gain
                                more than compliance — you gain clarity, confidence, and control. Let us help you
                                deliver financial information that builds trust and supports strategic decisions.

                            </p>
                        </div>
                    </div> -->
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