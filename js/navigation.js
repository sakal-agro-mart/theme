const hamburger = document.getElementById("navbar-hamburger");

const menuLinks = document.getElementById("menu-links-wrapper");

const nav = document.getElementById("site-navigation");

window.addEventListener("click", (e) => {
  // if the click is in the elements inside of nav then
  if (nav.contains(e.target)) {
    // if not clicked in the hamburger just return i.e. terminate
    if (!hamburger.contains(e.target)) return;

    // toggle
    if (menuLinks.style.visibility == "visible") {
      menuLinks.style.visibility = "hidden";
      menuLinks.style.opacity = 0;
    } else {
      menuLinks.style.visibility = "visible";
      menuLinks.style.opacity = 1;
    }
  } else {
    // if the click is outside the nav then hide it :D
    if (menuLinks.style.visibility == "visible") {
      menuLinks.style.visibility = "hidden";
      menuLinks.style.opacity = 0;
    }
  }
});
