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
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 text-center tracking-tight leading-snug">
                Team Details</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="team.php" class="text-gray-900">Our Team</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium">Team Details</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Team Details Section Start -->
    <section class="py-16 bg-white">
        <div class="max-w-9xl mx-auto px-4 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Left Image -->
                <div class="relative">
                    <img src="./Images/our_team/team_1.webp" alt="" class="rounded-2xl">
                </div>
                <!-- Right Content -->
                <div class="space-y-6">
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Mr. Jorche Milton <br>
                        <span class="text-lg text-gray-600">
                            Senior Software Engineer
                        </span>
                    </h2>

                    <h3 class="text-xl lg:text-2xl font-bold leading-relaxed">
                        “ I believe in bespoke strategies, designed specifically for your business needs.”
                    </h3>

                    <p class="text-sm md:text-lg text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione at culpa dicta, officiis dolore
                        recusandae facilis et pariatur perspiciatis perferendis, velit praesentium architecto nemo aut?
                        Eaque veniam voluptatum unde iure.
                    </p>
                    <p class="text-sm md:text-lg text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione at culpa dicta, officiis dolore
                        recusandae facilis et pariatur perspiciatis perferendis, velit praesentium architecto nemo aut?
                        Eaque veniam voluptatum unde iure.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Details Section End -->


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