<template>
  <v-app>
    <v-container>
        <v-btn>Click Me!</v-btn>
    </v-container>
  </v-app>
  <p>Hello from index</p>
  <Link :href="route('app.test')"> LINK TO TEST </Link>
</template>

<script>
export default {

}
</script>

<style>

</style>