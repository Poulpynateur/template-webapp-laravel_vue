<template>
    <div class="timeline">
        <div class="timeline-item"
        v-for="(item, key) in items"
        v-bind:key="key">
            <div class="timeline-left">
                <a class="timeline-icon tooltip" :data-tooltip="key"></a>
            </div>
            <div class="timeline-content">
                <h4>{{ key }}</h4>
                <visual-manager v-bind:data="item"></visual-manager>
            </div>
        </div>
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