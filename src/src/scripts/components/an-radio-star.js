const CONFIG = {
    ELEM: "data-radio-star",
};

const {
    ELEM,
} = CONFIG;

const radioStar = {
    init() {
        this.elem = document.querySelectorAll(`[${ELEM}] svg`);

        this.addEvents();
    },

    addEvents() {
        this.elem.forEach((element, index) => {
            element.setAttribute('data-an-num', index % 5);
            element.addEventListener('click', e => {
                const $this = e.currentTarget;
                const num = parseInt($this.dataset.anNum);

                console.log($this);
                $this.parentNode.parentNode.querySelectorAll('input')[num].checked = true;
                $this.parentNode.classList = `an-stars an-stars--${num + 1}`;
            });
        });
    },
}

export default radioStar;