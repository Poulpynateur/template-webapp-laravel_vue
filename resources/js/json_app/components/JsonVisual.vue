<template>
    <div>
        <div class="d-flex"
        v-for="(item, key) in items"
        v-bind:key="key">

            <vertical-line v-bind:class="{ 'object': isObject }" :content="key"></vertical-line>

            <visual-manager v-bind:data="item"></visual-manager>

        </div>
    </div>
</template>

<script>

import VisualManager from "./VisualManager.vue";
import VerticalLine from "./VerticalLine.vue"

export default {
    name: "JsonVisual",
    props: ['items', 'isObject'],
    components: {
        VisualManager,
        VerticalLine
    },
    methods: {
        getType() {
            if(isObject)
                return "Object key"
            return "Array index"
        }
    }
};
</script>