document.addEventListener('DOMContentLoaded', () => {
  setActiveNavLink();
  enableDropdownMenus();
  adjustBodyPadding();
  window.addEventListener('resize', adjustBodyPadding);
});

function adjustBodyPadding() {
  const header = document.querySelector('.site-header');
  if (header) {
    requestAnimationFrame(() => {
      const height = header.offsetHeight;
      document.body.style.paddingTop = `${height}px`;
    });
  }
}

// function setActiveNavLink() {
//   const currentUrl = window.location.href;
//   const navLinks = document.querySelectorAll('.nav-links a');

//   navLinks.forEach(link => {
//     if (link.href === currentUrl || link.href === currentUrl + '/') {
//       link.classList.add('active');
//     } else {
//       link.classList.remove('active');
//     }
//   });
// }
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
    "/ai-powered-event-chatbot",
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
    }
    else if (linkPath === currentPath) {
      link.classList.add('active');
    }
  });
}
document.addEventListener("DOMContentLoaded", setActiveNavLink);


function enableDropdownMenus() {
  const dropdownItems = document.querySelectorAll('.nav-links .has-submenu');
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const navWrapper = document.querySelector('.nav-wrapper');

  if (mobileToggle && navWrapper) {
    mobileToggle.addEventListener('click', () => {
      navWrapper.classList.toggle('open');
    });
  }

  dropdownItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      if (window.innerWidth >= 768) item.classList.add('open');
    });

    item.addEventListener('mouseleave', () => {
      if (window.innerWidth >= 768) item.classList.remove('open');
    });

    const triggerLink = item.querySelector('a:not([href="#"])');
    if (triggerLink) {
      triggerLink.addEventListener('click', e => {
        if (window.innerWidth < 768) {
          e.preventDefault();
          item.classList.toggle('open');
        }
      });
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.querySelector("input[name='name']");
    const phoneInput = document.querySelector("input[name='phone']");

    
    nameInput.addEventListener("input", function () {
      this.value = this.value.replace(/[^A-Za-z\s]/g, "");
    });


    phoneInput.addEventListener("input", function () {
      this.value = this.value.replace(/[^0-9]/g, "");
    });
  });
}
