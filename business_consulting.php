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
                    <p class="text-gray-900">Business Consulting</p>
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
            <!-- Section Header -->
            <div class="text-center mb-16">
                <!-- <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Advisory / Consulting
                </h2> -->

                <!-- Responsive Tabs -->
                <div class="grid grid-cols-1 md:flex md:flex-wrap justify-center gap-3 mb-8">
                    <!-- <button
                        class="tab-button bg-blue-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="erp">
                        Financial Reporting Advisory
                    </button>
                    <button
                        class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="hrms">
                        Virtual CFO
                    </button> -->
                    <!-- <button
                        class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none"
                        data-tab="crm">
                        Business Consulting
                    </button> -->
                    <!-- <button class="tab-button bg-gray-100 text-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-none" data-tab="yapp">
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
                                Accurate. Compliant. Insightful
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                In today’s complex regulatory environment, accurate and timely financial reporting isn’t
                                just a compliance requirement — it’s a strategic necessity. At <b>[Your Company
                                    Name]</b>, our Financial Reporting Advisory services help you navigate evolving
                                accounting standards, prepare for audits, and deliver transparent, investor-ready
                                financial information.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                Your Trusted Partner in Financial Reporting
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                Whether you're a fast-growing private company, a publicly listed organization, or
                                preparing for an IPO, our team of financial reporting experts ensures that your
                                reporting is accurate, efficient, and aligned with the latest standards and best
                                practices.
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
                                Our Core Financial Reporting Services
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Statement Preparation & Review</li>
                                    <p class="text-gray-600 text-medium">
                                        We assist with the preparation or review of GAAP/IFRS-compliant financial
                                        statements — from annual reports to interim disclosures.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Technical Accounting Advisory</li>
                                    <p class="text-gray-600 text-medium">
                                        We provide guidance on complex accounting matters such as revenue recognition
                                        (ASC 606 / IFRS 15), leases (ASC 842 / IFRS 16), stock-based compensation, and
                                        more.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Regulatory Compliance & Disclosures</li>
                                    <p class="text-gray-600 text-medium">
                                        We help ensure your financial reporting complies with local and international
                                        regulatory requirements, including SEC, PCAOB, and other relevant authorities.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        IPO & Capital Markets Readiness</li>
                                    <p class="text-gray-600 text-medium">
                                        Planning a public offering or private equity transaction? We prepare your
                                        financials for due diligence and help you meet all disclosure obligations.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Restatements & Adjustments</li>
                                    <p class="text-gray-600 text-medium">
                                        We assist in identifying, correcting, and restating financial information due to
                                        errors, changes in accounting principles, or audit findings.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Interim & Quarterly Reporting Support</li>
                                    <p class="text-gray-600 text-medium">
                                        Timely and accurate reporting during busy periods, supported by scalable
                                        resources and financial reporting expertise.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                When Do You Need Financial Reporting Advisory?
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Preparing for an audit or external review</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Adopting new accounting standards
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Entering new markets or restructuring
                                        operations</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Navigating a merger, acquisition, or IPO</span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Experiencing internal staffing gaps in
                                        finance</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                    <span class="text-md font-bold">Facing complex transactions that require technical
                                        interpretation</span>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Why Choose Us?
                                </h3>
                                <div class="space-y-4">
                                    <ul class="ps-0">
                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Deep Technical Expertise</li>
                                        <p class="text-gray-600 text-medium">
                                            Our team brings in-depth knowledge of U.S. GAAP, IFRS, and regulatory
                                            frameworks, combined with practical industry experience.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Audit-Ready Results</li>
                                        <p class="text-gray-600 text-medium">
                                            We understand what auditors and regulators expect. Our work stands up to
                                            scrutiny, minimizing last-minute surprises.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Scalable Support</li>
                                        <p class="text-gray-600 text-medium">
                                            From one-time technical projects to ongoing advisory partnerships, we offer
                                            flexible solutions to fit your needs and timelines.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Clear Communication</li>
                                        <p class="text-gray-600 text-medium">
                                            We make complex financial reporting matters understandable for all
                                            stakeholders — from the CFO to your board of directors.
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
                            Let’s Strengthen Your Financial Reporting
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                With our <b class="text-blue-700">Financial Reporting Advisory services</b>, you gain
                                more than compliance — you gain clarity, confidence, and control. Let us help you
                                deliver financial information that builds trust and supports strategic decisions.

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
                                Strategic Financial Leadership — On Demand
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Need high-level financial guidance without the cost of a full-time CFO? At <b>[Your
                                    Company Name], our Virtual CFO services</b> give you expert financial leadership,
                                strategic insights, and decision-making support — all tailored to your business needs
                                and budget.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Whether you're a startup preparing for growth, a scaling business managing complexity,
                                or an established company seeking sharper financial control, our Virtual CFOs act as a
                                true partner in your success.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                What Is a Virtual CFO?
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                A <b>Virtual CFO (Chief Financial Officer)</b> is a senior finance expert who works with
                                your business remotely or part-time to provide the strategic financial oversight of a
                                traditional CFO — without the full-time cost or commitment. From financial planning to
                                cash flow management, we help you understand your numbers and use them to drive growth.
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
                                Our Virtual CFO Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Financial Strategy & Planning</li>
                                    <p class="text-gray-600 text-medium">
                                        Develop long-term financial strategies aligned with your business goals —
                                        including budgeting, forecasting, and scenario planning.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Cash Flow & Working Capital Management</li>
                                    <p class="text-gray-600 text-medium">
                                        Gain full visibility into your cash flow and improve liquidity management to
                                        support day-to-day operations and growth.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        KPI Development & Performance Reporting</li>
                                    <p class="text-gray-600 text-medium">
                                        Track what matters. We define and monitor key metrics to help you make informed,
                                        data-driven decisions.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Investor & Stakeholder Reporting</li>
                                    <p class="text-gray-600 text-medium">
                                        Prepare professional financial reports for investors, lenders, and board
                                        members. We help you tell your financial story with clarity and confidence.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Fundraising & Capital Advisory</li>
                                    <p class="text-gray-600 text-medium">
                                        Whether you’re raising seed funding, seeking loans, or preparing for Series A/B,
                                        we help you get financially investor-ready.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Risk Management & Compliance</li>
                                    <p class="text-gray-600 text-medium">
                                        Ensure financial controls, governance, and compliance with tax, regulatory, and
                                        audit requirements.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Profitability & Cost Optimization</li>
                                    <p class="text-gray-600 text-medium">
                                        We analyze your cost structure, margins, and pricing strategies to boost
                                        profitability and improve financial efficiency.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Finance Team Mentorship</li>
                                    <p class="text-gray-600 text-medium">
                                        Need to strengthen your internal finance function? We mentor and support your
                                        accounting team for long-term sustainability.
                                    </p>
                                </ol>
                            </div>
                        </div>
                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Who Needs a Virtual CFO?
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"><b>Startups</b> needing strategic financial guidance for
                                            fundraising or rapid growth</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"><b>SMBs</b> that have outgrown their bookkeeper or
                                            accountant
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"><b>Founders & CEOs</b> who want to focus on business, not
                                            the books</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"><b>Organizations</b> preparing for M&A, investment, or
                                            expansion</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md"><b>Companies</b> without the budget for a full-time CFO
                                            but need high-level financial expertise</span>
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
                                            CFO Expertise Without the Overhead</li>
                                        <p class="text-gray-600 text-medium">
                                            Access decades of CFO-level experience at a fraction of the cost of hiring
                                            in-house.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Scalable & Flexible Engagements</li>
                                        <p class="text-gray-600 text-medium">
                                            Choose the support level you need — monthly oversight, weekly calls, or
                                            project-based services.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Industry Insight + Practical Advice</li>
                                        <p class="text-gray-600 text-medium">
                                            We blend strategic thinking with actionable recommendations tailored to your
                                            market and growth stage.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            100% Confidential, Independent & Objective</li>
                                        <p class="text-gray-600 text-medium">
                                            We act in your best interest — always. You get independent advice backed by
                                            data and experience.
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
                                Ready to take control of your finances and drive better decisions? Let’s talk about how
                                a Virtual CFO can support your goals and give you a strategic edge.
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
                                Insight. Strategy. Execution.
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                In today’s fast-moving and competitive environment, every business needs more than just
                                good ideas — it needs a clear strategy, expert guidance, and an actionable roadmap to
                                thrive. At <b>ARSI, our Business Consulting services</b> help you unlock your
                                organization’s full potential through data-driven insights, industry expertise, and
                                hands-on support.
                            </p>
                            <p class="text-md text-gray-700 leading-relaxed mb-6">
                                Whether you're a startup building your foundation or an established company facing new
                                challenges, we provide the clarity and direction you need to move forward with
                                confidence.
                            </p>

                        </div>

                        <!-- Right Section: ERP Platforms Supported -->
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                                What We Do
                            </h3>
                            <p class="text-md text-gray-700 leading-relaxed">
                                We partner with businesses to solve critical challenges, improve performance, and
                                achieve sustainable growth. Our consulting services are tailored to your needs — whether
                                it's strategy, operations, finance, or digital transformation.
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
                                Our Virtual CFO Services Include:
                            </h3>
                            <div class="space-y-4">
                                <ol class="ps-0">
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Business Strategy Development</li>
                                    <p class="text-gray-600 text-medium">
                                        Develop long-term financial strategies aligned with your business goals —
                                        including budgeting, forecasting, and scenario planning.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Cash Flow & Working Capital Management</li>
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
                                        Leverage technology to modernize your business. We guide you through automation,
                                        system integration, and digital adoption.
                                    </p>
                                    <li
                                        class="before:content-['✔'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                        Market Entry & Growth Strategy</li>
                                    <p class="text-gray-600 text-medium">
                                        Entering a new market or launching a new product? We deliver the market research
                                        and strategy to make your move successful.
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
                        <div class="px-8 py-4 lg:px-12 mb-5">
                            <div class="space-y-4">
                                <h3 class="text-3xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                                    Who We Help
                                </h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Startups needing strategic direction and growth
                                            plans</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Small to medium-sized businesses seeking operational
                                            efficiency




                                        </span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Enterprises navigating digital transformation or
                                            restructuring</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Business owners preparing for expansion, funding, or
                                            succession</span>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full flex-shrink-0"></div>
                                        <span class="text-md">Organizations facing specific challenges like low
                                            profitability or market decline</span>
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
                                            Customized Solutions</li>
                                        <p class="text-gray-600 text-medium">
                                            We don’t offer cookie-cutter advice. Every solution is built around your
                                            unique goals, challenges, and industry dynamics.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Results-Driven Approach</li>
                                        <p class="text-gray-600 text-medium">
                                            We focus on measurable outcomes — whether it’s cost savings, revenue growth,
                                            or operational improvement.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Cross-Industry Expertise</li>
                                        <p class="text-gray-600 text-medium">
                                            From manufacturing and retail to SaaS, healthcare, and finance, we bring
                                            broad industry knowledge to every engagement.
                                        </p>

                                        <li
                                            class="before:content-['✅'] before:mr-2 before:inline-block font-bold text-md mt-2 mb-2">
                                            Collaborative Partnership</li>
                                        <p class="text-gray-600 text-medium">
                                            We work with your leadership and teams — not just for you — to ensure
                                            alignment and ownership at every level.

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
                            Let’s Build a Better Business — Together
                        </h3>
                        <div class="space-y-4">
                            <p class="text-md text-gray-700 leading-relaxed">
                                You don’t have to face business challenges alone. With ARSI by your side, you gain a
                                trusted advisor dedicated to your success. Let's work together to turn ideas into action
                                and strategy into results.
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