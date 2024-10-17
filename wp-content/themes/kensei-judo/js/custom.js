


  document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".accordion-header");

    items.forEach((item) => {
      item.addEventListener("click", function() {
        const parent = this.parentNode;
        parent.classList.toggle("active");
      });
    });
  });

