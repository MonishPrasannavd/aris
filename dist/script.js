
      const swiper = new Swiper(".team-container", {
        direction: "horizontal",
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        centeredSlides: false,
        speed: 1000,
        loopAdditionalSlides: 5,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        breakpoints: {
          640: { slidesPerView: 1, spaceBetween: 18 },
          768: { slidesPerView: 2, spaceBetween: 20 },
          1024: { slidesPerView: 3, spaceBetween: 24 },
          1280: { slidesPerView: 4, spaceBetween: 40 },
        },
        pagination: false,
        navigation: false,
        scrollbar: false,
      });

      const clientsSwiper = new Swiper(".clients-swiper", {
        direction: "horizontal",
        // grabCursor: true,
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 700,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoHeight: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: ".clients-pagination",
          clickable: true,
          dynamicBullets: true,
        },
      });

      // Offcanvas menu logic
      const menuBtn = document.getElementById("menu-btn");
      const offcanvas = document.getElementById("offcanvas");
      const offcanvasMenu = document.getElementById("offcanvas-menu");
      const closeBtn = document.getElementById("close-btn");

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

      // Mobile dropdowns
      const mobileServicesBtn = document.getElementById("mobile-services-btn");
      const mobileServicesDropdown = document.getElementById(
        "mobile-services-dropdown"
      );
      mobileServicesBtn.addEventListener("click", () => {
        mobileServicesDropdown.classList.toggle("hidden");
      });
      const mobileProductsBtn = document.getElementById("mobile-products-btn");
      const mobileProductsDropdown = document.getElementById(
        "mobile-products-dropdown"
      );
      mobileProductsBtn.addEventListener("click", () => {
        mobileProductsDropdown.classList.toggle("hidden");
      });

      // Back to top button logic
      const backToTopBtn = document.getElementById("backToTop");
      const showOnPx = 250;
      function toggleBackToTopVisibility() {
        if (window.scrollY > showOnPx) {
          backToTopBtn.classList.add("show");
        } else {
          backToTopBtn.classList.remove("show");
        }
      }
      window.addEventListener("scroll", toggleBackToTopVisibility, {
        passive: true,
      });
      toggleBackToTopVisibility();
      backToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
