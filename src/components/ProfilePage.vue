<template>
    <div>
        <h1>Hi, {{ this.loggedInUser.userFullName}}, You are logged in</h1>
        <section>
            <p>Full Name: {{ this.loggedInUser.userFullName }}</p>
            <p>Email:  {{ this.loggedInUser.userEmail }}</p>
            <p>Phone: {{ this.loggedInUser.userPhone }}</p>
            <p>Address: {{ this.loggedInUser.userAddress }}</p>
        </section>

        <main>
            <table>
                <tr>
                    <th>
                        
                    </th>    
                </tr>
                <tr>

                </tr>
                <tr>

                </tr>
                <tr>

                </tr>
            </table>
        </main>

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
            loggedInUser: {}
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
            }catch(e){
                console.log(e);
            } 
        }
    },
    created(){
        if(VueCookies.isKey("session")){
            this.getUsers();
            this.loggedInUser = VueCookies.get("session").user;
            this.logged = true;
        }
    }

}


</script>