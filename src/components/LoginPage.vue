<template>
    <main>
        <section class="container">
            <section class="left" >
                <section v-if="logged">
                    <ProfilePage/>
                </section>
                <section class="title" v-else>
                    <h1>Welcome Back</h1>
                    <p>
                        Don't have an account yet? 
                        <router-link class="links" to="/registration">Sign Up Here</router-link>
                    </p>
                </section>
                <article class="content" v-if="!logged">
                    <form @submit.prevent="login">
                        <section class="inputs">
                            <article>
                                <label for="email">Your Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" v-model.lazy="email">
                            </article>
                            <article>
                                <label for="password">Your Password</label>
                                <input type="password" name="password" id="password" placeholder="Password" v-model.lazy="password">
                            </article>
                        </section>
                        <button type="submit">Login</button>
                    </form>
                </article>
            </section>
            <section class="right">
                <img src="./../assets/img_4.jpg" alt="img_4">
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
            username: "",
            password: "",
            loginUrl: "http://localhost:80/sneakers/src/api/login.php",
            serverUrl: "http://localhost:80/sneakers/src/api/server.php",
            token: ""
        }
    },
    methods:{
        async login(){
            try{
                await fetch(this.loginUrl,{
                    method: "POST",
                    body: JSON.stringify({
                        username: this.username,
                        password: this.password
                    })
                }).then((res) => res.json()
                ).then((data) =>{
                    if(data.success){
                        this.token = data.sessionToken;
                    }
                });
            }catch(e){
                console.error(e);
            }
            VueCookies.set("session", this.token, "60d");
            this.logged = true;

            console.log(VueCookies.get("session"));
        }
    },
    created(){
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

img{
    width: 100%;
    height: 100%;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
</style>