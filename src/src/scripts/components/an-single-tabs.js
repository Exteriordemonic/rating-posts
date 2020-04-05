const CONFIG = {
    ELEM: "data-an-single-tab",
    WRAPPER: "data-single-wrapper",
    CLASS: "-is-active"
};

const {
    ELEM,
    WRAPPER,
    CLASS
} = CONFIG;

const anSingleTabs = {
    init() {
        this.elem = document.querySelectorAll(`[${ELEM}]`);
        this.wrapper = document.querySelector(`[${WRAPPER}]`);
        this.class = CLASS;
        console.log("init", this.elem);

        if (this.elem) {
            this.addEvents();
        }

    },

    addEvents() {
        this.elem.forEach(element => {
            element.addEventListener('click', e => {
                e.preventDefault();
                const $this = e.currentTarget;
                const $url = $this.getAttribute('href');

                if (!$this.classList.contains(this.class)) {
                    //set url
                    history.pushState({}, '', $url);
                    //reset class
                    this.resetClass();
                    // set active tab
                    $this.classList.add(this.class);
                    this.wrapper.classList.toggle(this.class);
                }
            });
        });
    },

    resetClass() {
        console.log('set Class');

        this.elem.forEach(element => element.classList.remove(this.class));
    },
};

export default anSingleTabs;