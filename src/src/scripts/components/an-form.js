const CONFIG = {
    FORM: "data-an-form",
    LABELS: "an-select-search__item",
    INPUT: "data-an-dropdown-produkt",
};

const {
    FORM,
    LABELS,
    INPUT,
} = CONFIG;

const anForm = {
    init() {
        this.form = document.querySelector(`[${FORM}]`);
        this.input = document.querySelector(`[${INPUT}]`);

        if (this.form) {
            this.addEvents();
        };
    },

    addEvents() {
        this.form.addEventListener('submit', e => {
            e.preventDefault();


            this.getLabels();
            console.log('!! SEND FORM !!');
            this.form.submit();
        });
    },

    getLabels() {
        this.labels = document.querySelectorAll(`.${LABELS}`);

        if (this.labels) {
            let content = '';
            this.labels.forEach(element => {

                if (element.querySelector('button')) element.querySelector('button').remove();
                const txt = element.innerText;
                console.log('content', txt);
                if (txt) {
                    content += txt + ',';
                }
            });

            console.log('content', content);
            this.input.value = content;
        };
    },
};

export default anForm;