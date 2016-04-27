// Textarea autoresize
$('textarea').autogrow();

// Activating nano scrollbar
$('.nano').nanoScroller();
$('.nano').nanoScroller({ alwaysVisible: true, scroll: 'top' });

//Enable bootstrap tooltip
$(function(){
    $('[data-toggle="tooltip"]').tooltip({trigger: "hover", html: true});
});

//Frontend design opbject
var cob = {};


// Menu register login vizibility

$(function(){
    $('.menu-profile-btn').click(function(){
        $('.menu-profile').toggleClass('visible');
    });

    $('.userRegisterLink').click(function(){
        $('.formRegister').toggleClass('hidden');
        $('.formLogin').toggleClass('hidden');
    });
    $('.userLoginLink').click(function(){
        $('.formRegister').toggleClass('hidden');
        $('.formLogin').toggleClass('hidden');
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


// Search zone wrap background 

$(function(){
    $('.filters-zone-wrap').css('background-image', function(){
        cob.szbi = 1 + Math.floor(Math.random() * 5);    
        return 'url(includes/img/bg/'+cob.szbi+'.jpg)'
    });
});


// Show / hide category dropdown  

$(function(){
    $('.menu-category-btn').click(function(){
        $('.dropdown-filters-wrap').addClass('hidden');
        $('.dropdown-category-wrap').toggleClass('hidden');
        $(".nano").nanoScroller();
    });
});
$(function(){
    $('.category-dropdown-close').click(function(){
        $('.dropdown-category-wrap').addClass('hidden');
        $(".nano").nanoScroller();
    });
});


// Show / hide filter dropdown     

$(function(){
    $('.filters-category-btn').click(function(){
        $('.dropdown-category-wrap').addClass('hidden');
        $('.dropdown-filters-wrap').toggleClass('hidden');
        $(".nano").nanoScroller();
    });
});
$(function(){
    $('.filters-dropdown-close').click(function(){
        $('.dropdown-filters-wrap').addClass('hidden');
        $(".nano").nanoScroller();
    });
}); 

//Hide category and filter dropdown on location or search input

$(function(){
    $('.search-location-text, .search-btn-text').on('focus', function(){
        $('.dropdown-category-wrap, .dropdown-filters-wrap').addClass('hidden');
    });
});


//Put  "ads boxes"  on the midle of the page

cob.gpListAlign = function() {
    cob.gpItemMargin = parseInt($('.gp-list-item').css('margin-right'));
    cob.gpItemWidth = $('.gp-list-item').outerWidth();
    cob.gpParentItemWidth = $('.gp-list-item').parent().outerWidth();

    cob.gpParentPadding = (cob.gpParentItemWidth - ((cob.gpItemWidth + (cob.gpItemMargin * 2)) * Math.floor(cob.gpParentItemWidth / (cob.gpItemWidth + (cob.gpItemMargin * 2))))) / 2;

    $('.gp-list-item').parent().css('padding-left', cob.gpParentPadding);
    $('.gp-list-item').parent().css('padding-right', cob.gpParentPadding);

};

$(document).ready(cob.gpListAlign());
$(window).resize(function () {
    return cob.gpListAlign();
});


//Reduce the number of characters in gp-list-item title

$(function(){
    $('.gp-title-text').each(function() {
        cob.gplto = $(this);
        cob.gplto.text( cob.gplto.text().slice(0,40) + '...' );
    })
});

//Reduce the number of characters in gp-location-text title

$(function(){
    $('.gp-location-text').each(function() {
        cob.gplto = $(this);
        if(cob.gplto.text().length > 23){
            cob.gplto.text( cob.gplto.text().slice(0,23) + '...' );
        };
    });
});


//Hide small add box on click

$(function(){
    $('.gp-add-hide').on('click', function(){
        cob.addhidefirstP = $(this).parent();
        cob.addhidefirst2P = cob.addhidefirstP.parent();
        cob.addhidefirst2P.css('display', 'none');
    });
});


//Cropbox for avatar
/**  Created by ezgoing on 14/9/2014. **/

'use strict';
var cropbox = function(options){
    var el = document.querySelector(options.imageBox),
        obj =
        {
            state : {},
            ratio : 1,
            options : options,
            imageBox : el,
            thumbBox : el.querySelector(options.thumbBox),
            spinner : el.querySelector(options.spinner),
            image : new Image(),
            getDataURL: function ()
            {
                var width = this.thumbBox.clientWidth,
                    height = this.thumbBox.clientHeight,
                    canvas = document.createElement("canvas"),
                    dim = el.style.backgroundPosition.split(' '),
                    size = el.style.backgroundSize.split(' '),
                    dx = parseInt(dim[0]) - el.clientWidth/2 + width/2,
                    dy = parseInt(dim[1]) - el.clientHeight/2 + height/2,
                    dw = parseInt(size[0]),
                    dh = parseInt(size[1]),
                    sh = parseInt(this.image.height),
                    sw = parseInt(this.image.width);

                canvas.width = width;
                canvas.height = height;
                var context = canvas.getContext("2d");
                context.drawImage(this.image, 0, 0, sw, sh, dx, dy, dw, dh);
                var imageData = canvas.toDataURL('image/png');
                return imageData;
            },
            getBlob: function()
            {
                var imageData = this.getDataURL();
                var b64 = imageData.replace('data:image/png;base64,','');
                var binary = atob(b64);
                var array = [];
                for (var i = 0; i < binary.length; i++) {
                    array.push(binary.charCodeAt(i));
                }
                return  new Blob([new Uint8Array(array)], {type: 'image/png'});
            },
            zoomIn: function ()
            {
                this.ratio*=1.1;
                setBackground();
            },
            zoomOut: function ()
            {
                this.ratio*=0.9;
                setBackground();
            }
        },
        attachEvent = function(node, event, cb)
    {
        if (node.attachEvent)
            node.attachEvent('on'+event, cb);
        else if (node.addEventListener)
            node.addEventListener(event, cb);
    },
        detachEvent = function(node, event, cb)
    {
        if(node.detachEvent) {
            node.detachEvent('on'+event, cb);
        }
        else if(node.removeEventListener) {
            node.removeEventListener(event, render);
        }
    },
        stopEvent = function (e) {
            if(window.event) e.cancelBubble = true;
            else e.stopImmediatePropagation();
        },
        setBackground = function()
    {
        var w =  parseInt(obj.image.width)*obj.ratio;
        var h =  parseInt(obj.image.height)*obj.ratio;

        var pw = (el.clientWidth - w) / 2;
        var ph = (el.clientHeight - h) / 2;

        el.setAttribute('style',
                        'background-image: url(' + obj.image.src + '); ' +
                        'background-size: ' + w +'px ' + h + 'px; ' +
                        'background-position: ' + pw + 'px ' + ph + 'px; ' +
                        'background-repeat: no-repeat');
    },
        imgMouseDown = function(e)
    {
        stopEvent(e);

        obj.state.dragable = true;
        obj.state.mouseX = e.clientX;
        obj.state.mouseY = e.clientY;
    },
        imgMouseMove = function(e)
    {
        stopEvent(e);

        if (obj.state.dragable)
        {
            var x = e.clientX - obj.state.mouseX;
            var y = e.clientY - obj.state.mouseY;

            var bg = el.style.backgroundPosition.split(' ');

            var bgX = x + parseInt(bg[0]);
            var bgY = y + parseInt(bg[1]);

            el.style.backgroundPosition = bgX +'px ' + bgY + 'px';

            obj.state.mouseX = e.clientX;
            obj.state.mouseY = e.clientY;
        }
    },
        imgMouseUp = function(e)
    {
        stopEvent(e);
        obj.state.dragable = false;
    },
        zoomImage = function(e)
    {
        var evt=window.event || e;
        var delta=evt.detail? evt.detail*(-120) : evt.wheelDelta;
        delta > -120 ? obj.ratio*=1.1 : obj.ratio*=0.9;
        setBackground();
    }

    obj.spinner.style.display = 'block';
    obj.image.onload = function() {
        obj.spinner.style.display = 'none';
        setBackground();

        attachEvent(el, 'mousedown', imgMouseDown);
        attachEvent(el, 'mousemove', imgMouseMove);
        attachEvent(document.body, 'mouseup', imgMouseUp);
        var mousewheel = (/Firefox/i.test(navigator.userAgent))? 'DOMMouseScroll' : 'mousewheel';
        attachEvent(el, mousewheel, zoomImage);
    };
    obj.image.src = options.imgSrc;
    attachEvent(el, 'DOMNodeRemoved', function(){detachEvent(document.body, 'DOMNodeRemoved', imgMouseUp)});

    return obj;
};


// profile messages show / hide

$(function(){
    $('.prf-msg-toggle-link').on('click', function(){  
        $(this).parent().next('.prf-msg-text-wrap').toggleClass('active');
        $(this).parent().closest('.prf-msg-text-title').addClass('prf-msg-read');
    });
});


// profile messages reply show / hide

$(function(){
    $('.prf-msg-reply').on('click', function(){
        $(this).toggleClass('toggle');    
        $(this).next('.prf-msg-reply-wrap').toggleClass('active');    
    });
    $('.prf-msg-reply-cancel').on('click', function(){
        $(this).closest('.prf-msg-reply-wrap').toggleClass('active');
        $(this).closest('.prf-msg-text-wrap').children('.prf-msg-reply').toggleClass('toggle');
    });
});


// profile user about edit show

$(function(){
    $('.prf-user-usefull-edit').on('click', function(){
        $(this).parent().addClass('editable-section');
    });
});

// profile user about description cancel

$(function(){
    $('.prf-user-about-text-cancel').on('click', function(){
        $(this).closest('.editable-section').removeClass('editable-section');
    });
});


//profile user about add personal group links

$(function(){
    cob.usefullLinkNr = 0;
    $(document).on('click','.prf-user-usefull-add-group', function(){

        if(cob.usefullLinkNr < 4){
            cob.usefullLinkGroup = $(this).closest('.prf-user-usefull-form-group').clone();
            $(this).closest('.prf-user-usefull-form-group').after(cob.usefullLinkGroup);
            $(this).closest('.prf-user-usefull-form-group').next('.prf-user-usefull-form-group').find('.prf-user-usefull-label-input').val('');
            $(this).closest('.prf-user-usefull-form-group').next('.prf-user-usefull-form-group').find('.prf-user-usefull-link-input').val('');
            cob.usefullLinkNr++;

        };

    });
});


//profile user about delete personal group links

$(function(){

    $(document).on('click','.prf-user-usefull-remove-group', function(){
        if( cob.usefullLinkNr >= 1){
            $(this).closest('.prf-user-usefull-form-group').remove();
            cob.usefullLinkNr--;
        };
    });

});


//profile user about hide edit persoanl links

$(function(){
    $('.prf-user-about-usefull-cancel').on('click', function(){
        $(this).closest('.editable-section').removeClass('editable-section');
    });
});


// profile user about hide social edit

$(function(){
    $('.prf-user-about-social-cancel').on('click', function(){
        $(this).closest('.editable-section').removeClass('editable-section');
    });
});


// profile dashboard show edit form

$(function(){
    $('.prf-user-dashboard-edit').on('click', function(){
        $(this).hide();
        $(this).closest('.prf-user-dashboard-form').removeClass('editable-section');
        $(this).closest('.prf-user-dashboard-form').find('.prf-user-dashboard-form-input').removeAttr('disabled');
    });
});

// profile dashboard hide edit form

$(function(){
    $('.prf-user-dashboard-cancel').on('click', function(){
        $(this).closest('.prf-user-dashboard-form').addClass('editable-section');
        $(this).closest('.prf-user-dashboard-form').find('.prf-user-dashboard-form-input').attr('disabled', true);
        $(this).closest('.prf-user-dashboard-form').find('.prf-user-dashboard-edit').show();
    });
});


// profile dashboard show / hide add credits form

$(function(){
    $('.prf-user-dashboard-credtits-link').on('click', function(){
        $(this).hide();
        $(this).next('.prf-user-dashboard-credits-form').show();
    });
    
    $('.prf-user-dashboard-credits-cancel').on('click', function(){
        $(this).closest('.prf-user-dashboard-form').hide();
        $(this).closest('.prf-user-dashboard-form').siblings('.prf-user-dashboard-credtits-link').show();
    });
});

