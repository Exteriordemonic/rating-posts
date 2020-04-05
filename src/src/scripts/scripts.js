import "../styles/style.scss";

// import external dependencies
import anAjaxPosts from "./components/an-ajax-posts";
import anSingleTabs from "./components/an-single-tabs";

console.log("webpack starterkit");



$(document).ready(function () {
    anAjaxPosts.init();
    anSingleTabs.init();
});