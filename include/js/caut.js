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
    if ($('.sidebar').hasClass('sidebar-toggle')) {
        $('.sidebar-toggle-btn').css('color', '#dbdbdb');
    } else {
        $('.sidebar-toggle-btn').css('color', '#1fae66');
    };
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


// Activate Jquery Collapse
$(function() {
    cob.allPanels = $('.collapse-content').hide();

    $('.collapse-head').click(function() {
        if($(this).next('.collapse-content').hasClass('collapsed')){
            $(this).next('.collapse-content').slideUp().removeClass('collapsed');
            return false;
        }else{
            cob.allPanels.slideUp().removeClass('collapsed');
            $(this).next('.collapse-content').slideDown().addClass('collapsed');
            return false;    
        };  
    });
});
