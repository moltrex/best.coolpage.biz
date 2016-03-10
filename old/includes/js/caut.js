// Activating nano scrollbar
$('.nano').nanoScroller();
$('.nano').nanoScroller({ alwaysVisible: true, scroll: 'top' });

//Enable bootstrap tooltip
$(function(){
    $('[data-toggle="tooltip"]').tooltip({trigger: "hover", html: true});
});

//Frontend design opbject
var frds = {};

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
        frds.szbi = 1 + Math.floor(Math.random() * 5);    
        return 'url(/includes/img/bg/'+frds.szbi+'.png)'
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
frds.midAdsBox = function(){
    $('.addsbox-wrap').css('padding-left', '0'); //Reset padding
    $('.addsbox-wrap').css('padding-right', '0');
    frds.totalContentWidth = $('.addsbox-wrap').width();
    frds.adsBoxNr = 0; // Number of ads boxes
    frds.adsBoxW = 220; // Width of ads boxes

    // Get closest number to content wrap width
    for (frds.adsBoxNr = 0; frds.adsBoxNr * frds.adsBoxW <= frds.totalContentWidth; frds.adsBoxNr++ ){ 
        frds.adsBoxT = frds.adsBoxNr * frds.adsBoxW; 
    };

    frds.adsBoxM = (frds.totalContentWidth - frds.adsBoxT) / 2; // Get padding left and right for content-wrap

    $('.addsbox-wrap').css('padding-left', frds.adsBoxM); //Put the padding to the left

}
$(document).ready(frds.midAdsBox());
$(window).on('resize', function(){return frds.midAdsBox()});


//Reduce the number of characters in gp-list-item title
$(function(){
    $('.gp-title-text').each(function() {
        frds.gplto = $(this);
        frds.gplto.text( frds.gplto.text().slice(0,40) + '...' );
    })
});

//Reduce the number of characters in gp-location-text title
$(function(){
    $('.gp-location-text').each(function() {
        frds.gplto = $(this);
        if(frds.gplto.text().length > 23){
            frds.gplto.text( frds.gplto.text().slice(0,23) + '...' );
        };
    });
});

//Hide small add box on click
$(function(){
    $('.gp-add-hide').on('click', function(){
        frds.addhidefirstP = $(this).parent();
        frds.addhidefirst2P = frds.addhidefirstP.parent();
        frds.addhidefirst2P.css('display', 'none');
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



