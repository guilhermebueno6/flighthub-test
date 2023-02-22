

<template>
    <table id="starshipTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Starship</th>
                <th>Cargo capacity</th>
                <th>Consumables</th>
                <th>Cost</th>
                <th>Hyperdrive</th>
                <th>Model</th>
                <th>Passenger capacity</th>
                <th>Starship class</th>
                <th>Manufacturer</th>
                <th>Length</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="starship in starships">
                <td>{{starship.name}}</td>
                <td>{{starship.cargo_capacity}}</td>
                <td>{{starship.consumables}}</td>
                <td>{{starship.cost_in_credits}} credits</td>
                <td>{{starship.hyperdrive_rating}}</td>
                <td>{{starship.model}}</td>
                <td>{{starship.passengers}}</td>
                <td>{{starship.starship_class}}</td>
                <td>{{starship.manufacturer}}</td>
                <td>{{starship.length}}m</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: ['starships'],
        created() {
            console.log(this.starships)
        }
    }
</script>
