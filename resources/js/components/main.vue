<template>
    <div>
        <p v-if="a === 1">aaaaaaaaaaaa</p>
        <p v-if="a === 2">bbbbbbbbbbbb</p>
    </div>
</template>
<script>
export default {
    data() {
        return {
            a: 2,
        };
    },
};
</script>
