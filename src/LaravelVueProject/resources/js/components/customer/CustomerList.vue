<template>
    <v-container>
        <div class="mb-5">
            <h4>顧客一覧</h4>
            <v-btn text :to="{name: 'customer.add'}">ADD</v-btn>
        </div>
        <v-data-table
            :headers="headers"
            :items="customers"
            class="elevation-1"
            >
            <template v-slot:[`item.action`]="{ item }">
                <v-btn color="primary" class="mr-2" :to="{name: 'customer.detail', params: {customerId: item.id}}">Detail</v-btn>
                <v-btn color="success" class="mr-2" :to="{name: 'customer.edit', params: {customerId: item.id}}">Edit</v-btn>
                <v-btn color="error" @click="deleteCustomers(item.id)">Delete</v-btn>
            </template>
        </v-data-table>
    </v-container>
  </template>
  
  <script>
  export default {
    data() {
      return {
        customers: [],
        headers: [
          { text: 'No.', value: 'id' },
          { text: 'Family Name', value: 'family_name'},
          { text: 'First Name', value: 'first_name'},
          { text: 'Phone Number', value: 'phone_number' },
          { text: 'Birthday', value: 'birthday' },
          { text: 'Action', value: 'action', sortable: false },
        ],
      };
    },
    methods: {
      getCustomers() {
        axios.get('/api/customers')
            .then((res) => {
                this.customers = res.data;
            });
      },
      deleteCustomers(id) {
        axios.delete('/api/customers/' + id)
            .then(() => {
                this.getCustomers();
            });
      }
    },
    mounted() {
      this.getCustomers();
    }
  }
  </script>
  
<!-- <template>
    <div class="container">
        <div class="">
            <h4 class="mb-5">顧客一覧</h4>
            <router-link  v-bind:to="{name: 'customer.add'}">
                <button class="btn btn-success">ADD</button>
            </router-link>
        </div>
        <div class="table-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Birthday</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(customer, index) in customers" :key="index">
                        <td>{{ customer.id }}</td>
                        <td>{{ customer.family_name }}{{ customer.first_name }}</td>
                        <td>{{ customer.phone_number }}</td>
                        <td>{{ customer.birthday }}</td>
                        <td>
                            <router-link v-bind:to="{name: 'customer.detail', params: {customerId: customer.id}}">
                                <button class="btn btn-primary">Detail</button>
                            </router-link>
                        </td>
                        <td>
                            <router-link v-bind:to="{name: 'customer.edit', params: {customerId: customer.id}}">
                                <button class="btn btn-success">Edit</button>
                            </router-link>
                        </td>
                        <td>
                            <button class="btn btn-danger" v-on:click="deleteCustomers(customer.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            customers:[]
        }
    },
    methods: {
        getCustomers() {
            axios.get('/api/customers')
                .then((res) => {
                    this.customers = res.data
                });
        },
        deleteCustomers(id) {
            axios.delete('/api/customers/' + id)
                .then((res) => {
                    this.getCustomers();
                });
        }
    },
    mounted() {
        this.getCustomers();
    }
}
</script> -->