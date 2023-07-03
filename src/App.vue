<template>
    <LoginPage/>
    <router-view/>
</template>

<script>
import LoginPage from "./components/LoginPage.vue";


export default {
  name: 'App',
  components: {
    LoginPage
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
