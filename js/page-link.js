"use strict";

{
  const pageLink = document.querySelectorAll("a[href^='#']");

  pageLink.forEach((a) => {
    a.addEventListener("click", (e) => {
      e.preventDefault();
      const href = a.getAttribute("href");
      const targetId = document.getElementById(href.substr(1));
      const elementPosition = targetId.getBoundingClientRect().top;
      const calcElementPosition = elementPosition + window.pageYOffset;
      window.scrollTo({
        top: calcElementPosition,
        left: 0,
        behavior: "smooth",
      });
    });
  });
}
