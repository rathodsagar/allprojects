document.addEventListener("wheel", handleScroll);

let touchStartY = 0;
let touchEndY = 0;

document.addEventListener("touchstart", (event) => {
  touchStartY = event.changedTouches[0].screenY;
});

document.addEventListener("touchend", (event) => {
  touchEndY = event.changedTouches[0].screenY;
  handleTouchScroll();
});

function handleScroll(event) {
  const delta = Math.sign(event.deltaY);
  scrollToSection(delta);
}

function handleTouchScroll() {
  const delta = touchStartY - touchEndY > 0 ? 1 : -1;
  scrollToSection(delta);
}

function scrollToSection(delta) {
  const currentSection =
    document.querySelector(".section.active") ||
    document.querySelector(".section");
  let nextSection;

  if (delta > 0) {
    nextSection = currentSection.nextElementSibling;
  } else {
    nextSection = currentSection.previousElementSibling;
  }

  if (nextSection && nextSection.classList.contains("section")) {
    window.scrollTo({
      top: nextSection.offsetTop,
      behavior: "smooth",
    });

    currentSection.classList.remove("active");
    nextSection.classList.add("active");
  }
}
