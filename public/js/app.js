class Erreur {
    constructor() {
        this.erreur = {};
    }

    get(field) {
        if (this.erreur[field]) {
            return this.erreur[field][0];
        }
    }

    record(errors) {
        this.erreur = errors;
    }

    clear(field) {
        delete this.erreur[field];
    }

    has(field) {
        return this.erreur.hasOwnProperty(field);
    }

    any() {
        return Object.keys(this.erreur).length > 0;
    }
}


new Vue({
    el: "#root",
    data: {
        name: '',
        description: '',
        message: "",
        skills: [],
        erreurs: new Erreur()
    },

    methods: {
        onSubmit() {
            axios.post('/project', {
                name: this.name,
                description: this.description
            })
                .then(response => {
                    alert("success");
                    this.name = '';
                    this.description = "";
                })
                // .catch(error => { console.log(error.response.data.errors) })
                .catch(error => { this.erreurs.record(error.response.data.errors) });
        }
    }

});