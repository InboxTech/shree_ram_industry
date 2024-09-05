// main nav active inactive

document.addEventListener('DOMContentLoaded', function () {
    var currentPath = window.location.pathname;
    var currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1);
    var navLinks = document.querySelectorAll('.second-row ul li a');

    navLinks.forEach(function (link) {
        var linkPath = link.getAttribute('href');
        var linkPage = linkPath.substring(linkPath.lastIndexOf('/') + 1);
        if (linkPage === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

//  form actvie inactive
function activateLink(event) {
    var links = document.querySelectorAll('#menu li a');
    links.forEach(function(link) {
        link.classList.remove('active');
    });
    event.target.classList.add('active');
}
document.querySelectorAll('#menu li a').forEach(function(link) {
    link.addEventListener('click', activateLink);
});
