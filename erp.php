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
                    <p class="text-gray-900">ERP Implementation</p>
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
            <!-- Section Header -->
            <div class="text-center mb-16">
                <!-- <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Automation
                </h2> -->

                <!-- Responsive Tabs -->
                <div class="grid grid-cols-1 md:flex md:flex-wrap justify-center gap-3 mb-8">
                    <!-- <button
                        class="tab-button bg-blue-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="erp">
                        ERP implementation
                    </button> -->
                    <!-- <button
                        class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="hrms">
                        HRMS implementation
                    </button>
                    <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="crm">
                        CRM implementation
                    </button>
                    <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="yapp">
                        YAPP – Your Automation Pain Point
                    </button> -->
                </div>
                <!-- <hr class="max-w-full lg:max-w-[84.375rem] mx-auto"> -->
            </div>

            <!-- Tab Content -->
            <div class="mb-16">
                <!-- ERP Implementation Tab -->
                <div id="erp" class="tab-panel">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-8 mb-5">
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
                        <div class="px-8 py-4 lg:px-12 mb-5">
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

                <!-- HRMS Implementation Tab -->
                <div id="hrms" class="tab-panel hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Transform the Way You Manage People
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                At [Your Company Name], we deliver comprehensive <b>HRMS (Human Resource Management
                                    System) implementation services</b> that empower businesses to manage their
                                workforce more effectively. From hiring to retirement, we help you digitize and optimize
                                every aspect of the employee lifecycle — enabling smarter decisions, higher engagement,
                                and greater productivity.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Why Implement HRMS?
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Managing people is complex — but your HR systems don’t have to be. A modern HRMS
                                centralizes employee data, automates HR processes, and gives you real-time visibility
                                into your workforce. Whether you're a growing startup or a large enterprise, the right
                                HRMS can transform your HR function from administrative to strategic.
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
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        HRMS Strategy & Consulting</li>
                                    <p class="text-gray-600 text-medium">
                                        We assess your current HR processes and define the best-fit HRMS roadmap aligned
                                        with your business goals.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Vendor Selection & Licensing</li>
                                    <p class="text-gray-600 text-medium">

                                        From SAP SuccessFactors to Workday, Oracle HCM, BambooHR, and others — we help
                                        you choose the platform that suits your needs.

                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Full-Cycle HRMS Implementation</li>
                                    <p class="text-gray-600 text-medium">
                                        From planning to configuration, integration, testing, and rollout, we manage
                                        every phase of the implementation.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Customization & Integration</li>
                                    <p class="text-gray-600 text-medium">
                                        We tailor the system to match your HR policies and integrate it with payroll,
                                        ERP, CRM, and other business tools.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Data Migration</li>
                                    <p class="text-gray-600 text-medium">
                                        Secure, accurate transfer of employee data, historical records, and compliance
                                        information.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Training & Change Management</li>
                                    <p class="text-gray-600 text-medium">
                                        We provide hands-on training and support for HR teams and employees to ensure
                                        fast adoption
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Post-Go-Live Support</li>
                                    <p class="text-gray-600 text-medium">
                                        We offer ongoing support, maintenance, and updates to keep your HRMS performing
                                        at its best.
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
                                Let our experts guide your HR digital transformation. Whether you're implementing a new
                                HRMS or upgrading an existing system, we ensure a smooth and successful transition.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CRM Implementation Tab -->
                <div id="crm" class="tab-panel hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Build Stronger Customer Relationships with Smarter Solutions
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                At <b>ARSI</b>, we help businesses transform the way they manage sales, service, and
                                customer relationships through end-to-end <b>CRM implementation services</b>. From
                                strategy to execution, our team ensures a seamless CRM rollout that enhances your
                                customer experience, streamlines your sales process, and drives measurable business
                                growth
                            </p>


                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Why CRM Implementation Matters
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                In today’s competitive market, <b>customer experience is everything</b>. A
                                well-implemented CRM (Customer Relationship Management) system allows your business to
                                centralize customer data, automate sales and service workflows, and provide personalized
                                experiences that build loyalty and drive revenue.
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
                                Our CRM Implementation Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        CRM Strategy & Planning</li>
                                    <p class="text-gray-600 text-medium">

                                        We assess your current customer management processes and define a roadmap
                                        aligned with your goals.


                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        CRM Platform Selection</li>
                                    <p class="text-gray-600 text-medium">
                                        Whether you need Salesforce, HubSpot, Microsoft Dynamics, Zoho, or another
                                        solution, we help you choose the best-fit platform for your business size,
                                        industry, and needs.

                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        System Design & Configuration</li>
                                    <p class="text-gray-600 text-medium">
                                        We configure your CRM with custom fields, workflows, dashboards, and modules to
                                        match how your business operates.

                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Data Migration & Integration</li>
                                    <p class="text-gray-600 text-medium">

                                        We handle secure data migration from legacy systems and integrate your CRM with
                                        tools like ERP, marketing automation, email, and support platforms.

                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        User Training & Adoption</li>
                                    <p class="text-gray-600 text-medium">
                                        Our hands-on training programs ensure your teams understand how to use the CRM
                                        effectively from day one.

                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Post-Implementation Support</li>
                                    <p class="text-gray-600 text-medium">
                                        We offer ongoing support, system optimization, and performance monitoring to
                                        keep your CRM running smoothly.through automation, system integration, and
                                        digital adoption.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    CRM Features We Enable
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Lead & Opportunity Management
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Sales Pipeline Automation

                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Customer Data Centralization
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Email & Marketing Automation</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Customer Service & Support Tickets
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">

                                            Task Management & Reminders
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">

                                            Real-Time Reporting & Dashboards
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">

                                            Mobile CRM Access
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">

                                            Role-Based Access Controls
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">

                                            Third-Party Integrations (Outlook, Gmail, Slack, etc.)</span>
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
                                    Platforms We Specialize In
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Salesforce CRM
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            HubSpot CRM
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Microsoft Dynamics 365 CRM
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Zoho CRM
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Pipedrive
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Freshsales
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            SugarCRM
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            And more...</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Benefits of a Successful CRM Implementation
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Improved sales forecasting and performance

                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Centralized and accessible customer data

                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Better customer service and response times
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Increased customer retention and loyalty
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Streamlined communication and collaboration
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Real-time analytics and actionable insights
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 py-4 lg:px-12 mb-5 text-center">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Ready to Transform Your Customer Relationships?
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Let our CRM experts help you unlock the full potential of your customer data. Whether
                                you're implementing a new CRM or optimizing an existing one, we ensure a smooth,
                                efficient, and results-driven implementation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- YAPP Tab -->
                <div id="yapp" class="tab-panel hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <!-- Left Section: ERP Services Description -->
                        <div class="py-4 lg:px-8 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Struggling to Automate? You're Not Alone.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Automation promises efficiency, scalability, and cost savings — but for many businesses,
                                the journey is anything but smooth. At [Your Company Name], we understand the
                                frustration of failed automation projects, disconnected tools, and processes that still
                                rely on manual effort. This page is for you — if you're stuck, overwhelmed, or unsure
                                where to begin.
                            </p>


                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                Where Are You Feeling the Pain?
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Sales & Marketing:</b> Leads falling through the cracks?
                                        Campaigns not converting?
                                    </span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>HR & Onboarding:</b> Too many forms, emails, or approvals?

                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Finance:</b> Manual invoice processing, slow
                                        reconciliations?
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md"><b>Customer Support:</b>Repetitive ticket handling and delayed
                                        responses?</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md">
                                        <b>Operations:</b> Inefficient workflows and missed steps?
                                    </span>
                                </div>
                                <b>We’ve seen it all — and we’ve solved it.</b>
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
                                Common Automation Pain Points We Solve
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['🚫'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Manual, Time-Consuming Processes</li>
                                    <p class="text-gray-600 text-medium">
                                        Are your teams still juggling spreadsheets, email chains, or repetitive tasks?
                                        We help identify and automate the bottlenecks that slow your business down.
                                    </p>

                                    <li
                                        class="before:content-['⚠️'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Disconnected Systems & Tools</li>
                                    <p class="text-gray-600 text-medium">

                                        Using multiple platforms that don’t “talk” to each other? We design integrated
                                        automation workflows that eliminate silos and data inconsistencies.
                                    </p>
                                    <li
                                        class="before:content-['🔍'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Lack of Visibility & Control</li>
                                    <p class="text-gray-600 text-medium">

                                        Struggling to get real-time insights into operations, tasks, or customer
                                        interactions? We implement dashboards and reporting that put you back in
                                        control.
                                    </p>
                                    <li
                                        class="before:content-['📉'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Failed or Stalled Automation Initiatives</li>
                                    <p class="text-gray-600 text-medium">

                                        Have automation projects gone over budget, beyond deadlines, or failed to
                                        deliver ROI? We step in with expert project recovery, optimization, and support.
                                    </p>
                                    <li
                                        class="before:content-['👥'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Low User Adoption</li>
                                    <p class="text-gray-600 text-medium">

                                        Even the best automation fails without buy-in. We create intuitive systems with
                                        training and change management to ensure successful adoption.
                                    </p>

                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Our Approach to Fixing Automation Challenges
                                </h3>
                                <div class="space-y-4">
                                    <ol class="ps-0">
                                        <li
                                            class="before:content-['1'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Listen First</li>
                                        <p class="text-gray-600 text-medium">

                                            We start by understanding your pain points, workflows, and goals.

                                        </p>

                                        <li
                                            class="before:content-['2'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Audit & Assess</li>
                                        <p class="text-gray-600 text-medium">
                                            Our experts evaluate your current systems, tools, and processes to uncover
                                            root causes.
                                        </p>
                                        <li
                                            class="before:content-['3'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Design Smarter Workflows</li>
                                        <p class="text-gray-600 text-medium">
                                            We design customized automation strategies that align with your business —
                                            not the other way around.

                                        </p>
                                        <li
                                            class="before:content-['4'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Implement & Integrate Initiatives</li>
                                        <p class="text-gray-600 text-medium">
                                            We use the right tools (like Zapier, Power Automate, UiPath, Make, or custom
                                            scripts) to build scalable automations.

                                        </p>
                                        <li
                                            class="before:content-['5'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Train & Support</li>
                                        <p class="text-gray-600 text-medium">

                                            Your team gets hands-on training, documentation, and post-launch support to
                                            make automation stick.
                                        </p>

                                    </ol>
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
                            Let’s Turn Pain Into Performance
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Don’t let automation become another headache. Whether you’re just starting or trying to
                                fix what’s broken, we’re here to help. Let’s talk about your automation pain points —
                                and how we can eliminate them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
        </div>
    </section>


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