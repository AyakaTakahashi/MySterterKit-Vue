<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
            <v-form @submit.prevent="submit">
                <v-text-field
                    label="Family Name"
                    v-model="customer.family_name"
                    :rules="requireRule"
                ></v-text-field>
                    <v-text-field
                    label="First Name"
                    v-model="customer.first_name"
                    :rules="requireRule"
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
                    :rules="postcodeRules"
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
                    :rules="phoneNumberRules"
                ></v-text-field>
                <v-text-field
                    label="Birthday"
                    v-model="customer.birthday"
                    type="date"
                ></v-text-field>
                <v-textarea
                    label="Notes"
                    v-model="customer.notes"
                ></v-textarea>
                <v-btn type="submit" color="primary">Submit</v-btn>
            </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>
  
<script>
export default {
    data() {
        return {
            sex: [],
            customer: {},
            requireRule: [
                v => !!v || 'E-mail is required',
            ],
            phoneNumberRules: [
                v => !!v || 'Phone number is required',
                v => /^[0-9A-Za-z]+$/.test(v) || 'Invalid phone number'
            ],
            postcodeRules: [
                v => /^\d*$/.test(v) || 'Invalid postcode'
            ]
        }
    },
    methods: {
        getSex() {
            axios.get('/api/sex')
                .then((res) => {
                    this.sex = res.data
                });
        },
        submit() {
            axios.post('/api/customers', this.customer)
                .then(() => {
                    this.$router.push({name: 'customer.list'});
                });
        }
    },
    mounted() {
        this.getSex();
    }
}
</script>
