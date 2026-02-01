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


    <!-- Contact Hero Section -->
    <section class="bg-white">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 text-center tracking-tight">Let’s Build
                <br>Flexible Project</h1>
            <div class="mt-4 flex justify-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1 text-sm text-gray-600">
                    <a href="index.php" class="hover:text-gray-900">Home</a>
                    <span class="text-gray-400"><img src="Images/servicepage/breadcum.svg" alt=""></span>
                    <span class="text-blue-600 font-medium">Contact Us</span>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-xl p-6 sm:p-8 bg-[#D2DDFB] shadow-sm ring-1 ring-black/5">
                    <div class="flex items-start gap-4">
                        <span
                            class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-white ring-4 ring-white/50 shadow">
                            <img src="Images/logo/call.svg" alt="Call" class="h-6 w-6">
                        </span>
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">Call 24/7 Hours</p>
                            <p class="mt-1 text-gray-900 font-semibold">+91-9876543210</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl p-6 sm:p-8 bg-[#DCD8D5] shadow-sm ring-1 ring-black/5">
                    <div class="flex items-start gap-4">
                        <span
                            class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-white ring-4 ring-white/50 shadow">
                            <img src="Images/logo/mail.svg" alt="Mail" class="h-6 w-6">
                        </span>
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">Send Us Mail</p>
                            <p class="mt-1 text-gray-900 font-semibold">info@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl p-6 sm:p-8 bg-[#BEE6CE] shadow-sm ring-1 ring-black/5">
                    <div class="flex items-start gap-4">
                        <span
                            class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-white ring-4 ring-white/50 shadow">
                            <img src="Images/logo/location.svg" alt="Location" class="h-6 w-6">
                        </span>
                        <div>
                            <!-- <p class="text-xs uppercase tracking-wide text-gray-500">Address</p> -->
                            <p class="mt-1 text-gray-900 font-semibold leading-snug"><a href="#"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section class="bg-white mb-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 bg-[#F0F0FF] rounded-xl">
            <h5 class="text-3xl md:text-2xl font-extrabold text-gray-900 text-center tracking-tight">Collaborate with us
            </h5>
            <p class="text-[#545454] text-lg text-center">
                We’re excited to hear from you! Whether you have a question <br>
                about our services, want to discuss a new project.
            </p>
            <form class="mt-12 max-w-4xl mx-auto" action="https://formsubmit.co/arsiconsulting@yopmail.com"
                target="_blank" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="fullName" name="fullName" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#5956E9] focus:border-transparent transition-all duration-200"
                            placeholder="Enter your full name">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Company Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#5956E9] focus:border-transparent transition-all duration-200"
                            placeholder="Enter your email address">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                        <input type="text" id="company" name="company"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#5956E9] focus:border-transparent transition-all duration-200"
                            placeholder="Enter your company name">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#5956E9] focus:border-transparent transition-all duration-200"
                            placeholder="Enter your phone number">
                    </div>

                </div>

                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#5956E9] focus:border-transparent transition-all duration-200 resize-none"
                        placeholder="Tell us about your project or inquiry..."></textarea>
                </div>

                <div class="mb-8">
                    <label class="flex items-start space-x-3">
                        <input type="checkbox" name="agreement" required
                            class="mt-1 h-4 w-4 text-[#5956E9] border-gray-300 rounded focus:ring-[#5956E9] focus:ring-2">
                        <span class="text-sm text-gray-600">
                            I agree to the <a href="#" class="text-[#5956E9] hover:underline">Terms of Service</a> and
                            <a href="#" class="text-[#5956E9] hover:underline">Privacy Policy</a>
                        </span>
                    </label>
                </div>

                <div class="text-left">
                    <button type="submit"
                        class="inline-flex items-center px-8 py-4 bg-[#1C1A1E] text-white font-semibold rounded-lg hover:bg-[#4A47D8] focus:ring-4 focus:ring-[#5956E9]/20 transition-all duration-200 transform hover:scale-105">
                        Send Message <i class="bi bi-arrow-up-right ms-2"></i>
                        <!-- <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg> -->
                    </button>
                </div>
            </form>
        </div>
    </section>


    <!-- Map Section -->

    <!-- <section class="bg-white">
        <div class="max-w-9xl mx-auto">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.3323462019694!2d78.38155857493605!3d17.443800083453073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93d2ab1c87d7%3A0xf373a34d2a3b635c!2sDwaraka%20One%20-%20Best%20Serviced%20Office%20Spaces%20in%20Hyderabad!5e0!3m2!1sen!2sin!4v1755707438106!5m2!1sen!2sin"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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