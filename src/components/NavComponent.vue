<template>
    <nav>
        <section>
            <a href="#">
                <img src="../assets/img/sneakers-logo.png" alt="logo1">
                <h2>Street Kicks</h2>
            </a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Sale</a></li>
                <li><a href="#">New</a></li>
            </ul>
            <article>
                <form action="#">
                    <input type="search" placeholder="Search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="#">
                   <i class="fa-solid fa-heart"></i>
                </a>
                <a href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                </a>
            </article>
        </section>
    </nav>
</template>

<script>

export default{
    name: 'NavComponent',

}
</script>


