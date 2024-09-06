// hide and show forms
function showForm(formId) {
    document.getElementById('newProjectForm').style.display = 'none';
    document.getElementById('ourTeamJoinForm').style.display = 'none';
    document.getElementById('generalQueriesForm').style.display = 'none';
    document.getElementById(formId).style.display = 'block';
}

// click to jump div  
function setupScrollButtons(buttons) {
    buttons.forEach(function(button) {
        document.getElementById(button.buttonId).addEventListener('click', function() {
            var targetDiv = document.querySelector(button.targetDivId);
            if (targetDiv) {
                targetDiv.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}
setupScrollButtons([
    { buttonId: 'servicesDetailsButton', targetDivId: '.our-services-details' },
    { buttonId: 'scrollDivButtonForm', targetDivId: '.i-8' },
]);