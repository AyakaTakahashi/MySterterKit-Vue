<template>
    <v-app>
        <v-app-bar color="primary" dark app clipped-left>
            <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
            <v-toolbar-title class="title">Vuetify</v-toolbar-title><v-spacer></v-spacer>
            <v-toolbar-items>
                <v-btn outlined v-bind:to="{name: 'customer.list'}">Customer</v-btn>
                <v-btn outlined v-bind:to="{name: 'menu.list'}">Menu</v-btn>
                <v-btn outlined v-bind:to="{name: 'todo.list'}">TODO</v-btn>
            </v-toolbar-items>
        </v-app-bar>

        <v-footer color="primary" dark app clipped-left>
            Vuetify
        </v-footer>
        
        <v-navigation-drawer app v-model="drawer" clipped >
            <v-container>
                <v-list-item>
                    <v-list-item>
                        <v-list-item-title class="title">
                            Navigation lists
                        </v-list-item-title>
                    </v-list-item>
                </v-list-item>

                <v-divider></v-divider>
                <v-list>
                    <v-list-item
                        v-for="[icon, text, url] in links"
                        :key="icon"
                        :prepend-icon="icon"
                        :title="text"
                        v-bind:to="{name: url}"
                        link
                    ></v-list-item>
                </v-list>
            </v-container>
        </v-navigation-drawer>
        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
  </template>
  
<script>
export default {
    data(){
        return{
            drawer: null,
            supports:[
                'Customer',
                'Menu',
                'TODO',
            ],
            links: [
                ['mdi-inbox-arrow-down', 'Customer', 'customer.list'],
                ['mdi-speedometer', 'Menu', 'menu.list'],
                ['mdi-palette', 'TODO', 'todo.list'],
                ],
            nav_lists:[
                {
                    name: 'Customer',
                    icon: 'mdi-speedometer',
                    lists:['List','Add'],
                },
                {
                    name: 'Menu',
                    icon: 'mdi-cogs',
                    lists:['List','Add'],
                },
                {
                    name: 'TODO',
                    icon: 'mdi-palette',
                    lists:['List','Add'],
                },
            ]
        }
    }
}
</script>