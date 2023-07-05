<template>
    <section class="contact">

        <form class="contact-form" @submit="submitForm">
            <aside>
                <label for="name">Name:</label>
                <input type="text" id="name" v-model="name" required>
            </aside>
            <aside>
                <label for="email">Mail:</label>
                <input type="email" id="email" v-model="email" required>
            </aside>
            <aside>
                <label for="message">Message:</label>
                <textarea id="message" v-model="message" required></textarea>
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
      name: '',
      email: '',
      message: ''
    };
  },
  methods: {
    submitForm(event) {
      event.preventDefault();
    }
  }
};
</script>
