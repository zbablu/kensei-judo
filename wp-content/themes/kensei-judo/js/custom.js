



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


/*
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

*/

// Get the toggle button
const toggleButton = document.getElementById('dark-mode-toggle');

// Function to enable dark mode
function enableDarkMode() {
    document.body.classList.add('dark-mode');
    toggleButton.textContent = '🌞 Toggle Light Mode';
    localStorage.setItem('theme', 'dark');
    
    // Also apply the dark mode to the Gutenberg editor (if in editor)
    if (document.body.classList.contains('block-editor-page')) {
        document.body.classList.add('is-dark-theme');
    }
}

// Function to disable dark mode
function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    toggleButton.textContent = '🌙 Toggle Dark Mode';
    localStorage.setItem('theme', 'light');
    
    // Remove dark mode from the Gutenberg editor
    if (document.body.classList.contains('block-editor-page')) {
        document.body.classList.remove('is-dark-theme');
    }
}

// Initialize the dark mode state on page load
const currentMode = localStorage.getItem('theme');
if (currentMode === 'dark') {
    enableDarkMode();
} else {
    disableDarkMode();
}

// Toggle dark mode when the button is clicked
toggleButton.addEventListener('click', function() {
    if (document.body.classList.contains('dark-mode')) {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
});




// Check if the editor is active (Gutenberg)
function isEditorPage() {
  return document.body.classList.contains('block-editor-page');
}

// Detect if dark mode is active in the editor and toggle palettes
function applyDarkModeToEditor() {
  if (isEditorPage()) {
      document.body.classList.add('is-dark-theme');
  }
}

function removeDarkModeFromEditor() {
  if (isEditorPage()) {
      document.body.classList.remove('is-dark-theme');
  }
}

// Make sure we apply the dark mode class in the editor on page load
const editorMode = localStorage.getItem('theme');
if (editorMode === 'dark') {
  applyDarkModeToEditor();
} else {
  removeDarkModeFromEditor();
}





document.addEventListener('DOMContentLoaded', function() {
  const wrapper = document.querySelector('.timeline-wrapper');
  const items = wrapper.querySelector('.timeline-items');
  const prevButton = wrapper.querySelector('.timeline-prev');
  const nextButton = wrapper.querySelector('.timeline-next');
  let currentIndex = 0;

  prevButton.addEventListener('click', () => {
      currentIndex = Math.max(currentIndex - 1, 0); // Don't slide past the first item
      items.style.transform = `translateX(-${currentIndex * 50}%)`;
  });

  nextButton.addEventListener('click', () => {
      const itemCount = items.children.length;
      currentIndex = Math.min(currentIndex + 1, itemCount - 2); // Slide up to the last visible set
      items.style.transform = `translateX(-${currentIndex * 50}%)`;
  });
});
