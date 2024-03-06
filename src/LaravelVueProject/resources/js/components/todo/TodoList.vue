<template>
    <v-container>
        <div class="mb-5">
            <h4>ToDo一覧</h4>
            <v-btn text :to="{name: 'todo.add'}">ADD</v-btn>
        </div>
        <v-data-table
            :headers="headers"
            :items="todos"
            class="elevation-1"
        >
            <template v-slot:[`item.action`]="{ item }">
                <v-btn color="primary" class="mr-2" :to="{name: 'todo.detail', params: {todoId: item.id}}">Detail</v-btn>
                <v-btn color="success" class="mr-2" :to="{name: 'todo.edit', params: {todoId: item.id}}">Edit</v-btn>
                <v-btn color="error" @click="deleteTodo(item.id)">Delete</v-btn>
            </template>
        </v-data-table>
    </v-container>
  </template>
  
  <script>
  export default {
    data() {
      return {
        todos: [],
        headers: [
          { text: 'No.', value: 'id' },
          { text: 'Title', value: 'title' },
          { text: 'Content', value: 'content' },
          { text: 'Person In Charge', value: 'person_in_charge' },
          { text: 'Action', value: 'action', sortable: false },
        ],
      };
    },
    methods: {
      getTodos() {
        axios.get('/api/todos')
            .then((res) => {
                this.todos = res.data;
            });
      },
      deleteTodo(id) {
        axios.delete('/api/todos/' + id)
            .then(() => {
                this.getTodos(); // データを再取得してリストを更新
            });
      }
    },
    mounted() {
      this.getTodos();
    }
  }
  </script>
  