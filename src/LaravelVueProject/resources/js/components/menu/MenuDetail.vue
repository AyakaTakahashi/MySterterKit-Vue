<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
                <v-text-field 
                    v-model="menu.menu" 
                    label="Menu" 
                    readonly
                ></v-text-field>
                <v-text-field 
                    v-model="menu.charge" 
                    label="Charge" 
                    type="number" 
                    readonly
                ></v-text-field>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    props: {
        menuId: String
    }, 
    data: function () {
        return {
            menu: {}
        }
    },
    methods: {
        getmenu() {
            axios.get('/api/menus/' + this.menuId)
                .then((res) => {
                    this.menu = res.data;
                });
        }
    },
    mounted() {
        this.getmenu();
    }
}
</script>