

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
</template>

<script>
    export default {
        props: ['planets'],
        created() {
            console.log(this.planets)
        }
    }
</script>
