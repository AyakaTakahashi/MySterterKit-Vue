<template>
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="6">
            <v-form @submit.prevent="submit">
                <v-text-field
                    label="Title"
                    v-model="todo.title"
                ></v-text-field>
                <v-text-field
                    label="Content"
                    v-model="todo.content"
                ></v-text-field>
                <v-text-field
                    label="Person In Charge"
                    v-model="todo.person_in_charge"
                ></v-text-field>
                <v-btn color="primary" type="submit">Submit</v-btn>
            </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>
  
<script>
export default {
    data() {
        return {
        todo: {}
        }
    },
    methods: {
        submit() {
            axios.post('/api/todos', this.todo)
                .then(res => {
                this.$router.push({ name: 'todo.list' });
                });
        }
    }
}
</script>
