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
    cob.topNavBar = $('.top-bar-wrap').outerHeight();

    cob.nanoHeight = cob.sidebarHeight - cob.sideNavTavHeight - cob.topNavBar;

    console.log(cob.nanoHeight);

    $('#sidebar-nano').css('height', cob.nanoHeight);

};
$(document).ready(cob.nSH());
$(window).on('resize', function () {
    return cob.nSH()
});


// Activating nano scrollbar
$('.nano').nanoScroller();


// Sidebar category collapse
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

// Location Dropdown
$(function(){
    $('.search-location-cancel-btn, .search-location-list-item').click(function(){
        $('.search-location-text').val("");
        $('.search-location-cancel-btn, .search-location-list-wrap').addClass('hidden');
    });
    $('.search-location-text').bind('change keypress paste focus', function(){  //DOMAttrModified textInput input
        if($('.search-location-text').val().length >= 1){
            $('.search-location-cancel-btn').removeClass('hidden');
            $('.search-location-list-wrap').removeClass('hidden');
        }else{
            $('.search-location-cancel-btn').addClass('hidden');
            $('.search-location-list-wrap').addClass('hidden');
        }
    });
    $('.search-location-text').on('blur', function(){
        $('.search-location-list-wrap').addClass('hidden');
    });
});

// Top bar search 
cob.tBSWidth = function () {
    cob.headerWidth = $('header').width();
    cob.brandWidth = $('.top-bar-brand').outerWidth();
    cob.topMenuWidth = $('.top-menu-wrap').outerWidth();

    cob.sGWidth = cob.headerWidth - cob.brandWidth - cob.topMenuWidth;

    console.log(cob.sGWidth);

    $('.top-bar-input-group').css('width', cob.sGWidth);

};

$(document).ready(cob.tBSWidth());
$(window).on('resize', function () {
    return cob.tBSWidth()
});
