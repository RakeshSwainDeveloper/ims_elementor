document.addEventListener('DOMContentLoaded', () => {
  adjustBodyPadding();
  setActiveNavLink();
  enableDropdownMenus();
  enableInputValidation();

  window.addEventListener('resize', adjustBodyPadding);
});

/* ========================
   Adjust body padding
======================== */
function adjustBodyPadding() {
  const header = document.querySelector('.site-header');
  if (header) {
    requestAnimationFrame(() => {
      document.body.style.paddingTop = `${header.offsetHeight}px`;
    });
  }
}

/* ========================
   Active link handling
======================== */
function setActiveNavLink() {
  const currentPath = window.location.pathname.replace(/\/$/, "");
  const navLinks = document.querySelectorAll('.nav-links a');
  const servicePaths = [
    "/events_page",
    "/exhibitions_page",
    "/branding_page",
    "/rental-sales",
    "/event-website-development",
    "/event-app-development",
    "/graphic-design-services",
    "/social-media",
    "/powered-event",
    "/registration-ticketing-software",
    "/audience-engagement-solutions",
    "/smart-networking-and-matchmaking-page",
    "/photo-gallery"
  ];

  navLinks.forEach(link => {
    const hrefAttr = link.getAttribute('href');
    if (!hrefAttr ||
        hrefAttr.trim() === '#' ||
        hrefAttr.startsWith('#') ||
        hrefAttr.startsWith('javascript:') ||
        hrefAttr.startsWith('mailto:') ||
        hrefAttr.startsWith('tel:')) {
      link.classList.remove('active');
      return;
    }

    let linkPath;
    try {
      linkPath = new URL(link.href).pathname.replace(/\/$/, "");
    } catch (e) {
      linkPath = hrefAttr.replace(/\/$/, "");
    }

    link.classList.remove('active');

    if (servicePaths.includes(currentPath)) {
      const servicesParent = document.querySelector('.nav-links .dropdown > a');
      if (servicesParent) {
        servicesParent.classList.add('active');
      }
    } else if (linkPath === currentPath) {
      link.classList.add('active');
    }
  });
}

/* ========================
   Dropdowns + Mobile Menu
======================== */
function enableDropdownMenus() {
  const dropdownItems = document.querySelectorAll('.nav-links .has-submenu');
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const navWrapper = document.querySelector('.nav-wrapper');

  // Mobile menu toggle
  if (mobileToggle && navWrapper) {
    mobileToggle.addEventListener('click', () => {
      navWrapper.classList.toggle('open');
      document.body.classList.toggle('menu-open'); // prevent scroll
    });
  }

  // Dropdown handling
  dropdownItems.forEach(item => {
    const parentLink = item.querySelector('a');

    // Desktop hover
    item.addEventListener('mouseenter', () => {
      if (window.innerWidth >= 768) item.classList.add('open');
    });
    item.addEventListener('mouseleave', () => {
      if (window.innerWidth >= 768) item.classList.remove('open');
    });

    // Mobile click toggle
    if (parentLink) {
      parentLink.addEventListener('click', e => {
        if (window.innerWidth < 768) {
          e.preventDefault();
          item.classList.toggle('open');
        }
      });
    }
  });
}

/* ========================
   Input validation
======================== */
function enableInputValidation() {
  const nameInput = document.querySelector("input[name='name']");
  const phoneInput = document.querySelector("input[name='phone']");

  if (nameInput) {
    nameInput.addEventListener("input", function () {
      this.value = this.value.replace(/[^A-Za-z\s]/g, "");
    });
  }

  if (phoneInput) {
    phoneInput.addEventListener("input", function () {
      this.value = this.value.replace(/[^0-9]/g, "");
    });
  }
}
