<template>
    <table id="peopleTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Hair colour</th>
                <th>Eye colour</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="person in people">
                <td>{{person.name}}</td>
                <td>{{person.gender}}</td>
                <td>{{person.height}} cm</td>
                <td>{{person.mass}} kg</td>
                <td>{{person.hair_color}}</td>
                <td>{{person.eye_color}}</td>
                
            </tr>
        </tbody>
    </table>
        
</template>

<script>
    export default {
        props: ['people'],
        created() {
            console.log(this.people)
        }
    }
</script>
