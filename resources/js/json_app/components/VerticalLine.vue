<template>
    <span class="visual vertical-line bg-dark" :title="content"></span>
</template>


<script>
export default {
    name: "VerticalLine",
    props: ['content']
};
</script>