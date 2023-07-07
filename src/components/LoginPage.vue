<template>
    <main>
        <section v-if="logged">
            <ProfilePage/>
        </section>
        <section class="container-login" v-else>
            <section class="left" >
                <section class="title-2">
                    <h1 class="h1">Welcome Back</h1>
                    <p>
                        Don't have an account yet? 
                        <router-link class="links" to="/registration">Sign Up Here</router-link>
                    </p>
                </section>
                <article class="content">
                    <form @submit.prevent="login">
                        <section class="inputs">
                            <article class="article">
                                <label for="userEmail">Your Email</label>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Email" v-model.lazy="userEmail">
                            </article>
                            <article class="article">
                                <label for="userPassword">Your Password</label>
                                <input type="password" name="userPassword" id="userPassword" placeholder="Password" v-model.lazy="userPassword">
                            </article>
                        </section>
                        <button type="submit">Login</button>
                    </form>
                </article>
            </section>
            <section class="right">
                <img class="img_1" src="./../assets/img_4.jpg" alt="img_4">
            </section>
        </section>
    </main>
</template>

<script>
import VueCookies from 'vue-cookies';
import ProfilePage from './ProfilePage.vue';      

export default {
    name: "LoginPage",
    components:{
        ProfilePage
    },
    data(){
        return{
            logged: false,
            userEmail: "",
            userPassword: "",
            loginUrl: "http://localhost:80/sneakers/api/login.php",
            serverUrl: "http://localhost:80/sneakers/api/server.php",
            token: "",
            localUser: {}
        }
    },
    methods:{
        async login(){
            try{
                await fetch(this.loginUrl,{
                    method: "POST",
                    body: JSON.stringify({
                        userEmail: this.userEmail,
                        userPassword: this.userPassword
                    })
                }).then((response) => response.json()
                ).then((data) => {
                    if(data.success){
                        this.token = data.sessionToken;
                        this.localUser = data.user;
                    }else{
                        alert("Password and Email do not match")
                    }
                });
            }catch(e){
                console.error(e);
            }
            if (this.token) {
                VueCookies.set("session", {"token": this.token, "user": this.localUser}, "60d");
                this.logged = true;
                console.log(VueCookies.get("session"));
            }
        }
    },
    created(){
        // console.log(VueCookies.get("session"));
        if(VueCookies.isKey("session")){
            this.logged = true;
        }
    }
}

</script>
