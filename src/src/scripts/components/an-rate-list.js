const CONFIG = {
    TRIGGER: 'data-rate-list-more',
};

const {
    TRIGGER,
} = CONFIG;

const rateList = {
    init() {
        this.trigger = document.querySelectorAll(`[${TRIGGER}]`);

        this.addEvents();
    },

    addEvents() {
        this.trigger.forEach(element => {
            element.addEventListener('click', e => {
                const $this = e.currentTarget;
                const wrapper = $this.parentNode.parentNode;

                const subButtons = wrapper.querySelectorAll(`[${TRIGGER}]`);
                wrapper.classList.toggle('-is-active');
                subButtons.forEach(element => {
                    element.classList.toggle('-is-active');
                });

                console.log('log log');
            });
        });
    },
};

export default rateList;