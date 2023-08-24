<template>
   <div>
        <ul>
            <li v-for="cliente in clientes" :key="cliente.id"> 
                {{ cliente.name}} - {{cliente.email}} - {{ cliente.phone }}
            </li>
        </ul>
        <form @submit.prevent="inserirClientes"> 
            <label for="nome">Nome</label>
            <input v-model="novosClientes.name" type="text" id="nome" required>
            <br>
            <label for="email">Email</label>
            <input v-model="novosClientes.email" type="text" id="email" required>
            <br>
            <label for="phone">Phone</label>
            <input v-model="novosClientes.phone" type="number" id="phone" required>

            <button type="submit">Inserir Produto</button>
        </form>   
   </div>

</template>

<script>
    import axios from 'axios';

    export default{
        data() {
          return{
            clientes: [],
            novosClientes: {
                name: '',
                email: '',
                phone: ''
            }

          };
        },

        mounted(){
            this.index();
        },
        methods:{
            index(){
                axios.get('home/clients', this.clientes)
                .then(response =>{
                    this.clientes= response.data;
                })
                .catch(error =>{
                    console.log(error);
                })
            },
            // onSubmit(event){
            //     event.preventDefault()
            //     alert(JSON.stringify(this.novosClientes))
            // },
           async inserirClientes(){
             const response = await axios.post('home/clients', this.novosClientes)
                try{
                    console.log(response.data)
                    alert(response.data)
                    this.index;
                }catch(error){
                    console.log(error);
                }
            },
        },

     
    }
</script>