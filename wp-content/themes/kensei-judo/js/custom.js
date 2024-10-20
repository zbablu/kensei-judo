



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



// Get the toggle button
const toggleButton = document.getElementById('dark-mode-toggle');

// Check if dark mode is already active (from localStorage)
const currentMode = localStorage.getItem('theme');
if (currentMode === 'dark') {
    document.body.classList.add('dark-mode');
    toggleButton.classList.add('dark-mode-active');
    toggleButton.textContent = '🌞 Toggle Light Mode';
}

// Add click event listener to toggle dark mode
toggleButton.addEventListener('click', function() {
    // Toggle the dark mode class on the body
    document.body.classList.toggle('dark-mode');

    // Update the button text and appearance
    if (document.body.classList.contains('dark-mode')) {
        toggleButton.textContent = '🌞 Toggle Light Mode';
        toggleButton.classList.add('dark-mode-active');
        // Save the user's preference for dark mode
        localStorage.setItem('theme', 'dark');
    } else {
        toggleButton.textContent = '🌙 Toggle Dark Mode';
        toggleButton.classList.remove('dark-mode-active');
        // Save the user's preference for light mode
        localStorage.setItem('theme', 'light');
    }
});


