document.addEventListener("DOMContentLoaded", () => {
  const pages = document.querySelectorAll(".page");

  pages.forEach((page, index) => {
    page.style.zIndex = pages.length - index; // Set initial z-index
    page.dataset.pageNum = index + 1; // Assign page numbers for reference

    page.addEventListener("click", () => {
      const pageNum = parseInt(page.dataset.pageNum);

      // Toggle flipped state
      page.classList.toggle("flipped");

      // Update z-index based on the flipped state
      if (page.classList.contains("flipped")) {
        page.style.zIndex = pages.length + pageNum; // Bring the flipping page to the front
      } else {
        page.style.zIndex = pages.length - pageNum; // Reset z-index when flipped back
      }

      // Manage neighboring page flip state and z-index
      if (pageNum % 2 === 0) { // Even pages
        if (page.previousElementSibling) {
          page.previousElementSibling.classList.toggle("flipped");
          if (page.previousElementSibling.classList.contains("flipped")) {
            page.previousElementSibling.style.zIndex = pages.length + (pageNum - 1);
          } else {
            page.previousElementSibling.style.zIndex = pages.length - (pageNum - 1);
          }
        }
      } else { // Odd pages
        if (page.nextElementSibling) {
          page.nextElementSibling.classList.toggle("flipped");
          if (page.nextElementSibling.classList.contains("flipped")) {
            page.nextElementSibling.style.zIndex = pages.length + (pageNum + 1);
          } else {
            page.nextElementSibling.style.zIndex = pages.length - (pageNum + 1);
          }
        }
      }
    });
  });
});
