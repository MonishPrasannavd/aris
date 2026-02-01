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

    <!-- Flowbite CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Responsive Navbar Start -->
     <?php include 'includes/header.php'; ?>


    <!-- team Hero Section -->
    <section class="bg-white">
        <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 text-center tracking-tight leading-snug">Meet
                The Team Driving <br>Digital Innovation</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="index.php" class="hover:text-gray-900">Home</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium">Our Team</span>
                </div>
            </div>
            <div class="mt-4 flex item-center justify-center">
                <img src="Images/our_team/herosection.webp" alt="" class="w-full h-full">
            </div>
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="rounded-xl p-6 sm:p-8 bg-[#D4DFFC] shadow-sm ring-1 ring-black/5">
                    <div class="text-center px-2 lg:px-1">
                        <div class="text-3xl lg:text-4xl font-bold">50+</div>
                        <div class="text-sm lg:text-base">Professional Expert</div>
                    </div>
                </div>

                <div class="rounded-xl p-6 sm:p-8 bg-[#F4DE9B] shadow-sm ring-1 ring-black/5">
                    <div class="text-center px-2 lg:px-1">
                        <div class="text-3xl lg:text-4xl font-bold">145+</div>
                        <div class="text-sm lg:text-base">Completed Projects</div>
                    </div>
                </div>

                <div class="rounded-xl p-6 sm:p-8 bg-[#C1E8CF] shadow-sm ring-1 ring-black/5">
                    <div class="text-center px-2 lg:px-1">
                        <div class="text-3xl lg:text-4xl font-bold">98%</div>
                        <div class="text-sm lg:text-base">Client Retention Rate</div>
                    </div>
                </div>

                <div class="rounded-xl p-6 sm:p-8 bg-[#D4DFFC] shadow-sm ring-1 ring-black/5">
                    <div class="text-center px-2 lg:px-1">
                        <div class="text-3xl lg:text-4xl font-bold">5+</div>
                        <div class="text-sm lg:text-base">Client Retention Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Team Philosophy Section Start -->
    <section class="py-16 bg-white">
        <div class="max-w-9xl mx-auto px-4 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Left Image -->
                <div class="relative">
                    <div class="hidden md:block absolute left-0 -bottom-[120px]">
                        <img src="Images/our_team/teambg.svg" alt="" class="w-80">
                    </div>
                    <h5 class="text-5xl font-extrabold lg:pe-72 leading">
                        Team Philosophy.
                    </h5>
                </div>
                <!-- Right Content -->
                <div class="space-y-6">
                    <h2 class="text-xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        "We believe in the power of collaboration and innovation"
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Our team philosophy is built on trust, collaboration, and delivering practical solutions that
                        create real value for our clients. Our philosophy centers on teamwork, innovation, and a shared
                        responsibility for client success.

                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start mt-12">
                <!-- Left Image -->
                <div class="relative">
                    <!-- <div class="hidden md:block absolute left-0 -bottom-[120px]">
                        <img src="Images/our_team/teambg.svg" alt="" class="w-80">
                    </div> -->
                    <h5 class="text-5xl font-extrabold lg:pe-[25rem] leading">
                        What Drive US.
                    </h5>
                </div>
                <!-- Right Content -->
                <div class="space-y-6">

                    <div id="accordion-collapse" data-accordion="open">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-3 px-5 font-medium rtl:text-right bg-[#F0F0F0] text-[#1C1A1E] rounded-xl gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                                aria-controls="accordion-collapse-body-1">
                                <span>Innovation</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden"
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5">
                                <p class="mb-2 text-[#545454]">At the core of our consulting approach is
                                    innovation—leveraging creative thinking and cutting-edge solutions to solve complex
                                    challenges, drive growth, and deliver measurable impact for our clients.
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full py-3 px-5 font-medium rtl:text-right bg-[#F0F0F0] text-[#1C1A1E] rounded-xl gap-3 mt-4"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Client-Centered Approach</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Our client-centered approach ensures
                                    that every solution we deliver is tailored to your unique needs, goals, and
                                    challenges, fostering collaboration, trust, and measurable results that truly drive
                                    your success.</p>

                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full py-3 px-5 font-medium rtl:text-right bg-[#F0F0F0] text-[#1C1A1E] rounded-xl gap-3 mt-4"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="flase"
                                aria-controls="accordion-collapse-body-3">
                                <span>Collaboration</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5">
                                <p class="mb-2 text-[#545454]">We believe collaboration is key to success—working
                                    closely with clients and teams to combine expertise, share ideas, and create
                                    solutions that deliver meaningful, lasting impact.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full py-3 px-5 font-medium rtl:text-right bg-[#F0F0F0] text-[#1C1A1E] rounded-xl gap-3 mt-4"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Continuous Improvement</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden"
                            aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5">
                                <p class="mb-2 text-[#545454]">We embrace continuous improvement by constantly
                                    evaluating and refining our strategies, processes, and solutions to drive greater
                                    efficiency, innovation, and lasting value for our clients.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Team Philosophy Section End -->


    <!-- Leadership Section Start -->
    <section class="py-16 bg-[url('./Images/homepage/teambg.webp')] bg-no-repeat bg-cover bg-center">
        <div class="max-w-9xl mx-auto px-4 lg:px-20">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Our Founder</h2>
                <!-- <p class="text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto">Smart solution to build a outstanding
                    performance easily.</p> -->
            </div>

          <div class="flex flex-col md:flex-row items-stretch gap-4 md:gap-6">
            
            <div class="shrink-0 rounded-2xl bg-[#f3f4ff] p-3 shadow-sm border border-gray-200 w-full md:w-auto">
              <img src="Images/our_team/revathi.jpg" alt="Client photo"
                class="h-56 w-full md:w-60 md:h-60 lg:w-64 lg:h-80 object-cover rounded-xl" />
                <h3 class="text-violet-900 font-bold text-xl mt-2">Ms. Revathi Gollapudi</h3>
                <div class="flex items-center justify-start space-x-3">
                <!-- <p class="text-gray-900 text-sm">Founder</p> -->
                <a href="https://www.linkedin.com/in/revathi-gollapudi-06739417" target="_blank" class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.25rem]"></i>
                </a>
                </div>
                
            </div>
       
            <div class="relative flex-1 rounded-2xl bg-[#F3F4FF] p-5 md:p-6 lg:p-8 border border-gray-200 text-left">
              
              <span
                class="hidden md:block absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-4 bg-[#F3F4FF] rounded-xl border border-gray-200"></span>
           
              <svg class="absolute top-4 right-4 w-8 h-8 text-[#F26727]" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path
                  d="M10 7H6a1 1 0 0 0-1 1v8h4v-6h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm9 0h-4a1 1 0 0 0-1 1v8h4v-6h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
              </svg>
             
              <p class="text-gray-700 text-sm leading-6">
                    <b>Founder of ARSI Consulting, brings 24 years
                    of rich and varied experience in Finance and
                    Accounts, demonstrating her ability to
                    navigate complex financial challenges and
                    drive sustainable business growth. Her
                    leadership and vision make her an invaluable
                    asset to our organization.</b>
                  </p>
                  <p><b>Contributions and Achievements</b></p>
                  <ul class="list-disc ps-5 mt-2 text-gray-700 text-sm leading-6">
                    <li >
                      AIR 39th Rank in CA Final and AIR 4th
                      Rank in CMA Final.
                    </li>
                    <li>
                      Began her career at
                      PricewaterhouseCoopers (PwC), a Big 4
                      firm.
                    </li>
                    <li>
                      Held varied roles in esteemed
                      organizations, including:
                      <span>
                        <ul class="list-decimal ps-8 mt-2">
                          <li>
                            Dr. Reddy's Laboratories Ltd.
                          </li>
                          <li>
                            Coromandel International Ltd.
                          </li>
                          <li>
                            Head – GFO at Tata Chemicals Ltd.
                          </li>
                          <li>
                            CFO of Evertogen Lifesciences,
                            part of the Glochem group.
                          </li>
                          <li>
                            CFO of De Dietrich Process
                            Systems.
                          </li>
                        </ul>
                      </span>
                    </li>
                  </ul>
            </div>
          </div>

            <!-- Leadership Cards Grid -->
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:w-1/2 mx-auto gap-8 lg:gap-6">
                
                <div class="overflow-hidden">
                    <div class="max-h-[380px] overflow-hidden">
                        <img src="Images/our_team/prasad.webp" alt=""
                        class="w-full h-full object-cover transform transition-all duration-300 hover:scale-105">
                    </div>
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr Prasad Saraswatula</h3>
                        <p class="text-gray-600 mb-4">Founder</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="https://www.linkedin.com/in/dr-sp-85013844/"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <div class="max-h-[380px] overflow-hidden">
                        <img src="Images/our_team/revathi.jpg" alt=""
                        class="w-full h-full object-cover transform transition-all duration-300 hover:scale-105">
                    </div>
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ms. Revathi Gollapudi</h3>
                        <p class="text-gray-600 mb-4">Founder</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="https://www.linkedin.com/in/revathi-gollapudi-06739417" target="_blank"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Leadership Section End -->


    <!-- Team Members Section Start -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-9xl mx-auto px-4 lg:px-20">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Director</h2>
                <!-- <p class="text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto">Smart solution to build a outstanding
                    performance easily.</p> -->
            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-4 md:gap-6">
            
            <div class="shrink-0 rounded-2xl bg-[#f3f4ff] p-3 shadow-sm border border-gray-200 w-full md:w-auto">
              <img src="Images/our_team/prasad.webp" alt="Client photo"
                class="h-56 w-full md:w-60 md:h-60 lg:w-64 lg:h-80 object-cover rounded-xl" />
                <h3 class="text-violet-900 font-bold text-xl mt-2">Dr. Prasad Saraswatula</h3>
                <div class="flex items-center justify-start space-x-3">
                <!-- <p class="text-gray-900 text-sm">Founder</p> -->
                <a href="https://www.linkedin.com/in/dr-sp-85013844/" target="_blank" class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.25rem]"></i>
                </a>
                </div>
                
            </div>
       
            <div class="relative flex-1 rounded-2xl bg-[#F3F4FF] p-5 md:p-6 lg:p-8 border border-gray-200 text-left">
              
              <span
                class="hidden md:block absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-4 bg-[#F3F4FF] rounded-xl border border-gray-200"></span>
           
              <svg class="absolute top-4 right-4 w-8 h-8 text-[#F26727]" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path
                  d="M10 7H6a1 1 0 0 0-1 1v8h4v-6h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm9 0h-4a1 1 0 0 0-1 1v8h4v-6h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
              </svg>
             
              <p class="text-gray-700 text-sm leading-6">
                    <b> Dr. Prasad Saraswatula is a specialist from
                                  Strategy to Execution with 25+ yrs of exp in
                                  top consulting companies like One of the
                                  Big4s in the Advisory space, covering
                                  Management consulting, Technology consulting
                                  and large Oracle ERP implementations sectors
                                  including Manufacturing, Healthcare,
                                  Fintech, Energy, Education, IT/ITeS etc
                                  across global or large PSUs. He holds
                                  Doctorate from OU & PGDM from IIM Ahmedabad
                                  on Org. leadership.</b>
                  </p>
                  <!-- <p><b>Contributions and Achievements</b></p> -->
                  <!-- <ul class="list-disc ps-5 mt-2 text-gray-700 text-sm leading-6">
                    <li >
                      AIR 39th Rank in CA Final and AIR 4th
                      Rank in CMA Final.
                    </li>
                    <li>
                      Began her career at
                      PricewaterhouseCoopers (PwC), a Big 4
                      firm.
                    </li>
                    <li class="hidden md:block">
                      Held varied roles in esteemed
                      organizations, including:
                      <span>
                        <ul class="list-decimal ps-8 mt-2">
                          <li>
                            Dr. Reddy's Laboratories Ltd.
                          </li>
                          <li>
                            Coromandel International Ltd.
                          </li>
                          <li>
                            Head – GFO at Tata Chemicals Ltd.
                          </li>
                          <li>
                            CFO of Evertogen Lifesciences,
                            part of the Glochem group.
                          </li>
                          <li>
                            CFO of De Dietrich Process
                            Systems.
                          </li>
                        </ul>
                      </span>
                    </li>
                  </ul> -->
            </div>
          </div>
            <!-- Leadership Cards Grid -->
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
                
                <div class="overflow-hidden">
                    <img src="Images/our_team/team_1.webp" alt=""
                        class="w-full h-[380px] object-cover transform transition-all duration-300 hover:scale-105">
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mr. Jorche Milton</h3>
                        <p class="text-gray-600 mb-4">Manager</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-facebook text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Facebook</span>
                            </a>
                            <a href="team_detail.php"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">

                                <span
                                    class="bg-blue-600 rounded-2xl text-sm text-white font-bold py-1 px-2 shadow">More<i
                                        class="bi bi-arrow-up-right ms-1"></i></span>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <img src="Images/our_team/team_2.webp" alt=""
                        class="w-full h-[380px] object-cover transform transition-all duration-300 hover:scale-105">
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mr. Jorche Milton</h3>
                        <p class="text-gray-600 mb-4">Team Lead</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-facebook text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Facebook</span>
                            </a>
                            <a href="team_detail.php"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">

                                <span
                                    class="bg-blue-600 rounded-2xl text-sm text-white font-bold py-1 px-2 shadow">More<i
                                        class="bi bi-arrow-up-right ms-1"></i></span>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <img src="Images/our_team/team_3.webp" alt=""
                        class="w-full h-[380px] object-cover transform transition-all duration-300 hover:scale-105">
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Daniel Ryan</h3>
                        <p class="text-gray-600 mb-4">Software Engineer</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-facebook text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Facebook</span>
                            </a>
                            <a href="team_detail.php"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">

                                <span
                                    class="bg-blue-600 rounded-2xl text-sm text-white font-bold py-1 px-2 shadow">More<i
                                        class="bi bi-arrow-up-right ms-1"></i></span>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <img src="Images/our_team/team_4.webp" alt=""
                        class="w-full h-[380px] object-cover transform transition-all duration-300 hover:scale-105">
                    <div class="py-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Alexander Benjamin</h3>
                        <p class="text-gray-600 mb-4">SME Lead</p>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-linkedin text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Linkedin</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">
                                <i class="bi bi-facebook text-[1.75rem]"></i>
                                <span
                                    class="bg-white rounded-2xl text-sm text-blue-600 py-1 px-2 shadow">Facebook</span>
                            </a>
                            <a href="team_detail.php"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 transition-colors">

                                <span
                                    class="bg-blue-600 rounded-2xl text-sm text-white font-bold py-1 px-2 shadow">More<i
                                        class="bi bi-arrow-up-right ms-1"></i></span>

                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Team Members Section End -->


    <!-- Candid Frame Section Start -->
    <section class="py-16 lg:py-24 bg-[#000C2E]">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Candid Frame</h2>
                <p class="text-lg lg:text-xl text-white max-w-3xl mx-auto">“ We believe in bespoke strategies, designed
                    specifically for your business needs.”</p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Side - Photo Collage -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Top Left Photo -->
                        <div class="relative group">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 group-hover:scale-105">
                                <img src="Images/our_team/candid1.webp" alt="Team collaboration moment"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- <div class="absolute inset-0 bg-black bg-opacity-20 rounded-lg"></div> -->
                        </div>

                        <!-- Top Right Photo -->
                        <div class="relative group mt-8">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-green-400 to-blue-500 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 group-hover:scale-105">
                                <img src="Images/our_team/candid2.webp" alt="Team celebration"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-20 rounded-lg"></div>
                        </div>

                        <!-- Bottom Left Photo -->
                        <div class="relative group">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-pink-400 to-red-500 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 group-hover:scale-105">
                                <img src="Images/our_team/candid3.webp" alt="Team brainstorming"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- <div class="absolute inset-0 bg-black bg-opacity-20 rounded-lg"></div> -->
                        </div>

                        <!-- Bottom Right Photo -->
                        <div class="relative group mt-8">
                            <div
                                class="w-full h-48 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 group-hover:scale-105">
                                <img src="Images/our_team/candid4.webp" alt="Team meeting"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-20 rounded-lg"></div>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-60">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-br from-green-200 to-blue-200 rounded-full opacity-60">
                    </div>
                </div>

                <!-- Right Side - Content -->
                <div class="space-y-8">
                    <!-- Quote Section -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-blue-500">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <div>
                                <blockquote class="text-lg lg:text-xl text-gray-700 italic leading-relaxed mb-4">
                                    "The best teams are built on trust, collaboration, and a shared passion for
                                    excellence. Every day, we see this come to life in the way our team works together."
                                </blockquote>
                                <cite class="text-gray-600 font-medium">— Our Team Philosophy</cite>
                            </div>
                        </div>
                    </div>

                    <!-- Key Points -->
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Collaborative Culture</h3>
                                <p class="text-white leading-relaxed">We believe in the power of teamwork and
                                    collaboration. Every project is a collective effort that brings out the best in each
                                    team member.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Innovation Mindset</h3>
                                <p class="text-white leading-relaxed">Our team thrives on creativity and innovation. We
                                    constantly push boundaries to deliver cutting-edge solutions that exceed
                                    expectations.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Passion & Dedication</h3>
                                <p class="text-white leading-relaxed">Every team member brings their passion and
                                    dedication to work. This commitment drives us to deliver exceptional results for our
                                    clients.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <!-- <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 rounded-xl text-white text-center">
                        <h3 class="text-xl font-semibold mb-2">Join Our Team</h3>
                        <p class="text-blue-100 mb-4">Be part of a culture that values innovation, collaboration, and excellence.</p>
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            View Open Positions
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Candid Frame Section End -->


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

    <script>
        // Offcanvas menu functionality
        document.addEventListener('DOMContentLoaded', function () {
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
        });
    </script>

</body>

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

</html>