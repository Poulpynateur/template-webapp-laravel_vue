<template>
    <div class="container">

        <span v-if="isDeadEnd(data)">{{ data }}</span>
        <visual-array v-else-if="Array.isArray(data)" v-bind:items="data"></visual-array>
        <visual-object v-else v-bind:items="data"></visual-object>

    </div>
</template>


<script>

import VisualArray from "./VisualArray";
import VisualObject from "./VisualObject";

export default {
    name: "VisualManager",
    props: ['data'],
    components: {
        VisualArray,
        VisualObject
    },
    methods: {
        isDeadEnd(data) {
            return (typeof(data) == "object")? false : true;
        }
    }
};
</script>