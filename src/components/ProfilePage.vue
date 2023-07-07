<template class="body">
    <main class="main">
        <section id="userInfo">
            <table class="userInfo-Table">
                <tbody>
                    <tr>
                        <th>
                            Full Name:
                        </th>
                        <td>
                            {{ this.loggedInUser.userFullName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email:
                        </th>
                        <td>
                            {{ this.loggedInUser.userEmail }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone:
                        </th>
                        <td>
                            {{ this.loggedInUser.userPhone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Address:
                        </th>
                        <td>
                            {{ this.loggedInUser.userAddress }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            <router-link to="/" @click="logout" class="button">Log out</router-link>
            </section>
        </main>
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