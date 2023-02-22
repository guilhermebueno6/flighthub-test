<template>
    <div class="searchBar mb-3">
        <label >Search: </label>
        <input type="text" v-model="filter" placeholder="" @change="fireRequest(false)"/> 
    </div>
    
    <people-component :people="people"></people-component>
</template>

<script>
    export default {
        data() {
            return {
                people: [],
                filter: '',
            };
        },
        mounted() {
            if (this.filter.length < 1) {
                this.fireRequest(true)
            }
        },
        methods: {
            fireRequest(getAll){
                if(getAll || this.filter.length < 1)
                {
                    axios.get("/getall/")
                    .then(response => {
                        this.people = [...response.data]
                    })
                    .catch(err => {
                            alert("Sorry, we had an error, try again")  
                    })
                } 
                else
                {
                    axios.get("/search/" + this.filter)
                    .then(response => {
                        this.people = [...response.data]
                    })
                    .catch(err => {
                            alert("Sorry, we had an error, try again")  
                    })
                }
                
            }
        }
    }
</script>