document.addEventListener('DOMContentLoaded', function () {
    // Get the current page URL path
    var currentPath = window.location.pathname;

    // Extract just the filename from the path
    var currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1);

    // Select all navigation links
    var navLinks = document.querySelectorAll('.second-row ul li a');

    // Loop through the navigation links
    navLinks.forEach(function (link) {
        // Get the href of the link and extract the filename
        var linkPath = link.getAttribute('href');
        var linkPage = linkPath.substring(linkPath.lastIndexOf('/') + 1);

        // Compare the filenames
        if (linkPage === currentPage) {
            // Add the active class
            link.classList.add('active');
        } else {
            // Remove the active class if it doesn't match
            link.classList.remove('active');
        }
    });
});
