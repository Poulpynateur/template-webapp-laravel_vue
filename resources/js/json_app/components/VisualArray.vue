<template>
    <div>
        <ol>
            <li v-for="(item, index) in items"
            v-bind:key="index">
                <visual-manager v-bind:data="item"></visual-manager>
            </li>
        </ol>
    </div>
</template>


<script>

import VisualManager from "./VisualManager";

export default {
    name: "VisualArray",
    props: ['items'],
    components: {
        VisualManager
    }
};
</script>