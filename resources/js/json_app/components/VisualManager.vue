<template>

    <span v-if="isDeadEnd(data)" class="d-inline-block">{{ data }}</span>
    <visual-array v-else-if="Array.isArray(data)" v-bind:items="data"></visual-array>
    <visual-object v-else v-bind:items="data"></visual-object>

</template>


<script>

export default {
    name: "VisualManager",
    props: ['data'],
    components: {
        VisualArray: () => import('./VisualArray.vue'),
        VisualObject: () => import('./VisualObject.vue')
    },
    methods: {
        isDeadEnd(data) {
            return (typeof(data) == "object")? false : true;
        }
    }
};
</script>