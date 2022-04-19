/*carousel*/
window.onload = function () {
  const slides = document.querySelectorAll(".carousel-item"),
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

/*navbar scroll*/
document.onscroll = function () {
  let y = window.pageYOffset;

  if (y === 0) {
    document.querySelector(".navbar").classList.remove("fade-in");
    document.querySelector(".navbar").classList.add("fade-out");
  } else {
    document.querySelector(".navbar").classList.remove("fade-out");
    document.querySelector(".navbar").classList.add("fade-in");
  }
};

/*login*/
let button = document.querySelector("#login_button");

let openForm = function () {
  button.className = "active";
};

const checkInput = function (input) {
  if (input.value.length > 0) {
    input.className = "active";
  } else {
    input.className = "";
  }
};

let closeForm = function () {
  button.className = "";
};

document.addEventListener("keyup", function (e) {
  if (e.keyCode == 27 || e.keyCode == 13) {
    closeForm();
  }
});
