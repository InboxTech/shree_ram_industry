// main nav active inactive usnig file name with nav item name
document.addEventListener('DOMContentLoaded', function () {
    var pageMap = {
        '': 'Home',
        'index.php': 'Home',
        'about.php': 'About Us',
        'services.php': 'services',
        'products.php': 'Products',
        'contact_us.php': 'Contact Us',
        'cnc-and-vmc-machine-services.php': 'services',
        'custom-sheet-metal-works.php': 'services',
        'precision-machine-services.php': 'services',
        'component-and-engineering-design.php': 'services',
        'parts-assembly.php': 'services',
        'custom-die-and-mold-making-services.php': 'services'
    };

    var currentPath = window.location.pathname;
    var currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1);
    var navLinks = document.querySelectorAll('.second-row ul li a');

    navLinks.forEach(function (link) {
        var linkPath = link.getAttribute('href');
        var linkPage = linkPath.substring(linkPath.lastIndexOf('/') + 1);
        var navItemName = pageMap[linkPage];
        if (navItemName && navItemName === pageMap[currentPage]) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

// main nav active inactive
// document.addEventListener('DOMContentLoaded', function () {
//     var currentPath = window.location.pathname;
//     var currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1);
//     var navLinks = document.querySelectorAll('.second-row ul li a');

//     navLinks.forEach(function (link) {
//         var linkPath = link.getAttribute('href');
//         var linkPage = linkPath.substring(linkPath.lastIndexOf('/') + 1);
//         if (linkPage === currentPage) {
//             link.classList.add('active');
//         } else {
//             link.classList.remove('active');
//         }
//     });
// });

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
