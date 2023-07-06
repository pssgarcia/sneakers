<template>
    <section class="contact">
        <form class="contact-form" @submit.prevent="postUsers">
            <aside>
                <label for="name">Name:</label>
                <input type="text" id="name" v-model.lazy="userObj.name" required>
            </aside>
            <aside>
                <label for="email">Mail:</label>
                <input type="email" id="email" v-model.lazy="userObj.email" required>
            </aside>
            <aside>
                <label for="message">Message:</label>
                <textarea id="message" v-model.lazy="userObj.message" required></textarea>
            </aside>
            <button type="submit">Submit</button>
        </form>
    </section>
</template>

<script>

export default {
    name:"ContactPage",
 data() {
    return {
      users:[],
      userApi:"http://localhost/sneakers/rest/api/V1/contact.php",
      userObj:{
        name:"",
        email:"",
        message:""
      }
    };
  },
   methods: {
    async getUsers() {
      try {
        let response = await fetch(this.userApi);
        this.users = await response.json();
      } catch(error) {
        console.log(error);
      }
    },
    async postUsers(){
      try{
        await fetch(
          this.userApi,
          {
            method:"POST",
            body: JSON.stringify(this.userObj)
          }
        ).then((response)=>response.text()
        ).then((data)=>
          console.log(data)
        );
      }catch(error){
        console.log(error);
    }
    }
  },
  created(){
    this.getUsers();
  }
}
</script>
