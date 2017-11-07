var form = new Vue({
    el: '#cv-form',
    data: {
        workExperience: []
    },
    methods: {
        addWorkExperience: function () {
            this.workExperience.push(
                {
                    employer: '',
                    date: '',
                    description: ''
                }
            );
        }
    }
});