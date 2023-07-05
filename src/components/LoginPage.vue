<template>
    <main>
        <section v-if="logged">
            <ProfilePage/>
        </section>
        <section class="container" v-else>
            <section class="left" >
                <section class="title">
                    <h1>Welcome Back</h1>
                    <p>
                        Don't have an account yet? 
                        <router-link class="links" to="/registration">Sign Up Here</router-link>
                    </p>
                </section>
                <article class="content">
                    <form @submit.prevent="login">
                        <section class="inputs">
                            <article>
                                <label for="userEmail">Your Email</label>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Email" v-model.lazy="userEmail">
                            </article>
                            <article>
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
                    }
                });
            }catch(e){
                console.error(e);
            }
            if (this.token) {
                VueCookies.set("session", {"token": this.token, "user": this.localUser}, "60d");
                this.logged = true;
                console.log(this.token);
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

<style>
.container{
    width: 100%;
    border: 1px solid black;
    border-radius: 20px;
    display: flex;
}

.right{
    width: 50%;
}

.left{
    width: 50%;
    /* border: 1px solid black; */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    row-gap: 5vh;
}

.title{
    /* border: 1px solid black */
    display: flex;
    flex-direction: column;
    row-gap: 1vh;
}

.title > h1{
    text-align: center;
}

h1{
    font-size: 40px;
}

a{
    text-decoration: none;
}

a:hover{
    text-decoration: underline;
}

p{
    font-size: 18px;
}

form{
    display: flex;
    flex-direction: column;
    row-gap: 10vh;
}

article{
    display: flex;
    flex-direction: column;
    row-gap: 1vh;
}

.inputs{
    display: flex;
    flex-direction: column;
    row-gap: 3vh;
}

input{
    /* padding-left: 5%; */
    width: 48vh;
    height: 7vh;
    border-radius: 10px;
    border: 1px solid black;
}

input[placeholder]{
    font-size: 16px;
    padding-left: 2vh;
}

label{
    font-size: 19px;
}

button{
    /* padding: 5%; */
    width: 50vh;
    height: 7vh;
    font-size: 17px;
    border-radius: 10px;
    border: 1px solid black;

}

button:hover{
    cursor: pointer;
}

.img_1{
    width: 100%;
    height: 100%;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
</style>