<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
                <v-text-field
                    label="Family Name"
                    readonly
                    v-model="customer.family_name"
                ></v-text-field>
                <v-text-field
                    label="First Name"
                    readonly
                    v-model="customer.first_name"
                ></v-text-field>
                <v-text-field
                    label="Postcode"
                    readonly
                    v-model="customer.postcode"
                ></v-text-field>
                <v-text-field
                    label="City"
                    readonly
                    v-model="customer.city"
                ></v-text-field>
                <v-text-field
                    label="Address"
                    readonly
                    v-model="customer.address"
                ></v-text-field>
                <v-text-field
                    label="Phone Number"
                    readonly
                    v-model="customer.phone_number"
                ></v-text-field>
                <v-text-field
                    label="Birthday"
                    type="date"
                    readonly
                    v-model="customer.birthday"
                ></v-text-field>
            </v-col>
        </v-row>
    </v-container>

    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">Name</label>
                        <div class="row">
                            <input type="text" class="col-sm-9 form-control" readonly id="family_name" v-model="customer.family_name">
                            <input type="text" class="col-sm-9 form-control" readonly id="first_name" v-model="customer.first_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Postcode</label>
                        <input type="text" class="col-sm-9 form-control" readonly id="postcode" v-model="customer.postcode">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">City</label>
                        <input type="text" class="col-sm-9 form-control" readonly id="city" v-model="customer.city">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Address</label>
                        <input type="text" class="col-sm-9 form-control" readonly id="address" v-model="customer.address">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Phone Number</label>
                        <input type="text" class="col-sm-9 form-control" readonly id="phone_number" v-model="customer.phone_number">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Birthday</label>
                        <input type="date" class="col-sm-9 form-control" readonly id="birthday" v-model="customer.birthday">
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</template>
<script>
export default {
    props: {
        customerId: String
    }, 
    data: function () {
        return {
            customer: {}
        }
    },
    methods: {
        getCustomer() {
            axios.get('/api/customers/' + this.customerId)
                .then((res) => {
                    this.customer = res.data;
                });
        }
    },
    mounted() {
        this.getCustomer();
    }
}
</script>