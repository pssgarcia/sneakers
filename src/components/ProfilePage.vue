<template>
    <div>
        <h1>Hi You are logged in</h1>
        <section>
            <p>Full Name: </p>
            <p>Email: </p>
            <p>Phone: </p>
            <p>Adress: </p>
        </section>
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
            userEmail: "",
            userPassword: "",
            loginUrl: "http://localhost:80/sneakers/api/login.php",
            serverUrl: "http://localhost:80/sneakers/api/server.php",
            token: "",
            usersApi: "http://localhost:80/sneakers/rest/api/V1/users.php",
            users: [],
            // loggedInUser: {}
        }
    },
    methods:{
        async logout(){
            if (VueCookies.isKey("session")) {
                VueCookies.remove("session");
                this.logged = false;
                console.log("Session");
                window.location.reload();
            }
        },
        async getUsers(){
            try{
                let res = await fetch(this.usersApi);
                this.users = await res.json();
                const sessionEmail = VueCookies.get("session");
                
                // console.log("Users:", this.users);
                // this.loggedInUser = this.users.find(user => user.userEmail === sessionEmail);
            }catch(e){
                console.log(e);
            } 
        }
    },
    created(){
        // console.log('created hook called');
        this.getUsers();
        if(VueCookies.isKey("session")){
            this.logged = true;
            // console.log('session hook');
        }
    }

}


</script>