<template>
    <main>
        <section class="container_2">
            <img class="img_2" src="./../assets/img_4.jpg" alt="img_4">
            <section class="left">
                <section class="title">
                    <h1>Create your Account</h1>
                    <p>Already have an Account ? <router-link class="links" to="/login">Login Here</router-link></p>
                </section>
                <article class="content">
                    <form v-on:submit.prevent="insertUser">
                        <section class="inputs">
                            <article>
                                <label for="userFullName">Your Full Name</label>
                                <input type="text" name="userFullName" id="userFullName" placeholder="Full Name" v-model.lazy="usersObj.userFullName">
                            </article>
                            <article>
                                <label for="userEmail">Your Email</label>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Email" v-model.lazy="usersObj.userEmail">
                            </article>
                            <article class="passwords">
                                <label for="userPassword">Your Password</label>
                                <input type="password" name="userPassword" id="userPassword" placeholder="Password" v-model="usersObj.userPassword">
                            </article>
                            <article>
                                <label for="userPhone">Your Phone</label>
                                <input type="number" name="userPhone" id="userPhone" placeholder="Phone" v-model.lazy="usersObj.userPhone">
                            </article>
                            <article>
                                <label for="userAddress">Your Address</label>
                                <input type="text" name="userAddress" id="userAddress" placeholder="Address" v-model.lazy="usersObj.userAddress">
                            </article>
                        </section>
                        <button type="submit">Create your Account</button>
                    </form>
                </article>
            </section>
        </section>
    </main>
</template>

<script>
export default {
    name: "RegistrationPage",
    data(){
        return{
            usersApi: "http://localhost:80/sneakers/rest/api/V1/users.php",
            usersObj: {
                userFullName: "",
                userEmail: "",
                userPassword: "",
                userPhone: "",
                userAddress: "",
            }
        }
    },
    methods: {
        async insertUser(){
            try{
                await fetch(
                    this.usersApi,
                    {
                        method: "POST",
                        body: JSON.stringify(this.usersObj)
                    }
                    ).then((res) => res.text()
                    ).then((data) =>{
                        console.log(data);
                    });
            }catch(e){
                console.log(e);
            }
        }
    },
    created(){
        this.insertUser();
    }
}
</script>
