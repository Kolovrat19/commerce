<template>
    <div>

        <div class="form-group" v-for="attribute in attributes"><label>{{ attribute.name }}</label>
                <div v-for="variant in attribute.variant">
                <input type="checkbox" value="variant.name">
                {{variant.name}}
            </div>

            {{attribute}}
            </div>

    </div>


</template>

<script>

    export default {

        props: ['attributes'],

        data () {
            return {

                }

        },
        watch:{

        },
        computed:{

        },



    }
</script>
