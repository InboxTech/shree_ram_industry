// hide and show forms
function showForm(formId) {
    document.getElementById('newProjectForm').style.display = 'none';
    document.getElementById('ourTeamJoinForm').style.display = 'none';
    document.getElementById('generalQueriesForm').style.display = 'none';
    document.getElementById(formId).style.display = 'block';
}

//  click to goto div using thier id 
document.getElementById('scrollToDivButton').addEventListener('click', function() {
    var targetDiv = document.querySelector('.i-8');
    if (targetDiv) {
        targetDiv.scrollIntoView({ behavior: 'smooth' }); // Smooth scroll to the div
    }
});

document.getElementById('servicesDetailsButton').addEventListener('click', function() {
    var targetDiv = document.querySelector('.our-services-details');
    if (targetDiv) {
        targetDiv.scrollIntoView({ behavior: 'smooth' }); // Smooth scroll to the div
    }
});
