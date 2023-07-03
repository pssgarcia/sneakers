<template>
    <div>
        <h1>Hi You are logged in</h1>
        <button @click="logout" class="btn btn-warning">Log out</button>
    </div>
</template>

<script>
import VueCookies from 'vue-cookies';

export default {
    name: "ProfilePage",
    data(){
        return{
            logged: false,
            username: "",
            password: "",
            loginUrl: "http://localhost:80/sneakers/src/api/login.php",
            serverUrl: "http://localhost:80/sneakers/src/api/server.php",
            token: ""
        }
    },
    methods: {
        async logout(){
            if (VueCookies.isKey("session")) {
                VueCookies.remove("session");
                this.logged = false;
                console.log("Session");
                window.location.reload();
            }
        }
    },
    created(){
        if(VueCookies.isKey("session")){
            this.logged = true;
            
        }
    }

}
</script>