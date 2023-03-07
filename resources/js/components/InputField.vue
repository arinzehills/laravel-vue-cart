<template>
    <div class="input-container">
        <label :for="id">{{ label }}</label>
        <input
            class="input-field"
            :id="id"
            :type="type"
            :value="value"
            @input="$emit('input', $event.target.value)"
        />
    </div>
</template>

<script>
export default {
    props: {
        id: {
            type: String,
            required: true,
        },
        label: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            default: "text",
        },
        value: {
            type: [String, Number],
            default: "",
        },
    },
};
</script>
<style scoped>
.input-container {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    color: #ff4d4d43;
}
.input-container label {
    color: #ff4d4d;
    font: 20px bolder;
    font-family: Arial, Helvetica, sans-serif;
}
.input-field {
    background: #ff4d4d34;
    height: 50px;
}
</style>
