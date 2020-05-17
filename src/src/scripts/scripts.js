import "../styles/style.scss";

// import external dependencies
import anAjaxPosts from "./components/an-ajax-posts";
import anSingleTabs from "./components/an-single-tabs";
import radioStar from "./components/an-radio-star";
import anDropdownInput from "./components/an-dropdown-input";
import anForm from "./components/an-form";
import anRateList from "./components/an-rate-list";

console.log("webpack starterkit");

$(document).ready(function () {
    anAjaxPosts.init();
    anSingleTabs.init();
    radioStar.init();
    anDropdownInput.init();
    anForm.init();
    anRateList.init();


    var stickyTop = $('.an-card').offset().top;

    if ($(".an-single__row--erfahrungen").length) {
        $(window).scroll(function () {
            var windowTop = $(window).scrollTop();
            if (stickyTop < windowTop && $(".an-single__row--erfahrungen").height() + $(".an-single__row--erfahrungen").offset().top - $(".an-card").height() > windowTop) {
                $('.an-card').addClass('-fix');
                $('.an-card--holder-width').addClass('-fix');
            } else {
                $('.an-card').removeClass('-fix');
                $('.an-card--holder-width').removeClass('-fix');
            }
        });
    }

    console.log("webpack starterkit !!!");
});