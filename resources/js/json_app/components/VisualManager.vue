<template>

<div>
    
    <end-point v-if="isDeadEnd(data)" :content="data"></end-point>
    <json-visual v-else v-bind:items="data" :isObject="!Array.isArray(data)"></json-visual>

</div>
</template>


<script>

import EndPoint from "./EndPoint.vue";

export default {
    name: "VisualManager",
    props: ['data'],
    components: {
        EndPoint,
        JsonVisual: () => import('./JsonVisual.vue')
    },
    methods: {
        isDeadEnd(data) {
            return (typeof(data) == "object")? false : true;
        }
    }
};
</script>