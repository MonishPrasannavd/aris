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
                HRMS Implementation</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="automation.php" class="text-blue-600">Automation</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="crm.php">CRM Implementation</a></span>
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
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Left side navigation -->
                <div class="lg:col-span-1 order-last lg:order-first">
                    <?php include 'includes/servicenav.php'; ?>
                </div>
            <div class="lg:col-span-3 order-first lg:order-last">
            <!-- Tab Content -->
            <div class="mb-16">
                <!-- HRMS Implementation Tab -->
                <div id="hrms" class="tab-panel">
                    <div class="grid grid-cols-1 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 mb-5 ">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Transform the Way You Manage People
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                At [Your Company Name], we deliver comprehensive <b>HRMS (Human Resource Management System) implementation services</b> that empower businesses to manage their workforce more effectively. From hiring to retirement, we help you digitize and optimize every aspect of the employee lifecycle — enabling smarter decisions, higher engagement, and greater productivity.
                            </p>
                            
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Why Implement HRMS?
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Managing people is complex — but your HR systems don’t have to be. A modern HRMS centralizes employee data, automates HR processes, and gives you real-time visibility into your workforce. Whether you're a growing startup or a large enterprise, the right HRMS can transform your HR function from administrative to strategic.
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
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-5">
                        <!-- Left Section: ERP Services Description -->
                        
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                What We Offer
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">HRMS Strategy & Consulting</li>
                                    <p class="text-gray-600 text-medium">
                                        We assess your current HR processes and define the best-fit HRMS roadmap aligned with your business goals.
                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">Vendor Selection & Licensing</li>
                                    <p class="text-gray-600 text-medium">
                                        
                                        From SAP SuccessFactors to Workday, Oracle HCM, BambooHR, and others — we help you choose the platform that suits your needs.

                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">Full-Cycle HRMS Implementation</li>
                                    <p class="text-gray-600 text-medium">                                       
                                        From planning to configuration, integration, testing, and rollout, we manage every phase of the implementation.
                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">Customization & Integration</li>
                                    <p class="text-gray-600 text-medium">                                      
                                        We tailor the system to match your HR policies and integrate it with payroll, ERP, CRM, and other business tools.
                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">Data Migration</li>
                                    <p class="text-gray-600 text-medium">                                       
                                        Secure, accurate transfer of employee data, historical records, and compliance information.   
                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">Training & Change Management</li>
                                    <p class="text-gray-600 text-medium">  
                                        We provide hands-on training and support for HR teams and employees to ensure fast adoption                                        
                                    </p>
                                    <li class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2"> Post-Go-Live Support</li>
                                    <p class="text-gray-600 text-medium">
                                        We offer ongoing support, maintenance, and updates to keep your HRMS performing at its best.
                                    </p>
                                    
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Key Modules We Implement
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Employee Information Management
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Recruitment & Onboarding
                                            </span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Payroll & Compensation</span>
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Time & Attendance</span>
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Performance Management</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Learning & Development</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Leave Management</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Benefits Administration</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Employee Self-Service (ESS) Portals</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Compliance & Reporting</span>
                                    </div>
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
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-5">
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Benefits of HRMS Implementation
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Centralized and accurate employee data
                                            
                                            
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Automation of time-consuming HR tasks
                                            
                                            </span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Improved compliance and reporting
                                            
                                        </span>
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Enhanced employee experience and self-service
                                            
                                        </span>
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                         Better talent management and retention
                                            
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Scalable systems to support growth</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Platforms We Work With
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">SAP SuccessFactors
                                            
                                            
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Workday HCM
                                            
                                            </span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Oracle HCM Cloud
                                           
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"> UKG (Ultimate Kronos Group)
                                            </span></span>
                                    </div>
                                   
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Zoho People
                                            </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">BambooHR
                                            </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">ADP Workforce Now
                                           </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">GreytHR
                                           </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">And more...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="px-8 py-4 lg:px-12 mb-5 text-center">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Ready to Elevate Your HR Operations?
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Let our experts guide your HR digital transformation. Whether you're implementing a new HRMS or upgrading an existing system, we ensure a smooth and successful transition.
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

    <!-- JavaScript for Tabs -->
    <script>
        

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