<template>
    <nav>
        <ul class="pagination">
            <li class="page-item">
                <button @click="fireRequest(previous)" class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </button>
            </li>
            <li class="page-item">
                <button @click="fireRequest(next)" class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </button>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        props: ['next', 'previous', 'isSearch'], 
        methods: {
            fireRequest(page){
                console.log(this.$parent)
                if(this.isSearch){
                    this.$parent.fireRequest(true, page);
                }else{
                    this.$parent.fireRequest(page);
                }
                
            }
        }
    }
</script>