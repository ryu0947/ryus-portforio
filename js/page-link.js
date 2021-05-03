"use strict";

{
  import smoothscroll from "smoothscroll-polyfill";
  smoothscroll.polyfill();

  const pageLink = document.querySelectorAll("a[href^='#']");

  pageLink.forEach((a) => {
    a.addEventListener("click", (e) => {
      e.preventDefault();
      const href = a.getAttribute("href");
      const getTargetId = document.getElementById(href.replace("#", ""));
      const getElementPosition = getTargetId.getBoundingClientRect().top;
      const calcElementPosition = getElementPosition + window.pageYOffset;
      window.scrollTo({
        top: calcElementPosition,
        left: 0,
        behavior: "smooth",
      });
    });
  });
}
