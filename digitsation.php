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
                Digitsation - E Records</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="tax.php" class="text-blue-600">Tax (Tax Compliance and Tax Planning)</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"> <a href="accounting_outsourcing.php">Accounting Outsourcing</a></span>
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

                <!-- Right side content -->
        <div class="lg:col-span-3 order-first lg:order-last">
            

            <!-- Tab Content -->
            <div class="mb-16">
                <!-- ERP Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="px-8 mb-5">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                           Transform Paper into Power: Go Digital with Confidence
                        </h3>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                            Managing paper-based records is not only time-consuming and costly — it also increases the risk of loss, inefficiency, and non-compliance. At <b>ARSI,</b> we help organizations transition into the digital age with secure, scalable, and compliant <b>e-records digitisation</b> solutions.

                        </p>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                            Whether you're modernizing your archives, improving data accessibility, or meeting regulatory demands, our digitisation services ensure your records are preserved, searchable, and future-ready.

                        </p>
                    </div>
                    <div class="grid grid-cols-1 gap-8 lg:gap-2">
                        <div class="px-8 mb-5">

                           <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6"> Why Digitise Your Records?</h3>
                            <div class="space-y-4 mt-2 mb-2">
                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Easy Access</span>
                                    <p class="text-gray-600 text-medium">
                                        Retrieve documents instantly from anywhere, enabling faster decision-making                         and improved collaboration across teams.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Improved Compliance</span>
                                    <p class="text-gray-600 text-medium">
                                        Meet regulatory, audit, and legal requirements with organized records,                      version control, and clear audit trails.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Enhanced Security</span>
                                    <p class="text-gray-600 text-medium">
                                        Protect sensitive data with role-based access, encryption, and secure                       storage to prevent unauthorized access.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Disaster Recovery</span>
                                    <p class="text-gray-600 text-medium">
                                        Reduce risk from fire, flood, theft, or physical deterioration with                         reliable digital backups and recovery options.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Reduced Costs</span>
                                    <p class="text-gray-600 text-medium">
                                        Save on physical storage, manual handling, and administrative labor while                       improving overall operational efficiency.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div>
                                    <span class="text-md font-bold">✅ Sustainable Operations:</span>
                                    <p class="text-gray-600 text-medium">
                                        Go paperless and reduce your environmental footprint
                                    </p>
                                </div>
                            </div>


                           
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="mt-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Our Digitisation Services Include:</h3>
                            <!-- <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Our Tax Services
                            </h3> -->
                            <ul class="ps-0">
                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Document Scanning & Imaging
                                </li>
                                <p class="text-gray-600 text-medium">
                                    High-resolution scanning of paper records, books, blueprints, and legacy documents using advanced imaging equipment.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    OCR & Intelligent Data Capture
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Convert scanned images into searchable, indexable, and editable text using OCR and AI-powered data extraction technologies.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Indexing & Metadata Tagging
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Organize documents using keywords, categories, and custom metadata for fast, accurate search and retrieval.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Secure Digital Storage & Access
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Store records in encrypted cloud or on-premise systems with role-based access controls to protect sensitive information.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Electronic Records Management Systems (ERMS)
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Implement robust ERMS platforms to manage the complete lifecycle of digital records — from capture to retention and disposal.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Bulk Archival Conversion
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Digitize large volumes of archived or historical records efficiently, with minimal disruption to ongoing operations.
                                </p>

                                <li
                                    class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                    Compliance & Retention Policy Support
                                </li>
                                <p class="text-gray-600 text-medium">
                                    Ensure digitized documents comply with regulatory and industry standards such as GDPR, HIPAA, and ISO requirements.
                                </p>
                            </ul>

                            
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
                                Who We Serve
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Government Agencie</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Healthcare Institutions & Clinics

                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Legal & Financial Firms</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Educational Institutions</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Corporates & SMEs</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Libraries & Museums</span>
                                </div>
                                 <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Real Estate & Infrastructure Companies</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 mb-5">

                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Our Process
                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Assessment & Audit
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            We begin with a detailed needs analysis and evaluation of your existing records, formats, and retention policies.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Digitisation Planning
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            A customized digitisation strategy is created based on document volume, formats, compliance requirements, and budget.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Secure Collection & Scanning
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            Documents are securely collected and scanned using strict confidentiality controls and chain-of-custody protocols.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Indexing & Quality Checks
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            Files are indexed accurately with metadata and validated through multi-stage quality checks to ensure precision.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Digital Delivery & Integration
                                        </li>
                                        <p class="text-gray-600 text-medium">
                                            Final digitized files are delivered in your preferred formats and seamlessly integrated into your DMS or cloud storage.
                                        </p>
                                    </ul>

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
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Trusted Experience</li>
                                        <p class="text-gray-600 text-medium">
                                           We’ve helped organizations across sectors go digital securely and efficiently.

                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                           Scalable Capacity</li>
                                        <p class="text-gray-600 text-medium">
                                            From a few hundred documents to millions of records — we scale with your needs.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                             Compliance-First Approach</li>
                                        <p class="text-gray-600 text-medium">
                                            We understand the legal and regulatory landscape around digital records.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            End-to-End Support</li>
                                        <p class="text-gray-600 text-medium">
                                            From strategy to execution to post-project support, we’re with you every step of the way.
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
                            Let’s Digitise Your Records — and Your Future

                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Go paperless. Go secure. Go efficient. With ARSI, digitisation is more than scanning — it’s transforming how your organization accesses, manages, and protects its information.
                            </p>
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