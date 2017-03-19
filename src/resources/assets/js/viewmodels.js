var RobotViewModel = new Vue({
    el: '[data-vm="robot"]',
    data: {
        robots: []
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
                .then( (json) => { this.robots = json; });
        },
        /**
          * Import/Export
          */
        importer: function() {

        }
    }
});
