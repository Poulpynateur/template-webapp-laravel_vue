<template>
    <div>
        <ul>
            <li v-for="(item, key) in items"
            v-bind:key="key">

                <span class="h3">{{ key }}</span>
                <visual-manager v-bind:data="item"></visual-manager>

            </li>
        </ul>
    </div>
</template>


<script>

import VisualManager from "./VisualManager";

export default {
    name: "VisualObject",
    props: ['items'],
    components: {
        VisualManager
    }
};
</script>