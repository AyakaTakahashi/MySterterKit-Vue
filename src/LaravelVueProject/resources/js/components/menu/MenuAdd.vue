<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
                <v-form @submit.prevent="submit">
                    <v-text-field 
                        v-model="menu.menu" 
                        label="Menu" 
                        :rules="requireRule"
                    ></v-text-field>
                    <v-text-field 
                        v-model="menu.charge" 
                        label="Charge" 
                        type="number" 
                    ></v-text-field>
                    <v-btn color="primary" type="submit">Submit</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    data: function () {
        return {
            menu: {},
            requireRule: [
                v => !!v || 'E-mail is required',
            ],
        }
    },
    methods: {
        submit() {
            axios.post('/api/menus', this.menu)
                .then((res) => {
                    this.$router.push({name: 'menu.list'});
                });
        }
    },
}
</script>