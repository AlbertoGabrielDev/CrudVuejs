<template>
   <div>
        <ul>
            <li v-for="cliente in clientes" :key="cliente.id"> 
                {{ cliente.name}} - {{cliente.email}} - {{ cliente.phone }}
                <button @click = "editCliente(cliente)">Editar</button>
                <button @click = "deleteCliente(cliente.id)">Deletar</button>
            </li>
        </ul>
   </div>
  
</template>

<script>
    export default{
        props: ['clientes'],
        methods:{
            editCliente(cliente){
                this.$emit('edit',cliente);
            },
            deleteClient(clienteId){
                this.$emit('delete',clienteId);
            },
        },
    }
</script>