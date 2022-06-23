// slider
$('#slider-1').cycle({
    fx: 'scrollHorz',
    next: '.next-arrow-1',
    prev: '.previous-arrow-1',
    pager: '.slider-bullets-1',
    timeout: 3000,
    speed: 900,
});

$('#slider-2').cycle({
    fx: 'scrollHorz',
    next: '.next-arrow-2',
    prev: '.previous-arrow-2',
    pager: '.slider-bullets-2',
    timeout: 3000,
    speed: 900,
});

// document
$(document).ready(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 720);
        return false;
    });
});


// killCopy
function killCopy(e){
    return false
    }
    function reEnable(){
    return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar){
    document.onmousedown=killCopy
    document.onclick=reEnable
}
// menu-toggle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

// tabby.init({
//             toggleActiveClass: 'active',
//         });

// bg slider
$('.fadein img:gt(0)').hide();

setInterval(function () {
    $('.fadein :first-child').fadeOut()
                             .next('img')
                             .fadeIn()
                             .end()
                             .appendTo('.fadein');
}, 8000); // 8 seconds