var RobotViewModel = new Vue({
    el: '[data-vm="robot"]',
    data: {
        robots: [],
        robot: {},
        mode: null,
        resource: 'robot'
    },
    delimiters: ['${', '}'], // Template literal
    mounted: function() {
        document.addEventListener('DOMContentLoaded', (e) => {
            var link = document.querySelector('[data-route="robot.index"]');
            link.addEventListener('click', (e) => {
                e.preventDefault();
                this.list();
            });
        });
    },
    methods: {
        /**
          * CRUDL
          */
        create: function(e) {
            e.preventDefault();
            let resource = this.resource;
            fetch(`/${resource}`, {
                method: 'post',
                body: new FormData( e.target.closest('form') )
            })
            .then( (res) => {
                console.log(res);
            });
        },
        read: function() {

        },
        update: function() {

        },
        delete: function() {

        },
        list: function() {
            let resource = this.resource;
            fetch(`/${resource}`)
                .then( (res) => { return res.json(); })
                .then( (robots) => {
                    this.robots = robots;
                    this.mode = 'list';
                });
        },
        /**
          * Interfaces
          */
        cancel: function() {
            switch (this.mode) {
                case 'create':
                case 'update':
                    this.mode = 'list';
                break;
                default:
                    this.mode = null;
                break;
            }
        },
        form: function(id = null) {
            if (id != null) {
                this.mode = 'update';
                let index = this.robots.findIndex( (robot) => robot.id == id );
                this.robot = this.robots[index];
            } else {
                this.mode = 'create';
                this.robot = [];
            }
        },
        importer: function() {

        }
    }
});
