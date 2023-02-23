

<template>
    <table id="planetTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Planet</th>
                <th>Diameter</th>
                <th>Climate</th>
                <th>Terrain</th>
                <th>Population</th>
                <th>Orbital period</th>
                <th>Rotation period</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="planet in planets">
                <td>{{planet.name}}</td>
                <td>{{planet.diameter}}km</td>
                <td>{{planet.climate}}</td>
                <td>{{planet.terrain}}</td>
                <td>{{planet.population}}</td>
                <td>{{planet.orbital_period}} days</td>
                <td>{{planet.rotation_period}}h</td>
                
            </tr>
        </tbody>
    </table>

    <nav-component :next="nextPlanet" :previous="previousPlanet"></nav-component>
    
</template>

<script>
    export default {
        data() {
            return {
                planets: [],
                nextPlanet: '',
                previousPlanet: '',
            };
        },
        mounted() {
            this.fireRequest('1')
        },
        methods: {
            fireRequest(page){

                    if(page == undefined){
                        page = ''
                    }
                    axios.get("/planets/" + page)
                    .then(response => {
                        this.planets = [...response.data.planets]
                        this.nextPlanet = response.data.next
                        this.nextPlanet = this.nextPlanet.replace('https://swapi.dev/api/planets/?page=', '')
                        this.previousPlanet = response.data.previous
                        if(this.previousPlanet == null){
                            this.previousPlanet = '1'
                        }
                        else{
                            this.previousPlanet = this.previousPlanet.replace('https://swapi.dev/api/planets/?page=', '')
                        }
                        
                    })
                    .catch(err => {
                            console.log(err)  
                    })
                } 

                
            }
        
    }
</script>
