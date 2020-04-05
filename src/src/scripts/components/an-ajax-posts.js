const CONFIG = {
    ELEM: "data-an-tab",
    POSTS: "#an-posts",
    CLASS: "-is-active"
};

const {
    ELEM,
    POSTS,
    CLASS
} = CONFIG;

const anAjaxPosts = {
    init() {
        this.elem = document.querySelectorAll(`[${ELEM}]`);
        this.posts = document.querySelector(POSTS);
        this.class = CLASS;
        console.log("init", this.elem);

        this.addEvents();
    },

    addEvents() {
        this.elem.forEach(element => {
            element.addEventListener('click', e => {
                e.preventDefault();
                const $this = e.currentTarget;
                const $url = $this.getAttribute('href');

                if (!$this.classList.contains(this.class)) {
                    //set url
                    //load posts
                    this.loadPosts($url);
                    //reset class
                    this.resetClass();
                    // set active tab
                    $this.classList.add(this.class);
                }
            });
        });
    },

    resetClass() {
        console.log('set Class');

        this.elem.forEach(element => element.classList.remove(this.class));
    },

    loadPosts($url) {
        var $posts = this.posts;
        var $class = this.class;
        $posts.classList.add($class);

        $(POSTS).load($url + ' ' + POSTS + '>*', function () {
            $posts.classList.remove($class);
        });
    },
};

export default anAjaxPosts;