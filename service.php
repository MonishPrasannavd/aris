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




    <!-- Services: Hero -->
    <section id="services-hero" class="relative bg-white py-5 lg:py-14">
        <div class="max-w-8xl mx-auto px-4">
            <!-- Header Area -->
            <div class="text-center mb-8 flex flex-col items-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">Our Services</h1>
                <div
                    class="flex items-center justify-center text-gray-600 border max-w-[200px] w-full p-1 rounded-full">
                    <span class="hover:text-blue-600 transition-colors"><a href="index.php">Home</a></span>
                    <span class="mx-2"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium">Services</span>
                </div>
            </div>

            <!-- Main Content Area with Background Image and Overlays -->
            <!-- <div class="relative w-full h-[500px] lg:h-[600px] rounded-2xl overflow-hidden bg-[url('Images/servicepage/herosection.png')] bg-fit bg-center"> -->
            <div class="relative w-full h-[500px] lg:h-[600px] rounded-2xl overflow-hidden">

                <div class="background-shape">
                    <div class="absolute top-0 left-0 w-full h-full">
                        <img src="Images/servicepage/herosection.webp" alt="" class="w-full h-full">
                    </div>
                </div>
                <!-- Background Image -->
                <!-- <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-gray-100">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI2MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDYwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNjAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxjaXJjbGUgY3g9IjMwMCIgY3k9IjIwMCIgcj0iMTAwIiBmaWxsPSIjRjFGNUY5Ii8+CjxjaXJjbGUgY3g9IjkwMCIgY3k9IjQwMCIgcj0iMTUwIiBmaWxsPSIjRjFGNUY5Ii8+CjxjaXJjbGUgY3g9IjEwMDAiIGN5PSIxMDAiIHI9IjgwIiBmaWxsPSIjRjFGNUY5Ii8+Cjwvc3ZnPgo=')] bg-cover bg-center opacity-20"></div>
                </div> -->

                <!-- Meeting Scene Overlay -->
                <!-- <div class="absolute inset-0 flex items-center justify-center">
                    <div class="relative w-full max-w-4xl mx-auto px-8">
                        <img src="Images/servicepage/herosection.png" class="w-full h-full" alt="">
                    </div>
                </div> -->

                <!-- Statistics Boxes -->
                <!-- Left Box (Teal) -->
                <div
                    class="absolute left-0 lg:left-[.05rem] top-[73%] md:top-[95px] lg:top-[112px] transform -translate-y-1/2 bg-teal-500 text-white px-6 py-4 rounded-[25px] shadow-lg w-[180px] h-30">
                    <div class="text-center py-12 md:py-10 lg:py-12 px-2 lg:px-1">
                        <div class="text-3xl lg:text-4xl font-bold">145</div>
                        <div class="text-sm lg:text-base">Completed Projects</div>
                    </div>
                </div>

                <!-- Right Box (Blue) -->
                <div
                    class="absolute right-0 lg:right-[-0.1rem] -bottom-[70px] md:-bottom-[95px] lg:-bottom-[105px] transform -translate-y-1/2 bg-blue-600 text-white px-6 py-4 rounded-[25px] shadow-lg w-[180px] h-30">
                    <div class="text-center py-12 md:py-10 lg:py-12 px-1">
                        <div class="text-3xl lg:text-4xl font-bold">98%</div>
                        <div class="text-sm lg:text-base">Client Retention Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services: Grid -->
    <section id="services" class="relative py-4">
        <div class="mx-auto px-4 mb-12">
            <h3 class="text-[2.5rem] text-center font-[900]">Our Goal, Our Services</h3>
            <div class="flex items-center justify-center gap-5 mt-3">
                <img src="Images/servicepage/serviceicon.svg" alt="">
                <p class="text-left font-semibold text-gray-900">We believe in bespoke strategies, designed <br>
                    specifically for your business needs.</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 lg:px-20 mb-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <a href="managed_services.php">
                    <div class="group rounded-2xl p-6 bg-[#C1E7CE] h-[300px]">
                        <img src="Images/servicepage/serviceshape_1.svg" alt="" class="mb-4 w-16">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Manged Services</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consecr. Tempor odio aliquam morbi sit velit et
                            nisl vel egestas. Viverra molestie amet nibh integer massa.</p>
                    </div>
                </a>
                <a href="advisory_services.php">
                    <div class="group rounded-2xl p-6 bg-[#F0F0F0] h-[300px]">
                        <img src="Images/servicepage/serviceshape_2.svg" alt="" class="mb-4 w-16">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Advisory / Consulting</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consecr. Tempor odio aliquam morbi sit velit et
                            nisl vel egestas. Viverra molestie amet nibh integer massa.</p>
                    </div>
                </a>
                <a href="automation_services.php">
                    <div class="group rounded-2xl p-6 bg-[#D4DFFB] h-[300px]">
                        <img src="Images/servicepage/serviceshape_3.svg" alt="" class="mb-5 w-16">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Automation Services</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consecr. Tempor odio aliquam morbi sit velit et
                            nisl vel egestas. Viverra molestie amet nibh integer massa.</p>
                    </div>
                </a>
                <a href="tax_services.php">
                    <div class="group rounded-2xl p-6 bg-[#F0F0F0] h-[300px]">
                        <img src="Images/servicepage/serviceshape_4.svg" alt="" class="mb-4 w-16">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tax (Tax Compliance & Tax Planning)</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consecr. Tempor odio aliquam morbi sit velit et
                            nisl vel egestas. Viverra molestie amet nibh integer massa.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Services: CTA -->
    <!-- <section class="relative bg-blue-600 text-white py-10 lg:py-12">
        <div class="max-w-8xl mx-auto px-4 lg:px-20">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <h2 class="text-2xl md:text-3xl font-extrabold">Have a project in mind?</h2>
                <a href="./contact.php"
                    class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-full shadow hover:shadow-lg transition">Let's
                    talk</a>
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

    <!-- Back To Top Button -->
    <button id="backToTop" aria-label="Go to top"
        class="fixed bottom-6 right-6 z-[999] h-12 w-12 rounded-full bg-[#1176BC] hover:bg-[#0f69a7] text-white shadow-lg grid place-items-center transition-all duration-300 opacity-0 translate-y-3 pointer-events-none">
        <i class="bi bi-arrow-up"></i>
    </button>

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