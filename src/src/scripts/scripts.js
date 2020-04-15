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
});