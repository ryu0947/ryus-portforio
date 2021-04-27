"use strict";

{
  const main = document.getElementById("js-main");
  const header = document.getElementById("js-header");
  const headerHeight = header.offsetHeight;
  const fv = document.getElementById("js-fv");
  const fvHeight = fv.offsetHeight;

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > fvHeight) {
      header.classList.add("fixed");
      main.style.marginTop = `${headerHeight}px`;
    } else {
      header.classList.remove("fixed");
      main.style.marginTop = "";
    }
  });
}
