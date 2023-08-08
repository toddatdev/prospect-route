window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });


$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });


$(document).ready(function(){
    //how it works
    $("#works-expand-btn").click(function(){
        $("p.works-hide").toggleClass("works-hide-show");
        var $this = $(this);
        // $this.toggleClass('works-hide-show');
        // if($this.hasClass('')){
        //     $this.text('Expand to read more');
        // } else {
        //     $this.text('Click to read less');
        // }

    });
    //pr-crm
    $("#pr-crm-btn").click(function(){
        $(".pr-crm-expanded-hide").toggleClass("pr-crm-expanded-show");
    });
    //our lead button
    $("#our-lead-btn").click(function(){
        $(".our-leads-expanded-hide").toggleClass("our-leads-expanded-show");
    });



});






// document.getElementById('sendPricing').addEventListener('click', function(e){
    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });



});
//     const element = document.querySelector("#packges");
//     const form_element = document.querySelector("#pricing-form");
//     if(element.classList.contains('d-none')){
//         element.classList.remove('d-none');
//         element.classList.add('d-block');
//         form_element.classList.remove('d-block');
//         form_element.classList.add('d-none');

//     }


//     });


function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}


document.getElementById('sendPricing').addEventListener('click', function(e){

    const element = document.querySelector("#packges");
    const form_element = document.querySelector("#pricing-form");
    if(element.classList.contains('d-none')){
        element.classList.remove('d-none');
        element.classList.add('d-block');
        form_element.classList.remove('d-block');
        form_element.classList.add('d-none');

    }


    });



