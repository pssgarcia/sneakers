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
                    <router-link class="nav-link" to="/contact">Contact</router-link>
                </li>
            </ul>
            <article>
                <form action="#">
                    <!-- <input v-model="userInput" @keyup="searchSneaker" type="search" placeholder="Search"> -->
                    <aside class="login-group">
                      <button class="login-btn"> <router-link class="links" to="/login">Login</router-link> </button>
                      <button class="signup-btn"> <router-link class="links" to="/registration">Sign Up</router-link> </button>
                    </aside>
                    <!-- <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button> -->
                </form>
                <router-link class="nav-link" to="/wishList">
                    <i class="fa-solid fa-heart"></i>
                </router-link>
                <router-link class="nav-link" to="/cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </router-link>
                <router-link class="nav-link" to="/profile">
                    <i class="fa-solid fa-user"></i>
                </router-link>
            </article>
        </section>
    </nav>
</template>

<script>
export default{
  name: 'NavComponent',
  data() {
    return {
      userInput: '',
      typed: false,
      result: [],
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
    searchSneaker() {
      this.result = this.sneakers.filter(sneaker =>
        sneaker.sneakerName.toLowerCase().includes(this.userInput.trim().toLowerCase())
      );
      this.typed = this.userInput.trim() !== '';
    }
  },
  created() {
    this.getSneakers();
  }
}
</script>


