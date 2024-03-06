<template>
    <v-container>
        <div class="mb-5">
            <h4>メニュー一覧</h4>
            <v-btn text :to="{name: 'menu.add'}">ADD</v-btn>
        </div>
        <v-data-table dense
            :headers="headers"
            :items="menus"
            class="elevation-1"
        >
        <template v-slot:[`item.action`]="{ item }">
          <v-btn color="primary" class="mr-2" :to="{name: 'menu.detail', params: {menuId: item.id}}">Detail</v-btn>
            <v-btn text @click="deleteMenus(item.id)">Delete</v-btn>
        </template>
        </v-data-table>
    </v-container>
  </template>
  
  <script>
  export default {
    data: function(){
      return {
        menus: [],
        headers: [
          { text: 'No.', value: 'id' },
          { text: 'Menu', value: 'menu' },
          { text: 'Charge', value: 'charge' },
          { text: 'Action', value: 'action', sortable: false },
        ],
      }
    },
    methods: {
      getMenus() {
        axios.get('/api/menus')
          .then((res) => {
            this.menus = res.data;
          });
      },
      deleteMenus(id) {
        axios.delete('/api/menus/' + id)
          .then(() => {
            this.getMenus(); // データを再取得してテーブルを更新
          });
      }
    },
    mounted() {
      this.getMenus();
    }
  }
  </script>