<template>
    <main>
        <section class="container">
            <section class="right">
                <img src="/img/img_4.jpg" alt="img_4">
            </section>
            <section class="left">
                <section class="title">
                    <h1>Create your Account</h1>
                    <p>Already have an Account ? <router-link class="links" to="/login">Login Here</router-link></p>
                </section>
                <article class="content">
                    <form>
                        <section class="inputs">
                            <article>
                                <label for="fullName">Your Full Name</label>
                                <input type="text" name="fullName" id="fullName" placeholder="Name" v-model="fullName">
                            </article>
                            <article>
                                <label for="fullName">Your UserName</label>
                                <input type="text" name="userName" id="userName" placeholder="UserName" v-model="userName">
                            </article>
                            <article>
                                <label for="email">Your Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" v-model="email">
                            </article>
                            <article class="passwords">
                                <label for="password">Your Password</label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <input type="password" name="password" id="password-2" placeholder="Confirm your Password">
                            </article>
                            <article>
                                <label for="phonr">Your Phone</label>
                                <input type="number" name="phonr" id="phone" placeholder="Phone" v-model="phone">
                            </article>
                        </section>
                        <button type="submit">Login</button>
                    </form>
                </article>
            </section>
        </section>
    </main>
</template>

<script>
export default {
    name: "RegistrationPage"
}
</script>

<style>
*{
    margin: 0;
    padding: 0;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;

}

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
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
</style>