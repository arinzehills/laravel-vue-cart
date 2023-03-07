<template>
    <button class="my-btn" @click="onClick">
        {{ label ?? "Add to Cart" }}
    </button>
</template>

<script>
export default {
    props: {
        onClick: {
            type: Function,
            required: true,
        },

        buttonColor: {
            type: String,
            default: "blue",
        },
        label: {
            type: String,
            required: true,
        },
    },
};
</script>

<style>
.my-btn {
    background-color: #ff4d4d;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
</style>
