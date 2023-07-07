<template>
    <footer>
        <section>
            <h2>Street Kicks</h2>
            <article>
                <ul class="link">
                    <h4>Brand</h4>
                    <li><a href="#sneakers">Yeezy</a></li>
                    <li><a href="#sneakers">Off-White</a></li>
                </ul>
                <ul>
                    <h4>Account</h4>
                    <li>
                        <router-link class="nav-link" to="/profile">My Account</router-link>
                    </li>
                    <li><a href="#">Track My Order</a></li>
                </ul>
                <ul>
                    <h4>About us</h4>
                    <li>
                         <router-link class="nav-link" to="/about">Our history</router-link>
                    </li>
                    <li><a href="#">Stores</a></li>
                    <li>
                         <router-link class="nav-link" to="/contact">Contact</router-link>
                    </li>
                </ul>
                <ul class="sns">
                    <li>
                        <i class="fa-brands fa-instagram"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-twitter"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-facebook-f"></i>
                    </li>
                </ul>
                 <ul class="footer-form">
                    <h4>Sign Up For News, Promotions</h4>
                    <form action="#">
                        <label for="">Email Address</label>
                        <input v-model="email" type="text" name="email" id="email" placeholder="Email">
                    </form>
                </ul>
            </article>
        </section>
        <p>Copyright &copy; 2023 Street Kicks</p>
    </footer>
</template>

<script>

export default{
    name: 'FooterComponent',
}
</script>


