new Vue({
    el: "#root",
    data: {
        message: 'merci pour la lecon',
        skills: [],
    },
    mounted() {
        axios.get('/skills').then(response => this.skills = response.data);
    }
});