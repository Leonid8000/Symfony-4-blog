// Navbar with Logo and Categories animation
window.onload = function() {
    $('#nav').show().css('opacity','1');
    $('.first-hr').css('width','100%');
};
$(window).on('scroll', ()=>{
    if($(window).scrollTop()){
        $('#nav').addClass('black')
    }else{
        $('#nav').removeClass('black')
    }
});

// third-img
// First post animation
    gsap.from('#first-post', {opacity:0, duration: 1});

// Circle type
// new CircleType(document.getElementById('demo1'))
//     .radius(384);
//
// if( window.pageYOffset > 902 ) {
//     alert(window.pageYOffset);
// }

//Green Shock
document.getElementById('cta').addEventListener('click', ()=>{

    TweenMax.to('.panel', 1, {scaleY: 1, height: '100vh',  ease: Circ.easeInOut});
    TweenMax.to('#img-gasp', 1, {opacity: 1, y:0, delay: 1});
    TweenMax.to('.p-gasp', 1, {opacity: 1, y:20, delay: 1.4});
    TweenMax.to('.box', 3, {opacity: 1, scale:1, ease: Elastic.easeOut.config(1,0.3)});
});
let nav = document.getElementById('nav');




