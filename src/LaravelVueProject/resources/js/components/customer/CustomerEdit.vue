<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" md="6">
                <v-form @submit.prevent="submit">
                    <v-text-field
                        label="ID"
                        readonly
                        v-model="customer.id"
                    ></v-text-field>
                    <v-text-field
                        label="Family Name"
                        v-model="customer.family_name"
                    ></v-text-field>
                    <v-text-field
                        label="First Name"
                        v-model="customer.first_name"
                    ></v-text-field>
                    <v-radio-group v-model="customer.sex" row>
                    <v-radio
                        v-for="(sexItem, index) in sex"
                        :key="index"
                        :label="sexItem.sex"
                        :value="sexItem.id"
                    ></v-radio>
                    </v-radio-group>
                    <v-text-field
                        label="Postcode"
                        v-model="customer.postcode"
                    ></v-text-field>
                    <v-text-field
                        label="City"
                        v-model="customer.city"
                    ></v-text-field>
                    <v-text-field
                        label="Address"
                        v-model="customer.address"
                    ></v-text-field>
                    <v-text-field
                        label="Phone Number"
                        v-model="customer.phone_number"
                    ></v-text-field>
                    <v-text-field
                        label="Birthday"
                        type="date"
                        v-model="customer.birthday"
                    ></v-text-field>
                    <v-textarea
                        label="Notes"
                        v-model="customer.notes"
                    ></v-textarea>
                    <v-btn color="primary" type="submit">Submit</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    props: {
        customerId: String
    },
    data: function() {
        return {
            sex: {},
            customer: {}
        }
    },
    methods: {
        getcustomer() {
            axios.get('/api/customers/' + this.customerId)
                .then((res) => {
                    this.customer = res.data;
                });
        },
        getSex() {
            axios.get('/api/sex')
                .then((res) => {
                    this.sex = res.data
                });
        },
        submit() {
            axios.put('/api/customers/' + this.customerId, this.customer)
                .then((res) => {
                    this.$router.push({name: 'customer.list'});
                });
        }
    },
    mounted() {
        this.getSex();
        this.getcustomer();
    }
}
</script>