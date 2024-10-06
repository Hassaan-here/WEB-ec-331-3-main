$(document).ready(function () {
  // Spinner
  var spinner = () => {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
        $("#main-content").fadeIn();
      }
    }, 1000);
  };
  spinner();
});

// navbar
// Change background on scroll
window.onscroll = function () {
  var navbar = document.getElementById("mainNavbar");
  if (window.pageYOffset > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
};
// dropdown hover
document.querySelectorAll(".nav-item.dropdown").forEach(function (dropdown) {
  // Show dropdown on mouseenter
  dropdown.addEventListener("mouseenter", function () {
    let menu = dropdown.querySelector(".dropdown-menu");
    let toggle = dropdown.querySelector(".dropdown-toggle");
    toggle.classList.add("show");
    menu.classList.add("show");
  });

  // Hide dropdown on mouseleave
  dropdown.addEventListener("mouseleave", function () {
    let menu = dropdown.querySelector(".dropdown-menu");
    let toggle = dropdown.querySelector(".dropdown-toggle");
    toggle.classList.remove("show");
    menu.classList.remove("show");
  });
});
