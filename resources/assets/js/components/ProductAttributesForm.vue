<template>
    <div>
            <div class="form-group" v-for="(attribute, index) in items">
                {{attribute.name}}
                <div v-for="(variant, vindex) in attribute.variant">
                    <label>
                        <input @click="setValue(attribute.name, variant.name)" type="radio"
                               :value="[{name: attribute.name, variant:variant.name}]"
                               :id="'radio' + vindex"
                               :name="'group' + index" >
                        {{variant.name}}</label>
                </div>
            </div>
        <input type="hidden" name="product_attributes" :value="outputAttributes" >
        <div class="half">
            <pre>{{ selectedData }}</pre>
        </div>
    </div>

</template>

<script>

    export default {

        props: ['attributes'],

        data () {
            return {
                items: this.attributes,
                selectedData:[]
            }
        },
        computed:{
            outputAttributes: function(){
                var jsonString = JSON.stringify(this.selectedData);
                return jsonString
            }
        },
        methods:{
            setValue( name, value) {
                var self = this;
                this.selectedData.forEach(function(val, index){

                    if(val['name'] == name) {
                        self.selectedData.splice(index, 1);
                        return false;
                    }
                });


                this.selectedData.push({
                    "name": name,
                    "variant": value

                });

            }
        }
    }
</script>
