<template>
    <div>
      <h1>Lista de Clientes</h1>
      <!-- <client-list :clients="clients" @edit="editClient" @delete="deleteClient" /> -->
      <h1>Novo Cliente</h1>
      <!-- <client-form @save="createClient" /> -->
    </div>
  </template>
  
  <!-- <script>
  //import ClientList from '../components/ClientList.vue';
  //import ClientForm from '../components/ClientForm.vue';
  
  export default {
    components: {
      ClientList,
      ClientForm,
    },
    data() {
      return {
        clients: [],
        editingClient: null,
      };
    },
    methods: {
      fetchData() {
        // Realize uma chamada à API para buscar a lista de clientes
        // Exemplo: axios.get('/api/clients').then(response => this.clients = response.data);
      },
      createClient(clientData) {
        // Realize uma chamada à API para criar um novo cliente
        // Exemplo: axios.post('/api/clients', clientData).then(response => this.fetchData());
      },
      editClient(client) {
        this.editingClient = client;
      },
      deleteClient(clientId) {
        // Realize uma chamada à API para excluir um cliente
        // Exemplo: axios.delete(`/api/clients/${clientId}`).then(response => this.fetchData());
      },
    },
    mounted() {
      this.fetchData();
    },
  };
  </script> -->