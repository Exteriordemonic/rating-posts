const CONFIG = {
    INPUT: 'data-an-dropdown-input',
    ITEM: 'data-an-dropdown-item',
    LABEL: 'an-select-search__item',
};

const {
    INPUT,
    ITEM,
    LABEL
} = CONFIG;

const anDropdownInput = {
    init() {
        this.inputs = document.querySelectorAll(`[${INPUT}]`);
        this.items = document.querySelectorAll(`[${ITEM}]`);
        if (this.inputs) {
            this.addEvents();

            console.log('TEST ! ! ! !');
        };
    },

    addEvents() {
        this.inputs.forEach(input => {
            input.addEventListener('keyup', e => {
                console.log('change');
                const $this = e.currentTarget;

                // Wrapper control
                const wrapper = $this.parentNode.parentNode;
                wrapper.classList.add('-is-active');

                const val = $this.value.toUpperCase();
                const items = wrapper.querySelectorAll(`[${ITEM}]`);

                items.forEach((item, i) => {
                    const txtValue = item.innerText.toUpperCase();
                    if (testinput(val, txtValue)) {
                        console.log('txtValue', txtValue);
                        items[i].style.display = "";
                    } else {
                        console.log('false');
                        items[i].style.display = "none";
                    }
                });

            });
            ['click', 'focus'].forEach(evt => {
                input.addEventListener(evt, e => {
                    const $this = e.currentTarget;

                    // Wrapper control
                    const wrapper = $this.parentNode.parentNode;
                    wrapper.classList.add('-is-active');

                    console.log('test');
                }, false);
            });

            input.addEventListener('focusout', e => {
                const $this = e.currentTarget;

                // Wrapper control
                const wrapper = $this.parentNode.parentNode;
                wrapper.classList.remove('-is-active');
            });
        });

        this.items.forEach(item => {
            console.log(item, '-intem');
            item.addEventListener('click', e => {
                console.log('click item');
                const $this = e.currentTarget;
                const wrapper = $this.parentNode.parentNode;
                const parent = wrapper.parentNode;

                const $txt = $this.innerText;
                parent.insertBefore(this.createLabel($txt), wrapper);
                $this.remove();
            });
        });
    },

    initRemoveFnc($this) {
        $this.addEventListener('click', e => {
            console.log('label click');
            e.preventDefault();
            const $this = e.currentTarget;

            $this.querySelector('button').remove();

            const wrapper = $this.parentNode.querySelector('ul');
            const $txt = $this.innerText;

            wrapper.append(this.createItem($txt));
            $this.remove();
        });
    },

    initCreateFnc($this) {
        $this.addEventListener('click', e => {
            console.log('click item');
            e.preventDefault();
            const $this = e.currentTarget;
            const wrapper = $this.parentNode.parentNode;
            const parent = wrapper.parentNode;

            const $txt = $this.innerText;
            parent.insertBefore(this.createLabel($txt), wrapper);
            $this.remove();
        });
    },

    createLabel($txt) {
        //<span class="an-select-search__item">test <button class="an-select-search__remove">x</button></span>
        const elem = document.createElement('span');
        const button = document.createElement('button');

        //add content to elem
        elem.innerText = $txt;
        button.innerText = 'x';

        //add classes
        elem.classList.add('an-select-search__item');
        button.classList.add('an-select-search__remove');

        elem.appendChild(button);
        this.initRemoveFnc(elem);
        return elem;
    },

    createItem($txt) {
        //<li class="an-dropdown__item" data-an-dropdown-item>About</li>
        const elem = document.createElement('li');

        //add content to elem
        elem.innerText = $txt;

        //add classes
        elem.classList.add('an-dropdown__item');
        this.initCreateFnc(elem);
        return elem;
    },
};

export default anDropdownInput;