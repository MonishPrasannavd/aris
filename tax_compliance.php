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
                Tax Compliance & Tax Advisory Services</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="tax.php" class="text-blue-600">Tax (Tax Compliance and Tax Planning)</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium"><a href="transaction_advisory.php">Transaction advisory</a></span>
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
                    <div class="px-8 py-4 lg:px-8 mb-5">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            Minimize Risk. Maximize Opportunity.
                        </h3>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                            Navigating the ever-changing tax landscape is complex — but it doesn’t have to be
                            overwhelming. At ARSI, we provide end-to-end Tax Compliance and Tax Advisory services to
                            help businesses and individuals stay compliant, reduce tax liabilities, and make informed
                            financial decisions.
                        </p>
                        <p class="text-md text-gray-700 leading-relaxed mb-6">
                            Whether you're managing local obligations or expanding globally, our experienced tax
                            professionals deliver the insights, accuracy, and support you need to stay ahead.
                        </p>
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 text-center">
                            Our Tax Services
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-2">
                        <div class="px-8 py-4 lg:px-12 mb-5">

                            <h2 class="text-md text-blue-600 font-bold mb-2">✅ Tax Compliance</h2>

                            <p class="text-md text-gray-700 leading-relaxed">
                                Ensure full and timely compliance with all tax regulations — local, national, and
                                international.
                            </p>
                            <div class="space-y-4 mt-2 mb-2">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Corporate Tax Return Preparation & Filing</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">GST / VAT / Sales Tax Reporting
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Payroll Tax Compliance</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Withholding Tax Management</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Transfer Pricing Documentation & Reporting</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Tax Provisioning & Year-End Support</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Regulatory Filings & Correspondence with Tax
                                        Authorities</span>
                                </div>
                            </div>
                            <p class="text-md text-gray-700 leading-relaxed">
                                We handle the details so you can focus on running your business with peace of mind.
                            </p>
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-md text-blue-600 font-bold mb-2">✅ Tax Advisory</h3>
                            <!-- <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Our Tax Services
                            </h3> -->
                            <p class="text-md text-gray-700 leading-relaxed">
                                Take a proactive approach to tax planning and strategy to optimize your financial
                                outcomes.
                            </p>
                            <div class="space-y-4 mt-2 mb-2">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Tax Planning for Businesses & Individuals</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Entity Structure Advisory (LLC, LLP, C-Corp, etc.)
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Cross-Border & International Tax Structuring</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Transaction & M&A Tax Advisory</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Capital Gains, Dividends, and Investment Tax
                                        Optimization</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Succession & Estate Tax Planning</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Tax Risk Mitigation & Audit Defense</span>
                                </div>
                            </div>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Our experts stay up to date with tax laws so you can stay ahead of the curve.
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
                                Who We Serve
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Small to Medium Businesses (SMBs)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Startups and High-Growth Companies
                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Corporations with Multi-Jurisdictional
                                        Operations</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Individual Taxpayers, Entrepreneurs, and
                                        Investors</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Family-Owned Enterprises and Trusts</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Nonprofits and NGOs</span>
                                </div>
                            </div>
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
                                            Expert Knowledge, Local & Global</li>
                                        <p class="text-gray-600 text-medium">
                                            Our team brings deep expertise in domestic and international tax
                                            regulations, helping you stay compliant wherever you do business.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Strategic, Forward-Thinking Advice</li>
                                        <p class="text-gray-600 text-medium">
                                            We don’t just file returns — we identify opportunities, avoid pitfalls, and
                                            plan for the future.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Personalized Service</li>
                                        <p class="text-gray-600 text-medium">
                                            Every client’s tax situation is unique. We tailor our services to your
                                            specific industry, structure, and growth goals.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Transparent Communication</li>
                                        <p class="text-gray-600 text-medium">
                                            No jargon. Just clear, timely, and actionable guidance you can trust.
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
                            Let’s Simplify Your Taxes — and Strengthen Your Strategy
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                From routine filings to complex advisory, we help you take control of your tax position.
                                Let’s reduce your tax burden, minimize risk, and unlock long-term savings — the smart
                                and compliant way.
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
                                Navigate Deals with Confidence. Maximize Value.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Whether you're buying, selling, investing, or restructuring, every business transaction
                                involves risk — and opportunity. At ARSI, our Transaction Advisory Services provide the
                                insight, analysis, and strategic guidance you need to make informed decisions and
                                execute deals with confidence.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                We partner with investors, founders, CFOs, and corporate development teams to evaluate
                                opportunities, uncover risks, and drive successful transactions from start to finish.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                What We Offer
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Our end-to-end transaction support ensures that your deals are not only compliant — but
                                also aligned with your strategic, financial, and operational goals.
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
                                Our Transaction Advisory Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Due Diligence</li>
                                    <p class="text-gray-600 text-medium">
                                        We perform detailed assessments of target companies’ financial health, quality
                                        of earnings, working capital, debt, and cash flow — giving you clarity before
                                        the deal closes.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Buy-Side Advisory</li>
                                    <p class="text-gray-600 text-medium">
                                        From target screening to valuation analysis and negotiation support, we help
                                        buyers identify the right opportunity and pay the right price.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Sell-Side Advisory & Readiness</li>
                                    <p class="text-gray-600 text-medium">
                                        Planning to sell or raise capital? We help you get investor-ready with clean
                                        financials, proper documentation, and optimized valuations.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Business Valuation Services</li>
                                    <p class="text-gray-600 text-medium">
                                        Independent, defensible valuation reports for M&A, fundraising, internal
                                        restructuring, or dispute resolution.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Tax Structuring & Advisory</li>
                                    <p class="text-gray-600 text-medium">
                                        We optimize the tax impact of your transaction, considering both immediate
                                        obligations and long-term implications.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Post-Transaction Integration Support</li>
                                    <p class="text-gray-600 text-medium">
                                        Smooth the transition after the deal closes with integration planning, process
                                        alignment, and financial systems support.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Transaction Structuring & Negotiation Support</li>
                                    <p class="text-gray-600 text-medium">
                                        We help design the optimal deal structure, ensuring legal, financial, and
                                        strategic alignment while minimizing risk.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    When You Need Us
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Buying or investing in a company

                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Selling your business or divesting a unit
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Raising private equity or venture capital</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Merging with or acquiring a competitor</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Conducting internal reorganization</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Preparing for IPO or SPAC deals</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Seeking valuation or fairness opinions</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="">
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Cross-Functional Expertise</li>
                                        <p class="text-gray-600 text-medium">
                                            Our team brings deep experience across finance, accounting, tax, operations,
                                            and legal — ensuring 360° transaction support.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Industry-Focused Insights</li>
                                        <p class="text-gray-600 text-medium">
                                            We understand the nuances of your sector, from tech and SaaS to
                                            manufacturing, healthcare, retail, and more.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Risk Mitigation & Value Creation</li>
                                        <p class="text-gray-600 text-medium">
                                            We don’t just highlight risks — we help you structure deals to capture value
                                            and avoid costly surprises.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Agile, Confidential & Trusted</li>
                                        <p class="text-gray-600 text-medium">
                                            We work with speed and discretion, protecting your interests and aligning
                                            closely with your leadership team throughout the deal lifecycle.
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
                            Make Better Decisions. Close Stronger Deals.
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                Every transaction is a critical moment for your business. With our Transaction Advisory
                                team by your side, you gain the insight and execution support you need to maximize value
                                and minimize risk.
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
                                Transform Paper into Power: Go Digital with Confidence
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Managing paper-based records is not only time-consuming and costly — it also increases
                                the risk of loss, inefficiency, and non-compliance. At ARSI, we help organizations
                                transition into the digital age with secure, scalable, and compliant e-records
                                digitisation solutions.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Whether you're modernizing your archives, improving data accessibility, or meeting
                                regulatory demands, our digitisation services ensure your records are preserved,
                                searchable, and future-ready.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Why Digitise Your Records?
                            </h3>
                            <ul class="">
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Easy Access:</b> Retrieve documents instantly from anywhere
                                </li>
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Improved Compliance:</b> Meet regulatory, audit, and legal requirements
                                </li>
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Enhanced Security:</b> Protect sensitive data with controlled access and
                                    encryption
                                </li>
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Disaster Recovery:</b> Reduce risk from fire, flood, theft, or deterioration
                                </li>
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Reduced Costs:</b> Save space, labor, and storage expenses
                                </li>
                                <li class="before:content-['✅'] before:mr-2 before:inline-block text-md mt-2 mb-2">
                                    <b>Sustainable Operations:</b> Go paperless and reduce your environmental footprint
                                </li>


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
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-5">
                        <!-- Left Section: ERP Services Description -->

                        <div class="px-8 py-4 lg:px-12">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                Our Digitisation Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['📄'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Document Scanning & Imaging</li>
                                    <p class="text-gray-600 text-medium">
                                        High-resolution scanning of paper records, books, blueprints, and legacy
                                        documents using advanced equipment.
                                    </p>
                                    <li
                                        class="before:content-['🔍'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        OCR & Intelligent Data Capture</li>
                                    <p class="text-gray-600 text-medium">
                                        Convert images into searchable, indexable, and editable text using Optical
                                        Character Recognition (OCR) and AI-powered data extraction.
                                    </p>
                                    <li
                                        class="before:content-['📁'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Indexing & Metadata Tagging</li>
                                    <p class="text-gray-600 text-medium">
                                        Streamline your operations, eliminate inefficiencies, and improve productivity
                                        across your organization.
                                    </p>
                                    <li
                                        class="before:content-['🔐'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Secure Digital Storage & Access</li>
                                    <p class="text-gray-600 text-medium">

                                        Store records in encrypted cloud repositories or on-premise systems with
                                        role-based access controls.

                                    </p>
                                    <li
                                        class="before:content-['📁'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Electronic Records Management Systems (ERMS)</li>
                                    <p class="text-gray-600 text-medium">

                                        Implement robust ERMS platforms to manage the full lifecycle of your digital
                                        records — from capture to retention and disposal.

                                    </p>
                                    <li
                                        class="before:content-['🔄'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Bulk Archival Conversion</li>
                                    <p class="text-gray-600 text-medium">

                                        Digitise large volumes of archived records — whether historical or operational —
                                        with minimal disruption.

                                    </p>
                                    <li
                                        class="before:content-['⚖️'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Compliance & Retention Policy Support</li>
                                    <p class="text-gray-600 text-medium">

                                        Ensure digitised documents comply with industry-specific regulations (e.g.,
                                        GDPR, HIPAA, ISO standards).

                                    </p>

                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Who We Serve
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Government Agencies</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">•Healthcare Institutions & Clinics
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Legal & Financial Firms
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Educational Institutions
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Corporates & SMEs
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">
                                            Libraries & Museums
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Real Estate & Infrastructure Companies</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Our Process
                                </h3>
                                <div class="space-y-4">
                                    <ul class="">
                                        <li class="font-bold text-md mt-2 mb-2">
                                            1. Assessment & Audit</li>
                                        <p class="text-gray-600 text-medium">

                                            We begin with a needs analysis and evaluation of your current records and
                                            retention policies.

                                        </p>

                                        <li class="font-bold text-md mt-2 mb-2">
                                            2. Digitisation Planning</li>
                                        <p class="text-gray-600 text-medium">

                                            Customized strategy based on volume, formats, compliance needs, and budget

                                        </p>

                                        <li class="font-bold text-md mt-2 mb-2">
                                            3. Secure Collection & Scanning</li>
                                        <p class="text-gray-600 text-medium">
                                            Documents are handled with care, confidentiality, and chain-of-custody
                                            protocols.

                                        </p>

                                        <li class="font-bold text-md mt-2 mb-2">
                                            4. Indexing & Quality Checks</li>
                                        <p class="text-gray-600 text-medium">

                                            We ensure high accuracy with multi-stage verification and QC.
                                        </p>
                                        <li class="font-bold text-md mt-2 mb-2">
                                            5. Digital Delivery & Integration</li>
                                        <p class="text-gray-600 text-medium">


                                            Final files are delivered in your preferred format and integrated into your
                                            document management system (DMS) or cloud storage.

                                        </p>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="">
                                        <li Trusted Experience</li>
                                            <p class="text-gray-600 text-medium">
                                                We’ve helped organizations across sectors go digital securely and
                                                efficiently.
                                            </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Scalable Capacity</li>
                                        <p class="text-gray-600 text-medium">
                                            From a few hundred documents to millions of records — we scale with your
                                            needs.
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
                                            From strategy to execution to post-project support, we’re with you every
                                            step of the way.
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
                                Go paperless. Go secure. Go efficient. With ARSI, digitisation is more than scanning —
                                it’s transforming how your organization accesses, manages, and protects its information.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- YAPP Tab -->
                <div id="yapp" class="tab-panel hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                        <!-- Left Section: ERP Services Description -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Streamline Operations. Drive Growth. Empower Your Business.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                At ARSI, we specialize in end-to-end ERP implementation services that help businesses
                                unify their processes, enhance productivity and gain real-time insights. Whether you're
                                upgrading from legacy systems or adopting ERP for the first time, our experienced team
                                ensures a seamless transition tailored to your unique business needs.
                            </p>
                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                ERP Platforms
                            </h3>
                            <p class="text-md text-gray-700 mb-8 leading-relaxed">
                                Unlock the Power of Innovation with the Top ERP Platforms We Proudly Support.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium">Oracle ERP Cloud</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium">SAP S/4HANA</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium">Microsoft Dynamics 365</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium">NetSuite</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-sm text-gray-900 font-medium">And more...</span>
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
                    <div class="px-8 py-4 lg:px-12 mb-5">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Why Choose Us for ERP Implementation?
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                <span class="text-md font-bold">Proven Expertise</span>
                            </div>
                            <p class="text-gray-600 font-medium">With years of hands-on experience across industries, we
                                deliver ERP solutions that work — on time and within budget.</p>
                            <div class="flex items-center gap-4">
                                <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                <span class="text-md font-bold">Tailored Solutions</span>
                            </div>
                            <p class="text-gray-600 font-medium">We don’t believe in one-size-fits-all. Our
                                implementation process is fully customized to align with your workflows, goals and
                                business culture.</p>
                            <div class="flex items-center gap-4">
                                <div class="w-4 h-4 bg-blue-600 rounded-full flex-shrink-0"></div>
                                <span class="text-md font-bold">Tailored Solutions</span>
                            </div>
                            <p class="text-gray-600 font-medium">From discovery and planning to training and post-launch
                                support, we’re with you every step of the way.</p>
                        </div>
                    </div>
                    <div class="px-8 py-4 lg:px-12 mb-5">
                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            Our ERP Implementation Process
                        </h3>
                        <div class="space-y-4">
                            <ol class="list-decimal ps-8">
                                <li class="font-bold text-md mb-2">Discovery & Needs Assessment</li>
                                <p class="text-gray-600 text-medium">
                                    We begin by understanding your business processes, pain points, and goals to define
                                    the right ERP strategy.
                                </p>
                                <li class="font-bold text-md mb-2">System Selection</li>
                                <p class="text-gray-600 text-medium">
                                    We help you choose the best ERP platform for your industry and scale — whether it’s
                                    SAP, Oracle, Microsoft Dynamics, NetSuite or others.
                                </p>
                                <li class="font-bold text-md mb-2">Planning & Roadmap</li>
                                <p class="text-gray-600 text-medium">
                                    Our team develops a detailed implementation plan, complete with timelines,
                                    milestones and resource allocation.
                                </p>
                                <li class="font-bold text-md mb-2">Customization &amp; Integration</li>
                                <p class="text-gray-600 text-medium">
                                    We tailor the ERP system to your needs and integrate it with existing systems like
                                    CRM, HR, finance or supply chain.
                                </p>
                                <li class="font-bold text-md mb-2">Data Migration</li>
                                <p class="text-gray-600 text-medium">
                                    We ensure a secure, accurate transfer of your historical data into the new ERP
                                    system.
                                </p>
                                <li class="font-bold text-md mb-2">Testing & Quality Assurance</li>
                                <p class="text-gray-600 text-medium">
                                    Rigorous testing is conducted to ensure every module functions flawlessly before
                                    going live.
                                </p>
                                <li class="font-bold text-md mb-2">Training & Change Management</li>
                                <p class="text-gray-600 text-medium">
                                    We equip your team with the training and tools they need to adapt and thrive in the
                                    new ERP environment.
                                </p>
                                <li class="font-bold text-md mb-2">Go-Live &amp; Ongoing Support</li>
                                <p class="text-gray-600 text-medium">
                                    Once live, we continue to monitor performance, address issues and provide updates as
                                    needed.
                                </p>
                            </ol>
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