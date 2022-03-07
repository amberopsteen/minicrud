window.onload = function () {
  const slides = document.getElementsByClassName("carousel-item"),
    addActive = function (slide) {
      slide.classList.add("active");
    },
    removeActive = function (slide) {
      slide.classList.remove("active");
    };
  addActive(slides[0]);

  setInterval(function () {
    for (let i = 0; i < slides.length; i++) {
      if (i + 1 == slides.length) {
        addActive(slides[0]);
        slides[0].style.zIndex = 9;
        setTimeout(removeActive, 750, slides[i]);
        break;
      }
      if (slides[i].classList.contains("active")) {
        slides[i].removeAttribute("style");
        setTimeout(removeActive, 750, slides[i]);
        addActive(slides[i + 1]);
        break;
      }
    }
  }, 4000);
};

document.onscroll = function () {
  let y = window.pageYOffset;

  if (y === 0) {
    document.getElementById("navbar").classList.remove("fade-in");
    document.getElementById("navbar").classList.add("fade-out");
  } else {
    document.getElementById("navbar").classList.remove("fade-out");
    document.getElementById("navbar").classList.add("fade-in");
  }

};


