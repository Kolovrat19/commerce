<template>
    <div>
        <ul>
            <li v-for="(item, index) in items"> <strong>{{ item.name }}</strong><a class="btn btn-default"  v-show="item.variant !== null" @click="deleteAttribute(index)">X</a>
            <ul>
                <li v-for="(variant, vindex) in item.variant">
                    {{ variant.name }}<a class="btn btn-default" @click="deleteVariant(index, vindex)">X</a>
                </li>
            </ul>
                <div v-show="item.variant !== null">
                    <div class="col-sm-4"> <input class="form-control" type="text" :id="'addVariantForm' + index" placeholder="Variant name 'Red'"></div>
                    <a class="btn btn-default" @click="addVariant(index)">Add Variant</a>
                </div>
            </li>

        </ul>


        <div class="col-sm-4"><input class="form-control" type="text" id="addAttributeForm" placeholder="Attribute name 'Color'"></div>
        <a class="btn btn-default" @click="addAttribute">Add Attribute</a>
        <input type="hidden" name="category_attributes" :value="outputAttributes" >
        <pre>
            {{outputAttributes}}
        </pre>
        <!--<pre>-->
            <!--{{obj}}-->
        <!--</pre>-->
    </div>


</template>

<script>

    export default {

        props: ['attributes'],

        data () {
            return {
                items: this.attributes
                }

        },
        computed:{
            outputAttributes: function(){
                var jsonString = JSON.stringify(this.items);
                return jsonString
            }
        },

        methods: {
            addAttribute: function() {
                var input = document.getElementById('addAttributeForm');
                if(input.value !== ''){
                    this.items.push({
                        name: input.value,
                        variant: []
                    });
                    input.value = '';
                }
            },
            deleteAttribute: function(index){
                this.items.splice(index,1);
            },

            addVariant: function(index) {
                var input = document.getElementById('addVariantForm' + index);

                if(input.value !== ''){
                    this.items[index].variant.push({
                        name: input.value
                        });
                    input.value = '';
                }
            },
            deleteVariant: function(index, vindex){
                this.items[index].variant.splice(vindex,1);
            }
        }

    }
</script>
