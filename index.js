$(document).ready(function () {
    
    $('#menu-toggle').on('click', function() {
        $('#nav-menu').toggleClass('show'); // Toggle the 'show' class
    });

    const date = new Date().getFullYear();
    $("#policy_date").text(date + " MU. All Rights Reserved.");
  
});