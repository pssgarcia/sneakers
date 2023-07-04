<template>
    <form @submit="submitForm">
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="name" required>

        <label for="email">Mail</label>
        <input type="email" id="email" v-model="email" required>

        <label for="message">Message:</label>
        <textarea id="message" v-model="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
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
      // フォームの送信処理をここに記述します
    }
  }
};
</script>
