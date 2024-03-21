<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
                <v-form>
                    <v-text-field
                        label="ID"
                        v-model="todo.id"
                        readonly
                        outlined
                        :value="todo.id"
                        class="mb-4"
                    ></v-text-field>
                    <v-text-field
                        label="Title"
                        v-model="todo.title"
                        readonly
                        outlined
                        :value="todo.title"
                        class="mb-4"
                    ></v-text-field>
                    <v-text-field
                        label="Content"
                        v-model="todo.content"
                        readonly
                        outlined
                        :value="todo.content"
                        class="mb-4"
                    ></v-text-field>
                    <v-text-field
                        label="Person In Charge"
                        v-model="todo.person_in_charge"
                        readonly
                        outlined
                        :value="todo.person_in_charge"
                        class="mb-4"
                    ></v-text-field>
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
        }
    },
    mounted() {
        this.getTodo();
    }
}
</script>
  