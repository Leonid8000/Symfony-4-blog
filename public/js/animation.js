// AOS animation
//  1 Post animation
AOS.init({
    duration: 2000,
    offset: 200
});
gsap.from('.first-img', {opacity:0, duration: 1, y: -50, delay:1.3, ease: Power1.easeOut});
gsap.from('.first-h1', {opacity:0, duration: 1, y: 30, delay:1.1, ease: Power2.easeOut});
gsap.from('.first-p', {opacity:0, duration: 1, y: 30, delay:1.2, ease: Power2.easeOut});

//Post 3 Scroll animation
let tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();
tl.from('.second-content', .5, {x: 200, opacity: 0});
tl.from('.second-img', 1, {x: 100, opacity: 0});
tl.from('.second-hr', 1, {width:0}, '=-.5');

const scene = new ScrollMagic.Scene({
    triggerElement: '.second-post',
    triggerHook: 'onLeave',
    duration: '100%'
})
    .setPin('.second-post')
    .setTween(tl)
    .addTo(controller);

function updatePercentage(){
    tl.progress();
//    console.log(tl.progress());
}
// Barba js
Barba.Pjax.start();

var transitionAnimation = Barba.BaseTransition.extend({
    start: function() {
        /**
         * This function is automatically called as soon the Transition starts
         * this.newContainerLoading is a Promise for the loading of the new container
         * (Barba.js also comes with an handy Promise polyfill!)
         */

        // As soon the loading is finished and the old page is faded out, let's fade the new page
        Promise
            .all([this.newContainerLoading, this.startTransition()])
            .then(this.fadeIn.bind(this));
    },

    startTransition: function() {
        /**
         * this.oldContainer is the HTMLElement of the old Container
         */

        return $(this.oldContainer).animate({ opacity: 0 }).promise();
    },

    fadeIn: function() {
        /**
         * this.newContainer is the HTMLElement of the new Container
         * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
         * Please note, newContainer is available just after newContainerLoading is resolved!
         */

        var _this = this;
        var $el = $(this.newContainer);

        $(this.oldContainer).hide();

        $el.css({
            visibility : 'visible',
            opacity : 0
        });

        $el.animate({ opacity: 1 }, 400, function() {
            /**
             * Do not forget to call .done() as soon your transition is finished!
             * .done() will automatically remove from the DOM the old Container
             */

            _this.done();
        });
    }
});
/**
 * Next step, you have to tell Barba to use the new Transition
 */
Barba.Pjax.getTransition = function() {
    /**
     * Here you can use your own logic!
     * For example you can use different Transition based on the current page or link...
     */

    return transitionAnimation;
};
