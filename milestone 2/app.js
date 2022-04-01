const app = new Vue ({ 
    el: '#app',
    data: {
        discs: [],
        discsFiltered: [],
        genreList: [],
        genre: '',
    },
    watch: {
        genre: function(newVal, oldVal) {
            console.log(newVal, oldVal);
            this.fetchDiscs()
        }
    },
    methods: {
        fetchDiscs: function() {
            axios.get('db.php',{
                params: {
                    genre: this.genre
                }
            })
            .then(res => {
                this.discs = res.data
                this.getGenre(this.discs)
            })
        },
        // fetchGenre: function() {
        //     axios.get('server.php',{
        //         params: {
        //             genre: genreFilter,
        //         }
        //     })
        //     .then(res => {
        //         this.discsFiltered = res.data
        //     })
        // },
        getGenre: function (discs) { 
            discs.forEach((el) => {
                const genere = el.genre;
                if (!this.genreList.includes(genere)) {
                    this.genreList.push(genere);
                }
            });
        },
    },
    created() {
        this.fetchDiscs()
    },
    
    
 })