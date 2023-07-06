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

<style>
*{
    margin: 0;
    padding: 0;
}

body, main {
    display: flex;
    align-items: center;
    justify-content: center;

}

.container_2{
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
    text-align: center;
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
    row-gap: 6vh;
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

.img_2{
    width: 52%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
</style>