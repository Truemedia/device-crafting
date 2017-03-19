var RobotViewModel = new Vue({
    el: '[data-vm="robot"]',
    data: {
        robots: [],
        robot: {},
        mode: null
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
        create: function() {

        },
        read: function() {

        },
        update: function() {

        },
        delete: function() {

        },
        list: function() {
            fetch('/robot')
                .then( (res) => { return res.json(); })
                .then( (json) => {
                    this.robots = json;
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
