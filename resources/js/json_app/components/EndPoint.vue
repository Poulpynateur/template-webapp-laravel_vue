<template>
    <span class="visual dead-end-point bg-dark" :title="content"></span>
</template>


<script>
export default {
    name: "EndPoint",
    props: ['type', 'content']
};
</script>