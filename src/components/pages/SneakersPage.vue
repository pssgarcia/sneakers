<template>
  <section class="detail-container">
    <figure class="sneaker-detail">
        <img :src="getImageSrc(localSneaker)" :alt="localSneaker.sneakerId">
        <figcaption>
          <aside>
            <h3>{{ localSneaker.sneakerName }}</h3>
            <h4>{{ localSneaker.brand }}</h4>
          </aside>
          <p>{{ localSneaker.price }}</p>
          <p>Size: {{ localSneaker.size }}</p>
          <p>Release Date: {{ localSneaker.releaseDate }}</p>
          <p>Region: {{ localSneaker.buyerRegion }}</p>
          <section class="button-group-col">
            <button class="addToCart" @click="addToCart()">
              Add to cart
            </button>
            <button class="addToWishList" @click="addToWishList()">
              Favorite
            </button>
          </section>
        </figcaption>
    </figure>
  </section>
</template>

<script>
import VueCookies from "vue-cookies";

export default {
  data() {
    return {
      localSneaker: {},
      shoppingCart: [],
      wishList: [],
      sneakersImages: [
          "https://bit.ly/first-sneaker",
          "https://bit.ly/second-sneaker",
          "https://bit.ly/third-sneaker",
          "https://bit.ly/fourth-sneaker",
          "https://tinyurl.com/fifth-sneaker",
          "https://tinyurl.com/six-sneaker",
          "https://tinyurl.com/seven-sneaker",
          "https://tinyurl.com/eighth-sneaker",
          "https://tinyurl.com/nineth-sneaker",
          "https://tinyurl.com/tenth-sneaker",
          "https://tinyurl.com/eleventh-sneaker",
          "https://tinyurl.com/twelfth-sneaker",
          "https://tinyurl.com/thirteenth-sneaker",
          "https://tinyurl.com/fourteenth-sneaker",
          "https://tinyurl.com/fifteenth-sneaker",
          "https://tinyurl.com/sixteenth-sneaker",
          "https://tinyurl.com/seventeenth-sneaker",
          "https://tinyurl.com/eighteenth-sneaker",
          "https://tinyurl.com/nineteenth-sneaker",
          "https://tinyurl.com/twentieth-sneaker"
      ]
    };
  },
  methods: {
    async getSneakerData() {
      try {
        const response = await fetch("http://localhost/sneakers/rest/api/V1/sneaker.php",{
            method: "POST",
            body: JSON.stringify({
                requestedId: this.$route.params.sneakerId
            })
        });
        this.localSneaker = await response.json();
        console.log(this.localSneaker);
      } catch(error) {
        console.log(error);
      }
    },
    getImageSrc(sneaker) {
        const index = sneaker.sneakerId - 1;
        if (index >= 0 && index < this.sneakersImages.length) {
          return this.sneakersImages[index];
        }
        return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLt1RTJ6HYQwrPK1FUK2sO0v1UruiJdLU27Q&usqp=CAU';
    },
    addToCart() {
        if (VueCookies.isKey("cart")) {
          this.shoppingCart = VueCookies.get("cart");
          this.shoppingCart.push(this.localSneaker);
          VueCookies.set("cart", JSON.stringify(this.shoppingCart));
        } else {
          this.shoppingCart.push(this.localSneaker);
          VueCookies.set("cart", JSON.stringify(this.shoppingCart));
        }
    },
    addToWishList() {
        if (VueCookies.isKey("wlist")) {
          this.wishList = VueCookies.get("wlist");
          this.wishList.push(this.localSneaker);
          VueCookies.set("wlist", JSON.stringify(this.wishList));
        } else {
          this.wishList.push(this.localSneaker);
          VueCookies.set("wlist", JSON.stringify(this.wishList));
        }
    }
  },
  created() {
    this.getSneakerData();  
  }
};
</script>
