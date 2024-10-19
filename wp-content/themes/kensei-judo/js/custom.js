



document.addEventListener("DOMContentLoaded", function() {
  const items = document.querySelectorAll(".accordion-header");

  items.forEach((item) => {
    item.addEventListener("click", function() {
      const parent = this.parentNode;
      const downArrow = this.querySelector(".down-arrow");
      const upArrow = this.querySelector(".up-arrow");

      // Toggle the active class
      parent.classList.toggle("active");

      // Toggle the arrows
      if (parent.classList.contains("active")) {
        downArrow.style.display = "none";
        upArrow.style.display = "inline";
      } else {
        downArrow.style.display = "inline";
        upArrow.style.display = "none";
      }
    });
  });
});


