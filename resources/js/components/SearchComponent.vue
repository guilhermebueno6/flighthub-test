<template>
    <div class="searchBar mb-3">
        <label >Search: </label>
        <input type="text" v-model="filter" placeholder="" @change="fireRequest(false)"/> 
    </div>
    
    <people-component :people="people"></people-component>
    
    <nav-component :next="next" :previous="previous" :isSearch="true"></nav-component>

    

</template>

<script>
    export default {
        data() {
            return {
                people: [],
                filter: '',
                next: '',
                previous: '',
            };
        },
        mounted() {
            if (this.filter.length < 1) {
                this.fireRequest(true, '1')
            }
        },
        methods: {
            fireRequest(getAll, page){
                if(getAll || this.filter.length < 1)
                {
                    if(page == undefined){
                        page = ''
                        filter = ''
                    }
                    axios.get("/people/" + page)
                    .then(response => {
                        this.people = [...response.data.people]
                        this.next = response.data.next
                        this.next = this.next.replace('https://swapi.dev/api/people/?page=', '')
                        this.previous = response.data.previous
                        if(this.previous == null){
                            this.previous = '1'
                        }
                        else{
                            this.previous = this.previous.replace('https://swapi.dev/api/people/?page=', '')
                        }
                        
                    })
                    .catch(err => {
                            console.log(err)  
                    })
                } 
                else
                {
                    axios.get("/search/" + this.filter)
                    .then(response => {
                        this.people = [...response.data]
                    })
                    .catch(err => {
                        console.log(err) 
                    })
                }
                
            }
        }
    }
</script>