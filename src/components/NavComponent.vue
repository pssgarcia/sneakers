<template>
    <nav>
        <section>
            <a href="#">
                <img src="../assets/img/sneakers-logo.png" alt="logo1">
                <h2>Street Kicks</h2>
            </a>
            <ul>
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/about">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/"></router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact">Contact</router-link>
                </li>
            </ul>
            <article>
                <form action="#">
                    <input v-model="userInput" @keyup="getResults($event)" type="search" placeholder="Search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="#">
                    <router-link class="nav-link" to="/wishList">
                    <i class="fa-solid fa-heart"></i>
                    </router-link>
                </a>
                <a href="#">
                    <router-link class="nav-link" to="/cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    </router-link>
                </a>
                <a href="#">
                    <router-link class="nav-link" to="/profile">
                    <i class="fa-solid fa-user"></i>
                    </router-link>
                </a>
            </article>
        </section>
    </nav>
</template>

<script>
// import {ref} from 'vue';
export default{
  name: 'NavComponent',
  data() {
    return {
      userInput: '',
      result: '',
      sneakers: [], // Initialize the sneakers array
      sneakersApi: 'http://localhost/sneakers/rest/api/V1/sneaker.php',
    };
  },
  methods: {
    async getSneakers() {
      try {
        let response = await fetch(this.sneakersApi);
        this.sneakers = await response.json();
      } catch (error) {
        console.log(error);
      }
    },
    getResults() {
      // Filter the sneakers based on the user input
      this.result = this.sneakers.filter(item =>
        item.sneaker.toLowerCase().includes(this.userInput.toLowerCase())
      );
    },
  },
  created() {
    this.getSneakers();
  }
}
</script>


