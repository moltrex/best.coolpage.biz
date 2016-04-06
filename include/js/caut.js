//Enable bootstrap tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        trigger: "hover",
        placement: "bottom",
        html: true
    });
});

//Frontend design opbject
var cob = {};

//Sidebar transition
$(function () {
    $('.sidebar-toggle-btn').on('click', function () {
        $('.sidebar').toggleClass('sidebar-toggle').css('transition', 'all 0.3s ease 0s');
        if ($('.sidebar').hasClass('sidebar-toggle')) {
            $('.sidebar-toggle-btn').css('color', '#dbdbdb');
        } else {
            $('.sidebar-toggle-btn').css('color', '#1fae66');
        };
    });


});

//Sidebar nanoScroller height
cob.nSH = function () {
    cob.sideNavTavHeight = $('.sidebar-head').outerHeight();
    cob.sidebarHeight = $('.sidebar').outerHeight();

    cob.nanoHeight = cob.sidebarHeight - cob.sideNavTavHeight - 55;

    console.log(cob.nanoHeight);

    $('#sidebar-nano').css('height', cob.nanoHeight);

};
$(document).ready(cob.nSH());
$(window).on('resize', function () {
    return cob.nSH()
});

// Activating nano scrollbar
$('.nano').nanoScroller();
