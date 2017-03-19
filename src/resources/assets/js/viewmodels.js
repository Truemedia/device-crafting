var RobotViewModel = new Vue({
    el: '[data-vm="robot"]',
    mounted: function() {
        document.addEventListener('DOMContentLoaded', => (e) {
            var link = document.querySelector('[data-route="robot.index"]');
            link.addEventListener('click', => (e) {
                e.preventDefault();
                this.list();
            });
        });
    },
    methods: {
        /**
          * CRUDL
          */
        list: function() {
            console.log('getting robots');
        }
    }
});
