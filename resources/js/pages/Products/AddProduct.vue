<template>
    <form @submit="submitForm" enctype="multipart/form-data">
        <div style="background-color: white; padding: 1rem; width: 80vw">
            <InputField
                id="product_name"
                label="Product Name"
                v-model="product_name"
                value="product_name"
            />
            <InputField
                id="price"
                label="Price"
                v-model="price"
                :value="price"
            />
            <div class="input-group-append">
                <input
                    type="file"
                    name="filename"
                    class="custom-file-input"
                    id="inputFileUpload"
                    v-on:change="onFileChange"
                />
                <!-- <input type="submit" class="btn btn-primary" value="Upload" /> -->
                <p class="text-danger font-weight-bold">{{ filename }}</p>
            </div>
            <input type="submit" class="btn btn-primary" value="Upload" />
            <div style="margin-top: 1rem">
                <Button label="Add Product" :onClick="submitForm"></Button>
            </div>
        </div>
    </form>
</template>
<script>
import InputField from "../../components/InputField.vue";
import Button from "../../components/Button.vue";
import axios from "axios";

export default {
    components: {
        InputField,
        Button,
    },
    data() {
        return {
            product_name: "",
            price: "",
            imagename: "",
            file: "",
        };
    },
    methods: {
        onFileChange(e) {
            //console.log(e.target.files[0]);
            console.log(this.product_name);
            this.imagename = "Selected File: " + e.target.files[0].name;
            this.file = e.target.files[0];
        },
        async submitForm(e) {
            e.preventDefault();
            let currentObj = this;
            const config = {
                headers: {
                    "content-type": "multipart/form-data",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ),
                },
            };
            // form data
            let formData = new FormData();
            formData.append("file", this.file);
            formData.append("product_name", this.product_name);
            formData.append("price", this.price);
            // send upload request
            console.log(Object.fromEntries(formData));

            await axios
                .post("/api/addProduct", formData, config)
                .then(function (response) {
                    currentObj.success = response.data.success;
                    currentObj.filename = "";
                    console.log(response);
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
        },
    },
};
</script>

<style>
.input-group-append {
    border: 1px solid rgba(241, 237, 237, 0.838);
    padding: 2rem;
    border-radius: 10px;
    display: flex;
}
.custom-file-input {
    border: 1px solid #ff4d4d;
    background: white;
}
</style>
