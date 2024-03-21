<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
                <v-form @submit.prevent="submit">
                    <v-text-field
                        label="ID"
                        v-model="todo.id"
                        readonly
                        outlined
                        class="mb-3"
                    ></v-text-field>
                    <v-text-field
                        label="Title"
                        v-model="todo.title"
                        outlined
                        class="mb-3"
                    ></v-text-field>
                    <v-text-field
                        label="Content"
                        v-model="todo.content"
                        outlined
                        class="mb-3"
                    ></v-text-field>
                    <v-text-field
                        label="Person In Charge"
                        v-model="todo.person_in_charge"
                        outlined
                        class="mb-3"
                    ></v-text-field>
                    <v-btn color="primary" type="submit">Submit</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
  </template>
  
<script>
export default {
    props: {
        todoId: String
    },
    data() {
        return {
        todo: {}
        }
    },
    methods: {
        getTodo() {
            axios.get('/api/todos/' + this.todoId)
                .then((res) => {
                this.todo = res.data;
                });
        },
        submit() {
            axios.put('/api/todos/' + this.todoId, this.todo)
                .then(() => {
                this.$router.push({ name: 'todo.list' });
                });
        }
    },
    mounted() {
        this.getTodo();
    }
}
</script>
  