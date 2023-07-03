<template>
    <button> <router-link class="links" to="/login">Login Page</router-link> </button>
    <button> <router-link class="links" to="/registration">Registration Page</router-link> </button>
    <router-view/>
</template>

<script>



export default {
  name: 'App',
  components: {
    
  },
    data(){
        return{
        usersApi: "http://localhost:80/sneakers/rest/api/V1/users.php",
        users: []
        }
    },
    methods:{
        async getUsers(){
        try{
            let res = await fetch(this.usersApi);
            this.users = await res.json(); 
        }catch(e){
            console.log(e)
        } 
        }
    },
    created(){
        this.getUsers();
    }
}
</script>

<style>
body{
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
