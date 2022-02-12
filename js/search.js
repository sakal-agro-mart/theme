const searchWrapper = document.getElementById("sakal-search-wrapper");
const absolute = document.getElementById("sakal-search-absolute");
const crossContainer = document.getElementById("sakal-cross-container");

absolute.style.visibility = "hidden";
absolute.style.opacity = 0;

searchWrapper.addEventListener("click", () => {
  absolute.style.visibility = "visible";
  absolute.style.opacity = 1;
});

crossContainer.addEventListener("click", () => {
  absolute.style.visibility = "hidden";
  absolute.style.opacity = 0;
});
