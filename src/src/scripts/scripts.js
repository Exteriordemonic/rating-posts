import "../styles/style.scss";

// import external dependencies
import anAjaxPosts from "./components/an-ajax-posts";

console.log("webpack starterkit");



$(document).ready(function () {
    anAjaxPosts.init();
});