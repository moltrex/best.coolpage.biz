// Activating nano scrollbar
$('.nano').nanoScroller();
$('.nano').nanoScroller({ alwaysVisible: true, scroll: 'top' });

//Enable bootstrap tooltip
$(function(){
    $('[data-toggle="tooltip"]').tooltip({trigger: "hover",placement: "bottom", html: true});
});

//Frontend design opbject
var cob = {};

//Sidebar transition

$('.sidebar-toggle-btn').on('click', function(){
   $('.sidebar').toggleClass('sidebar-toggle').css('transition', 'all 0.3s ease 0s');
});